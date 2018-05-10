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

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // dwes_libros_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::loginAction',  '_route' => 'dwes_libros_login',);
                }

                // dwes_libros_login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'dwes_libros_login_check');
                }

            }

            // dwes_libros_logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'dwes_libros_logout');
            }

        }

        // dwes_libros_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'dwes_libros_homepage');
            }

            return array (  '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::indexAction',  '_route' => 'dwes_libros_homepage',);
        }

        // dwes_libros_registro
        if (rtrim($pathinfo, '/') === '/registro') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'dwes_libros_registro');
            }

            return array (  '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::registroAction',  '_route' => 'dwes_libros_registro',);
        }

        if (0 === strpos($pathinfo, '/c')) {
            // dwes_libros_crearperfil
            if (rtrim($pathinfo, '/') === '/crearperfil') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'dwes_libros_crearperfil');
                }

                return array (  '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::crearperfilAction',  '_route' => 'dwes_libros_crearperfil',);
            }

            // dwes_libros_contacto
            if (rtrim($pathinfo, '/') === '/contacto') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'dwes_libros_contacto');
                }

                return array (  '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::contactoAction',  '_route' => 'dwes_libros_contacto',);
            }

        }

        // dwes_libros_escribirhistoria
        if (rtrim($pathinfo, '/') === '/escribirhistoria') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'dwes_libros_escribirhistoria');
            }

            return array (  '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::escribirhistoriaAction',  '_route' => 'dwes_libros_escribirhistoria',);
        }

        // dwes_libros_perfil
        if (rtrim($pathinfo, '/') === '/perfil') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'dwes_libros_perfil');
            }

            return array (  '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::perfilAction',  '_route' => 'dwes_libros_perfil',);
        }

        // dwes_libros_biblioteca
        if (rtrim($pathinfo, '/') === '/biblioteca') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'dwes_libros_biblioteca');
            }

            return array (  '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::bibliotecaAction',  '_route' => 'dwes_libros_biblioteca',);
        }

        // dwes_libros_ajustes
        if (rtrim($pathinfo, '/') === '/ajustes') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'dwes_libros_ajustes');
            }

            return array (  '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::ajustesAction',  '_route' => 'dwes_libros_ajustes',);
        }

        // dwes_libros_describirLib
        if (rtrim($pathinfo, '/') === '/describirLib') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'dwes_libros_describirLib');
            }

            return array (  '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::describirLibAction',  '_route' => 'dwes_libros_describirLib',);
        }

        // dwes_libros_capitulo
        if (0 === strpos($pathinfo, '/capitulo') && preg_match('#^/capitulo/(?P<idLibro>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'dwes_libros_capitulo');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dwes_libros_capitulo')), array (  '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::capituloAction',));
        }

        // dwes_libros_suscripcion
        if (rtrim($pathinfo, '/') === '/suscripcion') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'dwes_libros_suscripcion');
            }

            return array (  '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::suscripcionAction',  '_route' => 'dwes_libros_suscripcion',);
        }

        // dwes_libros_perfilhistoria
        if (0 === strpos($pathinfo, '/perfilhistoria') && preg_match('#^/perfilhistoria/(?P<idLibro>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dwes_libros_perfilhistoria')), array (  '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::perfilhistoriaAction',));
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
