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

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/form')) {
            if (0 === strpos($pathinfo, '/formAssets')) {
                // app_formassets_new
                if ($pathinfo === '/formAssets') {
                    return array (  '_controller' => 'AppBundle\\Controller\\FormAssetsController::newAction',  '_route' => 'app_formassets_new',);
                }

                // task_success2
                if ($pathinfo === '/formAssets/success') {
                    return array (  '_controller' => 'AppBundle\\Controller\\FormAssetsController::taskSuccess2',  '_route' => 'task_success2',);
                }

                // task_new2
                if ($pathinfo === '/formAssets/new') {
                    return array (  '_controller' => 'AppBundle\\Controller\\FormAssetsController::taskNew2',  '_route' => 'task_new2',);
                }

            }

            if (0 === strpos($pathinfo, '/formC')) {
                // app_form_new
                if ($pathinfo === '/formC') {
                    return array (  '_controller' => 'AppBundle\\Controller\\FormController::newAction',  '_route' => 'app_form_new',);
                }

                // task_new
                if ($pathinfo === '/formC/new') {
                    return array (  '_controller' => 'AppBundle\\Controller\\FormController::taskNew',  '_route' => 'task_new',);
                }

                // task_success
                if ($pathinfo === '/formC/success') {
                    return array (  '_controller' => 'AppBundle\\Controller\\FormController::taskSuccess',  '_route' => 'task_success',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/lucky/number')) {
            // app_lucky_number
            if ($pathinfo === '/lucky/number') {
                return array (  '_controller' => 'AppBundle\\Controller\\LuckyController::numberAction',  '_route' => 'app_lucky_number',);
            }

            // app_lucky_numbercount
            if (preg_match('#^/lucky/number/(?P<count>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_lucky_numbercount')), array (  '_controller' => 'AppBundle\\Controller\\LuckyController::numberCountAction',));
            }

        }

        // app_lucky_apinumber
        if ($pathinfo === '/api/lucky/number') {
            return array (  '_controller' => 'AppBundle\\Controller\\LuckyController::apiNumberAction',  '_route' => 'app_lucky_apinumber',);
        }

        if (0 === strpos($pathinfo, '/lucky/number')) {
            // app_lucky_numbertemp
            if (0 === strpos($pathinfo, '/lucky/numberTemp') && preg_match('#^/lucky/numberTemp/(?P<count>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_lucky_numbertemp')), array (  '_controller' => 'AppBundle\\Controller\\LuckyController::numberTempAction',));
            }

            // app_lucky_numberrender
            if (0 === strpos($pathinfo, '/lucky/numberRender') && preg_match('#^/lucky/numberRender/(?P<count>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_lucky_numberrender')), array (  '_controller' => 'AppBundle\\Controller\\LuckyController::numberRenderAction',));
            }

        }

        if (0 === strpos($pathinfo, '/formTemplateController')) {
            // formTemplateController
            if ($pathinfo === '/formTemplateController') {
                return array (  '_controller' => 'AppBundle\\Controller\\formTemplateController::newAction',  '_route' => 'formTemplateController',);
            }

            if (0 === strpos($pathinfo, '/formTemplateController/admin_post_')) {
                // admin_post_show
                if ($pathinfo === '/formTemplateController/admin_post_show') {
                    return array (  '_controller' => 'AppBundle\\Controller\\formTemplateController::showAction',  '_route' => 'admin_post_show',);
                }

                // admin_post_editar
                if ($pathinfo === '/formTemplateController/admin_post_editar') {
                    return array (  '_controller' => 'AppBundle\\Controller\\formTemplateController::editarAction',  '_route' => 'admin_post_editar',);
                }

                // admin_post_update
                if ($pathinfo === '/formTemplateController/admin_post_update') {
                    return array (  '_controller' => 'AppBundle\\Controller\\formTemplateController::updateAction',  '_route' => 'admin_post_update',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/emailController')) {
            // email_post_index
            if ($pathinfo === '/emailController') {
                return array (  '_controller' => 'AppBundle\\Controller\\emailController::indexAction',  '_route' => 'email_post_index',);
            }

            // email_post_send
            if ($pathinfo === '/emailController/email_post_send') {
                return array (  '_controller' => 'AppBundle\\Controller\\emailController::sendAction',  '_route' => 'email_post_send',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
