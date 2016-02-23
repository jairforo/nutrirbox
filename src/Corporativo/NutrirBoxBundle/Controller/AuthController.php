<?php

namespace Corporativo\NutrirBoxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Security\Core\SecurityContext;

class AuthController extends Controller {

    /**
     * @Template()
     * @Route("/auth/login", name="login")
     */
    public function loginAction() {
        $request = $this->getRequest();
        $session = $request->getSession();

        #Verifica se possui erro no login
        #if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
        #    $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        #} else{
        $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
        $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        #}

        return array(
            'last_username' => $session->get(SecurityContext::LAST_USERNAME),
            'error' => $error
        );
    }

    /**
     * @Route("/auth/login_check", name="login_check")
     */
    public function loginCheckAction() {
        
    }

    /**
     *  @Route("/auth/logout", name="logout")
     */
    public function logoutAction() {
        
    }

    /**
     * Verifica que o usuario esta logado e o redireciona para o ambiente de acordo com o perfil
     * @Route("/auth/app", name="auth_app")
     */
    public function appAction() {
        $user = $this->getUser();
        $strRoute = 'logout';
        if ($user) {
            $role = $user->getCoPerfil()->getNoNome();
            switch ($role) {
                case "ROLE_ADMIN":
                    $strRoute = 'admin_dashboard';
                    break;
                case "ROLE_USER":
                    $strRoute = 'user_dashboard';
                    break;
            }
        }

        return $this->redirect($this->generateUrl($strRoute));
    }

}
