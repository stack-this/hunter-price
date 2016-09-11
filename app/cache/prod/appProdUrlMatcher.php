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

        if (0 === strpos($pathinfo, '/api')) {
            if (0 === strpos($pathinfo, '/api/product')) {
                // api_product_getall
                if (rtrim($pathinfo, '/') === '/api/product') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_api_product_getall;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'api_product_getall');
                    }

                    return array (  '_controller' => 'HunterBundle\\Controller\\ApiController::productGetAllAction',  '_route' => 'api_product_getall',);
                }
                not_api_product_getall:

                // api_product_getone
                if (preg_match('#^/api/product/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_api_product_getone;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_product_getone')), array (  '_controller' => 'HunterBundle\\Controller\\ApiController::productGetOneAction',));
                }
                not_api_product_getone:

                // api_product_post
                if ($pathinfo === '/api/product/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_api_product_post;
                    }

                    return array (  '_controller' => 'HunterBundle\\Controller\\ApiController::productPostAction',  '_route' => 'api_product_post',);
                }
                not_api_product_post:

            }

            if (0 === strpos($pathinfo, '/api/store')) {
                // api_store_showall
                if (rtrim($pathinfo, '/') === '/api/store') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_api_store_showall;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'api_store_showall');
                    }

                    return array (  '_controller' => 'HunterBundle\\Controller\\ApiController::storeShowAllAction',  '_route' => 'api_store_showall',);
                }
                not_api_store_showall:

                // api_store_showone
                if (preg_match('#^/api/store/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_api_store_showone;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_store_showone')), array (  '_controller' => 'HunterBundle\\Controller\\ApiController::storeShowOneAction',));
                }
                not_api_store_showone:

            }

            if (0 === strpos($pathinfo, '/api/category')) {
                // api_category_showall
                if (rtrim($pathinfo, '/') === '/api/category') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_api_category_showall;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'api_category_showall');
                    }

                    return array (  '_controller' => 'HunterBundle\\Controller\\ApiController::categoryShowAllAction',  '_route' => 'api_category_showall',);
                }
                not_api_category_showall:

                // api_category_showone
                if (preg_match('#^/api/category/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_api_category_showone;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'api_category_showone')), array (  '_controller' => 'HunterBundle\\Controller\\ApiController::categoryShowOneAction',));
                }
                not_api_category_showone:

                // api_category_post
                if ($pathinfo === '/api/category/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_api_category_post;
                    }

                    return array (  '_controller' => 'HunterBundle\\Controller\\ApiController::categoryPostAction',  '_route' => 'api_category_post',);
                }
                not_api_category_post:

            }

            // api_product_get
            if (rtrim($pathinfo, '/') === '/api/product/get') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'api_product_get');
                }

                return array (  '_controller' => 'HunterBundle\\Controller\\ApiController::categoryGetAction',  '_route' => 'api_product_get',);
            }

        }

        if (0 === strpos($pathinfo, '/category')) {
            // category_index
            if (rtrim($pathinfo, '/') === '/category') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_category_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'category_index');
                }

                return array (  '_controller' => 'HunterBundle\\Controller\\CategoryController::indexAction',  '_route' => 'category_index',);
            }
            not_category_index:

            // category_new
            if ($pathinfo === '/category/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_category_new;
                }

                return array (  '_controller' => 'HunterBundle\\Controller\\CategoryController::newAction',  '_route' => 'category_new',);
            }
            not_category_new:

            // category_show
            if (preg_match('#^/category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_category_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_show')), array (  '_controller' => 'HunterBundle\\Controller\\CategoryController::showAction',));
            }
            not_category_show:

            // category_edit
            if (preg_match('#^/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_category_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_edit')), array (  '_controller' => 'HunterBundle\\Controller\\CategoryController::editAction',));
            }
            not_category_edit:

            // category_delete
            if (preg_match('#^/category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_category_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_delete')), array (  '_controller' => 'HunterBundle\\Controller\\CategoryController::deleteAction',));
            }
            not_category_delete:

        }

        if (0 === strpos($pathinfo, '/lists')) {
            // lists_index
            if (rtrim($pathinfo, '/') === '/lists') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_lists_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'lists_index');
                }

                return array (  '_controller' => 'HunterBundle\\Controller\\ListsController::indexAction',  '_route' => 'lists_index',);
            }
            not_lists_index:

            // lists_new
            if ($pathinfo === '/lists/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_lists_new;
                }

                return array (  '_controller' => 'HunterBundle\\Controller\\ListsController::newAction',  '_route' => 'lists_new',);
            }
            not_lists_new:

            // lists_show
            if (preg_match('#^/lists/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_lists_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'lists_show')), array (  '_controller' => 'HunterBundle\\Controller\\ListsController::showAction',));
            }
            not_lists_show:

            // lists_edit
            if (preg_match('#^/lists/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_lists_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'lists_edit')), array (  '_controller' => 'HunterBundle\\Controller\\ListsController::editAction',));
            }
            not_lists_edit:

            // lists_delete
            if (preg_match('#^/lists/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_lists_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'lists_delete')), array (  '_controller' => 'HunterBundle\\Controller\\ListsController::deleteAction',));
            }
            not_lists_delete:

            if (0 === strpos($pathinfo, '/listsproduct')) {
                // listsproduct_index
                if (rtrim($pathinfo, '/') === '/listsproduct') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_listsproduct_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'listsproduct_index');
                    }

                    return array (  '_controller' => 'HunterBundle\\Controller\\ListsProductController::indexAction',  '_route' => 'listsproduct_index',);
                }
                not_listsproduct_index:

                // listsproduct_new
                if ($pathinfo === '/listsproduct/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_listsproduct_new;
                    }

                    return array (  '_controller' => 'HunterBundle\\Controller\\ListsProductController::newAction',  '_route' => 'listsproduct_new',);
                }
                not_listsproduct_new:

                // listsproduct_show
                if (preg_match('#^/listsproduct/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_listsproduct_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'listsproduct_show')), array (  '_controller' => 'HunterBundle\\Controller\\ListsProductController::showAction',));
                }
                not_listsproduct_show:

                // listsproduct_edit
                if (preg_match('#^/listsproduct/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_listsproduct_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'listsproduct_edit')), array (  '_controller' => 'HunterBundle\\Controller\\ListsProductController::editAction',));
                }
                not_listsproduct_edit:

                // listsproduct_delete
                if (preg_match('#^/listsproduct/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_listsproduct_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'listsproduct_delete')), array (  '_controller' => 'HunterBundle\\Controller\\ListsProductController::deleteAction',));
                }
                not_listsproduct_delete:

            }

        }

        if (0 === strpos($pathinfo, '/product')) {
            // product_index
            if (rtrim($pathinfo, '/') === '/product') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_product_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'product_index');
                }

                return array (  '_controller' => 'HunterBundle\\Controller\\ProductController::indexAction',  '_route' => 'product_index',);
            }
            not_product_index:

            // product_new
            if ($pathinfo === '/product/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_product_new;
                }

                return array (  '_controller' => 'HunterBundle\\Controller\\ProductController::newAction',  '_route' => 'product_new',);
            }
            not_product_new:

            // product_show
            if (preg_match('#^/product/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_product_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_show')), array (  '_controller' => 'HunterBundle\\Controller\\ProductController::showAction',));
            }
            not_product_show:

            // product_edit
            if (preg_match('#^/product/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_product_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_edit')), array (  '_controller' => 'HunterBundle\\Controller\\ProductController::editAction',));
            }
            not_product_edit:

            // product_delete
            if (preg_match('#^/product/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_product_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_delete')), array (  '_controller' => 'HunterBundle\\Controller\\ProductController::deleteAction',));
            }
            not_product_delete:

        }

        if (0 === strpos($pathinfo, '/s')) {
            if (0 === strpos($pathinfo, '/society')) {
                // society_index
                if (rtrim($pathinfo, '/') === '/society') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_society_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'society_index');
                    }

                    return array (  '_controller' => 'HunterBundle\\Controller\\SocietyController::indexAction',  '_route' => 'society_index',);
                }
                not_society_index:

                // society_new
                if ($pathinfo === '/society/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_society_new;
                    }

                    return array (  '_controller' => 'HunterBundle\\Controller\\SocietyController::newAction',  '_route' => 'society_new',);
                }
                not_society_new:

                // society_show
                if (preg_match('#^/society/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_society_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'society_show')), array (  '_controller' => 'HunterBundle\\Controller\\SocietyController::showAction',));
                }
                not_society_show:

                // society_edit
                if (preg_match('#^/society/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_society_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'society_edit')), array (  '_controller' => 'HunterBundle\\Controller\\SocietyController::editAction',));
                }
                not_society_edit:

                // society_delete
                if (preg_match('#^/society/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_society_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'society_delete')), array (  '_controller' => 'HunterBundle\\Controller\\SocietyController::deleteAction',));
                }
                not_society_delete:

            }

            if (0 === strpos($pathinfo, '/store')) {
                // store_index
                if (rtrim($pathinfo, '/') === '/store') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_store_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'store_index');
                    }

                    return array (  '_controller' => 'HunterBundle\\Controller\\StoreController::indexAction',  '_route' => 'store_index',);
                }
                not_store_index:

                // store_new
                if ($pathinfo === '/store/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_store_new;
                    }

                    return array (  '_controller' => 'HunterBundle\\Controller\\StoreController::newAction',  '_route' => 'store_new',);
                }
                not_store_new:

                // store_show
                if (preg_match('#^/store/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_store_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'store_show')), array (  '_controller' => 'HunterBundle\\Controller\\StoreController::showAction',));
                }
                not_store_show:

                // store_edit
                if (preg_match('#^/store/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_store_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'store_edit')), array (  '_controller' => 'HunterBundle\\Controller\\StoreController::editAction',));
                }
                not_store_edit:

                // store_delete
                if (preg_match('#^/store/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_store_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'store_delete')), array (  '_controller' => 'HunterBundle\\Controller\\StoreController::deleteAction',));
                }
                not_store_delete:

                if (0 === strpos($pathinfo, '/storeproduct')) {
                    // storeproduct_index
                    if (rtrim($pathinfo, '/') === '/storeproduct') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_storeproduct_index;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'storeproduct_index');
                        }

                        return array (  '_controller' => 'HunterBundle\\Controller\\StoreProductController::indexAction',  '_route' => 'storeproduct_index',);
                    }
                    not_storeproduct_index:

                    // storeproduct_new
                    if ($pathinfo === '/storeproduct/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_storeproduct_new;
                        }

                        return array (  '_controller' => 'HunterBundle\\Controller\\StoreProductController::newAction',  '_route' => 'storeproduct_new',);
                    }
                    not_storeproduct_new:

                    // storeproduct_show
                    if (preg_match('#^/storeproduct/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_storeproduct_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'storeproduct_show')), array (  '_controller' => 'HunterBundle\\Controller\\StoreProductController::showAction',));
                    }
                    not_storeproduct_show:

                    // storeproduct_edit
                    if (preg_match('#^/storeproduct/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_storeproduct_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'storeproduct_edit')), array (  '_controller' => 'HunterBundle\\Controller\\StoreProductController::editAction',));
                    }
                    not_storeproduct_edit:

                    // storeproduct_delete
                    if (preg_match('#^/storeproduct/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_storeproduct_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'storeproduct_delete')), array (  '_controller' => 'HunterBundle\\Controller\\StoreProductController::deleteAction',));
                    }
                    not_storeproduct_delete:

                }

            }

        }

        if (0 === strpos($pathinfo, '/users')) {
            // users_index
            if (rtrim($pathinfo, '/') === '/users') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_users_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'users_index');
                }

                return array (  '_controller' => 'HunterBundle\\Controller\\UsersController::indexAction',  '_route' => 'users_index',);
            }
            not_users_index:

            // users_new
            if ($pathinfo === '/users/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_users_new;
                }

                return array (  '_controller' => 'HunterBundle\\Controller\\UsersController::newAction',  '_route' => 'users_new',);
            }
            not_users_new:

            // users_show
            if (preg_match('#^/users/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_users_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_show')), array (  '_controller' => 'HunterBundle\\Controller\\UsersController::showAction',));
            }
            not_users_show:

            // users_edit
            if (preg_match('#^/users/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_users_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_edit')), array (  '_controller' => 'HunterBundle\\Controller\\UsersController::editAction',));
            }
            not_users_edit:

            // users_delete
            if (preg_match('#^/users/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_users_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_delete')), array (  '_controller' => 'HunterBundle\\Controller\\UsersController::deleteAction',));
            }
            not_users_delete:

        }

        // logout
        if ($pathinfo === '/logout') {
            return array('_route' => 'logout');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
