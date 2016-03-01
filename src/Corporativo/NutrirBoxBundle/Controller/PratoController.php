<?php

namespace Corporativo\NutrirBoxBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Corporativo\NutrirBoxBundle\Entity\Prato;
use Corporativo\NutrirBoxBundle\Form\PratoType;

/**
 * Prato controller.
 *
 * @Route("/admin/prato")
 */
class PratoController extends Controller
{

    /**
     * Lists all Prato entities.
     *
     * @Route("/", name="admin_prato")
     * @Method("GET")
     * @Template()
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function indexAction()
    {
        #BreadCrumbs
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem("Dashboard", $this->get("router")->generate("admin_dashboard"));
        $breadcrumbs->addItem("Prato");
    
        $em = $this->getDoctrine()->getManager();
        
        if ( property_exists(new Prato, 'isAtivo')) {
            $entities = $em->getRepository('NutrirBoxBundle:Prato')->findBy(array('isAtivo' => 'true'));
        } else {
            $entities = $em->getRepository('NutrirBoxBundle:Prato')->findAll();
        }
        
        $deleteForm = $this->createDeleteForm(0);

        return array(
            'entities' => $entities,
            'delete_form' => $deleteForm->createView()
        );
    }
    /**
     * Creates a new Prato entity.
     *
     * @Route("/", name="admin_prato_create")
     * @Method("POST")
     * @Template("NutrirBoxBundle:Prato:new.html.twig")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function createAction(Request $request)
    {
        $entity = new Prato();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            $this->addFlash('success', 'Adicionado com sucesso');
            return $this->redirect($this->generateUrl('admin_prato_show', array('id' => $entity->getCoPrato())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Prato entity.
     *
     * @param Prato $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Prato $entity)
    {
        $form = $this->createForm(new PratoType(), $entity, array(
            'action' => $this->generateUrl('admin_prato_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Novo'));

        return $form;
    }

    /**
     * Displays a form to create a new Prato entity.
     *
     * @Route("/new", name="admin_prato_new")
     * @Method("GET")
     * @Template()
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function newAction()
    {
        #BreadCrumbs
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem("Dashboard", $this->get("router")->generate("admin_dashboard"));
        $breadcrumbs->addItem("Prato", $this->get("router")->generate("admin_prato"));
        $breadcrumbs->addItem("Novo");
        
        $entity = new Prato();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Prato entity.
     *
     * @Route("/{id}", name="admin_prato_show")
     * @Method("GET")
     * @Template()
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function showAction($id)
    {
        #BreadCrumbs
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem("Dashboard", $this->get("router")->generate("admin_dashboard"));
        $breadcrumbs->addItem("Prato", $this->get("router")->generate("admin_prato"));
        $breadcrumbs->addItem("Detalhe");
    
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NutrirBoxBundle:Prato')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Prato entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Prato entity.
     *
     * @Route("/{id}/edit", name="admin_prato_edit")
     * @Method("GET")
     * @Template()
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function editAction($id)
    {
        #BreadCrumbs
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem("Dashboard", $this->get("router")->generate("admin_dashboard"));
        $breadcrumbs->addItem("Prato", $this->get("router")->generate("admin_prato"));
        $breadcrumbs->addItem("Editar");
        
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NutrirBoxBundle:Prato')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Prato entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Prato entity.
    *
    * @param Prato $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Prato $entity)
    {
        $form = $this->createForm(new PratoType(), $entity, array(
            'action' => $this->generateUrl('admin_prato_update', array('id' => $entity->getCoPrato())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Editar'));

        return $form;
    }
    /**
     * Edits an existing Prato entity.
     *
     * @Route("/{id}", name="admin_prato_update")
     * @Method("PUT")
     * @Template("NutrirBoxBundle:Prato:edit.html.twig")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NutrirBoxBundle:Prato')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Prato entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Editado com sucesso');
            return $this->redirect($this->generateUrl('admin_prato_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Prato entity.
     *
     * @Route("/{id}", name="admin_prato_delete")
     * @Method("DELETE")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('NutrirBoxBundle:Prato')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Prato entity.');
            }
            
            if ( property_exists($entity,'isAtivo')){
                $entity->setIsAtivo(false);
            } else {
                $em->remove($entity);
            }
            
            $em->flush();
            $this->addFlash('success', 'Deletado com sucesso');
        }

        return $this->redirect($this->generateUrl('admin_prato'));
    }

    /**
     * Creates a form to delete a Prato entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_prato_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', 
                    array('label' => 'Deletar',
                          'attr' => array('class' => 'btn-delete-hidden hidden')))
            ->getForm()
        ;
    }
}
