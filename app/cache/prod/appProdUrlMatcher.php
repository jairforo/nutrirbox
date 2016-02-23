<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // ConcurseiroBundle_home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ConcurseiroBundle_home');
            }

            return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\DefaultController::homeAction',  '_route' => 'ConcurseiroBundle_home',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            // pessoa_create
            if ($pathinfo === '/auth/pessoa/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_pessoa_create;
                }

                return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\PessoaController::createAction',  '_route' => 'pessoa_create',);
            }
            not_pessoa_create:

            if (0 === strpos($pathinfo, '/admin/a')) {
                if (0 === strpos($pathinfo, '/admin/assunto')) {
                    // admin_assunto
                    if (rtrim($pathinfo, '/') === '/admin/assunto') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_assunto;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'admin_assunto');
                        }

                        return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\AssuntoController::indexAction',  '_route' => 'admin_assunto',);
                    }
                    not_admin_assunto:

                    // admin_assunto_create
                    if ($pathinfo === '/admin/assunto/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_assunto_create;
                        }

                        return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\AssuntoController::createAction',  '_route' => 'admin_assunto_create',);
                    }
                    not_admin_assunto_create:

                    // admin_assunto_new
                    if ($pathinfo === '/admin/assunto/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_assunto_new;
                        }

                        return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\AssuntoController::newAction',  '_route' => 'admin_assunto_new',);
                    }
                    not_admin_assunto_new:

                    // admin_assunto_show
                    if (preg_match('#^/admin/assunto/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_assunto_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_assunto_show')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\AssuntoController::showAction',));
                    }
                    not_admin_assunto_show:

                    // admin_assunto_edit
                    if (preg_match('#^/admin/assunto/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_assunto_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_assunto_edit')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\AssuntoController::editAction',));
                    }
                    not_admin_assunto_edit:

                    // admin_assunto_update
                    if (preg_match('#^/admin/assunto/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_admin_assunto_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_assunto_update')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\AssuntoController::updateAction',));
                    }
                    not_admin_assunto_update:

                    // admin_assunto_delete
                    if (preg_match('#^/admin/assunto/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_admin_assunto_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_assunto_delete')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\AssuntoController::deleteAction',));
                    }
                    not_admin_assunto_delete:

                }

                if (0 === strpos($pathinfo, '/admin/atividade')) {
                    // admin_atividade
                    if (rtrim($pathinfo, '/') === '/admin/atividade') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_atividade;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'admin_atividade');
                        }

                        return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\AtividadeController::indexAction',  '_route' => 'admin_atividade',);
                    }
                    not_admin_atividade:

                    // admin_atividade_create
                    if ($pathinfo === '/admin/atividade/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_atividade_create;
                        }

                        return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\AtividadeController::createAction',  '_route' => 'admin_atividade_create',);
                    }
                    not_admin_atividade_create:

                    // admin_atividade_new
                    if ($pathinfo === '/admin/atividade/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_atividade_new;
                        }

                        return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\AtividadeController::newAction',  '_route' => 'admin_atividade_new',);
                    }
                    not_admin_atividade_new:

                    // admin_atividade_show
                    if (preg_match('#^/admin/atividade/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_atividade_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_atividade_show')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\AtividadeController::showAction',));
                    }
                    not_admin_atividade_show:

                    // admin_atividade_edit
                    if (preg_match('#^/admin/atividade/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_atividade_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_atividade_edit')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\AtividadeController::editAction',));
                    }
                    not_admin_atividade_edit:

                    // admin_atividade_update
                    if (preg_match('#^/admin/atividade/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_admin_atividade_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_atividade_update')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\AtividadeController::updateAction',));
                    }
                    not_admin_atividade_update:

                    // admin_atividade_delete
                    if (preg_match('#^/admin/atividade/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_admin_atividade_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_atividade_delete')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\AtividadeController::deleteAction',));
                    }
                    not_admin_atividade_delete:

                }

            }

            if (0 === strpos($pathinfo, '/auth')) {
                if (0 === strpos($pathinfo, '/auth/log')) {
                    if (0 === strpos($pathinfo, '/auth/login')) {
                        // login
                        if ($pathinfo === '/auth/login') {
                            return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\AuthController::loginAction',  '_route' => 'login',);
                        }

                        // login_check
                        if ($pathinfo === '/auth/login_check') {
                            return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\AuthController::loginCheckAction',  '_route' => 'login_check',);
                        }

                    }

                    // logout
                    if ($pathinfo === '/auth/logout') {
                        return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\AuthController::logoutAction',  '_route' => 'logout',);
                    }

                }

                // auth_app
                if ($pathinfo === '/auth/app') {
                    return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\AuthController::appAction',  '_route' => 'auth_app',);
                }

            }

            if (0 === strpos($pathinfo, '/admin')) {
                if (0 === strpos($pathinfo, '/admin/banca')) {
                    // admin_banca
                    if (rtrim($pathinfo, '/') === '/admin/banca') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_banca;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'admin_banca');
                        }

                        return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\BancaController::indexAction',  '_route' => 'admin_banca',);
                    }
                    not_admin_banca:

                    // admin_banca_create
                    if ($pathinfo === '/admin/banca/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_banca_create;
                        }

                        return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\BancaController::createAction',  '_route' => 'admin_banca_create',);
                    }
                    not_admin_banca_create:

                    // admin_banca_new
                    if ($pathinfo === '/admin/banca/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_banca_new;
                        }

                        return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\BancaController::newAction',  '_route' => 'admin_banca_new',);
                    }
                    not_admin_banca_new:

                    // admin_banca_show
                    if (preg_match('#^/admin/banca/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_banca_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_banca_show')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\BancaController::showAction',));
                    }
                    not_admin_banca_show:

                    // admin_banca_edit
                    if (preg_match('#^/admin/banca/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_banca_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_banca_edit')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\BancaController::editAction',));
                    }
                    not_admin_banca_edit:

                    // admin_banca_update
                    if (preg_match('#^/admin/banca/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_admin_banca_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_banca_update')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\BancaController::updateAction',));
                    }
                    not_admin_banca_update:

                    // admin_banca_delete
                    if (preg_match('#^/admin/banca/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_admin_banca_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_banca_delete')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\BancaController::deleteAction',));
                    }
                    not_admin_banca_delete:

                }

                if (0 === strpos($pathinfo, '/admin/cargo')) {
                    // admin_cargo
                    if ($pathinfo === '/admin/cargo') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_cargo;
                        }

                        return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\CargoController::indexAction',  '_route' => 'admin_cargo',);
                    }
                    not_admin_cargo:

                    // admin_cargo_create
                    if ($pathinfo === '/admin/cargo') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_cargo_create;
                        }

                        return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\CargoController::createAction',  '_route' => 'admin_cargo_create',);
                    }
                    not_admin_cargo_create:

                    // admin_cargo_new
                    if ($pathinfo === '/admin/cargo/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_cargo_new;
                        }

                        return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\CargoController::newAction',  '_route' => 'admin_cargo_new',);
                    }
                    not_admin_cargo_new:

                    // admin_cargo_show
                    if (preg_match('#^/admin/cargo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_cargo_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cargo_show')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\CargoController::showAction',));
                    }
                    not_admin_cargo_show:

                    // admin_cargo_edit
                    if (preg_match('#^/admin/cargo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_cargo_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cargo_edit')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\CargoController::editAction',));
                    }
                    not_admin_cargo_edit:

                    // admin_cargo_update
                    if (preg_match('#^/admin/cargo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_admin_cargo_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cargo_update')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\CargoController::updateAction',));
                    }
                    not_admin_cargo_update:

                    // admin_cargo_delete
                    if (preg_match('#^/admin/cargo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_admin_cargo_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cargo_delete')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\CargoController::deleteAction',));
                    }
                    not_admin_cargo_delete:

                }

            }

        }

        // cargo_get_cargos_json
        if ($pathinfo === '/user/cargo/get-cargos-json') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_cargo_get_cargos_json;
            }

            return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\CargoController::getCargosJsonAction',  '_route' => 'cargo_get_cargos_json',);
        }
        not_cargo_get_cargos_json:

        if (0 === strpos($pathinfo, '/admin/c')) {
            if (0 === strpos($pathinfo, '/admin/cargodisciplina')) {
                if (0 === strpos($pathinfo, '/admin/cargodisciplinaassunto')) {
                    // admin_cargodisciplinaassunto
                    if (rtrim($pathinfo, '/') === '/admin/cargodisciplinaassunto') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_cargodisciplinaassunto;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'admin_cargodisciplinaassunto');
                        }

                        return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\CargoDisciplinaAssuntoController::indexAction',  '_route' => 'admin_cargodisciplinaassunto',);
                    }
                    not_admin_cargodisciplinaassunto:

                    // admin_cargodisciplinaassunto_create
                    if ($pathinfo === '/admin/cargodisciplinaassunto/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_cargodisciplinaassunto_create;
                        }

                        return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\CargoDisciplinaAssuntoController::createAction',  '_route' => 'admin_cargodisciplinaassunto_create',);
                    }
                    not_admin_cargodisciplinaassunto_create:

                    // admin_cargodisciplinaassunto_new
                    if ($pathinfo === '/admin/cargodisciplinaassunto/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_cargodisciplinaassunto_new;
                        }

                        return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\CargoDisciplinaAssuntoController::newAction',  '_route' => 'admin_cargodisciplinaassunto_new',);
                    }
                    not_admin_cargodisciplinaassunto_new:

                    // admin_cargodisciplinaassunto_show
                    if (preg_match('#^/admin/cargodisciplinaassunto/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_cargodisciplinaassunto_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cargodisciplinaassunto_show')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\CargoDisciplinaAssuntoController::showAction',));
                    }
                    not_admin_cargodisciplinaassunto_show:

                    // admin_cargodisciplinaassunto_edit
                    if (preg_match('#^/admin/cargodisciplinaassunto/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_cargodisciplinaassunto_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cargodisciplinaassunto_edit')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\CargoDisciplinaAssuntoController::editAction',));
                    }
                    not_admin_cargodisciplinaassunto_edit:

                    // admin_cargodisciplinaassunto_update
                    if (preg_match('#^/admin/cargodisciplinaassunto/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_admin_cargodisciplinaassunto_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cargodisciplinaassunto_update')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\CargoDisciplinaAssuntoController::updateAction',));
                    }
                    not_admin_cargodisciplinaassunto_update:

                    // admin_cargodisciplinaassunto_delete
                    if (preg_match('#^/admin/cargodisciplinaassunto/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_admin_cargodisciplinaassunto_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cargodisciplinaassunto_delete')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\CargoDisciplinaAssuntoController::deleteAction',));
                    }
                    not_admin_cargodisciplinaassunto_delete:

                }

                // admin_cargodisciplina
                if (rtrim($pathinfo, '/') === '/admin/cargodisciplina') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_cargodisciplina;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_cargodisciplina');
                    }

                    return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\CargoDisciplinaController::indexAction',  '_route' => 'admin_cargodisciplina',);
                }
                not_admin_cargodisciplina:

                // admin_cargodisciplina_create
                if ($pathinfo === '/admin/cargodisciplina/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_cargodisciplina_create;
                    }

                    return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\CargoDisciplinaController::createAction',  '_route' => 'admin_cargodisciplina_create',);
                }
                not_admin_cargodisciplina_create:

                // admin_cargodisciplina_new
                if ($pathinfo === '/admin/cargodisciplina/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_cargodisciplina_new;
                    }

                    return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\CargoDisciplinaController::newAction',  '_route' => 'admin_cargodisciplina_new',);
                }
                not_admin_cargodisciplina_new:

                // admin_cargodisciplina_show
                if (preg_match('#^/admin/cargodisciplina/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_cargodisciplina_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cargodisciplina_show')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\CargoDisciplinaController::showAction',));
                }
                not_admin_cargodisciplina_show:

                // admin_cargodisciplina_edit
                if (preg_match('#^/admin/cargodisciplina/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_cargodisciplina_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cargodisciplina_edit')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\CargoDisciplinaController::editAction',));
                }
                not_admin_cargodisciplina_edit:

                // admin_cargodisciplina_update
                if (preg_match('#^/admin/cargodisciplina/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_admin_cargodisciplina_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cargodisciplina_update')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\CargoDisciplinaController::updateAction',));
                }
                not_admin_cargodisciplina_update:

                // admin_cargodisciplina_delete
                if (preg_match('#^/admin/cargodisciplina/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_cargodisciplina_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_cargodisciplina_delete')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\CargoDisciplinaController::deleteAction',));
                }
                not_admin_cargodisciplina_delete:

            }

            if (0 === strpos($pathinfo, '/admin/concurso')) {
                // admin_concurso
                if (rtrim($pathinfo, '/') === '/admin/concurso') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_concurso;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_concurso');
                    }

                    return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\ConcursoController::indexAction',  '_route' => 'admin_concurso',);
                }
                not_admin_concurso:

                // admin_concurso_create
                if ($pathinfo === '/admin/concurso/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_concurso_create;
                    }

                    return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\ConcursoController::createAction',  '_route' => 'admin_concurso_create',);
                }
                not_admin_concurso_create:

                // admin_concurso_new
                if ($pathinfo === '/admin/concurso/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_concurso_new;
                    }

                    return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\ConcursoController::newAction',  '_route' => 'admin_concurso_new',);
                }
                not_admin_concurso_new:

                // admin_concurso_show
                if (preg_match('#^/admin/concurso/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_concurso_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_concurso_show')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\ConcursoController::showAction',));
                }
                not_admin_concurso_show:

                // admin_concurso_edit
                if (preg_match('#^/admin/concurso/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_concurso_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_concurso_edit')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\ConcursoController::editAction',));
                }
                not_admin_concurso_edit:

                // admin_concurso_update
                if (preg_match('#^/admin/concurso/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_admin_concurso_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_concurso_update')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\ConcursoController::updateAction',));
                }
                not_admin_concurso_update:

                // admin_concurso_delete
                if (preg_match('#^/admin/concurso/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_concurso_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_concurso_delete')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\ConcursoController::deleteAction',));
                }
                not_admin_concurso_delete:

            }

        }

        // concurso_get_concursos_json
        if ($pathinfo === '/user/concurso/get-concursos-json') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_concurso_get_concursos_json;
            }

            return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\ConcursoController::getConcursosJsonAction',  '_route' => 'concurso_get_concursos_json',);
        }
        not_concurso_get_concursos_json:

        // home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }

            return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\DefaultController::homeAction',  '_route' => 'home',);
        }

        // user_dashboard
        if ($pathinfo === '/user') {
            return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\DefaultController::dashboardAction',  '_route' => 'user_dashboard',);
        }

        // admin_dashboard
        if ($pathinfo === '/admin') {
            return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\DefaultController::dashboardAdminAction',  '_route' => 'admin_dashboard',);
        }

        // diahorarioestudo_list_json
        if ($pathinfo === '/user/diahorarioestudo/list-json') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_diahorarioestudo_list_json;
            }

            return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\DiaHorarioEstudoController::listJsonAction',  '_route' => 'diahorarioestudo_list_json',);
        }
        not_diahorarioestudo_list_json:

        if (0 === strpos($pathinfo, '/admin/disciplina')) {
            // admin_disciplina
            if (rtrim($pathinfo, '/') === '/admin/disciplina') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_admin_disciplina;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_disciplina');
                }

                return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\DisciplinaController::indexAction',  '_route' => 'admin_disciplina',);
            }
            not_admin_disciplina:

            // admin_disciplina_create
            if ($pathinfo === '/admin/disciplina/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_disciplina_create;
                }

                return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\DisciplinaController::createAction',  '_route' => 'admin_disciplina_create',);
            }
            not_admin_disciplina_create:

            // admin_disciplina_new
            if ($pathinfo === '/admin/disciplina/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_admin_disciplina_new;
                }

                return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\DisciplinaController::newAction',  '_route' => 'admin_disciplina_new',);
            }
            not_admin_disciplina_new:

            // admin_disciplina_show
            if (preg_match('#^/admin/disciplina/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_admin_disciplina_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_disciplina_show')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\DisciplinaController::showAction',));
            }
            not_admin_disciplina_show:

            // admin_disciplina_edit
            if (preg_match('#^/admin/disciplina/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_admin_disciplina_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_disciplina_edit')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\DisciplinaController::editAction',));
            }
            not_admin_disciplina_edit:

            // admin_disciplina_update
            if (preg_match('#^/admin/disciplina/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_admin_disciplina_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_disciplina_update')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\DisciplinaController::updateAction',));
            }
            not_admin_disciplina_update:

            // admin_disciplina_delete
            if (preg_match('#^/admin/disciplina/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_admin_disciplina_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_disciplina_delete')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\DisciplinaController::deleteAction',));
            }
            not_admin_disciplina_delete:

        }

        if (0 === strpos($pathinfo, '/user/horario')) {
            // horario_list_json
            if ($pathinfo === '/user/horario/list-json') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_horario_list_json;
                }

                return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\HorarioController::listJsonAction',  '_route' => 'horario_list_json',);
            }
            not_horario_list_json:

            // horario_insert_json
            if ($pathinfo === '/user/horario/insert-json') {
                return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\HorarioController::insertJsonAction',  '_route' => 'horario_insert_json',);
            }

            // horario_edit_json
            if ($pathinfo === '/user/horario/edit-json') {
                return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\HorarioController::editJsonAction',  '_route' => 'horario_edit_json',);
            }

            // horario_delete_json
            if ($pathinfo === '/user/horario/delete-json') {
                return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\HorarioController::deleteJsonAction',  '_route' => 'horario_delete_json',);
            }

            if (0 === strpos($pathinfo, '/user/horario/get-')) {
                // horario_lista_melhoria
                if ($pathinfo === '/user/horario/get-lista-melhoria') {
                    return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\HorarioController::getListaMelhoriaAction',  '_route' => 'horario_lista_melhoria',);
                }

                // horario_get_horas_resumo
                if ($pathinfo === '/user/horario/get-horas-resumo') {
                    return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\HorarioController::getHorasResumo',  '_route' => 'horario_get_horas_resumo',);
                }

            }

            // user_horario_add_evento
            if ($pathinfo === '/user/horario/add-evento') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_user_horario_add_evento;
                }

                return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\HorarioController::addEventoAction',  '_route' => 'user_horario_add_evento',);
            }
            not_user_horario_add_evento:

            // user_horario_evento
            if (0 === strpos($pathinfo, '/user/horario/form-evento') && preg_match('#^/user/horario/form\\-evento/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_horario_evento;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_horario_evento')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\HorarioController::formEventoAction',));
            }
            not_user_horario_evento:

        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/instituicaoensino')) {
                // admin_instituicaoensino
                if (rtrim($pathinfo, '/') === '/admin/instituicaoensino') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_instituicaoensino;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_instituicaoensino');
                    }

                    return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\InstituicaoEnsinoController::indexAction',  '_route' => 'admin_instituicaoensino',);
                }
                not_admin_instituicaoensino:

                // admin_instituicaoensino_create
                if ($pathinfo === '/admin/instituicaoensino/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_instituicaoensino_create;
                    }

                    return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\InstituicaoEnsinoController::createAction',  '_route' => 'admin_instituicaoensino_create',);
                }
                not_admin_instituicaoensino_create:

                // admin_instituicaoensino_new
                if ($pathinfo === '/admin/instituicaoensino/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_instituicaoensino_new;
                    }

                    return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\InstituicaoEnsinoController::newAction',  '_route' => 'admin_instituicaoensino_new',);
                }
                not_admin_instituicaoensino_new:

                // admin_instituicaoensino_show
                if (preg_match('#^/admin/instituicaoensino/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_instituicaoensino_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_instituicaoensino_show')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\InstituicaoEnsinoController::showAction',));
                }
                not_admin_instituicaoensino_show:

                // admin_instituicaoensino_edit
                if (preg_match('#^/admin/instituicaoensino/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_instituicaoensino_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_instituicaoensino_edit')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\InstituicaoEnsinoController::editAction',));
                }
                not_admin_instituicaoensino_edit:

                // admin_instituicaoensino_update
                if (preg_match('#^/admin/instituicaoensino/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_admin_instituicaoensino_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_instituicaoensino_update')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\InstituicaoEnsinoController::updateAction',));
                }
                not_admin_instituicaoensino_update:

                // admin_instituicaoensino_delete
                if (preg_match('#^/admin/instituicaoensino/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_instituicaoensino_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_instituicaoensino_delete')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\InstituicaoEnsinoController::deleteAction',));
                }
                not_admin_instituicaoensino_delete:

                if (0 === strpos($pathinfo, '/admin/instituicaoensinopromocao')) {
                    // admin_instituicaoensinopromocao
                    if (rtrim($pathinfo, '/') === '/admin/instituicaoensinopromocao') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_instituicaoensinopromocao;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'admin_instituicaoensinopromocao');
                        }

                        return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\InstituicaoEnsinoPromocaoController::indexAction',  '_route' => 'admin_instituicaoensinopromocao',);
                    }
                    not_admin_instituicaoensinopromocao:

                    // admin_instituicaoensinopromocao_create
                    if ($pathinfo === '/admin/instituicaoensinopromocao/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_instituicaoensinopromocao_create;
                        }

                        return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\InstituicaoEnsinoPromocaoController::createAction',  '_route' => 'admin_instituicaoensinopromocao_create',);
                    }
                    not_admin_instituicaoensinopromocao_create:

                    // admin_instituicaoensinopromocao_new
                    if ($pathinfo === '/admin/instituicaoensinopromocao/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_instituicaoensinopromocao_new;
                        }

                        return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\InstituicaoEnsinoPromocaoController::newAction',  '_route' => 'admin_instituicaoensinopromocao_new',);
                    }
                    not_admin_instituicaoensinopromocao_new:

                    // admin_instituicaoensinopromocao_show
                    if (preg_match('#^/admin/instituicaoensinopromocao/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_instituicaoensinopromocao_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_instituicaoensinopromocao_show')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\InstituicaoEnsinoPromocaoController::showAction',));
                    }
                    not_admin_instituicaoensinopromocao_show:

                    // admin_instituicaoensinopromocao_edit
                    if (preg_match('#^/admin/instituicaoensinopromocao/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_instituicaoensinopromocao_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_instituicaoensinopromocao_edit')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\InstituicaoEnsinoPromocaoController::editAction',));
                    }
                    not_admin_instituicaoensinopromocao_edit:

                    // admin_instituicaoensinopromocao_update
                    if (preg_match('#^/admin/instituicaoensinopromocao/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_admin_instituicaoensinopromocao_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_instituicaoensinopromocao_update')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\InstituicaoEnsinoPromocaoController::updateAction',));
                    }
                    not_admin_instituicaoensinopromocao_update:

                    // admin_instituicaoensinopromocao_delete
                    if (preg_match('#^/admin/instituicaoensinopromocao/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_admin_instituicaoensinopromocao_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_instituicaoensinopromocao_delete')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\InstituicaoEnsinoPromocaoController::deleteAction',));
                    }
                    not_admin_instituicaoensinopromocao_delete:

                }

            }

            if (0 === strpos($pathinfo, '/admin/nivel')) {
                // admin_nivel
                if (rtrim($pathinfo, '/') === '/admin/nivel') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_nivel;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_nivel');
                    }

                    return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\NivelController::indexAction',  '_route' => 'admin_nivel',);
                }
                not_admin_nivel:

                // admin_nivel_create
                if ($pathinfo === '/admin/nivel/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_nivel_create;
                    }

                    return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\NivelController::createAction',  '_route' => 'admin_nivel_create',);
                }
                not_admin_nivel_create:

                // admin_nivel_new
                if ($pathinfo === '/admin/nivel/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_nivel_new;
                    }

                    return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\NivelController::newAction',  '_route' => 'admin_nivel_new',);
                }
                not_admin_nivel_new:

                // admin_nivel_show
                if (preg_match('#^/admin/nivel/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_nivel_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nivel_show')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\NivelController::showAction',));
                }
                not_admin_nivel_show:

                // admin_nivel_edit
                if (preg_match('#^/admin/nivel/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_nivel_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nivel_edit')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\NivelController::editAction',));
                }
                not_admin_nivel_edit:

                // admin_nivel_update
                if (preg_match('#^/admin/nivel/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_admin_nivel_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nivel_update')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\NivelController::updateAction',));
                }
                not_admin_nivel_update:

                // admin_nivel_delete
                if (preg_match('#^/admin/nivel/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_nivel_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_nivel_delete')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\NivelController::deleteAction',));
                }
                not_admin_nivel_delete:

            }

            if (0 === strpos($pathinfo, '/admin/pe')) {
                if (0 === strpos($pathinfo, '/admin/perfil')) {
                    // admin_perfil
                    if (rtrim($pathinfo, '/') === '/admin/perfil') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_perfil;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'admin_perfil');
                        }

                        return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\PerfilController::indexAction',  '_route' => 'admin_perfil',);
                    }
                    not_admin_perfil:

                    // admin_perfil_create
                    if ($pathinfo === '/admin/perfil/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_perfil_create;
                        }

                        return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\PerfilController::createAction',  '_route' => 'admin_perfil_create',);
                    }
                    not_admin_perfil_create:

                    // admin_perfil_new
                    if ($pathinfo === '/admin/perfil/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_perfil_new;
                        }

                        return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\PerfilController::newAction',  '_route' => 'admin_perfil_new',);
                    }
                    not_admin_perfil_new:

                    // admin_perfil_show
                    if (preg_match('#^/admin/perfil/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_perfil_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_perfil_show')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\PerfilController::showAction',));
                    }
                    not_admin_perfil_show:

                    // admin_perfil_edit
                    if (preg_match('#^/admin/perfil/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_admin_perfil_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_perfil_edit')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\PerfilController::editAction',));
                    }
                    not_admin_perfil_edit:

                    // admin_perfil_update
                    if (preg_match('#^/admin/perfil/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_admin_perfil_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_perfil_update')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\PerfilController::updateAction',));
                    }
                    not_admin_perfil_update:

                    // admin_perfil_delete
                    if (preg_match('#^/admin/perfil/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_admin_perfil_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_perfil_delete')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\PerfilController::deleteAction',));
                    }
                    not_admin_perfil_delete:

                }

                // admin_pessoa
                if ($pathinfo === '/admin/pessoa') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_pessoa;
                    }

                    return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\PessoaController::indexAction',  '_route' => 'admin_pessoa',);
                }
                not_admin_pessoa:

            }

        }

        if (0 === strpos($pathinfo, '/user')) {
            // user_perfil
            if ($pathinfo === '/user/perfil') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_perfil;
                }

                return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\PessoaController::perfilAction',  '_route' => 'user_perfil',);
            }
            not_user_perfil:

            // update-pessoa-json
            if ($pathinfo === '/user/update-pessoa-json') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_updatepessoajson;
                }

                return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\PessoaController::updatePessoaJsonAction',  '_route' => 'update-pessoa-json',);
            }
            not_updatepessoajson:

        }

        // admin_pessoa_create
        if ($pathinfo === '/') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_admin_pessoa_create;
            }

            return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\PessoaController::createAction',  '_route' => 'admin_pessoa_create',);
        }
        not_admin_pessoa_create:

        // admin_pessoa_new
        if ($pathinfo === '/new') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_admin_pessoa_new;
            }

            return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\PessoaController::newAction',  '_route' => 'admin_pessoa_new',);
        }
        not_admin_pessoa_new:

        // admin_pessoa_show
        if (preg_match('#^/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_admin_pessoa_show;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pessoa_show')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\PessoaController::showAction',));
        }
        not_admin_pessoa_show:

        // admin_pessoa_edit
        if (preg_match('#^/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_admin_pessoa_edit;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pessoa_edit')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\PessoaController::editAction',));
        }
        not_admin_pessoa_edit:

        // admin_pessoa_update
        if (preg_match('#^/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'PUT') {
                $allow[] = 'PUT';
                goto not_admin_pessoa_update;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pessoa_update')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\PessoaController::updateAction',));
        }
        not_admin_pessoa_update:

        if (0 === strpos($pathinfo, '/user')) {
            // user_pessoa_delete
            if (preg_match('#^/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_user_pessoa_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_pessoa_delete')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\PessoaController::deleteAction',));
            }
            not_user_pessoa_delete:

            if (0 === strpos($pathinfo, '/user/planejamento')) {
                if (0 === strpos($pathinfo, '/user/planejamentoestudo')) {
                    // user_planejamentoestudo
                    if (rtrim($pathinfo, '/') === '/user/planejamentoestudo') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_user_planejamentoestudo;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'user_planejamentoestudo');
                        }

                        return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\PlanejamentoEstudoController::indexAction',  '_route' => 'user_planejamentoestudo',);
                    }
                    not_user_planejamentoestudo:

                    // user_planejamentoestudo_new
                    if ($pathinfo === '/user/planejamentoestudo/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_user_planejamentoestudo_new;
                        }

                        return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\PlanejamentoEstudoController::newAction',  '_route' => 'user_planejamentoestudo_new',);
                    }
                    not_user_planejamentoestudo_new:

                    // user_planejamentoestudo_show
                    if (preg_match('#^/user/planejamentoestudo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_user_planejamentoestudo_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_planejamentoestudo_show')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\PlanejamentoEstudoController::showAction',));
                    }
                    not_user_planejamentoestudo_show:

                    // user_planejamentoestudo_delete
                    if (preg_match('#^/user/planejamentoestudo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_user_planejamentoestudo_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_planejamentoestudo_delete')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\PlanejamentoEstudoController::deleteAction',));
                    }
                    not_user_planejamentoestudo_delete:

                    // user_planejamentoestudo_create
                    if ($pathinfo === '/user/planejamentoestudo/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_user_planejamentoestudo_create;
                        }

                        return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\PlanejamentoEstudoController::createAction',  '_route' => 'user_planejamentoestudo_create',);
                    }
                    not_user_planejamentoestudo_create:

                    // user_planejamentoestudo_print
                    if (preg_match('#^/user/planejamentoestudo/(?P<id>[^/]++)/print$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_user_planejamentoestudo_print;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_planejamentoestudo_print')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\PlanejamentoEstudoController::printAction',));
                    }
                    not_user_planejamentoestudo_print:

                }

                // planejamento_minha_semana
                if ($pathinfo === '/user/planejamento/minha-semana') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_planejamento_minha_semana;
                    }

                    return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\PlanejamentoSemanalController::minhaSemanaAction',  '_route' => 'planejamento_minha_semana',);
                }
                not_planejamento_minha_semana:

                // planejamento_semanal_duplicar
                if ($pathinfo === '/user/planejamento/duplicar') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_planejamento_semanal_duplicar;
                    }

                    return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\PlanejamentoSemanalController::duplicarAction',  '_route' => 'planejamento_semanal_duplicar',);
                }
                not_planejamento_semanal_duplicar:

            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/promocao')) {
                // admin_promocao
                if (rtrim($pathinfo, '/') === '/admin/promocao') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_promocao;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_promocao');
                    }

                    return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\PromocaoController::indexAction',  '_route' => 'admin_promocao',);
                }
                not_admin_promocao:

                // admin_promocao_create
                if ($pathinfo === '/admin/promocao/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_promocao_create;
                    }

                    return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\PromocaoController::createAction',  '_route' => 'admin_promocao_create',);
                }
                not_admin_promocao_create:

                // admin_promocao_new
                if ($pathinfo === '/admin/promocao/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_promocao_new;
                    }

                    return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\PromocaoController::newAction',  '_route' => 'admin_promocao_new',);
                }
                not_admin_promocao_new:

                // admin_promocao_show
                if (preg_match('#^/admin/promocao/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_promocao_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_promocao_show')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\PromocaoController::showAction',));
                }
                not_admin_promocao_show:

                // admin_promocao_edit
                if (preg_match('#^/admin/promocao/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_promocao_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_promocao_edit')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\PromocaoController::editAction',));
                }
                not_admin_promocao_edit:

                // admin_promocao_update
                if (preg_match('#^/admin/promocao/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_admin_promocao_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_promocao_update')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\PromocaoController::updateAction',));
                }
                not_admin_promocao_update:

                // admin_promocao_delete
                if (preg_match('#^/admin/promocao/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_promocao_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_promocao_delete')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\PromocaoController::deleteAction',));
                }
                not_admin_promocao_delete:

            }

            if (0 === strpos($pathinfo, '/admin/referenciavalor')) {
                // admin_referenciavalor
                if (rtrim($pathinfo, '/') === '/admin/referenciavalor') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_referenciavalor;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_referenciavalor');
                    }

                    return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\ReferenciaValorController::indexAction',  '_route' => 'admin_referenciavalor',);
                }
                not_admin_referenciavalor:

                // admin_referenciavalor_create
                if ($pathinfo === '/admin/referenciavalor/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_referenciavalor_create;
                    }

                    return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\ReferenciaValorController::createAction',  '_route' => 'admin_referenciavalor_create',);
                }
                not_admin_referenciavalor_create:

                // admin_referenciavalor_new
                if ($pathinfo === '/admin/referenciavalor/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_referenciavalor_new;
                    }

                    return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\ReferenciaValorController::newAction',  '_route' => 'admin_referenciavalor_new',);
                }
                not_admin_referenciavalor_new:

                // admin_referenciavalor_show
                if (preg_match('#^/admin/referenciavalor/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_referenciavalor_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_referenciavalor_show')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\ReferenciaValorController::showAction',));
                }
                not_admin_referenciavalor_show:

                // admin_referenciavalor_edit
                if (preg_match('#^/admin/referenciavalor/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_referenciavalor_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_referenciavalor_edit')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\ReferenciaValorController::editAction',));
                }
                not_admin_referenciavalor_edit:

                // admin_referenciavalor_update
                if (preg_match('#^/admin/referenciavalor/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_admin_referenciavalor_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_referenciavalor_update')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\ReferenciaValorController::updateAction',));
                }
                not_admin_referenciavalor_update:

                // admin_referenciavalor_delete
                if (preg_match('#^/admin/referenciavalor/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_referenciavalor_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_referenciavalor_delete')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\ReferenciaValorController::deleteAction',));
                }
                not_admin_referenciavalor_delete:

            }

            if (0 === strpos($pathinfo, '/admin/tipoestudo')) {
                // admin_tipoestudo
                if (rtrim($pathinfo, '/') === '/admin/tipoestudo') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_tipoestudo;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_tipoestudo');
                    }

                    return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\TipoEstudoController::indexAction',  '_route' => 'admin_tipoestudo',);
                }
                not_admin_tipoestudo:

                // admin_tipoestudo_create
                if ($pathinfo === '/admin/tipoestudo/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_tipoestudo_create;
                    }

                    return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\TipoEstudoController::createAction',  '_route' => 'admin_tipoestudo_create',);
                }
                not_admin_tipoestudo_create:

                // admin_tipoestudo_new
                if ($pathinfo === '/admin/tipoestudo/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_tipoestudo_new;
                    }

                    return array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\TipoEstudoController::newAction',  '_route' => 'admin_tipoestudo_new',);
                }
                not_admin_tipoestudo_new:

                // admin_tipoestudo_show
                if (preg_match('#^/admin/tipoestudo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_tipoestudo_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tipoestudo_show')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\TipoEstudoController::showAction',));
                }
                not_admin_tipoestudo_show:

                // admin_tipoestudo_edit
                if (preg_match('#^/admin/tipoestudo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_tipoestudo_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tipoestudo_edit')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\TipoEstudoController::editAction',));
                }
                not_admin_tipoestudo_edit:

                // admin_tipoestudo_update
                if (preg_match('#^/admin/tipoestudo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_admin_tipoestudo_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tipoestudo_update')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\TipoEstudoController::updateAction',));
                }
                not_admin_tipoestudo_update:

                // admin_tipoestudo_delete
                if (preg_match('#^/admin/tipoestudo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_tipoestudo_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tipoestudo_delete')), array (  '_controller' => 'Corporativo\\ConcurseiroBundle\\Controller\\TipoEstudoController::deleteAction',));
                }
                not_admin_tipoestudo_delete:

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
