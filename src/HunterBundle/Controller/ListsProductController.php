<?php

namespace HunterBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use HunterBundle\Entity\ListsProduct;
use HunterBundle\Form\ListsProductType;

/**
 * ListsProduct controller.
 *
 * @Route("/listsproduct")
 */
class ListsProductController extends Controller
{
    /**
     * Lists all ListsProduct entities.
     *
     * @Route("/", name="listsproduct_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $listsProducts = $em->getRepository('HunterBundle:ListsProduct')->findAll();

        return $this->render('listsproduct/index.html.twig', array(
            'listsProducts' => $listsProducts,
        ));
    }

    /**
     * Creates a new ListsProduct entity.
     *
     * @Route("/new", name="listsproduct_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $listsProduct = new ListsProduct();
        $form = $this->createForm('HunterBundle\Form\ListsProductType', $listsProduct);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($listsProduct);
            $em->flush();

            return $this->redirectToRoute('listsproduct_show', array('id' => $listsProduct->getId()));
        }

        return $this->render('listsproduct/new.html.twig', array(
            'listsProduct' => $listsProduct,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ListsProduct entity.
     *
     * @Route("/{id}", name="listsproduct_show")
     * @Method("GET")
     */
    public function showAction(ListsProduct $listsProduct)
    {
        $deleteForm = $this->createDeleteForm($listsProduct);

        return $this->render('listsproduct/show.html.twig', array(
            'listsProduct' => $listsProduct,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ListsProduct entity.
     *
     * @Route("/{id}/edit", name="listsproduct_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ListsProduct $listsProduct)
    {
        $deleteForm = $this->createDeleteForm($listsProduct);
        $editForm = $this->createForm('HunterBundle\Form\ListsProductType', $listsProduct);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($listsProduct);
            $em->flush();

            return $this->redirectToRoute('listsproduct_edit', array('id' => $listsProduct->getId()));
        }

        return $this->render('listsproduct/edit.html.twig', array(
            'listsProduct' => $listsProduct,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ListsProduct entity.
     *
     * @Route("/{id}", name="listsproduct_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, ListsProduct $listsProduct)
    {
        $form = $this->createDeleteForm($listsProduct);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($listsProduct);
            $em->flush();
        }

        return $this->redirectToRoute('listsproduct_index');
    }

    /**
     * Creates a form to delete a ListsProduct entity.
     *
     * @param ListsProduct $listsProduct The ListsProduct entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ListsProduct $listsProduct)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('listsproduct_delete', array('id' => $listsProduct->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
