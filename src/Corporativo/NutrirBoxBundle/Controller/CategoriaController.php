<?php

namespace Corporativo\NutrirBoxBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Corporativo\NutrirBoxBundle\Entity\Categoria;
use Corporativo\NutrirBoxBundle\Form\CategoriaType;

/**
 * Categoria controller.
 *
 * @Route("/admin/categoria")
 */
class CategoriaController extends Controller
{

    /**
     * Lists all Categoria entities.
     *
     * @Route("/", name="admin_categoria")
     * @Method("GET")
     * @Template()
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function indexAction()
    {
        #BreadCrumbs
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem("Dashboard", $this->get("router")->generate("admin_dashboard"));
        $breadcrumbs->addItem("Categoria");
    
        $em = $this->getDoctrine()->getManager();
        
        if ( property_exists(new Categoria, 'isAtivo')) {
            $entities = $em->getRepository('NutrirBoxBundle:Categoria')->findBy(array('isAtivo' => 'true'));
        } else {
            $entities = $em->getRepository('NutrirBoxBundle:Categoria')->findAll();
        }
        
        $deleteForm = $this->createDeleteForm(0);

        return array(
            'entities' => $entities,
            'delete_form' => $deleteForm->createView()
        );
    }
    /**
     * Creates a new Categoria entity.
     *
     * @Route("/", name="admin_categoria_create")
     * @Method("POST")
     * @Template("NutrirBoxBundle:Categoria:new.html.twig")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function createAction(Request $request)
    {
        $entity = new Categoria();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            $this->addFlash('success', 'Adicionado com sucesso');
            return $this->redirect($this->generateUrl('admin_categoria_show', array('id' => $entity->getCoCategoria())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Categoria entity.
     *
     * @param Categoria $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Categoria $entity)
    {
        $form = $this->createForm(new CategoriaType(), $entity, array(
            'action' => $this->generateUrl('admin_categoria_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Novo'));

        return $form;
    }

    /**
     * Displays a form to create a new Categoria entity.
     *
     * @Route("/new", name="admin_categoria_new")
     * @Method("GET")
     * @Template()
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function newAction()
    {
        #BreadCrumbs
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem("Dashboard", $this->get("router")->generate("admin_dashboard"));
        $breadcrumbs->addItem("Categoria", $this->get("router")->generate("admin_categoria"));
        $breadcrumbs->addItem("Novo");
        
        $entity = new Categoria();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Categoria entity.
     *
     * @Route("/{id}", name="admin_categoria_show")
     * @Method("GET")
     * @Template()
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function showAction($id)
    {
        #BreadCrumbs
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem("Dashboard", $this->get("router")->generate("admin_dashboard"));
        $breadcrumbs->addItem("Categoria", $this->get("router")->generate("admin_categoria"));
        $breadcrumbs->addItem("Detalhe");
    
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NutrirBoxBundle:Categoria')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Categoria entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Categoria entity.
     *
     * @Route("/{id}/edit", name="admin_categoria_edit")
     * @Method("GET")
     * @Template()
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function editAction($id)
    {
        #BreadCrumbs
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem("Dashboard", $this->get("router")->generate("admin_dashboard"));
        $breadcrumbs->addItem("Categoria", $this->get("router")->generate("admin_categoria"));
        $breadcrumbs->addItem("Editar");
        
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NutrirBoxBundle:Categoria')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Categoria entity.');
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
    * Creates a form to edit a Categoria entity.
    *
    * @param Categoria $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Categoria $entity)
    {
        $form = $this->createForm(new CategoriaType(), $entity, array(
            'action' => $this->generateUrl('admin_categoria_update', array('id' => $entity->getCoCategoria())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Editar'));

        return $form;
    }
    /**
     * Edits an existing Categoria entity.
     *
     * @Route("/{id}", name="admin_categoria_update")
     * @Method("PUT")
     * @Template("NutrirBoxBundle:Categoria:edit.html.twig")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NutrirBoxBundle:Categoria')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Categoria entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Editado com sucesso');
            return $this->redirect($this->generateUrl('admin_categoria_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Categoria entity.
     *
     * @Route("/{id}", name="admin_categoria_delete")
     * @Method("DELETE")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('NutrirBoxBundle:Categoria')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Categoria entity.');
            }
            
            if ( property_exists($entity,'isAtivo')){
                $entity->setIsAtivo(false);
            } else {
                $em->remove($entity);
            }
            
            $em->flush();
            $this->addFlash('success', 'Deletado com sucesso');
        }

        return $this->redirect($this->generateUrl('admin_categoria'));
    }

    /**
     * Creates a form to delete a Categoria entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_categoria_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', 
                    array('label' => 'Deletar',
                          'attr' => array('class' => 'btn-delete-hidden hidden')))
            ->getForm()
        ;
    }
}
