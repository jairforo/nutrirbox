<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // NutrirBoxBundle_home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'NutrirBoxBundle_home');
            }

            return array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\DefaultController::homeAction',  '_route' => 'NutrirBoxBundle_home',);
        }

        if (0 === strpos($pathinfo, '/auth')) {
            // pessoa_create
            if ($pathinfo === '/auth/pessoa/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_pessoa_create;
                }

                return array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\PessoaController::createAction',  '_route' => 'pessoa_create',);
            }
            not_pessoa_create:

            if (0 === strpos($pathinfo, '/auth/log')) {
                if (0 === strpos($pathinfo, '/auth/login')) {
                    // login
                    if ($pathinfo === '/auth/login') {
                        return array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\AuthController::loginAction',  '_route' => 'login',);
                    }

                    // login_check
                    if ($pathinfo === '/auth/login_check') {
                        return array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\AuthController::loginCheckAction',  '_route' => 'login_check',);
                    }

                }

                // logout
                if ($pathinfo === '/auth/logout') {
                    return array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\AuthController::logoutAction',  '_route' => 'logout',);
                }

            }

            // auth_app
            if ($pathinfo === '/auth/app') {
                return array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\AuthController::appAction',  '_route' => 'auth_app',);
            }

        }

        // home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }

            return array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\DefaultController::homeAction',  '_route' => 'home',);
        }

        // user_dashboard
        if ($pathinfo === '/user') {
            return array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\DefaultController::dashboardAction',  '_route' => 'user_dashboard',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // admin_dashboard
            if ($pathinfo === '/admin') {
                return array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\DefaultController::dashboardAdminAction',  '_route' => 'admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/ingrediente')) {
                // admin_ingrediente
                if (rtrim($pathinfo, '/') === '/admin/ingrediente') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_ingrediente;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_ingrediente');
                    }

                    return array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\IngredienteController::indexAction',  '_route' => 'admin_ingrediente',);
                }
                not_admin_ingrediente:

                // admin_ingrediente_create
                if ($pathinfo === '/admin/ingrediente/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_ingrediente_create;
                    }

                    return array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\IngredienteController::createAction',  '_route' => 'admin_ingrediente_create',);
                }
                not_admin_ingrediente_create:

                // admin_ingrediente_new
                if ($pathinfo === '/admin/ingrediente/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_ingrediente_new;
                    }

                    return array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\IngredienteController::newAction',  '_route' => 'admin_ingrediente_new',);
                }
                not_admin_ingrediente_new:

                // admin_ingrediente_show
                if (preg_match('#^/admin/ingrediente/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_ingrediente_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ingrediente_show')), array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\IngredienteController::showAction',));
                }
                not_admin_ingrediente_show:

                // admin_ingrediente_edit
                if (preg_match('#^/admin/ingrediente/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_ingrediente_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ingrediente_edit')), array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\IngredienteController::editAction',));
                }
                not_admin_ingrediente_edit:

                // admin_ingrediente_update
                if (preg_match('#^/admin/ingrediente/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_admin_ingrediente_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ingrediente_update')), array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\IngredienteController::updateAction',));
                }
                not_admin_ingrediente_update:

                // admin_ingrediente_delete
                if (preg_match('#^/admin/ingrediente/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_ingrediente_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_ingrediente_delete')), array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\IngredienteController::deleteAction',));
                }
                not_admin_ingrediente_delete:

            }

            // admin_pedido
            if (rtrim($pathinfo, '/') === '/admin/pedido') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_admin_pedido;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_pedido');
                }

                return array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\PedidoController::indexAction',  '_route' => 'admin_pedido',);
            }
            not_admin_pedido:

        }

        // user_meus_pedidos
        if ($pathinfo === '/user/meus-pedidos') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_user_meus_pedidos;
            }

            return array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\PedidoController::meusPedidosAction',  '_route' => 'user_meus_pedidos',);
        }
        not_user_meus_pedidos:

        if (0 === strpos($pathinfo, '/admin/pe')) {
            if (0 === strpos($pathinfo, '/admin/pedido')) {
                // admin_pedido_create
                if ($pathinfo === '/admin/pedido/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_pedido_create;
                    }

                    return array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\PedidoController::createAction',  '_route' => 'admin_pedido_create',);
                }
                not_admin_pedido_create:

                // admin_pedido_new
                if ($pathinfo === '/admin/pedido/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_pedido_new;
                    }

                    return array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\PedidoController::newAction',  '_route' => 'admin_pedido_new',);
                }
                not_admin_pedido_new:

                // admin_pedido_show
                if (preg_match('#^/admin/pedido/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_pedido_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pedido_show')), array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\PedidoController::showAction',));
                }
                not_admin_pedido_show:

                // admin_pedido_edit
                if (preg_match('#^/admin/pedido/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_pedido_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pedido_edit')), array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\PedidoController::editAction',));
                }
                not_admin_pedido_edit:

                // admin_pedido_update
                if (preg_match('#^/admin/pedido/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_admin_pedido_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pedido_update')), array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\PedidoController::updateAction',));
                }
                not_admin_pedido_update:

                // admin_pedido_delete
                if (preg_match('#^/admin/pedido/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_pedido_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pedido_delete')), array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\PedidoController::deleteAction',));
                }
                not_admin_pedido_delete:

            }

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

                    return array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\PerfilController::indexAction',  '_route' => 'admin_perfil',);
                }
                not_admin_perfil:

                // admin_perfil_create
                if ($pathinfo === '/admin/perfil/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_perfil_create;
                    }

                    return array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\PerfilController::createAction',  '_route' => 'admin_perfil_create',);
                }
                not_admin_perfil_create:

                // admin_perfil_new
                if ($pathinfo === '/admin/perfil/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_perfil_new;
                    }

                    return array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\PerfilController::newAction',  '_route' => 'admin_perfil_new',);
                }
                not_admin_perfil_new:

                // admin_perfil_show
                if (preg_match('#^/admin/perfil/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_perfil_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_perfil_show')), array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\PerfilController::showAction',));
                }
                not_admin_perfil_show:

                // admin_perfil_edit
                if (preg_match('#^/admin/perfil/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_perfil_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_perfil_edit')), array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\PerfilController::editAction',));
                }
                not_admin_perfil_edit:

                // admin_perfil_update
                if (preg_match('#^/admin/perfil/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_admin_perfil_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_perfil_update')), array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\PerfilController::updateAction',));
                }
                not_admin_perfil_update:

                // admin_perfil_delete
                if (preg_match('#^/admin/perfil/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_perfil_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_perfil_delete')), array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\PerfilController::deleteAction',));
                }
                not_admin_perfil_delete:

            }

            // admin_pessoa
            if ($pathinfo === '/admin/pessoa') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_admin_pessoa;
                }

                return array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\PessoaController::indexAction',  '_route' => 'admin_pessoa',);
            }
            not_admin_pessoa:

        }

        if (0 === strpos($pathinfo, '/user')) {
            // user_perfil
            if ($pathinfo === '/user/perfil') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_perfil;
                }

                return array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\PessoaController::perfilAction',  '_route' => 'user_perfil',);
            }
            not_user_perfil:

            // update-pessoa-json
            if ($pathinfo === '/user/update-pessoa-json') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_updatepessoajson;
                }

                return array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\PessoaController::updatePessoaJsonAction',  '_route' => 'update-pessoa-json',);
            }
            not_updatepessoajson:

        }

        if (0 === strpos($pathinfo, '/admin/pessoa')) {
            // admin_pessoa_create
            if ($pathinfo === '/admin/pessoa/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_pessoa_create;
                }

                return array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\PessoaController::createAction',  '_route' => 'admin_pessoa_create',);
            }
            not_admin_pessoa_create:

            // admin_pessoa_new
            if ($pathinfo === '/admin/pessoa/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_admin_pessoa_new;
                }

                return array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\PessoaController::newAction',  '_route' => 'admin_pessoa_new',);
            }
            not_admin_pessoa_new:

            // admin_pessoa_show
            if (preg_match('#^/admin/pessoa/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_admin_pessoa_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pessoa_show')), array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\PessoaController::showAction',));
            }
            not_admin_pessoa_show:

            // admin_pessoa_edit
            if (preg_match('#^/admin/pessoa/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_admin_pessoa_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pessoa_edit')), array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\PessoaController::editAction',));
            }
            not_admin_pessoa_edit:

            // admin_pessoa_update
            if (preg_match('#^/admin/pessoa/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_admin_pessoa_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_pessoa_update')), array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\PessoaController::updateAction',));
            }
            not_admin_pessoa_update:

        }

        // user_pessoa_delete
        if (0 === strpos($pathinfo, '/user') && preg_match('#^/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'DELETE') {
                $allow[] = 'DELETE';
                goto not_user_pessoa_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_pessoa_delete')), array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\PessoaController::deleteAction',));
        }
        not_user_pessoa_delete:

        if (0 === strpos($pathinfo, '/admin/t')) {
            if (0 === strpos($pathinfo, '/admin/tipoingrediente')) {
                // admin_tipoingrediente
                if (rtrim($pathinfo, '/') === '/admin/tipoingrediente') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_tipoingrediente;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_tipoingrediente');
                    }

                    return array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\TipoIngredienteController::indexAction',  '_route' => 'admin_tipoingrediente',);
                }
                not_admin_tipoingrediente:

                // admin_tipoingrediente_create
                if ($pathinfo === '/admin/tipoingrediente/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_tipoingrediente_create;
                    }

                    return array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\TipoIngredienteController::createAction',  '_route' => 'admin_tipoingrediente_create',);
                }
                not_admin_tipoingrediente_create:

                // admin_tipoingrediente_new
                if ($pathinfo === '/admin/tipoingrediente/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_tipoingrediente_new;
                    }

                    return array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\TipoIngredienteController::newAction',  '_route' => 'admin_tipoingrediente_new',);
                }
                not_admin_tipoingrediente_new:

                // admin_tipoingrediente_show
                if (preg_match('#^/admin/tipoingrediente/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_tipoingrediente_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tipoingrediente_show')), array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\TipoIngredienteController::showAction',));
                }
                not_admin_tipoingrediente_show:

                // admin_tipoingrediente_edit
                if (preg_match('#^/admin/tipoingrediente/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_tipoingrediente_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tipoingrediente_edit')), array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\TipoIngredienteController::editAction',));
                }
                not_admin_tipoingrediente_edit:

                // admin_tipoingrediente_update
                if (preg_match('#^/admin/tipoingrediente/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_admin_tipoingrediente_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tipoingrediente_update')), array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\TipoIngredienteController::updateAction',));
                }
                not_admin_tipoingrediente_update:

                // admin_tipoingrediente_delete
                if (preg_match('#^/admin/tipoingrediente/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_tipoingrediente_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tipoingrediente_delete')), array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\TipoIngredienteController::deleteAction',));
                }
                not_admin_tipoingrediente_delete:

            }

            if (0 === strpos($pathinfo, '/admin/transacao')) {
                // admin_transacao
                if (rtrim($pathinfo, '/') === '/admin/transacao') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_transacao;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_transacao');
                    }

                    return array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\TransacaoController::indexAction',  '_route' => 'admin_transacao',);
                }
                not_admin_transacao:

                // admin_transacao_create
                if ($pathinfo === '/admin/transacao/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_transacao_create;
                    }

                    return array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\TransacaoController::createAction',  '_route' => 'admin_transacao_create',);
                }
                not_admin_transacao_create:

                // admin_transacao_new
                if ($pathinfo === '/admin/transacao/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_transacao_new;
                    }

                    return array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\TransacaoController::newAction',  '_route' => 'admin_transacao_new',);
                }
                not_admin_transacao_new:

                // admin_transacao_show
                if (preg_match('#^/admin/transacao/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_transacao_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_transacao_show')), array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\TransacaoController::showAction',));
                }
                not_admin_transacao_show:

                // admin_transacao_edit
                if (preg_match('#^/admin/transacao/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_transacao_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_transacao_edit')), array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\TransacaoController::editAction',));
                }
                not_admin_transacao_edit:

                // admin_transacao_update
                if (preg_match('#^/admin/transacao/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_admin_transacao_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_transacao_update')), array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\TransacaoController::updateAction',));
                }
                not_admin_transacao_update:

                // admin_transacao_delete
                if (preg_match('#^/admin/transacao/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_transacao_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_transacao_delete')), array (  '_controller' => 'Corporativo\\NutrirBoxBundle\\Controller\\TransacaoController::deleteAction',));
                }
                not_admin_transacao_delete:

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
