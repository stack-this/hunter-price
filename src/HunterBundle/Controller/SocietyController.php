<?php

namespace HunterBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use HunterBundle\Entity\Society;
use HunterBundle\Form\SocietyType;

/**
 * Society controller.
 *
 * @Route("/society")
 */
class SocietyController extends Controller
{
    /**
     * Lists all Society entities.
     *
     * @Route("/", name="society_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $societies = $em->getRepository('HunterBundle:Society')->findAll();

        return $this->render('society/index.html.twig', array(
            'societies' => $societies,
        ));
    }

    /**
     * Creates a new Society entity.
     *
     * @Route("/new", name="society_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $society = new Society();
        $form = $this->createForm('HunterBundle\Form\SocietyType', $society);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($society);
            $em->flush();

            return $this->redirectToRoute('society_show', array('id' => $society->getId()));
        }

        return $this->render('society/new.html.twig', array(
            'society' => $society,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Society entity.
     *
     * @Route("/{id}", name="society_show")
     * @Method("GET")
     */
    public function showAction(Society $society)
    {
        $deleteForm = $this->createDeleteForm($society);

        return $this->render('society/show.html.twig', array(
            'society' => $society,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Society entity.
     *
     * @Route("/{id}/edit", name="society_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Society $society)
    {
        $deleteForm = $this->createDeleteForm($society);
        $editForm = $this->createForm('HunterBundle\Form\SocietyType', $society);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($society);
            $em->flush();

            return $this->redirectToRoute('society_edit', array('id' => $society->getId()));
        }

        return $this->render('society/edit.html.twig', array(
            'society' => $society,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Society entity.
     *
     * @Route("/{id}", name="society_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Society $society)
    {
        $form = $this->createDeleteForm($society);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($society);
            $em->flush();
        }

        return $this->redirectToRoute('society_index');
    }

    /**
     * Creates a form to delete a Society entity.
     *
     * @param Society $society The Society entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Society $society)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('society_delete', array('id' => $society->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
