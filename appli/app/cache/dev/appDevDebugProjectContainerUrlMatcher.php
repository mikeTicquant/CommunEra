<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/booking')) {
                // app_admin_booking_index
                if ($pathinfo === '/admin/booking') {
                    return array (  '_controller' => 'AppBundle\\Controller\\Admin\\BookingController::indexAction',  '_route' => 'app_admin_booking_index',);
                }

                // app_admin_booking_create
                if ($pathinfo === '/admin/booking/add') {
                    return array (  '_controller' => 'AppBundle\\Controller\\Admin\\BookingController::createAction',  '_route' => 'app_admin_booking_create',);
                }

                // app_admin_booking_update
                if (preg_match('#^/admin/booking/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_admin_booking_update')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\BookingController::updateAction',));
                }

                // app_admin_booking_delete
                if (preg_match('#^/admin/booking/(?P<id>\\d+)/supprimer$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_admin_booking_delete')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\BookingController::deleteAction',));
                }

            }

            // app_admin_default_index
            if ($pathinfo === '/admin') {
                return array (  '_controller' => 'AppBundle\\Controller\\Admin\\DefaultController::indexAction',  '_route' => 'app_admin_default_index',);
            }

            if (0 === strpos($pathinfo, '/admin/sitter')) {
                // app_admin_sitter_index
                if ($pathinfo === '/admin/sitter') {
                    return array (  '_controller' => 'AppBundle\\Controller\\Admin\\SitterController::indexAction',  '_route' => 'app_admin_sitter_index',);
                }

                // app_admin_sitter_create
                if ($pathinfo === '/admin/sitter/add') {
                    return array (  '_controller' => 'AppBundle\\Controller\\Admin\\SitterController::createAction',  '_route' => 'app_admin_sitter_create',);
                }

                // app_admin_sitter_update
                if (preg_match('#^/admin/sitter/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_admin_sitter_update')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\SitterController::updateAction',));
                }

                // app_admin_sitter_delete
                if (preg_match('#^/admin/sitter/(?P<id>\\d+)/supprimer$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_admin_sitter_delete')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\SitterController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/user')) {
                // app_admin_user_index
                if ($pathinfo === '/admin/user') {
                    return array (  '_controller' => 'AppBundle\\Controller\\Admin\\UserController::indexAction',  '_route' => 'app_admin_user_index',);
                }

                // app_admin_user_create
                if ($pathinfo === '/admin/user/add') {
                    return array (  '_controller' => 'AppBundle\\Controller\\Admin\\UserController::createAction',  '_route' => 'app_admin_user_create',);
                }

                // app_admin_user_update
                if (preg_match('#^/admin/user/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_admin_user_update')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\UserController::updateAction',));
                }

                // app_admin_user_delete
                if (preg_match('#^/admin/user/(?P<id>\\d+)/supprimer$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_admin_user_delete')), array (  '_controller' => 'AppBundle\\Controller\\Admin\\UserController::deleteAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/booking/step_')) {
            // app_booking_step1
            if ($pathinfo === '/booking/step_1') {
                return array (  '_controller' => 'AppBundle\\Controller\\BookingController::step1Action',  '_route' => 'app_booking_step1',);
            }

            // app_booking_step2
            if ($pathinfo === '/booking/step_2') {
                return array (  '_controller' => 'AppBundle\\Controller\\BookingController::step2Action',  '_route' => 'app_booking_step2',);
            }

        }

        // app_contact_index
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'AppBundle\\Controller\\ContactController::indexAction',  '_route' => 'app_contact_index',);
        }

        // app_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'app_default_index');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'app_default_index',);
        }

        // app_default_signup
        if ($pathinfo === '/inscription') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::signupAction',  '_route' => 'app_default_signup',);
        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
        }

        if (0 === strpos($pathinfo, '/s')) {
            if (0 === strpos($pathinfo, '/services')) {
                // services_index
                if ($pathinfo === '/services') {
                    return array (  '_controller' => 'AppBundle\\Controller\\ServicesController::indexAction',  '_route' => 'services_index',);
                }

                // app_services_view
                if (preg_match('#^/services/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_services_view')), array (  '_controller' => 'AppBundle\\Controller\\ServicesController::viewAction',));
                }

            }

            if (0 === strpos($pathinfo, '/sitter')) {
                // app_sitter_index
                if ($pathinfo === '/sitter') {
                    return array (  '_controller' => 'AppBundle\\Controller\\SitterController::indexAction',  '_route' => 'app_sitter_index',);
                }

                // app_sitter_view
                if ($pathinfo === '/sitter/list') {
                    return array (  '_controller' => 'AppBundle\\Controller\\SitterController::viewAction',  '_route' => 'app_sitter_view',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/user')) {
            // user_index
            if ($pathinfo === '/user') {
                return array (  '_controller' => 'AppBundle\\Controller\\UserController::indexAction',  '_route' => 'user_index',);
            }

            // app_user_view
            if ($pathinfo === '/user/view') {
                return array (  '_controller' => 'AppBundle\\Controller\\UserController::viewAction',  '_route' => 'app_user_view',);
            }

        }

        if (0 === strpos($pathinfo, '/compte')) {
            // app_user_booking_index
            if ($pathinfo === '/compte_user/booking') {
                return array (  '_controller' => 'AppBundle\\Controller\\User\\BookingController::indexAction',  '_route' => 'app_user_booking_index',);
            }

            // app_user_default_index
            if ($pathinfo === '/compte-user') {
                return array (  '_controller' => 'AppBundle\\Controller\\User\\DefaultController::indexAction',  '_route' => 'app_user_default_index',);
            }

        }

        // logout
        if ($pathinfo === '/deconnexion') {
            return array('_route' => 'logout');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
