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
        if (0 === strpos($pathinfo, '/escribirhistoria') && preg_match('#^/escribirhistoria/(?P<tipo>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dwes_libros_escribirhistoria')), array (  '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::escribirhistoriaAction',));
        }

        if (0 === strpos($pathinfo, '/p')) {
            // dwes_libros_perfil
            if (0 === strpos($pathinfo, '/perfil') && preg_match('#^/perfil/(?P<username>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dwes_libros_perfil')), array (  '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::perfilAction',));
            }

            // dwes_libros_publicadosBib
            if (rtrim($pathinfo, '/') === '/publicadosBib') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'dwes_libros_publicadosBib');
                }

                return array (  '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::publicadosBibAction',  '_route' => 'dwes_libros_publicadosBib',);
            }

        }

        // dwes_libros_favoritoBib
        if (rtrim($pathinfo, '/') === '/favoritoBib') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'dwes_libros_favoritoBib');
            }

            return array (  '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::favoritoBibAction',  '_route' => 'dwes_libros_favoritoBib',);
        }

        // dwes_libros_deseadoBib
        if (rtrim($pathinfo, '/') === '/deseadoBib') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'dwes_libros_deseadoBib');
            }

            return array (  '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::deseadoBibAction',  '_route' => 'dwes_libros_deseadoBib',);
        }

        // dwes_libros_listaBib
        if (rtrim($pathinfo, '/') === '/listaBib') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'dwes_libros_listaBib');
            }

            return array (  '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::listaBibAction',  '_route' => 'dwes_libros_listaBib',);
        }

        // dwes_libros_ventaBib
        if (rtrim($pathinfo, '/') === '/ventaBib') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'dwes_libros_ventaBib');
            }

            return array (  '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::ventaBibAction',  '_route' => 'dwes_libros_ventaBib',);
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
        if (0 === strpos($pathinfo, '/capitulo') && preg_match('#^/capitulo/(?P<idLibro>[^/]++)/(?P<numCapitulo>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dwes_libros_capitulo')), array (  '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::capituloAction',));
        }

        // dwes_libros_eliminarCap
        if (0 === strpos($pathinfo, '/eliminarCap') && preg_match('#^/eliminarCap/(?P<idLibro>[^/]++)/(?P<numCapitulo>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dwes_libros_eliminarCap')), array (  '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::eliminarCapAction',));
        }

        // dwes_libros_nuevoCap
        if (0 === strpos($pathinfo, '/nuevoCap') && preg_match('#^/nuevoCap/(?P<idLibro>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'dwes_libros_nuevoCap');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dwes_libros_nuevoCap')), array (  '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::nuevoCapAction',));
        }

        // dwes_libros_addbiblioteca
        if (0 === strpos($pathinfo, '/addbiblioteca') && preg_match('#^/addbiblioteca/(?P<idLibro>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'dwes_libros_addbiblioteca');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dwes_libros_addbiblioteca')), array (  '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::addbibliotecaAction',));
        }

        if (0 === strpos($pathinfo, '/del')) {
            // dwes_libros_delbiblioteca
            if (0 === strpos($pathinfo, '/delbiblioteca') && preg_match('#^/delbiblioteca/(?P<idLibro>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'dwes_libros_delbiblioteca');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dwes_libros_delbiblioteca')), array (  '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::delbibliotecaAction',));
            }

            // dwes_libros_delfavoritos
            if (0 === strpos($pathinfo, '/delfavoritos') && preg_match('#^/delfavoritos/(?P<idLibro>[^/]++)/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'dwes_libros_delfavoritos');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dwes_libros_delfavoritos')), array (  '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::delfavoritosAction',));
            }

        }

        // dwes_libros_addfavoritos
        if (0 === strpos($pathinfo, '/addfavoritos') && preg_match('#^/addfavoritos/(?P<idLibro>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'dwes_libros_addfavoritos');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dwes_libros_addfavoritos')), array (  '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::addfavoritosAction',));
        }

        // dwes_libros_deldeseos
        if (0 === strpos($pathinfo, '/deldeseos') && preg_match('#^/deldeseos/(?P<idLibro>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'dwes_libros_deldeseos');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dwes_libros_deldeseos')), array (  '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::deldeseosAction',));
        }

        // dwes_libros_adddeseos
        if (0 === strpos($pathinfo, '/adddeseos') && preg_match('#^/adddeseos/(?P<idLibro>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'dwes_libros_adddeseos');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dwes_libros_adddeseos')), array (  '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::adddeseosAction',));
        }

        // dwes_libros_eliminarLib
        if (0 === strpos($pathinfo, '/eliminarLib') && preg_match('#^/eliminarLib/(?P<idLibro>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'dwes_libros_eliminarLib');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dwes_libros_eliminarLib')), array (  '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::eliminarLibAction',));
        }

        // dwes_libros_historia
        if (0 === strpos($pathinfo, '/historia') && preg_match('#^/historia/(?P<idLibro>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'dwes_libros_historia');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dwes_libros_historia')), array (  '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::historiaAction',));
        }

        // dwes_libros_suscripcion
        if (rtrim($pathinfo, '/') === '/suscripcion') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'dwes_libros_suscripcion');
            }

            return array (  '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::suscripcionAction',  '_route' => 'dwes_libros_suscripcion',);
        }

        if (0 === strpos($pathinfo, '/p')) {
            // dwes_libros_password
            if (rtrim($pathinfo, '/') === '/password') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'dwes_libros_password');
                }

                return array (  '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::passwordAction',  '_route' => 'dwes_libros_password',);
            }

            // dwes_libros_perfilhistoria
            if (0 === strpos($pathinfo, '/perfilhistoria') && preg_match('#^/perfilhistoria/(?P<idLibro>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dwes_libros_perfilhistoria')), array (  '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::perfilhistoriaAction',));
            }

        }

        // dwes_libros_updateDescLibro
        if (0 === strpos($pathinfo, '/updateDescLibro') && preg_match('#^/updateDescLibro/(?P<idLibro>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dwes_libros_updateDescLibro')), array (  '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::updateDescLibroAction',));
        }

        // dwes_libros_addEnlaceLibro
        if (0 === strpos($pathinfo, '/addEnlace') && preg_match('#^/addEnlace/(?P<idLibro>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'dwes_libros_addEnlaceLibro');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dwes_libros_addEnlaceLibro')), array (  '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::addEnlaceAction',));
        }

        if (0 === strpos($pathinfo, '/e')) {
            // dwes_libros_eliminarEnlace
            if (0 === strpos($pathinfo, '/eliminarEnlace') && preg_match('#^/eliminarEnlace/(?P<idLibro>[^/]++)/(?P<idEnlace>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dwes_libros_eliminarEnlace')), array (  '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::eliminarEnlaceAction',));
            }

            // dwes_libros_editarEnlace
            if (0 === strpos($pathinfo, '/editarEnlace') && preg_match('#^/editarEnlace/(?P<idLibro>[^/]++)/(?P<idEnlace>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dwes_libros_editarEnlace')), array (  '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::editarEnlaceAction',));
            }

        }

        // dwes_libros_updateInfoLibro
        if (0 === strpos($pathinfo, '/updateInfoLibro') && preg_match('#^/updateInfoLibro/(?P<idLibro>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dwes_libros_updateInfoLibro')), array (  '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::updateInfoLibroAction',));
        }

        if (0 === strpos($pathinfo, '/comentar')) {
            // dwes_libros_comentarLibro
            if (0 === strpos($pathinfo, '/comentarLibro') && preg_match('#^/comentarLibro/(?P<idLibro>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dwes_libros_comentarLibro')), array (  '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::comentarLibroAction',));
            }

            // dwes_libros_comentarCapitulo
            if (0 === strpos($pathinfo, '/comentarCapitulo') && preg_match('#^/comentarCapitulo/(?P<idLibro>[^/]++)/(?P<numCap>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dwes_libros_comentarCapitulo')), array (  '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::comentarCapituloAction',));
            }

        }

        // dwes_libros_genero
        if (0 === strpos($pathinfo, '/genero') && preg_match('#^/genero/(?P<idGenero>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dwes_libros_genero')), array (  '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::generoAction',));
        }

        // dwes_libros_privacidad
        if (rtrim($pathinfo, '/') === '/privacidad') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'dwes_libros_privacidad');
            }

            return array (  '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::privacidadAction',  '_route' => 'dwes_libros_privacidad',);
        }

        if (0 === strpos($pathinfo, '/delC')) {
            // dwes_libros_delCuenta
            if (0 === strpos($pathinfo, '/delCuenta') && preg_match('#^/delCuenta/(?P<userlog>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'dwes_libros_delCuenta')), array (  '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::delCuentaAction',));
            }

            if (0 === strpos($pathinfo, '/delComentario')) {
                // dwes_libros_delComentarioCap
                if (0 === strpos($pathinfo, '/delComentarioCap') && preg_match('#^/delComentarioCap/(?P<idLibro>[^/]++)/(?P<numCapitulo>[^/]++)/(?P<username>[^/]++)/(?P<comentario>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dwes_libros_delComentarioCap')), array (  '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::delComentarioCapAction',));
                }

                // dwes_libros_delComentarioLib
                if (0 === strpos($pathinfo, '/delComentarioLib') && preg_match('#^/delComentarioLib/(?P<idLibro>[^/]++)/(?P<username>[^/]++)/(?P<comentario>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'dwes_libros_delComentarioLib')), array (  '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::delComentarioLibAction',));
                }

            }

        }

        // dwes_libros_normas
        if (rtrim($pathinfo, '/') === '/normas') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'dwes_libros_normas');
            }

            return array (  '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::normasAction',  '_route' => 'dwes_libros_normas',);
        }

        // dwes_libros_guia
        if (rtrim($pathinfo, '/') === '/guia') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'dwes_libros_guia');
            }

            return array (  '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::guiaAction',  '_route' => 'dwes_libros_guia',);
        }

        // dwes_libros_suscriSelect
        if (0 === strpos($pathinfo, '/suscriSelect') && preg_match('#^/suscriSelect/(?P<tipo>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dwes_libros_suscriSelect')), array (  '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::suscriSelectAction',));
        }

        // dwes_libros_delSuscri
        if (0 === strpos($pathinfo, '/delSuscri') && preg_match('#^/delSuscri/(?P<tipo>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'dwes_libros_delSuscri');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dwes_libros_delSuscri')), array (  '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::delSuscriAction',));
        }

        // dwes_libros_existeLib
        if (0 === strpos($pathinfo, '/existeLib') && preg_match('#^/existeLib/(?P<idLibro>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'dwes_libros_existeLib');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dwes_libros_existeLib')), array (  '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::existeLibAction',));
        }

        // dwes_libros_avisar
        if (0 === strpos($pathinfo, '/avisar') && preg_match('#^/avisar/(?P<idLibro>[^/]++)/(?P<admin>[^/]++)/(?P<autor>[^/]++)/(?P<tipo>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dwes_libros_avisar')), array (  '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::avisarAction',));
        }

        // dwes_libros_moderar
        if (rtrim($pathinfo, '/') === '/moderar') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'dwes_libros_moderar');
            }

            return array (  '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::moderarAction',  '_route' => 'dwes_libros_moderar',);
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
