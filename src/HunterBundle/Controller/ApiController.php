<?php
namespace HunterBundle\Controller;
ini_set('memory_limit', '-1');
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;

use HunterBundle\Entity\Product;
use HunterBundle\Entity\Category;
use HunterBundle\Entity\Users;
use HunterBundle\Entity\Lists;
use HunterBundle\Entity\Store;
use HunterBundle\Entity\Society;
use HunterBundle\Entity\StoreProduct;

/**
 * Api controller.
 *
 * @Route("/api")
 */
class ApiController extends Controller
{
/*
************************************************************************* PRODUCTS
*/

    /**
     * @Route("/product/page/{slug}", name="api_product_getall")
     * @Method("GET")
     */
    public function productGetAllAction($slug)
    {
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        $em = $this->getDoctrine()->getManager();

        $products = $em->getRepository('HunterBundle:Product')->findAll(10);

        $result = $serializer->serialize($products, 'json');

        $response = new Response($result);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /**
     * @Route("/product/{slug}", name="api_product_getone")
     * @Method("GET")
     */
    public function productGetOneAction($slug)
    {
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        $em = $this->getDoctrine()->getManager();

        $product = $em->getRepository('HunterBundle:Product')->findById($slug);

        $result = $serializer->serialize($product, 'json');

        $response = new Response($result);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /**
     * @Route("/product/", name="api_product_post")
     * @Method("POST")
     */
    public function productPostAction()
    {
        $encoder = new JsonEncoder();
        $normalizer = new ObjectNormalizer();
        $normalizer->setIgnoredAttributes(array('category'));

        $serializer = new Serializer(
            array($normalizer, new ArrayDenormalizer()),
            array($encoder));

        $em = $this->getDoctrine()->getManager();

        $content = $this->get("request")->getContent();
        $decoded = $serializer->decode($content, 'json');


        foreach($decoded as $decode){

            $repository = $em->getRepository('HunterBundle:Product');
            $product = $repository->findOneByName($decode['producto']);

            if (!$product){
                $product = new Product();
                $product->setName($decode['producto']);
            }

            if($decode['marca'] != 'SIN MARCA')
                $product->setName($decode['producto'].' '. $decode['marca']);
            

            $product->setTrademark($decode['marca']);
                
            $product->setLowerPrice(0);
            $product->setHigherPrice(0);

            $product->setLastUpdate(date('Y-m-d'));
            $product->setDescription($decode['presentacion']);

            $category = new Category();
            $repository = $em->getRepository('HunterBundle:Category');
            $category = $repository->findOneByName($decode['categoria']);

            if(!$category){
                $category = $repository->findOneByName('Unknown');
            }

            $product->setCategory($category);
            
            $em->persist($category);
            $em->persist($product);
            $em->flush();

            $repository = $em->getRepository('HunterBundle:Store');
            echo $decode['nombreComercial'];
            $store = $repository->findByAddress($decode['nombreComercial']);

            $storeProduct = new StoreProduct();
            $storeProduct->setIdStore($store[0]);
            $storeProduct->setIdProduct($product);
            $storeProduct->setPrice($decode['precio']);

            $product->addStore($storeProduct);
            $em->persist($product);
            $em->flush();
        }

        $content = json_encode( array("result" => 'true') );
        $response = new Response($content);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

/*
************************************************************************* STORE
*/

    /**
     * @Route("/store/", name="api_store_getall")
     * @Method("GET")
     */
    public function storeGetAllAction()
    {
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        $em = $this->getDoctrine()->getManager();

        $stores = $em->getRepository('HunterBundle:Store')->findAll();

        $result = $serializer->serialize($stores, 'json');

        $response = new Response($result);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /**
     * @Route("/store/{slug}", name="api_store_getone")
     * @Method("GET")
     */
    public function storeGetOneAction($slug)
    {
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        $em = $this->getDoctrine()->getManager();

        $store = $em->getRepository('HunterBundle:Store')->findById($slug);

        $response = new Response($result);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /**
     * @Route("/store/", name="api_store_post")
     * @Method("POST")
     */
    public function storePostAction()
    {
        $encoder = new JsonEncoder();
        $normalizer = new ObjectNormalizer();
        $normalizer->setIgnoredAttributes(array('category'));

        $serializer = new Serializer(
            array($normalizer, new ArrayDenormalizer()),
            array($encoder));

        $em = $this->getDoctrine()->getManager();

        $content = $this->get("request")->getContent();
        $decoded = $serializer->decode($content, 'json');

        foreach($decoded as $decode)
        {
            $store = new Store();
            $store->setAddress($decode['nombreComercial']);
            $store->setLocation('('.$decode['longitud'].', '.$decode['latitud'].')');
            $em->persist($store);
        }    
        $em->flush();

        $content = json_encode( array("result" => 'true') );
        $response = new Response($content);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

/*
************************************************************************* CATEGORY
*/ 

	/**
     * @Route("/category/", name="api_category_getall")
     * @Method("GET")
     */
    public function categoryGetAllAction()
    {
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        $em = $this->getDoctrine()->getManager();

        $categories = $em->getRepository('HunterBundle:Category')->findAll();

        $result = $serializer->serialize($categories, 'json');

        $response = new Response($result);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

	/**
	 * @Route("/category/{slug}", name="api_category_getone")
	 * @Method("GET")
	 */
	public function categoryGetOneAction($slug)
	{
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
		$em = $this->getDoctrine()->getManager();

		$category = $em->getRepository('HunterBundle:Category')->findById($slug);

		$result = $serializer->serialize($category, 'json');

        $response = new Response($result);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
	}

    /**
     * @Route("/category/", name="api_category_post")
     * @Method("POST")
     */
    public function categoryPostAction()
    {
        $encoder = new JsonEncoder();
        $normalizer = new ObjectNormalizer();
        $normalizer->setIgnoredAttributes(array('category'));

        $serializer = new Serializer(
            array($normalizer, new ArrayDenormalizer()),
            array($encoder));

        $em = $this->getDoctrine()->getManager();

        $content = $this->get("request")->getContent();
        $decoded = $serializer->decode($content, 'json');

        var_dump($content);

        foreach($decoded as $decode)
        {
            $category = new Category();
            $category->setName($decode);
            $em->persist($category);
        }    

        $em->flush();

        $content = json_encode( array("result" => 'true') );
        $response = new Response($content);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

/*
************************************************************************* USER
*/
    /**
     * @Route("/user/", name="api_user_getall")
     * @Method("GET")
     */
    public function userGetAllAction()
    {
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('HunterBundle:Users')->findAll();

        $result = $serializer->serialize($users, 'json');

        $response = new Response($result);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /**
     * @Route("/user/{slug}", name="api_user_getone")
     * @Method("GET")
     */
    public function userGetOneAction($slug)
    {
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        $em = $this->getDoctrine()->getManager();

        $user = $em->getRepository('HunterBundle:Users')->findById($slug);

        $result = $serializer->serialize($user, 'json');

        $response = new Response($result);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /**
     * @Route("/user/", name="api_user_post")
     * @Method("POST")
     */
    public function userPostAction()
    {
        $encoder = new JsonEncoder();
        $normalizer = new ObjectNormalizer();

        $serializer = new Serializer(
            array($normalizer, new ArrayDenormalizer()),
            array($encoder));

        $em = $this->getDoctrine()->getManager();

        $content = $this->get("request")->getContent();
        $decoded = $serializer->decode($content, 'json');

        $user = new Users();
        $user->setNickname($decoded['nickname']);
        $user->setPassword($decoded['password']);
        $user->setEmail($decoded['email']);
        $user->setRange(10);

        $em->persist($user);

        $em->flush();

        $content = json_encode( array("result" => 'true') );
        $response = new Response($content);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /**
     * @Route("/user/login/", name="api_user_login")
     * @Method("POST")
     */
    public function userLoginAction()
    {
        $encoder = new JsonEncoder();
        $normalizer = new ObjectNormalizer();

        $serializer = new Serializer(
            array($normalizer, new ArrayDenormalizer()),
            array($encoder));

        $em = $this->getDoctrine()->getManager();

        $content = $this->get("request")->getContent();
        $decoded = $serializer->decode($content, 'json');

        $user = new Users();
        $user->setNickname($decoded['nickname']);
        $user->setPassword($decoded['password']);

        $login = $em->getRepository('HunterBundle:Users')->findOneByNickname($user->getNickname());

        if ($login)
            if($login->getPassword() === $user->getPassword())
                $content = json_encode( array("result" => 'true') );
            else
                $content = json_encode( array("result" => 'false', "error" => "Contraseña Incorrecta") );
        else
            $content = json_encode( array("result" => 'false', "error" => "Usuario Incorrecto") );

        $response = new Response($content);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

/*
************************************************************************* PRODUCT - STORE
*/
    /**
     * @Route("/storeproduct/", name="api_storeproduct_post")
     * @Method("POST")
     */
    public function storeProductAction()
    {
        $encoder = new JsonEncoder();
        $normalizer = new ObjectNormalizer();

        $serializer = new Serializer(
            array($normalizer, new ArrayDenormalizer()),
            array($encoder));

        $em = $this->getDoctrine()->getManager();

        $content = $this->get("request")->getContent();
        $decoded = $serializer->decode($content, 'json');

        foreach ($decoded as $decode) {
            var_dump($decode);
            $name_aux = $decode['producto'].' '.$decode['marca'];
            echo $name_aux;
        }

        $content = json_encode( array("result" => 'true') );
        $response = new Response($content);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

/*
************************************************************************* USER - STORE
*/


}
