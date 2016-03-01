<?php

namespace Corporativo\NutrirBoxBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Corporativo\NutrirBoxBundle\Entity\Perfil;
use Corporativo\NutrirBoxBundle\Form\PerfilType;

/**
 * Perfil controller.
 *
 * @Route("/admin/perfil")
 */
class PerfilController extends Controller
{

    /**
     * Lists all Perfil entities.
     *
     * @Route("/", name="admin_perfil")
     * @Method("GET")
     * @Template()
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function indexAction()
    {
        #BreadCrumbs
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem("Dashboard", $this->get("router")->generate("admin_dashboard"));
        $breadcrumbs->addItem("Perfil");
    
        $em = $this->getDoctrine()->getManager();
        
        if ( property_exists(new Perfil, 'isAtivo')) {
            $entities = $em->getRepository('NutrirBoxBundle:Perfil')->findBy(array('isAtivo' => 'true'));
        } else {
            $entities = $em->getRepository('NutrirBoxBundle:Perfil')->findAll();
        }
        
        $deleteForm = $this->createDeleteForm(0);

        return array(
            'entities' => $entities,
            'delete_form' => $deleteForm->createView()
        );
    }
    /**
     * Creates a new Perfil entity.
     *
     * @Route("/", name="admin_perfil_create")
     * @Method("POST")
     * @Template("NutrirBoxBundle:Perfil:new.html.twig")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function createAction(Request $request)
    {
        $entity = new Perfil();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            $this->addFlash('success', 'Adicionado com sucesso');
            return $this->redirect($this->generateUrl('admin_perfil_show', array('id' => $entity->getCoPerfil())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Perfil entity.
     *
     * @param Perfil $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Perfil $entity)
    {
        $form = $this->createForm(new PerfilType(), $entity, array(
            'action' => $this->generateUrl('admin_perfil_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Novo'));

        return $form;
    }

    /**
     * Displays a form to create a new Perfil entity.
     *
     * @Route("/new", name="admin_perfil_new")
     * @Method("GET")
     * @Template()
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function newAction()
    {
        #BreadCrumbs
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem("Dashboard", $this->get("router")->generate("admin_dashboard"));
        $breadcrumbs->addItem("Perfil", $this->get("router")->generate("admin_perfil"));
        $breadcrumbs->addItem("Novo");
        
        $entity = new Perfil();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Perfil entity.
     *
     * @Route("/{id}", name="admin_perfil_show")
     * @Method("GET")
     * @Template()
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function showAction($id)
    {
        #BreadCrumbs
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem("Dashboard", $this->get("router")->generate("admin_dashboard"));
        $breadcrumbs->addItem("Perfil", $this->get("router")->generate("admin_perfil"));
        $breadcrumbs->addItem("Detalhe");
    
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NutrirBoxBundle:Perfil')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Perfil entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Perfil entity.
     *
     * @Route("/{id}/edit", name="admin_perfil_edit")
     * @Method("GET")
     * @Template()
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function editAction($id)
    {
        #BreadCrumbs
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem("Dashboard", $this->get("router")->generate("admin_dashboard"));
        $breadcrumbs->addItem("Perfil", $this->get("router")->generate("admin_perfil"));
        $breadcrumbs->addItem("Editar");
        
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NutrirBoxBundle:Perfil')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Perfil entity.');
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
    * Creates a form to edit a Perfil entity.
    *
    * @param Perfil $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Perfil $entity)
    {
        $form = $this->createForm(new PerfilType(), $entity, array(
            'action' => $this->generateUrl('admin_perfil_update', array('id' => $entity->getCoPerfil())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Editar'));

        return $form;
    }
    /**
     * Edits an existing Perfil entity.
     *
     * @Route("/{id}", name="admin_perfil_update")
     * @Method("PUT")
     * @Template("NutrirBoxBundle:Perfil:edit.html.twig")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NutrirBoxBundle:Perfil')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Perfil entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Editado com sucesso');
            return $this->redirect($this->generateUrl('admin_perfil_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Perfil entity.
     *
     * @Route("/{id}", name="admin_perfil_delete")
     * @Method("DELETE")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('NutrirBoxBundle:Perfil')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Perfil entity.');
            }
            
            if ( property_exists($entity,'isAtivo')){
                $entity->setIsAtivo(false);
            } else {
                $em->remove($entity);
            }
            
            $em->flush();
            $this->addFlash('success', 'Deletado com sucesso');
        }

        return $this->redirect($this->generateUrl('admin_perfil'));
    }

    /**
     * Creates a form to delete a Perfil entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_perfil_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', 
                    array('label' => 'Deletar',
                          'attr' => array('class' => 'btn-delete-hidden hidden')))
            ->getForm()
        ;
    }
}
