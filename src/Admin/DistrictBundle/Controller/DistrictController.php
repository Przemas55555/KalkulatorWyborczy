<?php

namespace Admin\DistrictBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Admin\DistrictBundle\Entity\District;
use Admin\DistrictBundle\Form\DistrictType;

/**
 * District controller.
 *
 */
class DistrictController extends Controller
{

    /**
     * Lists all District entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('DistrictBundle:District')->findAll();

        return $this->render('DistrictBundle:District:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new District entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new District();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('district_list', array('id' => $entity->getId())));
        }

        return $this->render('DistrictBundle:District:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a District entity.
     *
     * @param District $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(District $entity)
    {
        $form = $this->createForm(new DistrictType(), $entity, array(
            'action' => $this->generateUrl('district_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new District entity.
     *
     */
    public function newAction()
    {
        $entity = new District();
        $form   = $this->createCreateForm($entity);

        return $this->render('DistrictBundle:District:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a District entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DistrictBundle:District')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find District entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('DistrictBundle:District:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing District entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DistrictBundle:District')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find District entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('DistrictBundle:District:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a District entity.
    *
    * @param District $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(District $entity)
    {
        $form = $this->createForm(new DistrictType(), $entity, array(
            'action' => $this->generateUrl('district_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing District entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DistrictBundle:District')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find District entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('district_edit', array('id' => $id)));
        }

        return $this->render('DistrictBundle:District:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a District entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('DistrictBundle:District')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find District entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl(''));
    }

    /**
     * Creates a form to delete a District entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('district_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
