<?php

namespace HunterBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use HunterBundle\Entity\StoreProduct;
use HunterBundle\Form\StoreProductType;

/**
 * StoreProduct controller.
 *
 * @Route("/storeproduct")
 */
class StoreProductController extends Controller
{
    /**
     * Lists all StoreProduct entities.
     *
     * @Route("/", name="storeproduct_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $storeProducts = $em->getRepository('HunterBundle:StoreProduct')->findAll();

        return $this->render('storeproduct/index.html.twig', array(
            'storeProducts' => $storeProducts,
        ));
    }

    /**
     * Creates a new StoreProduct entity.
     *
     * @Route("/new", name="storeproduct_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $storeProduct = new StoreProduct();
        $form = $this->createForm('HunterBundle\Form\StoreProductType', $storeProduct);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($storeProduct);
            $em->flush();

            return $this->redirectToRoute('storeproduct_show', array('id' => $storeProduct->getId()));
        }

        return $this->render('storeproduct/new.html.twig', array(
            'storeProduct' => $storeProduct,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a StoreProduct entity.
     *
     * @Route("/{id}", name="storeproduct_show")
     * @Method("GET")
     */
    public function showAction(StoreProduct $storeProduct)
    {
        $deleteForm = $this->createDeleteForm($storeProduct);

        return $this->render('storeproduct/show.html.twig', array(
            'storeProduct' => $storeProduct,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing StoreProduct entity.
     *
     * @Route("/{id}/edit", name="storeproduct_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, StoreProduct $storeProduct)
    {
        $deleteForm = $this->createDeleteForm($storeProduct);
        $editForm = $this->createForm('HunterBundle\Form\StoreProductType', $storeProduct);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($storeProduct);
            $em->flush();

            return $this->redirectToRoute('storeproduct_edit', array('id' => $storeProduct->getId()));
        }

        return $this->render('storeproduct/edit.html.twig', array(
            'storeProduct' => $storeProduct,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a StoreProduct entity.
     *
     * @Route("/{id}", name="storeproduct_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, StoreProduct $storeProduct)
    {
        $form = $this->createDeleteForm($storeProduct);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($storeProduct);
            $em->flush();
        }

        return $this->redirectToRoute('storeproduct_index');
    }

    /**
     * Creates a form to delete a StoreProduct entity.
     *
     * @param StoreProduct $storeProduct The StoreProduct entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(StoreProduct $storeProduct)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('storeproduct_delete', array('id' => $storeProduct->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
