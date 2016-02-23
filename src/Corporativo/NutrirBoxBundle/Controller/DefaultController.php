<?php

namespace Corporativo\NutrirBoxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Corporativo\NutrirBoxBundle\Utils\Message;

class DefaultController extends Controller {

    use Message;

    /**
     * Pagina principal do Site
     * @Template()
     * @Route("/", name="home")
     */
    public function homeAction() {
        return $this->redirect($this->generateUrl('login'));
    }

    /**
     * dashboard
     * @Template()
     * @Route("/user", name="user_dashboard")
     */
    public function dashboardAction() {

        #BreadCrumbs
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem("Dashboard", $this->get("router")->generate("user_dashboard"));

        return array();
    }

    /**
     * dashboard
     * @Template()
     * @Route("/admin", name="admin_dashboard")
     */
    public function dashboardAdminAction() {
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem("Dashboard", $this->get("router")->generate("admin_dashboard"));

        return array();
    }

}
