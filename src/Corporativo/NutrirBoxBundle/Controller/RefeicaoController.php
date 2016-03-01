<?php

namespace Corporativo\NutrirBoxBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Corporativo\NutrirBoxBundle\Entity\Refeicao;
use Corporativo\NutrirBoxBundle\Form\RefeicaoType;

/**
 * Refeicao controller.
 *
 * @Route("/admin/refeicao")
 */
class RefeicaoController extends Controller
{

    /**
     * Lists all Refeicao entities.
     *
     * @Route("/", name="admin_refeicao")
     * @Method("GET")
     * @Template()
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function indexAction()
    {
        #BreadCrumbs
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem("Dashboard", $this->get("router")->generate("admin_dashboard"));
        $breadcrumbs->addItem("Refeicao");
    
        $em = $this->getDoctrine()->getManager();
        
        if ( property_exists(new Refeicao, 'isAtivo')) {
            $entities = $em->getRepository('NutrirBoxBundle:Refeicao')->findBy(array('isAtivo' => 'true'));
        } else {
            $entities = $em->getRepository('NutrirBoxBundle:Refeicao')->findAll();
        }
        
        $deleteForm = $this->createDeleteForm(0);

        return array(
            'entities' => $entities,
            'delete_form' => $deleteForm->createView()
        );
    }
    /**
     * Creates a new Refeicao entity.
     *
     * @Route("/", name="admin_refeicao_create")
     * @Method("POST")
     * @Template("NutrirBoxBundle:Refeicao:new.html.twig")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function createAction(Request $request)
    {
        $entity = new Refeicao();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            $this->addFlash('success', 'Adicionado com sucesso');
            return $this->redirect($this->generateUrl('admin_refeicao_show', array('id' => $entity->getCoRefeicao())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Refeicao entity.
     *
     * @param Refeicao $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Refeicao $entity)
    {
        $form = $this->createForm(new RefeicaoType(), $entity, array(
            'action' => $this->generateUrl('admin_refeicao_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Novo'));

        return $form;
    }

    /**
     * Displays a form to create a new Refeicao entity.
     *
     * @Route("/new", name="admin_refeicao_new")
     * @Method("GET")
     * @Template()
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function newAction()
    {
        #BreadCrumbs
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem("Dashboard", $this->get("router")->generate("admin_dashboard"));
        $breadcrumbs->addItem("Refeicao", $this->get("router")->generate("admin_refeicao"));
        $breadcrumbs->addItem("Novo");
        
        $entity = new Refeicao();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Refeicao entity.
     *
     * @Route("/{id}", name="admin_refeicao_show")
     * @Method("GET")
     * @Template()
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function showAction($id)
    {
        #BreadCrumbs
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem("Dashboard", $this->get("router")->generate("admin_dashboard"));
        $breadcrumbs->addItem("Refeicao", $this->get("router")->generate("admin_refeicao"));
        $breadcrumbs->addItem("Detalhe");
    
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NutrirBoxBundle:Refeicao')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Refeicao entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Refeicao entity.
     *
     * @Route("/{id}/edit", name="admin_refeicao_edit")
     * @Method("GET")
     * @Template()
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function editAction($id)
    {
        #BreadCrumbs
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem("Dashboard", $this->get("router")->generate("admin_dashboard"));
        $breadcrumbs->addItem("Refeicao", $this->get("router")->generate("admin_refeicao"));
        $breadcrumbs->addItem("Editar");
        
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NutrirBoxBundle:Refeicao')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Refeicao entity.');
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
    * Creates a form to edit a Refeicao entity.
    *
    * @param Refeicao $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Refeicao $entity)
    {
        $form = $this->createForm(new RefeicaoType(), $entity, array(
            'action' => $this->generateUrl('admin_refeicao_update', array('id' => $entity->getCoRefeicao())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Editar'));

        return $form;
    }
    /**
     * Edits an existing Refeicao entity.
     *
     * @Route("/{id}", name="admin_refeicao_update")
     * @Method("PUT")
     * @Template("NutrirBoxBundle:Refeicao:edit.html.twig")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NutrirBoxBundle:Refeicao')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Refeicao entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Editado com sucesso');
            return $this->redirect($this->generateUrl('admin_refeicao_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Refeicao entity.
     *
     * @Route("/{id}", name="admin_refeicao_delete")
     * @Method("DELETE")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('NutrirBoxBundle:Refeicao')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Refeicao entity.');
            }
            
            if ( property_exists($entity,'isAtivo')){
                $entity->setIsAtivo(false);
            } else {
                $em->remove($entity);
            }
            
            $em->flush();
            $this->addFlash('success', 'Deletado com sucesso');
        }

        return $this->redirect($this->generateUrl('admin_refeicao'));
    }

    /**
     * Creates a form to delete a Refeicao entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_refeicao_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', 
                    array('label' => 'Deletar',
                          'attr' => array('class' => 'btn-delete-hidden hidden')))
            ->getForm()
        ;
    }
}
