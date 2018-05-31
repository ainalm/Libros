<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),  4 =>   array (  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),  4 =>   array (  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),  4 =>   array (  ),),
        'dwes_libros_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),),
        'dwes_libros_login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),),
        'dwes_libros_logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),),
        'dwes_libros_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        'dwes_libros_registro' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::registroAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/registro/',    ),  ),  4 =>   array (  ),),
        'dwes_libros_crearperfil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::crearperfilAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/crearperfil/',    ),  ),  4 =>   array (  ),),
        'dwes_libros_contacto' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::contactoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contacto/',    ),  ),  4 =>   array (  ),),
        'dwes_libros_escribirhistoria' => array (  0 =>   array (    0 => 'tipo',  ),  1 =>   array (    '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::escribirhistoriaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'tipo',    ),    1 =>     array (      0 => 'text',      1 => '/escribirhistoria',    ),  ),  4 =>   array (  ),),
        'dwes_libros_perfil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::perfilAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/perfil/',    ),  ),  4 =>   array (  ),),
        'dwes_libros_publicadosBib' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::publicadosBibAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/publicadosBib/',    ),  ),  4 =>   array (  ),),
        'dwes_libros_favoritoBib' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::favoritoBibAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/favoritoBib/',    ),  ),  4 =>   array (  ),),
        'dwes_libros_deseadoBib' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::deseadoBibAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/deseadoBib/',    ),  ),  4 =>   array (  ),),
        'dwes_libros_listaBib' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::listaBibAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/listaBib/',    ),  ),  4 =>   array (  ),),
        'dwes_libros_ventaBib' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::ventaBibAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ventaBib/',    ),  ),  4 =>   array (  ),),
        'dwes_libros_ajustes' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::ajustesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ajustes/',    ),  ),  4 =>   array (  ),),
        'dwes_libros_describirLib' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::describirLibAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/describirLib/',    ),  ),  4 =>   array (  ),),
        'dwes_libros_capitulo' => array (  0 =>   array (    0 => 'idLibro',    1 => 'numCapitulo',  ),  1 =>   array (    '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::capituloAction',  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'numCapitulo',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idLibro',    ),    2 =>     array (      0 => 'text',      1 => '/capitulo',    ),  ),  4 =>   array (  ),),
        'dwes_libros_eliminarCap' => array (  0 =>   array (    0 => 'idLibro',    1 => 'numCapitulo',  ),  1 =>   array (    '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::eliminarCapAction',  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'numCapitulo',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idLibro',    ),    2 =>     array (      0 => 'text',      1 => '/eliminarCap',    ),  ),  4 =>   array (  ),),
        'dwes_libros_nuevoCap' => array (  0 =>   array (    0 => 'idLibro',  ),  1 =>   array (    '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::nuevoCapAction',  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idLibro',    ),    2 =>     array (      0 => 'text',      1 => '/nuevoCap',    ),  ),  4 =>   array (  ),),
        'dwes_libros_addbiblioteca' => array (  0 =>   array (    0 => 'idLibro',  ),  1 =>   array (    '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::addbibliotecaAction',  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idLibro',    ),    2 =>     array (      0 => 'text',      1 => '/addbiblioteca',    ),  ),  4 =>   array (  ),),
        'dwes_libros_delbiblioteca' => array (  0 =>   array (    0 => 'idLibro',  ),  1 =>   array (    '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::delbibliotecaAction',  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idLibro',    ),    2 =>     array (      0 => 'text',      1 => '/delbiblioteca',    ),  ),  4 =>   array (  ),),
        'dwes_libros_delfavoritos' => array (  0 =>   array (    0 => 'idLibro',  ),  1 =>   array (    '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::delfavoritosAction',  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idLibro',    ),    2 =>     array (      0 => 'text',      1 => '/delfavoritos',    ),  ),  4 =>   array (  ),),
        'dwes_libros_addfavoritos' => array (  0 =>   array (    0 => 'idLibro',  ),  1 =>   array (    '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::addfavoritosAction',  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idLibro',    ),    2 =>     array (      0 => 'text',      1 => '/addfavoritos',    ),  ),  4 =>   array (  ),),
        'dwes_libros_deldeseos' => array (  0 =>   array (    0 => 'idLibro',  ),  1 =>   array (    '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::deldeseosAction',  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idLibro',    ),    2 =>     array (      0 => 'text',      1 => '/deldeseos',    ),  ),  4 =>   array (  ),),
        'dwes_libros_adddeseos' => array (  0 =>   array (    0 => 'idLibro',  ),  1 =>   array (    '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::adddeseosAction',  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idLibro',    ),    2 =>     array (      0 => 'text',      1 => '/adddeseos',    ),  ),  4 =>   array (  ),),
        'dwes_libros_eliminarLib' => array (  0 =>   array (    0 => 'idLibro',  ),  1 =>   array (    '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::eliminarLibAction',  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idLibro',    ),    1 =>     array (      0 => 'text',      1 => '/eliminarLib',    ),  ),  4 =>   array (  ),),
        'dwes_libros_historia' => array (  0 =>   array (    0 => 'idLibro',  ),  1 =>   array (    '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::historiaAction',  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idLibro',    ),    2 =>     array (      0 => 'text',      1 => '/historia',    ),  ),  4 =>   array (  ),),
        'dwes_libros_suscripcion' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::suscripcionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/suscripcion/',    ),  ),  4 =>   array (  ),),
        'dwes_libros_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::passwordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/password/',    ),  ),  4 =>   array (  ),),
        'dwes_libros_perfilhistoria' => array (  0 =>   array (    0 => 'idLibro',  ),  1 =>   array (    '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::perfilhistoriaAction',  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idLibro',    ),    1 =>     array (      0 => 'text',      1 => '/perfilhistoria',    ),  ),  4 =>   array (  ),),
        'dwes_libros_updateDescLibro' => array (  0 =>   array (    0 => 'idLibro',  ),  1 =>   array (    '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::updateDescLibroAction',  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idLibro',    ),    1 =>     array (      0 => 'text',      1 => '/updateDescLibro',    ),  ),  4 =>   array (  ),),
        'dwes_libros_addEnlaceLibro' => array (  0 =>   array (    0 => 'idLibro',  ),  1 =>   array (    '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::addEnlaceAction',  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idLibro',    ),    2 =>     array (      0 => 'text',      1 => '/addEnlace',    ),  ),  4 =>   array (  ),),
        'dwes_libros_eliminarEnlace' => array (  0 =>   array (    0 => 'idLibro',    1 => 'idEnlace',  ),  1 =>   array (    '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::eliminarEnlaceAction',  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idEnlace',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idLibro',    ),    2 =>     array (      0 => 'text',      1 => '/eliminarEnlace',    ),  ),  4 =>   array (  ),),
        'dwes_libros_editarEnlace' => array (  0 =>   array (    0 => 'idLibro',    1 => 'idEnlace',  ),  1 =>   array (    '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::editarEnlaceAction',  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idEnlace',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idLibro',    ),    2 =>     array (      0 => 'text',      1 => '/editarEnlace',    ),  ),  4 =>   array (  ),),
        'dwes_libros_updateInfoLibro' => array (  0 =>   array (    0 => 'idLibro',  ),  1 =>   array (    '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::updateInfoLibroAction',  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idLibro',    ),    1 =>     array (      0 => 'text',      1 => '/updateInfoLibro',    ),  ),  4 =>   array (  ),),
        'dwes_libros_comentarLibro' => array (  0 =>   array (    0 => 'idLibro',  ),  1 =>   array (    '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::comentarLibroAction',  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idLibro',    ),    1 =>     array (      0 => 'text',      1 => '/comentarLibro',    ),  ),  4 =>   array (  ),),
        'dwes_libros_comentarCapitulo' => array (  0 =>   array (    0 => 'idLibro',    1 => 'numCap',  ),  1 =>   array (    '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::comentarCapituloAction',  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'numCap',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idLibro',    ),    2 =>     array (      0 => 'text',      1 => '/comentarCapitulo',    ),  ),  4 =>   array (  ),),
        'dwes_libros_genero' => array (  0 =>   array (    0 => 'tipo',    1 => 'idGenero',  ),  1 =>   array (    '_controller' => 'DWES\\LibrosBundle\\Controller\\DefaultController::generoAction',  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idGenero',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'tipo',    ),    2 =>     array (      0 => 'text',      1 => '/genero',    ),  ),  4 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
