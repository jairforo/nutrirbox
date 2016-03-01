<?php

namespace Corporativo\NutrirBoxBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Corporativo\NutrirBoxBundle\Entity\Transacao;
use Corporativo\NutrirBoxBundle\Form\TransacaoType;

/**
 * Transacao controller.
 *
 * @Route("/admin/transacao")
 */
class TransacaoController extends Controller
{

    /**
     * Lists all Transacao entities.
     *
     * @Route("/", name="admin_transacao")
     * @Method("GET")
     * @Template()
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function indexAction()
    {
        #BreadCrumbs
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem("Dashboard", $this->get("router")->generate("admin_dashboard"));
        $breadcrumbs->addItem("Transacao");
    
        $em = $this->getDoctrine()->getManager();
        
        if ( property_exists(new Transacao, 'isAtivo')) {
            $entities = $em->getRepository('NutrirBoxBundle:Transacao')->findBy(array('isAtivo' => 'true'));
        } else {
            $entities = $em->getRepository('NutrirBoxBundle:Transacao')->findAll();
        }
        
        $deleteForm = $this->createDeleteForm(0);

        return array(
            'entities' => $entities,
            'delete_form' => $deleteForm->createView()
        );
    }
    /**
     * Creates a new Transacao entity.
     *
     * @Route("/", name="admin_transacao_create")
     * @Method("POST")
     * @Template("NutrirBoxBundle:Transacao:new.html.twig")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function createAction(Request $request)
    {
        $entity = new Transacao();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            $this->addFlash('success', 'Adicionado com sucesso');
            return $this->redirect($this->generateUrl('admin_transacao_show', array('id' => $entity->getCoTransacao())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Transacao entity.
     *
     * @param Transacao $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Transacao $entity)
    {
        $form = $this->createForm(new TransacaoType(), $entity, array(
            'action' => $this->generateUrl('admin_transacao_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Novo'));

        return $form;
    }

    /**
     * Displays a form to create a new Transacao entity.
     *
     * @Route("/new", name="admin_transacao_new")
     * @Method("GET")
     * @Template()
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function newAction()
    {
        #BreadCrumbs
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem("Dashboard", $this->get("router")->generate("admin_dashboard"));
        $breadcrumbs->addItem("Transacao", $this->get("router")->generate("admin_transacao"));
        $breadcrumbs->addItem("Novo");
        
        $entity = new Transacao();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Transacao entity.
     *
     * @Route("/{id}", name="admin_transacao_show")
     * @Method("GET")
     * @Template()
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function showAction($id)
    {
        #BreadCrumbs
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem("Dashboard", $this->get("router")->generate("admin_dashboard"));
        $breadcrumbs->addItem("Transacao", $this->get("router")->generate("admin_transacao"));
        $breadcrumbs->addItem("Detalhe");
    
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NutrirBoxBundle:Transacao')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Transacao entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Transacao entity.
     *
     * @Route("/{id}/edit", name="admin_transacao_edit")
     * @Method("GET")
     * @Template()
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function editAction($id)
    {
        #BreadCrumbs
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem("Dashboard", $this->get("router")->generate("admin_dashboard"));
        $breadcrumbs->addItem("Transacao", $this->get("router")->generate("admin_transacao"));
        $breadcrumbs->addItem("Editar");
        
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NutrirBoxBundle:Transacao')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Transacao entity.');
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
    * Creates a form to edit a Transacao entity.
    *
    * @param Transacao $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Transacao $entity)
    {
        $form = $this->createForm(new TransacaoType(), $entity, array(
            'action' => $this->generateUrl('admin_transacao_update', array('id' => $entity->getCoTransacao())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Editar'));

        return $form;
    }
    /**
     * Edits an existing Transacao entity.
     *
     * @Route("/{id}", name="admin_transacao_update")
     * @Method("PUT")
     * @Template("NutrirBoxBundle:Transacao:edit.html.twig")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NutrirBoxBundle:Transacao')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Transacao entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();
            $this->addFlash('success', 'Editado com sucesso');
            return $this->redirect($this->generateUrl('admin_transacao_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Transacao entity.
     *
     * @Route("/{id}", name="admin_transacao_delete")
     * @Method("DELETE")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('NutrirBoxBundle:Transacao')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Transacao entity.');
            }
            
            if ( property_exists($entity,'isAtivo')){
                $entity->setIsAtivo(false);
            } else {
                $em->remove($entity);
            }
            
            $em->flush();
            $this->addFlash('success', 'Deletado com sucesso');
        }

        return $this->redirect($this->generateUrl('admin_transacao'));
    }

    /**
     * Creates a form to delete a Transacao entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_transacao_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', 
                    array('label' => 'Deletar',
                          'attr' => array('class' => 'btn-delete-hidden hidden')))
            ->getForm()
        ;
    }
}
