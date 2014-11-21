<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
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

        // to_do_list_list
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'to_do_list_list');
            }

            return array (  '_controller' => 'Laborka\\ToDoListBundle\\Controller\\ToDoListController::listAction',  '_route' => 'to_do_list_list',);
        }

        // to_do_list_add
        if (rtrim($pathinfo, '/') === '/add') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'to_do_list_add');
            }

            return array (  '_controller' => 'Laborka\\ToDoListBundle\\Controller\\ToDoListController::addAction',  '_route' => 'to_do_list_add',);
        }

        // to_do_list_edit
        if (0 === strpos($pathinfo, '/edit') && preg_match('#^/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'to_do_list_edit')), array (  '_controller' => 'Laborka\\ToDoListBundle\\Controller\\ToDoListController::editAction',));
        }

        // to_do_list_delete
        if (0 === strpos($pathinfo, '/delete') && preg_match('#^/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'to_do_list_delete')), array (  '_controller' => 'Laborka\\ToDoListBundle\\Controller\\ToDoListController::deleteAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
