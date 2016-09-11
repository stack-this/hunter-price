<?php

namespace HunterBundle\Controller;

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

/**
 * Api controller.
 *
 * @Route("/api")
 */
class ApiController extends Controller
{
    /**
     * @Route("/product/", name="api_product_getall")
     * @Method("GET")
     */
    public function productGetAllAction()
    {
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        $em = $this->getDoctrine()->getManager();

        $products = $em->getRepository('HunterBundle:Product')->findAll();

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
            var_dump($decode);
            $product = new Product();
            $product->setName($decode['producto']);
            $product->setTrademark($decode['marca']);

            if($product->getLowerPrice() == NULL || $decode['precio'] < $product->getLowerPrice()){
                $product->setLowerPrice($decode['precio']);
            }
            if($product->getHigherPrice() == NULL || $decode['precio'] > $product->getHigherPrice()){
                $product->setHigherPrice($decode['precio']);
            }

            $product->setLastUpdate(date('Y-m-d'));
            $product->setDescription($decode['presentacion']);

            $category = new Category();
            $repository = $em->getRepository('HunterBundle:Category');
            $category = $repository->findOneByName($decode['categoria']);
            dump($category);
            $product->setCategory($category);
            dump($product);

            $em->persist($category);
            $em->persist($product);
        }
        $em->flush();

        $response = new Response($content, Response::HTTP_I_AM_A_TEAPOT);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

/*
************************************************************************* PRODUCTS
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

        $response = new Response($store);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    /**
     * @Route("/store/", name="api_store_post")
     * @Method("POST")
     */
    public function storePostAction()
    {
        $encoders = array(new XmlEncoder(), new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        $em = $this->getDoctrine()->getManager();

        $content = $this->get("request")->getContent();

        $result = $serializer->deserialize($content, 'Hunter\Store', 'json');
        $em->persist($result);
        $em->flush();

        $response = new Response($content, Response::HTTP_I_AM_A_TEAPOT);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

/*
************************************************************************* STORE
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

        return new Response($result);
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

		return new Response($result);
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

        $response = new Response($content, Response::HTTP_I_AM_A_TEAPOT);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

/*
************************************************************************* CATEGORY
*/    
}
