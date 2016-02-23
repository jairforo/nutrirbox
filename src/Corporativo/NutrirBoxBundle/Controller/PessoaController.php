<?php

namespace Corporativo\NutrirBoxBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Corporativo\NutrirBoxBundle\Entity\Pessoa;
use Corporativo\NutrirBoxBundle\Form\PessoaType;

/**
 * Pessoa controller.
 */
class PessoaController extends Controller {

    /**
     * Lists all Pessoa entities.
     *
     * @Route("/admin/pessoa", name="admin_pessoa")
     * @Method("GET")
     * @Template()
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function indexAction() {
        #BreadCrumbs
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem("Dashboard", $this->get("router")->generate("admin_dashboard"));
        $breadcrumbs->addItem("Clientes");

        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('NutrirBoxBundle:Pessoa')->findAll();

        $deleteForm = $this->createDeleteForm(0);

        return array(
            'entities' => $entities,
            'delete_form' => $deleteForm->createView()
        );
    }

    /**
     * Exibe e altera as informacoes sobre o perfil logado
     *
     * @Route("/user/perfil", name="user_perfil")
     * @Method("GET")
     * @Template("NutrirBoxBundle:Pessoa:perfil.html.twig")
     * @Security("has_role('ROLE_USER')")
     */
    public function perfilAction() {
        #BreadCrumbs
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem("Dashboard", $this->get("router")->generate("user_dashboard"));
        $breadcrumbs->addItem("Perfil");

        $user = $this->getUser();
//        if ($user->getImFoto() && !file_exists('uploads/avatar/' . $user->getImFoto())) {
//            $user->setImFoto(null);
//        }

        return array($user);
    }

    /**
     * Exibe e altera as informacoes sobre o perfil logado
     *
     * @Route("/user/update-pessoa-json", name="update-pessoa-json")
     * @Method("POST")
     * @Security("has_role('ROLE_USER')")
     */
    public function updatePessoaJsonAction(Request $request) {
        $user = $this->getUser();
        $arrReturn = array();

        if ($request->request->get("name")) {
            $atributo = $request->request->get("name");
            $valor = $request->request->get("value");
            switch ($atributo) {
                case "noNome":
                    $user->setNoNome($valor);
                    break;
                case "nuCpf":
                    $user->setNuCpf($valor != "" ? $valor : null);
                    break;
                case "nuTelefone":
                    $user->setNuTelefone($valor != "" ? $valor : null);
                    break;
                case "nuCelular":
                    $user->setNuCelular($valor != "" ? $valor : null);
                    break;
                case "tpSexo":
                    $user->setTpSexo($valor != "" ? $valor : null);
                    break;
                case "dtNascimento":
                    $user->setDtNascimento($valor != "" ? new \DateTime($valor) : null);
                    break;
            }
        }

        if ($request->files->get("avatar")) {
            $file = $request->files->get("avatar");
            $fileName = md5(uniqid()) . '.' . $file->guessExtension();
            $dir = $this->container->getParameter('kernel.root_dir') . '/../web/uploads/avatar';

            $file->move($dir, $fileName);

            if ($user->getImFoto() && file_exists('uploads/avatar/' . $user->getImFoto()) && is_writable('uploads/avatar/' . $user->getImFoto())) {
                unlink('uploads/avatar/' . $user->getImFoto());
            }
            $user->setImFoto($fileName);
            $arrReturn[0] = array('status' => 'OK', 'url' => '/uploads/avatar/' . $fileName);
        }

        $em = $this->getDoctrine()->getManager();
        $em->merge($user);
        $em->flush();

        echo json_encode($arrReturn);
        exit;
    }

    /**
     * Creates a new Pessoa entity.
     *
     * @Route("/admin/pessoa/", name="admin_pessoa_create")
     * @Method("POST")
     * @Template("NutrirBoxBundle:Pessoa:new.html.twig")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function createAction(Request $request) {
        $entity = new Pessoa();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {

            $entity->setNoSenha($this->encodePassword($entity, $request->get('noSenha')))
                    ->setDtCadastro(new \DateTime('now'))
                    ->setIsAtivo(TRUE);

            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            $token = new UsernamePasswordToken($entity, null, 'main', $entity->getRoles());
            $this->get('security.token_storage')->setToken($token);

            return $this->redirect($this->generateUrl('admin_pessoa_show', array('id' => $entity->getCoPessoa())));
        } else {
            if (!$form->isSubmitted()) {
                print_r(" não submetido");
            }

            if ($form->isDisabled()) {
                print_r("desativado");
            }

            if (count($form->getErrors(true)) > 0) {
                print_r("erros " . count($form->getErrors(true)));
                foreach ($form->getErrors() as $key => $error) {
                    if ($form->isRoot()) {
                        print_r($error->getMessage());
                    } else {
                        print_r($error->getMessage());
                    }
                }
            }
            print_r($form->getData());
            exit();
        }

        return array(
            'entity' => $entity,
            'form' => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Pessoa entity.
     *
     * @param Pessoa $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Pessoa $entity) {
        $form = $this->createForm(new PessoaType(), $entity, array(
            'action' => $this->generateUrl('admin_pessoa_create'),
            'method' => 'POST',
            'csrf_protection' => true,
            'csrf_field_name' => '_csrf_token',
            'intention' => 'authenticate'
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Pessoa entity.
     *
     * @Route("/admin/pessoa/new", name="admin_pessoa_new")
     * @Method("GET")
     * @Template()
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function newAction() {
        #BreadCrumbs
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem("Dashboard", $this->get("router")->generate("admin_dashboard"));
        $breadcrumbs->addItem("Pessoa", $this->get("router")->generate("admin_pessoa"));
        $breadcrumbs->addItem("Novo");

        $entity = new Pessoa();
        $form = $this->createCreateForm($entity);

        return $this->render('NutrirBoxBundle:Pessoa:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Pessoa entity.
     *
     * @Route("/admin/pessoa/{id}", name="admin_pessoa_show")
     * @Method("GET")
     * @Template()
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NutrirBoxBundle:Pessoa')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Pessoa entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Banca entity.
     *
     * @Route("/admin/pessoa/{id}/edit", name="admin_pessoa_edit")
     * @Method("GET")
     * @Template()
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NutrirBoxBundle:Pessoa')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Pessoa entity.');
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
     * Creates a form to edit a Pessoa entity.
     *
     * @param Pessoa $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Pessoa $entity) {
        $form = $this->createForm(new PessoaType(), $entity, array(
            'action' => $this->generateUrl('user_pessoa_update', array('id' => $entity->getCoPessoa())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing Pessoa entity.
     *
     * @Route("/admin/pessoa/{id}", name="admin_pessoa_update")
     * @Method("PUT")
     * @Template("NutrirBoxBundle:Pessoa:edit.html.twig")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NutrirBoxBundle:Pessoa')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Pessoa entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('user_pessoa_edit', array('id' => $id)));
        }

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Pessoa entity.
     *
     * @Route("/user/{id}", name="user_pessoa_delete")
     * @Method("DELETE")
     * @Security("has_role('ROLE_USER')")
     */
    public function deleteAction(Request $request, $id) {

        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('NutrirBoxBundle:Pessoa')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Pessoa entity.');
        }

        $entity->setIsAtivo(false);

        $em->merge($entity);
        $em->flush();

        return $this->redirect($this->generateUrl('logout'));
    }

    /**
     * Creates a form to delete a Pessoa entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('user_pessoa_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

    private function encodePassword($pessoa, $plainPassword) {
        $encoder = $this->container->get("security.encoder_factory")
                ->getEncoder($pessoa);
        return $encoder->encodePassword($plainPassword, $pessoa->getNoSalt());
    }

}
