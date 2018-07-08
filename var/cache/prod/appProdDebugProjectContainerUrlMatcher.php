<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // _assetic_2df548e
        if ('/js/2df548e.js' === $pathinfo) {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '2df548e',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_2df548e',);
        }

        if (0 === strpos($pathinfo, '/media/cache/resolve')) {
            // liip_imagine_filter_runtime
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_-]*)/rc/(?P<hash>[^/]++)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_liip_imagine_filter_runtime;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter_runtime')), array (  '_controller' => 'liip_imagine.controller:filterRuntimeAction',));
            }
            not_liip_imagine_filter_runtime:

            // liip_imagine_filter
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_-]*)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_liip_imagine_filter;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter')), array (  '_controller' => 'liip_imagine.controller:filterAction',));
            }
            not_liip_imagine_filter:

        }

        elseif (0 === strpos($pathinfo, '/l')) {
            if (0 === strpos($pathinfo, '/learn')) {
                if (0 === strpos($pathinfo, '/learn/login')) {
                    // learn_security_login
                    if ('/learn/login' === $pathinfo) {
                        return array (  '_controller' => 'dsw\\UserBundle\\Controller\\SecurityController::loginLearnAction',  '_route' => 'learn_security_login',);
                    }

                    // learn_security_check
                    if ('/learn/login_check' === $pathinfo) {
                        return array('_route' => 'learn_security_check');
                    }

                }

                // learn_security_logout
                if ('/learn/logout' === $pathinfo) {
                    return array('_route' => 'learn_security_logout');
                }

                if (0 === strpos($pathinfo, '/learn/admin')) {
                    if (0 === strpos($pathinfo, '/learn/admin/login')) {
                        // learn_admin_security_login
                        if ('/learn/admin/login' === $pathinfo) {
                            return array (  '_controller' => 'dsw\\UserBundle\\Controller\\SecurityController::loginLearnAdminAction',  '_route' => 'learn_admin_security_login',);
                        }

                        // learn_admin_security_check
                        if ('/learn/admin/login_check' === $pathinfo) {
                            return array('_route' => 'learn_admin_security_check');
                        }

                    }

                    // learn_admin_security_logout
                    if ('/learn/admin/logout' === $pathinfo) {
                        return array('_route' => 'learn_admin_security_logout');
                    }

                    // learn_admin_index
                    if ('/learn/admin' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_learn_admin_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($rawPathinfo.'/', 'learn_admin_index');
                        }

                        return array (  '_controller' => 'dsw\\LearnBundle\\Controller\\AdminController::indexAction',  '_route' => 'learn_admin_index',);
                    }
                    not_learn_admin_index:

                    // learn_admin_config
                    if ('/learn/admin/config' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_learn_admin_config;
                        }

                        return array (  '_controller' => 'dsw\\LearnBundle\\Controller\\AdminController::configAction',  '_route' => 'learn_admin_config',);
                    }
                    not_learn_admin_config:

                }

                elseif (0 === strpos($pathinfo, '/learn/unit')) {
                    // unit_index
                    if ('/learn/unit' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_unit_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($rawPathinfo.'/', 'unit_index');
                        }

                        return array (  '_controller' => 'dsw\\LearnBundle\\Controller\\UnitController::indexAction',  '_route' => 'unit_index',);
                    }
                    not_unit_index:

                    // unit_show
                    if (preg_match('#^/learn/unit/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_unit_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'unit_show')), array (  '_controller' => 'dsw\\LearnBundle\\Controller\\UnitController::showAction',));
                    }
                    not_unit_show:

                    // unit_new
                    if ('/learn/unit/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_unit_new;
                        }

                        return array (  '_controller' => 'dsw\\LearnBundle\\Controller\\UnitController::newAction',  '_route' => 'unit_new',);
                    }
                    not_unit_new:

                    // unit_edit
                    if (preg_match('#^/learn/unit/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_unit_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'unit_edit')), array (  '_controller' => 'dsw\\LearnBundle\\Controller\\UnitController::editAction',));
                    }
                    not_unit_edit:

                    // unit_delete
                    if (preg_match('#^/learn/unit/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'DELETE'))) {
                            $allow = array_merge($allow, array('GET', 'DELETE'));
                            goto not_unit_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'unit_delete')), array (  '_controller' => 'dsw\\LearnBundle\\Controller\\UnitController::deleteAction',));
                    }
                    not_unit_delete:

                    // unit_up
                    if (preg_match('#^/learn/unit/(?P<id>[^/]++)/up$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_unit_up;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'unit_up')), array (  '_controller' => 'dsw\\LearnBundle\\Controller\\UnitController::upAction',));
                    }
                    not_unit_up:

                    // unit_down
                    if (preg_match('#^/learn/unit/(?P<id>[^/]++)/down$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_unit_down;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'unit_down')), array (  '_controller' => 'dsw\\LearnBundle\\Controller\\UnitController::downAction',));
                    }
                    not_unit_down:

                }

                elseif (0 === strpos($pathinfo, '/learn/module')) {
                    // module_index
                    if ('/learn/module' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_module_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($rawPathinfo.'/', 'module_index');
                        }

                        return array (  '_controller' => 'dsw\\LearnBundle\\Controller\\ModuleController::indexAction',  '_route' => 'module_index',);
                    }
                    not_module_index:

                    // module_show
                    if (preg_match('#^/learn/module/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_module_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'module_show')), array (  '_controller' => 'dsw\\LearnBundle\\Controller\\ModuleController::showAction',));
                    }
                    not_module_show:

                    // module_new
                    if ('/learn/module/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_module_new;
                        }

                        return array (  '_controller' => 'dsw\\LearnBundle\\Controller\\ModuleController::newAction',  '_route' => 'module_new',);
                    }
                    not_module_new:

                    // module_edit
                    if (preg_match('#^/learn/module/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_module_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'module_edit')), array (  '_controller' => 'dsw\\LearnBundle\\Controller\\ModuleController::editAction',));
                    }
                    not_module_edit:

                    // module_delete
                    if (preg_match('#^/learn/module/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'DELETE'))) {
                            $allow = array_merge($allow, array('GET', 'DELETE'));
                            goto not_module_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'module_delete')), array (  '_controller' => 'dsw\\LearnBundle\\Controller\\ModuleController::deleteAction',));
                    }
                    not_module_delete:

                    // module_create
                    if (preg_match('#^/learn/module/(?P<id>[^/]++)/create$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_module_create;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'module_create')), array (  '_controller' => 'dsw\\LearnBundle\\Controller\\ModuleController::createAction',));
                    }
                    not_module_create:

                    // module_create_title
                    if (preg_match('#^/learn/module/(?P<id>[^/]++)/create_titre$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_module_create_title;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'module_create_title')), array (  '_controller' => 'dsw\\LearnBundle\\Controller\\ModuleController::create_titleAction',));
                    }
                    not_module_create_title:

                    // module_build
                    if (preg_match('#^/learn/module/(?P<id>[^/]++)/build$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_module_build;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'module_build')), array (  '_controller' => 'dsw\\LearnBundle\\Controller\\ModuleController::buildAction',));
                    }
                    not_module_build:

                    // module_play
                    if (preg_match('#^/learn/module/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_module_play;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'module_play')), array (  '_controller' => 'dsw\\LearnBundle\\Controller\\ModuleController::playAction',));
                    }
                    not_module_play:

                    // module_login
                    if (0 === strpos($pathinfo, '/learn/module/login') && preg_match('#^/learn/module/login/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_module_login;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'module_login')), array (  '_controller' => 'dsw\\LearnBundle\\Controller\\ModuleController::loginAndPlayAction',));
                    }
                    not_module_login:

                    // module_up
                    if (preg_match('#^/learn/module/(?P<id>[^/]++)/up$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_module_up;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'module_up')), array (  '_controller' => 'dsw\\LearnBundle\\Controller\\ModuleController::upAction',));
                    }
                    not_module_up:

                    // module_down
                    if (preg_match('#^/learn/module/(?P<id>[^/]++)/down$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_module_down;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'module_down')), array (  '_controller' => 'dsw\\LearnBundle\\Controller\\ModuleController::downAction',));
                    }
                    not_module_down:

                }

                elseif (0 === strpos($pathinfo, '/learn/message')) {
                    // message_index
                    if ('/learn/message' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_message_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($rawPathinfo.'/', 'message_index');
                        }

                        return array (  '_controller' => 'dsw\\LearnBundle\\Controller\\MessageController::indexAction',  '_route' => 'message_index',);
                    }
                    not_message_index:

                    // message_show
                    if (preg_match('#^/learn/message/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_message_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'message_show')), array (  '_controller' => 'dsw\\LearnBundle\\Controller\\MessageController::showAction',));
                    }
                    not_message_show:

                    // message_new
                    if ('/learn/message/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_message_new;
                        }

                        return array (  '_controller' => 'dsw\\LearnBundle\\Controller\\MessageController::newAction',  '_route' => 'message_new',);
                    }
                    not_message_new:

                    // message_edit
                    if (preg_match('#^/learn/message/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_message_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'message_edit')), array (  '_controller' => 'dsw\\LearnBundle\\Controller\\MessageController::editAction',));
                    }
                    not_message_edit:

                    // message_delete
                    if (preg_match('#^/learn/message/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_message_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'message_delete')), array (  '_controller' => 'dsw\\LearnBundle\\Controller\\MessageController::deleteAction',));
                    }
                    not_message_delete:

                }

                elseif (0 === strpos($pathinfo, '/learn/course')) {
                    // course_index
                    if ('/learn/course' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_course_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($rawPathinfo.'/', 'course_index');
                        }

                        return array (  '_controller' => 'dsw\\LearnBundle\\Controller\\CourseController::indexAction',  '_route' => 'course_index',);
                    }
                    not_course_index:

                    // course_show
                    if (preg_match('#^/learn/course/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_course_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_show')), array (  '_controller' => 'dsw\\LearnBundle\\Controller\\CourseController::showAction',));
                    }
                    not_course_show:

                    // course_new
                    if ('/learn/course/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_course_new;
                        }

                        return array (  '_controller' => 'dsw\\LearnBundle\\Controller\\CourseController::newAction',  '_route' => 'course_new',);
                    }
                    not_course_new:

                    // course_edit
                    if (preg_match('#^/learn/course/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_course_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_edit')), array (  '_controller' => 'dsw\\LearnBundle\\Controller\\CourseController::editAction',));
                    }
                    not_course_edit:

                    // course_delete
                    if (preg_match('#^/learn/course/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_course_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_delete')), array (  '_controller' => 'dsw\\LearnBundle\\Controller\\CourseController::deleteAction',));
                    }
                    not_course_delete:

                    // course_create
                    if ('/learn/course/create' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_course_create;
                        }

                        return array (  '_controller' => 'dsw\\LearnBundle\\Controller\\CourseController::createAction',  '_route' => 'course_create',);
                    }
                    not_course_create:

                    // course_play
                    if (preg_match('#^/learn/course/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_course_play;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_play')), array (  '_controller' => 'dsw\\LearnBundle\\Controller\\CourseController::playAction',));
                    }
                    not_course_play:

                    // course_build
                    if (preg_match('#^/learn/course/(?P<id>[^/]++)/build$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_course_build;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_build')), array (  '_controller' => 'dsw\\LearnBundle\\Controller\\CourseController::buildAction',));
                    }
                    not_course_build:

                    // course_register
                    if (preg_match('#^/learn/course/(?P<id>[^/]++)/register$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_course_register;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_register')), array (  '_controller' => 'dsw\\LearnBundle\\Controller\\CourseController::registerAction',));
                    }
                    not_course_register:

                    // course_duplicate_module
                    if (preg_match('#^/learn/course/(?P<id>[^/]++)/duplicate$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_course_duplicate_module;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_duplicate_module')), array (  '_controller' => 'dsw\\LearnBundle\\Controller\\CourseController::duplicateAction',));
                    }
                    not_course_duplicate_module:

                }

                elseif (0 === strpos($pathinfo, '/learn/track')) {
                    // track_index
                    if ('/learn/track' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_track_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($rawPathinfo.'/', 'track_index');
                        }

                        return array (  '_controller' => 'dsw\\LearnBundle\\Controller\\TrackController::indexAction',  '_route' => 'track_index',);
                    }
                    not_track_index:

                    // track_show
                    if (preg_match('#^/learn/track/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_track_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'track_show')), array (  '_controller' => 'dsw\\LearnBundle\\Controller\\TrackController::showAction',));
                    }
                    not_track_show:

                    // track_new
                    if ('/learn/track/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_track_new;
                        }

                        return array (  '_controller' => 'dsw\\LearnBundle\\Controller\\TrackController::newAction',  '_route' => 'track_new',);
                    }
                    not_track_new:

                    // track_edit
                    if (preg_match('#^/learn/track/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_track_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'track_edit')), array (  '_controller' => 'dsw\\LearnBundle\\Controller\\TrackController::editAction',));
                    }
                    not_track_edit:

                    // track_delete
                    if (preg_match('#^/learn/track/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_track_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'track_delete')), array (  '_controller' => 'dsw\\LearnBundle\\Controller\\TrackController::deleteAction',));
                    }
                    not_track_delete:

                    // track_index_module
                    if ('/learn/track/module' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_track_index_module;
                        }

                        return array (  '_controller' => 'dsw\\LearnBundle\\Controller\\TrackController::moduleAction',  '_route' => 'track_index_module',);
                    }
                    not_track_index_module:

                }

                // dsw_learn_homepage
                if ('/learn' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'dsw_learn_homepage');
                    }

                    return array (  '_controller' => 'dsw\\LearnBundle\\Controller\\DefaultController::indexAction',  '_route' => 'dsw_learn_homepage',);
                }

            }

            elseif (0 === strpos($pathinfo, '/login')) {
                // login
                if ('/login_simple' === $pathinfo) {
                    return array (  '_controller' => 'dsw\\UserBundle\\Controller\\SecurityController::loginSimpleAction',  '_route' => 'login',);
                }

                // fos_user_security_login
                if ('/login' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ('/login_check' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            elseif (0 === strpos($pathinfo, '/logout')) {
                // logout_simple
                if ('/logout_simple' === $pathinfo) {
                    return array('_route' => 'logout_simple');
                }

                // fos_user_security_logout
                if ('/logout' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_security_logout;
                    }

                    return array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
                }
                not_fos_user_security_logout:

            }

        }

        elseif (0 === strpos($pathinfo, '/admin')) {
            // login_check
            if ('/admin/login_check' === $pathinfo) {
                return array('_route' => 'login_check');
            }

            // dsw_ampli_admin
            if ('/admin' === $pathinfo) {
                return array (  '_controller' => 'dsw\\AmpliBundle\\Controller\\AdminController::indexAction',  '_route' => 'dsw_ampli_admin',);
            }

            // dsw_ampli_admin_espace
            if (0 === strpos($pathinfo, '/admin/espace') && preg_match('#^/admin/espace/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dsw_ampli_admin_espace')), array (  '_controller' => 'dsw\\AmpliBundle\\Controller\\AdminController::espaceAction',));
            }

            // dsw_ampli_admin_idee
            if (0 === strpos($pathinfo, '/admin/idee') && preg_match('#^/admin/idee/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dsw_ampli_admin_idee')), array (  '_controller' => 'dsw\\AmpliBundle\\Controller\\AdminController::ideeAction',));
            }

            // dsw_ampli_admin_user
            if ('/admin/user' === $pathinfo) {
                return array (  '_controller' => 'dsw\\AmpliBundle\\Controller\\AdminController::userAction',  '_route' => 'dsw_ampli_admin_user',);
            }

            // dsw_ampli_admin_config
            if ('/admin/config' === $pathinfo) {
                return array (  '_controller' => 'dsw\\AmpliBundle\\Controller\\AdminController::configAction',  '_route' => 'dsw_ampli_admin_config',);
            }

        }

        elseif (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_registration_register;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_registration_check_email;
                }

                return array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirm;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirmed;
                    }

                    return array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

        }

        elseif (0 === strpos($pathinfo, '/eval')) {
            if (0 === strpos($pathinfo, '/eval/texte')) {
                // eval_texte_index
                if ('/eval/texte' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_eval_texte_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'eval_texte_index');
                    }

                    return array (  '_controller' => 'dsw\\EvalBundle\\Controller\\TexteController::indexAction',  '_route' => 'eval_texte_index',);
                }
                not_eval_texte_index:

                // eval_texte_show
                if (preg_match('#^/eval/texte/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_eval_texte_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eval_texte_show')), array (  '_controller' => 'dsw\\EvalBundle\\Controller\\TexteController::showAction',));
                }
                not_eval_texte_show:

                // eval_texte_new
                if ('/eval/texte/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_eval_texte_new;
                    }

                    return array (  '_controller' => 'dsw\\EvalBundle\\Controller\\TexteController::newAction',  '_route' => 'eval_texte_new',);
                }
                not_eval_texte_new:

                // eval_texte_edit
                if (preg_match('#^/eval/texte/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_eval_texte_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eval_texte_edit')), array (  '_controller' => 'dsw\\EvalBundle\\Controller\\TexteController::editAction',));
                }
                not_eval_texte_edit:

                // eval_texte_delete
                if (preg_match('#^/eval/texte/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_eval_texte_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eval_texte_delete')), array (  '_controller' => 'dsw\\EvalBundle\\Controller\\TexteController::deleteAction',));
                }
                not_eval_texte_delete:

            }

            elseif (0 === strpos($pathinfo, '/eval/enregistrement')) {
                // eval_enregistrement_index
                if ('/eval/enregistrement' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_eval_enregistrement_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'eval_enregistrement_index');
                    }

                    return array (  '_controller' => 'dsw\\EvalBundle\\Controller\\EnregistrementController::indexAction',  '_route' => 'eval_enregistrement_index',);
                }
                not_eval_enregistrement_index:

                // eval_enregistrement_show
                if (preg_match('#^/eval/enregistrement/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_eval_enregistrement_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eval_enregistrement_show')), array (  '_controller' => 'dsw\\EvalBundle\\Controller\\EnregistrementController::showAction',));
                }
                not_eval_enregistrement_show:

                // eval_enregistrement_new
                if ('/eval/enregistrement/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_eval_enregistrement_new;
                    }

                    return array (  '_controller' => 'dsw\\EvalBundle\\Controller\\EnregistrementController::newAction',  '_route' => 'eval_enregistrement_new',);
                }
                not_eval_enregistrement_new:

                // eval_enregistrement_edit
                if (preg_match('#^/eval/enregistrement/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_eval_enregistrement_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eval_enregistrement_edit')), array (  '_controller' => 'dsw\\EvalBundle\\Controller\\EnregistrementController::editAction',));
                }
                not_eval_enregistrement_edit:

                // eval_enregistrement_delete
                if (preg_match('#^/eval/enregistrement/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_eval_enregistrement_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eval_enregistrement_delete')), array (  '_controller' => 'dsw\\EvalBundle\\Controller\\EnregistrementController::deleteAction',));
                }
                not_eval_enregistrement_delete:

            }

            elseif (0 === strpos($pathinfo, '/eval/evaluation')) {
                // eval_evaluation_index
                if ('/eval/evaluation' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_eval_evaluation_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'eval_evaluation_index');
                    }

                    return array (  '_controller' => 'dsw\\EvalBundle\\Controller\\EvaluationController::indexAction',  '_route' => 'eval_evaluation_index',);
                }
                not_eval_evaluation_index:

                // eval_evaluation_show
                if (preg_match('#^/eval/evaluation/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_eval_evaluation_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eval_evaluation_show')), array (  '_controller' => 'dsw\\EvalBundle\\Controller\\EvaluationController::showAction',));
                }
                not_eval_evaluation_show:

                // eval_evaluation_new
                if ('/eval/evaluation/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_eval_evaluation_new;
                    }

                    return array (  '_controller' => 'dsw\\EvalBundle\\Controller\\EvaluationController::newAction',  '_route' => 'eval_evaluation_new',);
                }
                not_eval_evaluation_new:

                // eval_evaluation_edit
                if (preg_match('#^/eval/evaluation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_eval_evaluation_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eval_evaluation_edit')), array (  '_controller' => 'dsw\\EvalBundle\\Controller\\EvaluationController::editAction',));
                }
                not_eval_evaluation_edit:

                // eval_evaluation_delete
                if (preg_match('#^/eval/evaluation/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_eval_evaluation_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eval_evaluation_delete')), array (  '_controller' => 'dsw\\EvalBundle\\Controller\\EvaluationController::deleteAction',));
                }
                not_eval_evaluation_delete:

            }

            elseif (0 === strpos($pathinfo, '/eval/record')) {
                // eval_record_index
                if ('/eval/record' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_eval_record_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'eval_record_index');
                    }

                    return array (  '_controller' => 'dsw\\EvalBundle\\Controller\\RecordController::indexAction',  '_route' => 'eval_record_index',);
                }
                not_eval_record_index:

                // eval_record_show
                if (preg_match('#^/eval/record/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_eval_record_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eval_record_show')), array (  '_controller' => 'dsw\\EvalBundle\\Controller\\RecordController::showAction',));
                }
                not_eval_record_show:

                // eval_record_new
                if ('/eval/record/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_eval_record_new;
                    }

                    return array (  '_controller' => 'dsw\\EvalBundle\\Controller\\RecordController::newAction',  '_route' => 'eval_record_new',);
                }
                not_eval_record_new:

                // eval_record_edit
                if (preg_match('#^/eval/record/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_eval_record_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eval_record_edit')), array (  '_controller' => 'dsw\\EvalBundle\\Controller\\RecordController::editAction',));
                }
                not_eval_record_edit:

                // eval_record_delete
                if (preg_match('#^/eval/record/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_eval_record_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eval_record_delete')), array (  '_controller' => 'dsw\\EvalBundle\\Controller\\RecordController::deleteAction',));
                }
                not_eval_record_delete:

            }

            elseif (0 === strpos($pathinfo, '/eval/question')) {
                // eval_question_index
                if ('/eval/question' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_eval_question_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'eval_question_index');
                    }

                    return array (  '_controller' => 'dsw\\EvalBundle\\Controller\\QuestionController::indexAction',  '_route' => 'eval_question_index',);
                }
                not_eval_question_index:

                // eval_question_show
                if (preg_match('#^/eval/question/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_eval_question_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eval_question_show')), array (  '_controller' => 'dsw\\EvalBundle\\Controller\\QuestionController::showAction',));
                }
                not_eval_question_show:

                // eval_question_new
                if ('/eval/question/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_eval_question_new;
                    }

                    return array (  '_controller' => 'dsw\\EvalBundle\\Controller\\QuestionController::newAction',  '_route' => 'eval_question_new',);
                }
                not_eval_question_new:

                // eval_question_edit
                if (preg_match('#^/eval/question/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_eval_question_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eval_question_edit')), array (  '_controller' => 'dsw\\EvalBundle\\Controller\\QuestionController::editAction',));
                }
                not_eval_question_edit:

                // eval_question_delete
                if (preg_match('#^/eval/question/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_eval_question_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'eval_question_delete')), array (  '_controller' => 'dsw\\EvalBundle\\Controller\\QuestionController::deleteAction',));
                }
                not_eval_question_delete:

            }

            // dsw_eval_start
            if ('/eval' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'dsw_eval_start');
                }

                return array (  '_controller' => 'dsw\\EvalBundle\\Controller\\EvaluationController::startAction',  '_route' => 'dsw_eval_start',);
            }

            // dsw_eval_intro
            if ('/eval/intro' === $pathinfo) {
                return array (  '_controller' => 'dsw\\EvalBundle\\Controller\\EvaluationController::introAction',  '_route' => 'dsw_eval_intro',);
            }

            // dsw_eval_theme
            if (0 === strpos($pathinfo, '/eval/theme') && preg_match('#^/eval/theme/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dsw_eval_theme')), array (  '_controller' => 'dsw\\EvalBundle\\Controller\\EnregistrementController::newAction',));
            }

            // dsw_eval_text
            if ('/eval/text' === $pathinfo) {
                return array (  '_controller' => 'dsw\\EvalBundle\\Controller\\TexteController::newAction',  '_route' => 'dsw_eval_text',);
            }

            // dsw_eval_fin
            if (preg_match('#^/eval/(?P<id>\\d+)/fin$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dsw_eval_fin')), array (  '_controller' => 'dsw\\EvalBundle\\Controller\\EvaluationController::finAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/espace')) {
            // dsw_ampli_addEspace
            if ('/espace/add' === $pathinfo) {
                return array (  '_controller' => 'dsw\\AmpliBundle\\Controller\\EspaceController::addAction',  '_route' => 'dsw_ampli_addEspace',);
            }

            // dsw_ampli_vote
            if (preg_match('#^/espace/(?P<id>[^/]++)/ideation$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_dsw_ampli_vote;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dsw_ampli_vote')), array (  '_controller' => 'dsw\\AmpliBundle\\Controller\\EspaceController::voteAction',));
            }
            not_dsw_ampli_vote:

            // dsw_ampli_vote_categorie
            if (preg_match('#^/espace/(?P<id>[^/]++)/ideation/(?P<categorie>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_dsw_ampli_vote_categorie;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dsw_ampli_vote_categorie')), array (  '_controller' => 'dsw\\AmpliBundle\\Controller\\EspaceController::voteAction',));
            }
            not_dsw_ampli_vote_categorie:

            // dsw_ampli_develop
            if (preg_match('#^/espace/(?P<id>[^/]++)/developper$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dsw_ampli_develop')), array (  '_controller' => 'dsw\\AmpliBundle\\Controller\\EspaceController::developAction',));
            }

            // dsw_ampli_propulse
            if (preg_match('#^/espace/(?P<id>[^/]++)/propulser$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dsw_ampli_propulse')), array (  '_controller' => 'dsw\\AmpliBundle\\Controller\\EspaceController::propulseAction',));
            }

            // dsw_ampli_selectionner
            if (preg_match('#^/espace/(?P<id>[^/]++)/selectionner$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dsw_ampli_selectionner')), array (  '_controller' => 'dsw\\AmpliBundle\\Controller\\EspaceController::selectionnerAction',));
            }

            // dsw_ampli_espace_animateur
            if (preg_match('#^/espace/(?P<id>[^/]++)/animateur$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dsw_ampli_espace_animateur')), array (  '_controller' => 'dsw\\AmpliBundle\\Controller\\EspaceController::animateurAction',));
            }

            // dsw_ampli_viewEspace
            if (preg_match('#^/espace/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dsw_ampli_viewEspace')), array (  '_controller' => 'dsw\\AmpliBundle\\Controller\\EspaceController::viewAction',));
            }

            // dsw_ampli_espace_demo
            if ('/espace/demo' === $pathinfo) {
                return array (  '_controller' => 'dsw\\AmpliBundle\\Controller\\EspaceController::demoAction',  '_route' => 'dsw_ampli_espace_demo',);
            }

        }

        elseif (0 === strpos($pathinfo, '/feedback')) {
            if (0 === strpos($pathinfo, '/feedback/seance')) {
                // feedback_seance_index
                if ('/feedback/seance' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_feedback_seance_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'feedback_seance_index');
                    }

                    return array (  '_controller' => 'dsw\\FeedbackBundle\\Controller\\SeanceController::indexAction',  '_route' => 'feedback_seance_index',);
                }
                not_feedback_seance_index:

                // feedback_seance_show
                if (preg_match('#^/feedback/seance/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_feedback_seance_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'feedback_seance_show')), array (  '_controller' => 'dsw\\FeedbackBundle\\Controller\\SeanceController::showAction',));
                }
                not_feedback_seance_show:

                // feedback_seance_new
                if ('/feedback/seance/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_feedback_seance_new;
                    }

                    return array (  '_controller' => 'dsw\\FeedbackBundle\\Controller\\SeanceController::newAction',  '_route' => 'feedback_seance_new',);
                }
                not_feedback_seance_new:

                // feedback_seance_edit
                if (preg_match('#^/feedback/seance/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_feedback_seance_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'feedback_seance_edit')), array (  '_controller' => 'dsw\\FeedbackBundle\\Controller\\SeanceController::editAction',));
                }
                not_feedback_seance_edit:

                // feedback_seance_delete
                if (preg_match('#^/feedback/seance/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_feedback_seance_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'feedback_seance_delete')), array (  '_controller' => 'dsw\\FeedbackBundle\\Controller\\SeanceController::deleteAction',));
                }
                not_feedback_seance_delete:

            }

            elseif (0 === strpos($pathinfo, '/feedback/question')) {
                // feedback_question_index
                if ('/feedback/question' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_feedback_question_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'feedback_question_index');
                    }

                    return array (  '_controller' => 'dsw\\FeedbackBundle\\Controller\\QuestionController::indexAction',  '_route' => 'feedback_question_index',);
                }
                not_feedback_question_index:

                // feedback_question_show
                if (preg_match('#^/feedback/question/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_feedback_question_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'feedback_question_show')), array (  '_controller' => 'dsw\\FeedbackBundle\\Controller\\QuestionController::showAction',));
                }
                not_feedback_question_show:

                // feedback_question_new
                if ('/feedback/question/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_feedback_question_new;
                    }

                    return array (  '_controller' => 'dsw\\FeedbackBundle\\Controller\\QuestionController::newAction',  '_route' => 'feedback_question_new',);
                }
                not_feedback_question_new:

                // feedback_question_edit
                if (preg_match('#^/feedback/question/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_feedback_question_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'feedback_question_edit')), array (  '_controller' => 'dsw\\FeedbackBundle\\Controller\\QuestionController::editAction',));
                }
                not_feedback_question_edit:

                // feedback_question_delete
                if (preg_match('#^/feedback/question/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_feedback_question_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'feedback_question_delete')), array (  '_controller' => 'dsw\\FeedbackBundle\\Controller\\QuestionController::deleteAction',));
                }
                not_feedback_question_delete:

            }

            // dsw_feedback_homepage
            if ('/feedback' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'dsw_feedback_homepage');
                }

                return array (  '_controller' => 'dsw\\FeedbackBundle\\Controller\\DefaultController::indexAction',  '_route' => 'dsw_feedback_homepage',);
            }

            // dsw_feedback_start
            if (preg_match('#^/feedback/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dsw_feedback_start')), array (  '_controller' => 'dsw\\FeedbackBundle\\Controller\\SeanceController::startAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/quiz')) {
            if (0 === strpos($pathinfo, '/quiz/a')) {
                if (0 === strpos($pathinfo, '/quiz/answer')) {
                    // quiz_answer_index
                    if ('/quiz/answer' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_quiz_answer_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($rawPathinfo.'/', 'quiz_answer_index');
                        }

                        return array (  '_controller' => 'dsw\\QuizBundle\\Controller\\AnswerController::indexAction',  '_route' => 'quiz_answer_index',);
                    }
                    not_quiz_answer_index:

                    // quiz_answer_show
                    if (preg_match('#^/quiz/answer/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_quiz_answer_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'quiz_answer_show')), array (  '_controller' => 'dsw\\QuizBundle\\Controller\\AnswerController::showAction',));
                    }
                    not_quiz_answer_show:

                    // quiz_answer_new
                    if ('/quiz/answer/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_quiz_answer_new;
                        }

                        return array (  '_controller' => 'dsw\\QuizBundle\\Controller\\AnswerController::newAction',  '_route' => 'quiz_answer_new',);
                    }
                    not_quiz_answer_new:

                    // quiz_answer_edit
                    if (preg_match('#^/quiz/answer/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_quiz_answer_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'quiz_answer_edit')), array (  '_controller' => 'dsw\\QuizBundle\\Controller\\AnswerController::editAction',));
                    }
                    not_quiz_answer_edit:

                    // quiz_answer_delete
                    if (preg_match('#^/quiz/answer/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_quiz_answer_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'quiz_answer_delete')), array (  '_controller' => 'dsw\\QuizBundle\\Controller\\AnswerController::deleteAction',));
                    }
                    not_quiz_answer_delete:

                }

                elseif (0 === strpos($pathinfo, '/quiz/attempt')) {
                    // quiz_attempt_index
                    if ('/quiz/attempt' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_quiz_attempt_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($rawPathinfo.'/', 'quiz_attempt_index');
                        }

                        return array (  '_controller' => 'dsw\\QuizBundle\\Controller\\AttemptController::indexAction',  '_route' => 'quiz_attempt_index',);
                    }
                    not_quiz_attempt_index:

                    // quiz_attempt_show
                    if (preg_match('#^/quiz/attempt/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_quiz_attempt_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'quiz_attempt_show')), array (  '_controller' => 'dsw\\QuizBundle\\Controller\\AttemptController::showAction',));
                    }
                    not_quiz_attempt_show:

                    // quiz_attempt_new
                    if ('/quiz/attempt/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_quiz_attempt_new;
                        }

                        return array (  '_controller' => 'dsw\\QuizBundle\\Controller\\AttemptController::newAction',  '_route' => 'quiz_attempt_new',);
                    }
                    not_quiz_attempt_new:

                    // quiz_attempt_edit
                    if (preg_match('#^/quiz/attempt/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_quiz_attempt_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'quiz_attempt_edit')), array (  '_controller' => 'dsw\\QuizBundle\\Controller\\AttemptController::editAction',));
                    }
                    not_quiz_attempt_edit:

                    // quiz_attempt_delete
                    if (preg_match('#^/quiz/attempt/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_quiz_attempt_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'quiz_attempt_delete')), array (  '_controller' => 'dsw\\QuizBundle\\Controller\\AttemptController::deleteAction',));
                    }
                    not_quiz_attempt_delete:

                }

                elseif (0 === strpos($pathinfo, '/quiz/admin/config')) {
                    // quiz_config_index
                    if ('/quiz/admin/config' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_quiz_config_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($rawPathinfo.'/', 'quiz_config_index');
                        }

                        return array (  '_controller' => 'dsw\\QuizBundle\\Controller\\ConfigController::indexAction',  '_route' => 'quiz_config_index',);
                    }
                    not_quiz_config_index:

                    // quiz_config_show
                    if (preg_match('#^/quiz/admin/config/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_quiz_config_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'quiz_config_show')), array (  '_controller' => 'dsw\\QuizBundle\\Controller\\ConfigController::showAction',));
                    }
                    not_quiz_config_show:

                    // quiz_config_new
                    if ('/quiz/admin/config/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_quiz_config_new;
                        }

                        return array (  '_controller' => 'dsw\\QuizBundle\\Controller\\ConfigController::newAction',  '_route' => 'quiz_config_new',);
                    }
                    not_quiz_config_new:

                    // quiz_config_edit
                    if (preg_match('#^/quiz/admin/config/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_quiz_config_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'quiz_config_edit')), array (  '_controller' => 'dsw\\QuizBundle\\Controller\\ConfigController::editAction',));
                    }
                    not_quiz_config_edit:

                    // quiz_config_delete
                    if (preg_match('#^/quiz/admin/config/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_quiz_config_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'quiz_config_delete')), array (  '_controller' => 'dsw\\QuizBundle\\Controller\\ConfigController::deleteAction',));
                    }
                    not_quiz_config_delete:

                }

            }

            elseif (0 === strpos($pathinfo, '/quiz/question')) {
                // quiz_question_index
                if ('/quiz/question' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_quiz_question_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'quiz_question_index');
                    }

                    return array (  '_controller' => 'dsw\\QuizBundle\\Controller\\QuestionController::indexAction',  '_route' => 'quiz_question_index',);
                }
                not_quiz_question_index:

                // quiz_question_show
                if (preg_match('#^/quiz/question/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_quiz_question_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'quiz_question_show')), array (  '_controller' => 'dsw\\QuizBundle\\Controller\\QuestionController::showAction',));
                }
                not_quiz_question_show:

                // quiz_question_new
                if ('/quiz/question/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_quiz_question_new;
                    }

                    return array (  '_controller' => 'dsw\\QuizBundle\\Controller\\QuestionController::newAction',  '_route' => 'quiz_question_new',);
                }
                not_quiz_question_new:

                // quiz_question_edit
                if (preg_match('#^/quiz/question/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_quiz_question_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'quiz_question_edit')), array (  '_controller' => 'dsw\\QuizBundle\\Controller\\QuestionController::editAction',));
                }
                not_quiz_question_edit:

                // quiz_question_delete
                if (preg_match('#^/quiz/question/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_quiz_question_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'quiz_question_delete')), array (  '_controller' => 'dsw\\QuizBundle\\Controller\\QuestionController::deleteAction',));
                }
                not_quiz_question_delete:

                // quiz_question_questionnaire_new
                if (preg_match('#^/quiz/question/(?P<id>[^/]++)/new$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_quiz_question_questionnaire_new;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'quiz_question_questionnaire_new')), array (  '_controller' => 'dsw\\QuizBundle\\Controller\\QuestionController::newByQuestionnaireAction',));
                }
                not_quiz_question_questionnaire_new:

                if (0 === strpos($pathinfo, '/quiz/questionnaire')) {
                    // quiz_questionnaire_index
                    if ('/quiz/questionnaire' === $trimmedPathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_quiz_questionnaire_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($rawPathinfo.'/', 'quiz_questionnaire_index');
                        }

                        return array (  '_controller' => 'dsw\\QuizBundle\\Controller\\QuestionnaireController::indexAction',  '_route' => 'quiz_questionnaire_index',);
                    }
                    not_quiz_questionnaire_index:

                    // quiz_questionnaire_show
                    if (preg_match('#^/quiz/questionnaire/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_quiz_questionnaire_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'quiz_questionnaire_show')), array (  '_controller' => 'dsw\\QuizBundle\\Controller\\QuestionnaireController::showAction',));
                    }
                    not_quiz_questionnaire_show:

                    // quiz_questionnaire_new
                    if ('/quiz/questionnaire/new' === $pathinfo) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_quiz_questionnaire_new;
                        }

                        return array (  '_controller' => 'dsw\\QuizBundle\\Controller\\QuestionnaireController::newAction',  '_route' => 'quiz_questionnaire_new',);
                    }
                    not_quiz_questionnaire_new:

                    // quiz_questionnaire_edit
                    if (preg_match('#^/quiz/questionnaire/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_quiz_questionnaire_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'quiz_questionnaire_edit')), array (  '_controller' => 'dsw\\QuizBundle\\Controller\\QuestionnaireController::editAction',));
                    }
                    not_quiz_questionnaire_edit:

                    // quiz_questionnaire_delete
                    if (preg_match('#^/quiz/questionnaire/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ('DELETE' !== $canonicalMethod) {
                            $allow[] = 'DELETE';
                            goto not_quiz_questionnaire_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'quiz_questionnaire_delete')), array (  '_controller' => 'dsw\\QuizBundle\\Controller\\QuestionnaireController::deleteAction',));
                    }
                    not_quiz_questionnaire_delete:

                }

            }

            // dsw_quiz_home
            if ('/quiz' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'dsw_quiz_home');
                }

                return array (  '_controller' => 'dsw\\QuizBundle\\Controller\\QuestionnaireController::landingAction',  '_route' => 'dsw_quiz_home',);
            }

            // dsw_quiz_intro
            if (preg_match('#^/quiz/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dsw_quiz_intro')), array (  '_controller' => 'dsw\\QuizBundle\\Controller\\QuestionnaireController::introAction',));
            }

            // dsw_quiz_question_play
            if (0 === strpos($pathinfo, '/quiz/question') && preg_match('#^/quiz/question/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dsw_quiz_question_play')), array (  '_controller' => 'dsw\\QuizBundle\\Controller\\AttemptController::playAction',));
            }

            // dsw_quiz_bilan
            if (preg_match('#^/quiz/(?P<id>[^/]++)/bilan$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dsw_quiz_bilan')), array (  '_controller' => 'dsw\\QuizBundle\\Controller\\QuestionnaireController::bilanAction',));
            }

            // dsw_quiz_admin
            if ('/quiz/admin' === $pathinfo) {
                return array (  '_controller' => 'dsw\\QuizBundle\\Controller\\QuestionnaireController::indexAction',  '_route' => 'dsw_quiz_admin',);
            }

        }

        elseif (0 === strpos($pathinfo, '/user')) {
            // dsw_user_index
            if ('/user' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'dsw_user_index');
                }

                return array (  '_controller' => 'dsw\\UserBundle\\Controller\\UserController::indexAction',  '_route' => 'dsw_user_index',);
            }

            // dsw_user_view
            if (preg_match('#^/user/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dsw_user_view')), array (  '_controller' => 'dsw\\UserBundle\\Controller\\UserController::viewAction',));
            }

            // dsw_user_edit
            if (0 === strpos($pathinfo, '/user/edit') && preg_match('#^/user/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dsw_user_edit')), array (  '_controller' => 'dsw\\UserBundle\\Controller\\UserController::editAction',));
            }

            // dsw_user_delete
            if (0 === strpos($pathinfo, '/user/delete') && preg_match('#^/user/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dsw_user_delete')), array (  '_controller' => 'dsw\\UserBundle\\Controller\\UserController::deleteAction',));
            }

            // dsw_user_email
            if ('/user/login/email' === $pathinfo) {
                return array (  '_controller' => 'dsw\\UserBundle\\Controller\\UserController::emailAction',  '_route' => 'dsw_user_email',);
            }

        }

        // dsw_ampli_landing
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'dsw_ampli_landing');
            }

            return array (  '_controller' => 'dsw\\AmpliBundle\\Controller\\EspaceController::landingAction',  '_route' => 'dsw_ampli_landing',);
        }

        // dsw_ampli_homepage
        if (0 === strpos($pathinfo, '/home') && preg_match('#^/home/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dsw_ampli_homepage')), array (  '_controller' => 'dsw\\AmpliBundle\\Controller\\EspaceController::homeAction',));
        }

        if (0 === strpos($pathinfo, '/idee')) {
            // ampli_idee_public
            if (preg_match('#^/idee/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_ampli_idee_public;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ampli_idee_public')), array (  '_controller' => 'dsw\\AmpliBundle\\Controller\\IdeeController::publicAction',));
            }
            not_ampli_idee_public:

            // ampli_idee_show
            if (preg_match('#^/idee/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_ampli_idee_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ampli_idee_show')), array (  '_controller' => 'dsw\\AmpliBundle\\Controller\\IdeeController::showAction',));
            }
            not_ampli_idee_show:

            // ampli_idee_new
            if (0 === strpos($pathinfo, '/idee/new') && preg_match('#^/idee/new/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_ampli_idee_new;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ampli_idee_new')), array (  '_controller' => 'dsw\\AmpliBundle\\Controller\\IdeeController::newAction',));
            }
            not_ampli_idee_new:

            // ampli_idee_edit
            if (preg_match('#^/idee/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_ampli_idee_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ampli_idee_edit')), array (  '_controller' => 'dsw\\AmpliBundle\\Controller\\IdeeController::editAction',));
            }
            not_ampli_idee_edit:

            // ampli_idee_delete
            if (preg_match('#^/idee/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'DELETE'));
                    goto not_ampli_idee_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ampli_idee_delete')), array (  '_controller' => 'dsw\\AmpliBundle\\Controller\\IdeeController::deleteAction',));
            }
            not_ampli_idee_delete:

            // ampli_idee_print
            if (preg_match('#^/idee/(?P<id>[^/]++)/print$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_ampli_idee_print;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ampli_idee_print')), array (  '_controller' => 'dsw\\AmpliBundle\\Controller\\IdeeController::printAction',));
            }
            not_ampli_idee_print:

            // ampli_idee_edit_user
            if (preg_match('#^/idee/(?P<id>[^/]++)/edit_user$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_ampli_idee_edit_user;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ampli_idee_edit_user')), array (  '_controller' => 'dsw\\AmpliBundle\\Controller\\IdeeController::edit_userAction',));
            }
            not_ampli_idee_edit_user:

            // ampli_idee_delete_user
            if (preg_match('#^/idee/(?P<id>[^/]++)/delete_user$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'DELETE'));
                    goto not_ampli_idee_delete_user;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ampli_idee_delete_user')), array (  '_controller' => 'dsw\\AmpliBundle\\Controller\\IdeeController::delete_userAction',));
            }
            not_ampli_idee_delete_user:

            // ampli_idee_public_connect
            if (0 === strpos($pathinfo, '/idee/connect') && preg_match('#^/idee/connect/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_ampli_idee_public_connect;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ampli_idee_public_connect')), array (  '_controller' => 'dsw\\AmpliBundle\\Controller\\IdeeController::connectAction',));
            }
            not_ampli_idee_public_connect:

            if (0 === strpos($pathinfo, '/idee/coeur')) {
                // dsw_ampli_idee_coeur_toggle
                if (0 === strpos($pathinfo, '/idee/coeur/toggle') && preg_match('#^/idee/coeur/toggle/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dsw_ampli_idee_coeur_toggle')), array (  '_controller' => 'dsw\\AmpliBundle\\Controller\\CoeurController::toggleAction',));
                }

                // dsw_ampli_idee_coeur_add
                if (0 === strpos($pathinfo, '/idee/coeur/add') && preg_match('#^/idee/coeur/add/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dsw_ampli_idee_coeur_add')), array (  '_controller' => 'dsw\\AmpliBundle\\Controller\\CoeurController::addAction',));
                }

                // dsw_ampli_idee_coeur_remove
                if (0 === strpos($pathinfo, '/idee/coeur/remove') && preg_match('#^/idee/coeur/remove/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dsw_ampli_idee_coeur_remove')), array (  '_controller' => 'dsw\\AmpliBundle\\Controller\\CoeurController::removeAction',));
                }

            }

            // ampli_idee_new_categorie
            if (0 === strpos($pathinfo, '/idee/new') && preg_match('#^/idee/new/(?P<id>[^/]++)/(?P<categorie>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_ampli_idee_new_categorie;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ampli_idee_new_categorie')), array (  '_controller' => 'dsw\\AmpliBundle\\Controller\\IdeeController::newAction',));
            }
            not_ampli_idee_new_categorie:

            // dsw_ampli_idee_selection_toggle
            if (0 === strpos($pathinfo, '/idee/selection/toggle') && preg_match('#^/idee/selection/toggle/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dsw_ampli_idee_selection_toggle')), array (  '_controller' => 'dsw\\AmpliBundle\\Controller\\IdeeController::toggleAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/categorie')) {
            // ampli_categorie_index
            if ('/categorie' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_ampli_categorie_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'ampli_categorie_index');
                }

                return array (  '_controller' => 'dsw\\AmpliBundle\\Controller\\CategorieController::indexAction',  '_route' => 'ampli_categorie_index',);
            }
            not_ampli_categorie_index:

            // ampli_categorie_show
            if (preg_match('#^/categorie/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_ampli_categorie_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ampli_categorie_show')), array (  '_controller' => 'dsw\\AmpliBundle\\Controller\\CategorieController::showAction',));
            }
            not_ampli_categorie_show:

            // ampli_categorie_new
            if ('/categorie/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_ampli_categorie_new;
                }

                return array (  '_controller' => 'dsw\\AmpliBundle\\Controller\\CategorieController::newAction',  '_route' => 'ampli_categorie_new',);
            }
            not_ampli_categorie_new:

            // ampli_categorie_edit
            if (preg_match('#^/categorie/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_ampli_categorie_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ampli_categorie_edit')), array (  '_controller' => 'dsw\\AmpliBundle\\Controller\\CategorieController::editAction',));
            }
            not_ampli_categorie_edit:

            // ampli_categorie_delete
            if (preg_match('#^/categorie/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_ampli_categorie_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ampli_categorie_delete')), array (  '_controller' => 'dsw\\AmpliBundle\\Controller\\CategorieController::deleteAction',));
            }
            not_ampli_categorie_delete:

        }

        elseif (0 === strpos($pathinfo, '/commentaire')) {
            // commentaire_index
            if ('/commentaire' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_commentaire_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'commentaire_index');
                }

                return array (  '_controller' => 'dsw\\AmpliBundle\\Controller\\CommentaireController::indexAction',  '_route' => 'commentaire_index',);
            }
            not_commentaire_index:

            // commentaire_show
            if (preg_match('#^/commentaire/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_commentaire_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentaire_show')), array (  '_controller' => 'dsw\\AmpliBundle\\Controller\\CommentaireController::showAction',));
            }
            not_commentaire_show:

            // commentaire_new
            if ('/commentaire/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_commentaire_new;
                }

                return array (  '_controller' => 'dsw\\AmpliBundle\\Controller\\CommentaireController::newAction',  '_route' => 'commentaire_new',);
            }
            not_commentaire_new:

            // commentaire_edit
            if (preg_match('#^/commentaire/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_commentaire_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentaire_edit')), array (  '_controller' => 'dsw\\AmpliBundle\\Controller\\CommentaireController::editAction',));
            }
            not_commentaire_edit:

            // commentaire_delete
            if (preg_match('#^/commentaire/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'DELETE'));
                    goto not_commentaire_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'commentaire_delete')), array (  '_controller' => 'dsw\\AmpliBundle\\Controller\\CommentaireController::deleteAction',));
            }
            not_commentaire_delete:

        }

        // dsw_ampli_special
        if (preg_match('#^/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dsw_ampli_special')), array (  '_controller' => 'dsw\\AmpliBundle\\Controller\\EspaceController::specialAction',));
        }

        // dsw_ampli_edf
        if (0 === strpos($pathinfo, '/edf') && preg_match('#^/edf/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dsw_ampli_edf')), array (  '_controller' => 'dsw\\AmpliBundle\\Controller\\EspaceController::homeAction',));
        }

        if (0 === strpos($pathinfo, '/quiz/login')) {
            // security_login_quiz
            if ('/quiz/login' === $pathinfo) {
                return array (  '_controller' => 'dsw\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'security_login_quiz',);
            }

            // security_check_quiz
            if ('/quiz/login_check' === $pathinfo) {
                return array('_route' => 'security_check_quiz');
            }

        }

        // login_admin
        if ('/admin/login' === $pathinfo) {
            return array (  '_controller' => 'dsw\\UserBundle\\Controller\\SecurityController::loginAdminAction',  '_route' => 'login_admin',);
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
