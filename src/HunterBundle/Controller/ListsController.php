<?php

namespace HunterBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use HunterBundle\Entity\Lists;
use HunterBundle\Form\ListsType;

/**
 * Lists controller.
 *
 * @Route("/lists")
 */
class ListsController extends Controller
{
    /**
     * Lists all Lists entities.
     *
     * @Route("/", name="lists_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $lists = $em->getRepository('HunterBundle:Lists')->findAll();

        return $this->render('lists/index.html.twig', array(
            'lists' => $lists,
        ));
    }

    /**
     * Creates a new Lists entity.
     *
     * @Route("/new", name="lists_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $list = new Lists();
        $form = $this->createForm('HunterBundle\Form\ListsType', $list);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($list);
            $em->flush();

            return $this->redirectToRoute('lists_show', array('id' => $list->getId()));
        }

        return $this->render('lists/new.html.twig', array(
            'list' => $list,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Lists entity.
     *
     * @Route("/{id}", name="lists_show")
     * @Method("GET")
     */
    public function showAction(Lists $list)
    {
        $deleteForm = $this->createDeleteForm($list);

        return $this->render('lists/show.html.twig', array(
            'list' => $list,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Lists entity.
     *
     * @Route("/{id}/edit", name="lists_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Lists $list)
    {
        $deleteForm = $this->createDeleteForm($list);
        $editForm = $this->createForm('HunterBundle\Form\ListsType', $list);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($list);
            $em->flush();

            return $this->redirectToRoute('lists_edit', array('id' => $list->getId()));
        }

        return $this->render('lists/edit.html.twig', array(
            'list' => $list,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Lists entity.
     *
     * @Route("/{id}", name="lists_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Lists $list)
    {
        $form = $this->createDeleteForm($list);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($list);
            $em->flush();
        }

        return $this->redirectToRoute('lists_index');
    }

    /**
     * Creates a form to delete a Lists entity.
     *
     * @param Lists $list The Lists entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Lists $list)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('lists_delete', array('id' => $list->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
