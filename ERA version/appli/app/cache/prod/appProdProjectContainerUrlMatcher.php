<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
