<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
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

        }

        // votes_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'votes_homepage')), array (  '_controller' => 'OKW\\VotesBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // candidate_homepage
            if (0 === strpos($pathinfo, '/admin/candidate/hello') && preg_match('#^/admin/candidate/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'candidate_homepage')), array (  '_controller' => 'Admin\\CandidateBundle\\Controller\\DefaultController::indexAction',));
            }

            // party_homepage
            if (0 === strpos($pathinfo, '/admin/party/hello') && preg_match('#^/admin/party/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'party_homepage')), array (  '_controller' => 'Admin\\PartyBundle\\Controller\\DefaultController::indexAction',));
            }

            // elections_homepage
            if (0 === strpos($pathinfo, '/admin/elections/hello') && preg_match('#^/admin/elections/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'elections_homepage')), array (  '_controller' => 'Admin\\ElectionsBundle\\Controller\\DefaultController::indexAction',));
            }

            // constituency_homepage
            if (0 === strpos($pathinfo, '/admin/constituency/hello') && preg_match('#^/admin/constituency/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'constituency_homepage')), array (  '_controller' => 'Admin\\ConstituencyBundle\\Controller\\DefaultController::indexAction',));
            }

            if (0 === strpos($pathinfo, '/admin/district')) {
                // district_list
                if (rtrim($pathinfo, '/') === '/admin/district') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'district_list');
                    }

                    return array (  '_controller' => 'Admin\\DistrictBundle\\Controller\\DistrictController::indexAction',  '_route' => 'district_list',);
                }

                // district_show
                if (preg_match('#^/admin/district/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'district_show')), array (  '_controller' => 'Admin\\DistrictBundle\\Controller\\DistrictController::showAction',));
                }

                // district_new
                if ($pathinfo === '/admin/district/new') {
                    return array (  '_controller' => 'Admin\\DistrictBundle\\Controller\\DistrictController::newAction',  '_route' => 'district_new',);
                }

                // district_create
                if ($pathinfo === '/admin/district/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_district_create;
                    }

                    return array (  '_controller' => 'Admin\\DistrictBundle\\Controller\\DistrictController::createAction',  '_route' => 'district_create',);
                }
                not_district_create:

                // district_edit
                if (preg_match('#^/admin/district/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'district_edit')), array (  '_controller' => 'Admin\\DistrictBundle\\Controller\\DistrictController::editAction',));
                }

                // district_update
                if (preg_match('#^/admin/district/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_district_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'district_update')), array (  '_controller' => 'Admin\\DistrictBundle\\Controller\\DistrictController::updateAction',));
                }
                not_district_update:

                // district_delete
                if (preg_match('#^/admin/district/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_district_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'district_delete')), array (  '_controller' => 'Admin\\DistrictBundle\\Controller\\DistrictController::deleteAction',));
                }
                not_district_delete:

            }

            if (0 === strpos($pathinfo, '/admin/state')) {
                // state_list
                if (rtrim($pathinfo, '/') === '/admin/state') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'state_list');
                    }

                    return array (  '_controller' => 'Admin\\StateBundle\\Controller\\StateController::indexAction',  '_route' => 'state_list',);
                }

                // state_show
                if (preg_match('#^/admin/state/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'state_show')), array (  '_controller' => 'Admin\\StateBundle\\Controller\\StateController::showAction',));
                }

                // state_new
                if ($pathinfo === '/admin/state/new') {
                    return array (  '_controller' => 'Admin\\StateBundle\\Controller\\StateController::newAction',  '_route' => 'state_new',);
                }

                // state_create
                if ($pathinfo === '/admin/state/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_state_create;
                    }

                    return array (  '_controller' => 'Admin\\StateBundle\\Controller\\StateController::createAction',  '_route' => 'state_create',);
                }
                not_state_create:

                // state_edit
                if (preg_match('#^/admin/state/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'state_edit')), array (  '_controller' => 'Admin\\StateBundle\\Controller\\StateController::editAction',));
                }

                // state_update
                if (preg_match('#^/admin/state/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_state_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'state_update')), array (  '_controller' => 'Admin\\StateBundle\\Controller\\StateController::updateAction',));
                }
                not_state_update:

                // state_delete
                if (preg_match('#^/admin/state/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_state_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'state_delete')), array (  '_controller' => 'Admin\\StateBundle\\Controller\\StateController::deleteAction',));
                }
                not_state_delete:

            }

            // user_homepage
            if (0 === strpos($pathinfo, '/admin/user/hello') && preg_match('#^/admin/user/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_homepage')), array (  '_controller' => 'Admin\\UserBundle\\Controller\\DefaultController::indexAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
