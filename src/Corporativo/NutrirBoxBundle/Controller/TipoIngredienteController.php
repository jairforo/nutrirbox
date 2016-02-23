<?php

namespace Corporativo\NutrirBoxBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Corporativo\NutrirBoxBundle\Entity\TipoIngrediente;
use Corporativo\NutrirBoxBundle\Form\TipoIngredienteType;

/**
 * TipoIngrediente controller.
 *
 * @Route("/admin/tipoingrediente")
 */
class TipoIngredienteController extends Controller {

    /**
     * Lists all TipoIngrediente entities.
     *
     * @Route("/", name="admin_tipoingrediente")
     * @Method("GET")
     * @Template()
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function indexAction() {
        #BreadCrumbs
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem("Dashboard", $this->get("router")->generate("admin_dashboard"));
        $breadcrumbs->addItem("Tipo de Ingrediente");

        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('NutrirBoxBundle:TipoIngrediente')->findBy(array('isAtivo' => true));

        $deleteForm = $this->createDeleteForm(0);

        return array(
            'entities' => $entities,
            'delete_form' => $deleteForm->createView()
        );
    }

    /**
     * Creates a new TipoIngrediente entity.
     *
     * @Route("/", name="admin_tipoingrediente_create")
     * @Method("POST")
     * @Template("NutrirBoxBundle:TipoIngrediente:new.html.twig")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function createAction(Request $request) {
        $entity = new TipoIngrediente();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            $this->addFlash('success', 'Adicionado com sucesso');
            return $this->redirect($this->generateUrl('admin_tipoingrediente_show', array('id' => $entity->getCoTipoIngrediente())));
        }

        return array(
            'entity' => $entity,
            'form' => $form->createView(),
        );
    }

    /**
     * Creates a form to create a TipoIngrediente entity.
     *
     * @param TipoIngrediente $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(TipoIngrediente $entity) {
        $form = $this->createForm(new TipoIngredienteType(), $entity, array(
            'action' => $this->generateUrl('admin_tipoingrediente_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Novo'));

        return $form;
    }

    /**
     * Displays a form to create a new TipoIngrediente entity.
     *
     * @Route("/new", name="admin_tipoingrediente_new")
     * @Method("GET")
     * @Template()
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function newAction() {
        #BreadCrumbs
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem("Dashboard", $this->get("router")->generate("admin_dashboard"));
        $breadcrumbs->addItem("Tipo de Ingrediente", $this->get("router")->generate("admin_tipoingrediente"));
        $breadcrumbs->addItem("Novo");

        $entity = new TipoIngrediente();
        $form = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form' => $form->createView(),
        );
    }

    /**
     * Finds and displays a TipoIngrediente entity.
     *
     * @Route("/{id}", name="admin_tipoingrediente_show")
     * @Method("GET")
     * @Template()
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function showAction($id) {
        #BreadCrumbs
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem("Dashboard", $this->get("router")->generate("admin_dashboard"));
        $breadcrumbs->addItem("Tipo de Ingrediente", $this->get("router")->generate("admin_tipoingrediente"));
        $breadcrumbs->addItem("Detalhe");

        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NutrirBoxBundle:TipoIngrediente')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoIngrediente entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing TipoIngrediente entity.
     *
     * @Route("/{id}/edit", name="admin_tipoingrediente_edit")
     * @Method("GET")
     * @Template()
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function editAction($id) {
        #BreadCrumbs
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem("Dashboard", $this->get("router")->generate("admin_dashboard"));
        $breadcrumbs->addItem("Tipo de Ingrediente", $this->get("router")->generate("admin_tipoingrediente"));
        $breadcrumbs->addItem("Editar");

        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NutrirBoxBundle:TipoIngrediente')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoIngrediente entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Creates a form to edit a TipoIngrediente entity.
     *
     * @param TipoIngrediente $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(TipoIngrediente $entity) {
        $form = $this->createForm(new TipoIngredienteType(), $entity, array(
            'action' => $this->generateUrl('admin_tipoingrediente_update', array('id' => $entity->getCoTipoIngrediente())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Editar'));

        return $form;
    }

    /**
     * Edits an existing TipoIngrediente entity.
     *
     * @Route("/{id}", name="admin_tipoingrediente_update")
     * @Method("PUT")
     * @Template("NutrirBoxBundle:TipoIngrediente:edit.html.twig")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NutrirBoxBundle:TipoIngrediente')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoIngrediente entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Editado com sucesso');
            return $this->redirect($this->generateUrl('admin_tipoingrediente_edit', array('id' => $id)));
        }

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a TipoIngrediente entity.
     *
     * @Route("/{id}", name="admin_tipoingrediente_delete")
     * @Method("DELETE")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('NutrirBoxBundle:TipoIngrediente')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TipoIngrediente entity.');
            }

            if (property_exists($entity, 'isAtivo')) {
                $entity->setIsAtivo(false);
            } else {
                $em->remove($entity);
            }

            $em->flush();
            $this->addFlash('success', 'Deletado com sucesso');
        }

        return $this->redirect($this->generateUrl('admin_tipoingrediente'));
    }

    /**
     * Creates a form to delete a TipoIngrediente entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('admin_tipoingrediente_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Deletar',
                            'attr' => array('class' => 'btn-delete-hidden hidden')))
                        ->getForm()
        ;
    }

}
