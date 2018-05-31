<?php
namespace DWES\LibrosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use DWES\LibrosBundle\Entity\Libro;
use Symfony\Component\Security\Core\SecurityContext;


class DefaultController extends Controller
{
	public function loginAction()
	{
		if ($this->get('request')->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
			$error = $this->get('request')->attributes->get(
				SecurityContext::AUTHENTICATION_ERROR
			);
		} else {
			$error = $this->get('session')->get(
				SecurityContext::AUTHENTICATION_ERROR
			);
		}
		return $this->render('DWESLibrosBundle:Default:login.html.twig', array('last_username' => $this->get('request')->getSession()->get(SecurityContext::LAST_USERNAME), 'error' => $error));
	}

	public function indexAction()
	{
		$params = array('mensaje' => 'Este es el mensaje de bienvenida.');
		return $this->render('DWESLibrosBundle:Default:index.html.twig', $params);
	}


	public function registroAction()
	{
		/* Guardo en el array los campos del form*/
		$params = array('username' => '', 'email' => '', 'password' => '', 'sexo' => '');

		$peticion = $this->getRequest(); 	//Llamada al Form

		$username = $peticion->request->get('username');
		$email = $peticion->request->get('email');
		$password = sha1($peticion->request->get('password')); // Contraseña encriptada en la BD
		$sexo = $peticion->request->get('sexo');

		if ($peticion->server->get('REQUEST_METHOD') == 'POST') {  //Comprueba si se ha enviado el Form

			if (!empty($username) && !empty($email) && !empty($password)) {

				$connection = $this->get("database_connection");		//Conexión con la BD  
				$connection->executeUpdate('INSERT INTO usuario (username, id, nombre,sexo,tipoUser, fechaNacimiento, biografia,paginaWeb, fotoPerfil, apellidos, salt, password, email, isActive, tokenRegistro) VALUES ("' . $username . '",NULL ,"", "' . $sexo . '","usuario", NULL, NULL, NULL, NULL, "", "", "' . $password . '", "' . $email . '", "1", "");');
				return $this->redirect($this->generateUrl('dwes_libros_crearperfil')); 		//Redirección al registrarse para crear el perfil

			}
		}
		return $this->render('DWESLibrosBundle:Default:registro.html.twig', $params);

	}


	public function crearperfilAction()
	{
		/* Guardo en el array los campos del form*/
		$params = array('nombre' => '', 'apellidos' => '', 'fnacimiento' => '', 'pweb' => '', 'biografia' => '', 'file_upload' => '', 'fotoPerfil' => '');

		$peticion = $this->getRequest(); 	//Llamada al Form
		
		//Obtengo el valor de los campos del Form
		$nombre = $peticion->request->get('nombre');
		$apellidos = $peticion->request->get('apellidos');
		$fnacimiento = $peticion->request->get('fnacimiento');
		$pweb = $peticion->request->get('pweb');
		$biografia = $peticion->request->get('biografia');
		$userlog = $this->getUser()->getUsername();		//Variable donde guardamos el usuario logeado;

		$fotoSubida = addslashes(file_get_contents($_FILES['file_upload']['tmp_name'])); //Imagen Subida del  usuario
		$connection = $this->get("database_connection");	//Conexión con la BD 

		if ($peticion->server->get('REQUEST_METHOD') == 'POST') {  //Comprueba si se ha enviado el Form


			$connection->executeUpdate('UPDATE usuario SET nombre = "' . $nombre . '", fechaNacimiento = "' . $fnacimiento . '", biografia = "' . $biografia . '", paginaWeb = "' . $pweb . '", apellidos = "' . $apellidos . '" WHERE usuario.username = "' . $userlog . '";');

			$connection->executeUpdate('UPDATE `usuario` SET fotoPerfil ="' . $fotoSubida . '" WHERE username ="' . $userlog . '" ;');

			//var_dump('INSERT INTO test(imagen) VALUES ("'. $contImagen .'");');exit;
			return $this->redirect($this->generateUrl('dwes_libros_perfil'));
			return $this->redirect($this->generateUrl('dwes_libros_perfil', array('idLibro' => $idLibro)));
		}
		//Relleno los datos para editar
		$nombre = $connection->fetchColumn('SELECT nombre FROM usuario WHERE username = "' . $userlog . '"');
		$apellidos = $connection->fetchColumn('SELECT apellidos FROM usuario WHERE username = "' . $userlog . '"');
		$fnacimiento = $connection->fetchColumn('SELECT fechaNacimiento FROM usuario WHERE username = "' . $userlog . '"');
		$pweb = $connection->fetchColumn('SELECT paginaWeb FROM usuario WHERE username = "' . $userlog . '"');
		$biografia = $connection->fetchColumn('SELECT biografia FROM usuario WHERE username = "' . $userlog . '"');
		$fotoP = $connection->fetchColumn('SELECT fotoPerfil FROM usuario WHERE username = "' . $userlog . '"');
		$imagen = base64_encode($fotoP);
		$params = array('nombre' => $nombre, 'apellidos' => $apellidos, 'fnacimiento' => $fnacimiento, 'pweb' => $pweb, 'biografia' => $biografia, 'fotoPerfil' => $imagen);

		return $this->render('DWESLibrosBundle:Default:crearperfil.html.twig', $params);

	}

	public function escribirhistoriaAction($tipo)
	{
			/*Generos:
		0:Default
		1:Aventura
		2:Acción
		3:Terror	
		4:Fantasía
		5:Misterio
		6:Poesía
		7:Romance
		8:Drama
		 */

		$params = array('titulohistoria' => '', 'resuHist' => '', 'genero' => '', 'file_upload' => '', 'colorFondo' => '', 'tipoLib' => '');/* Guardo en el array los campos del form*/
		$userlog = $this->getUser()->getUsername();
		$peticion = $this->getRequest(); 	//Llamada al Form
		$request->files;
		$titulohistoria = $peticion->request->get('titulohistoria'); //Obtengo el valor de los campos del Form
		$resuHist = $peticion->request->get('resuHist');
		$genero = $peticion->request->get('genero');
		$colorFondo = $peticion->request->get('colorFondo');
		$tipoLib = $peticion->request->get('tipoLib');
		$fotoSubida = addslashes(file_get_contents($_FILES['file_upload']['tmp_name'])); //Imagen Subida del  usuario
		$connection = $this->get("database_connection"); //Conexión con la BD 1º Metodo
		$idGeneroSelecc = $connection->fetchColumn('SELECT idGenero from genero WHERE nombre="' . $genero . '"'); //Id del genero seleccionado
		$numExist = $connection->fetchColumn('SELECT COUNT(titulo) FROM libro WHERE username="' . $userlog . '" and titulo="' . $titulohistoria . '" GROUP BY titulo HAVING COUNT(titulo) > 1'); //Id genero seleccionado
		$idLibro = "";
		$red = $tipo;
		if ($peticion->server->get('REQUEST_METHOD') == 'POST') {
				/* FIXME: Evitar meter libros duplicado */
			if (empty($numExist) && $numExist == 0) {
			/* INSERT LIBRO  CREADO*/
				if (isset($titulohistoria) && isset($resuHist) && isset($genero)) {
					//$connection->executeUpdate('UPDATE `usuario` SET fotoPerfil ="'. $fotoSubida .'" WHERE username ="'. $userlog .'" ;');

					if ($tipo == "anuncio") {
						$connection->executeUpdate('INSERT INTO libro (idLibro, username, idGenero, titulo,tipoLibro, fotoPort, descripcion, fechaPubli, progreso, RestEdad, Idioma,colorPortada)
					VALUES (NULL, "' . $userlog . '", "' . $idGeneroSelecc . '", "' . $titulohistoria . '","Anuncio", "' . $fotoSubida . '", "' . $resuHist . '", CURRENT_TIMESTAMP, "En progreso", NULL, NULL,"' . $colorFondo . '");');
					} elseif ($tipo == "gratis") {
						$connection->executeUpdate('INSERT INTO libro (idLibro, username, idGenero, titulo,tipoLibro, fotoPort, descripcion, fechaPubli, progreso, RestEdad, Idioma,colorPortada)
					VALUES (NULL, "' . $userlog . '", "' . $idGeneroSelecc . '", "' . $titulohistoria . '","Gratis", "' . $fotoSubida . '", "' . $resuHist . '", CURRENT_TIMESTAMP, "En progreso", NULL, NULL,"' . $colorFondo . '");');
					}
				
			/*	SELECT Id del libro creado */
					$idLibro = $connection->fetchColumn('SELECT idLibro FROM libro WHERE username="' . $userlog . '" and titulo="' . $titulohistoria . '"'); 	

			/* INSERT OPERACIÓN Añadir Libro */
					$connection->executeUpdate('INSERT INTO operacionlibros (codOperacion, idLibro, username, motivoOL) VALUES ("1","' . $idLibro . '","' . $userlog . '","Libro Añadido")');
			
			/*  INSERT 1º Capitulo  FANTASMA*/

					$connection->executeUpdate('INSERT INTO capitulo ( idLibro, numCapitulo, tituloCap, contenidoCap, estado) VALUES ( "' . $idLibro . '", 1, "", "", "Fantasma");');

				}
			} else {
				var_dump("ya existe el libro");
				exit;
			}
			//Genera una ruta depende del tipo de libro escrito
			$params = array('titulohistoria' => '', 'resuHist' => '', 'genero' => '', 'idLibro' => $idLibro);
			if ($tipo == "anuncio") {
				return $this->redirect($this->generateUrl('dwes_libros_perfilhistoria', array('idLibro' => $idLibro)));
			} elseif ($tipo == "gratis") {
				return $this->redirect($this->generateUrl('dwes_libros_capitulo', array('idLibro' => $idLibro, 'numCapitulo' => 1)));
			}
		}

		return $this->render('DWESLibrosBundle:Default:escribirhistoria.html.twig', $params);
	}

	public function nuevoCapAction($idLibro)
	{
		$userlog = $this->getUser()->getUsername();
		$connection = $this->get("database_connection");
		$SelectultimoCapitulo = $connection->fetchColumn('SELECT MAX(numCapitulo) FROM capitulo WHERE idLibro =' . $idLibro . '');
			// Selecciono el ultimo capítulo para incrementarlo
		$ultimoCapitulo = $SelectultimoCapitulo + 1;
			///Hace la INSERT del capitulo
		$connection->executeUpdate('INSERT INTO capitulo ( idLibro, numCapitulo, tituloCap, contenidoCap, estado) VALUES ( "' . $idLibro . '", "' . $ultimoCapitulo . '", "", "", "Fantasma");');
			//INSERT de la operación realizada
		return $this->redirect($this->generateUrl('dwes_libros_capitulo', array('idLibro' => $idLibro, 'numCapitulo' => $ultimoCapitulo)));
	}

	public function eliminarCapAction($idLibro, $numCapitulo)
	{

		$connection = $this->get("database_connection");

		$connection->executeUpdate('DELETE FROM capitulo WHERE capitulo.idLibro = "' . $idLibro . '" AND capitulo.numCapitulo = "' . $numCapitulo . '";');
		return $this->redirect($this->generateUrl('dwes_libros_perfilhistoria', array('idLibro' => $idLibro)));
	}
	public function eliminarLibAction($idLibro)
	{

		$connection = $this->get("database_connection");
		$connection->executeUpdate('DELETE FROM operacionlibros WHERE idLibro = "' . $idLibro . '";');
		$connection->executeUpdate('DELETE FROM capitulo WHERE idLibro = "' . $idLibro . '";');
		$connection->executeUpdate('DELETE FROM enbiblioteca WHERE idLibro = "' . $idLibro . '";');
		$connection->executeUpdate('DELETE FROM libro WHERE idLibro = "' . $idLibro . '";');
				

			//Rediriga a la página de Biblioteca con un parámetro
		return $this->redirect($this->generateUrl('dwes_libros_perfilhistoria', array('idLibro' => $idLibro)));
	}
	public function eliminarEnlaceAction($idLibro, $idEnlace)
	{

		$connection = $this->get("database_connection");
		$connection->executeUpdate('DELETE FROM enlaces WHERE idLibro = "' . $idLibro . '" and idEnlace="' . $idEnlace . '";');
			//Rediriga a la página de Biblioteca con un parámetro
		return $this->redirect($this->generateUrl('dwes_libros_perfilhistoria', array('idLibro' => $idLibro)));
	}
	public function capituloAction($idLibro, $numCapitulo)
	{
		$userlog = $this->getUser()->getUsername();		//Variable donde guardamos el usuario logeado; '.$userlog.'
		$connection = $this->get("database_connection");	//Conexión con la BD 1º Metodo

		$tituloH = $connection->fetchColumn('SELECT titulo FROM libro WHERE idLibro="' . $idLibro . '"'); //Titulo  historia (Se muestra en el Header)
		$usuarioH = $connection->fetchColumn('SELECT username FROM operacionlibros WHERE idLibro="' . $idLibro . '"GROUP BY username'); //Autor historia (Se muestra en el Header)
		$fechaM = $connection->fetchColumn('SELECT fechaOL FROM operacionlibros WHERE idLibro = "' . $idLibro . '" AND codOperacion = 2'); //Fecha Update
		$tituloBD = trim($connection->fetchColumn('SELECT tituloCap FROM capitulo WHERE idLibro = "' . $idLibro . '" AND numCapitulo ="' . $numCapitulo . '"')); //Título de la BD Update
		$contBD = trim($connection->fetchColumn('SELECT contenidoCap FROM capitulo WHERE idLibro = "' . $idLibro . '" AND numCapitulo ="' . $numCapitulo . '"')); //Contenido de la BD
			/* Guardo en el array los campos del form*/
		$params = array('tituloCapitulo' => '', 'contCapitulo' => '', 'tituloLibro' => $tituloH, 'autor' => $usuarioH, 'fecha' => $fechaM);

		$peticion = $this->getRequest(); 	//Llamada al Form
		$titulocapitulo = trim($peticion->request->get('tituloCapitulo')); 	//Quito los espacios en blanco
		$contCapitulo = $peticion->request->get('contCapitulo');


		$capExist = $connection->fetchColumn('SELECT COUNT(idLibro) FROM operacionlibros WHERE 
		username="' . $userlog . '" and idLibro="' . $idLibro . '" AND codOperacion =2'); //Id genero seleccionado
		if (empty($capExist)) {
			$connection->executeUpdate('INSERT INTO operacionlibros (codOperacion, idLibro, username, fechaOL, motivoOL) VALUES (2, ' . $idLibro . ', "' . $userlog . '", CURRENT_TIMESTAMP, "Capitlo añadido");');

		}

		$SelectultimoCapitulo = $connection->fetchColumn('SELECT MAX(numCapitulo) FROM capitulo WHERE idLibro =' . $idLibro . '');
			/* Selecciono el ultimo capítulo para incrementarlo
				$ultimoCapitulo = $SelectultimoCapitulo + 1;
		 */
		$titCapInsert = $connection->fetchColumn('SELECT tituloCap  FROM capitulo WHERE idLibro =' . $idLibro . ' AND numCapitulo =' . $SelectultimoCapitulo . '');
		$contCapInser = $connection->fetchColumn('SELECT contenidoCap  FROM capitulo WHERE idLibro =' . $idLibro . ' AND numCapitulo =' . $SelectultimoCapitulo . '');
		if ($peticion->server->get('REQUEST_METHOD') == 'POST') {  //Comprueba si se ha enviado el Form

			if (isset($titulocapitulo) && isset($contCapitulo)) {
				/* INSERT DEL CAPITULO */
				$connection->executeUpdate('UPDATE capitulo SET   tituloCap = "' . $titulocapitulo . '", contenidoCap = "' . $contCapitulo . '" , estado = "Publicado" 
					WHERE capitulo.idLibro = "' . $idLibro . '" AND capitulo.numCapitulo = "' . $numCapitulo . '";');
				/* UPDATE OPERACIÓN INSERTAR */
				$connection->executeUpdate('UPDATE operacionlibros SET motivoOL = "Capitulo grabado" , fechaOL = CURRENT_TIMESTAMP
					 WHERE operacionlibros.codOperacion = 2 AND operacionlibros.idLibro = "' . $idLibro . '" AND operacionlibros.username = "' . $userlog . '"');
			}
			return $this->render('DWESLibrosBundle:Default:capitulo.html.twig', $params);
		}
		$params = array('tituloCapitulo' => $tituloBD, 'contCapitulo' => $contBD, 'tituloLibro' => $tituloH, 'autor' => $usuarioH, 'fecha' => $fechaM);

		return $this->render('DWESLibrosBundle:Default:capitulo.html.twig', $params);
	}

	public function perfilAction()
	{
		$userlog = $this->getUser()->getUsername();		//Variable donde guardamos el usuario logeado; '.$userlog.'
		$connection = $this->get("database_connection");
		$get_info = $connection->fetchAll('SELECT * FROM usuario WHERE username = "' . $userlog . '"');
		$fotodPefil = $connection->fetchColumn('SELECT fotoPerfil FROM usuario WHERE username = "' . $userlog . '"');
		$imagen = base64_encode($fotodPefil);

		return $this->render('DWESLibrosBundle:Default:perfil.html.twig', array('test' => $get_info, 'fotoPerfil' => $imagen));

	}

	public function publicadosBibAction()
	{
		$userlog = $this->getUser()->getUsername();		//Variable donde guardamos el usuario logeado; '.$userlog.'
		$connection = $this->get("database_connection");
		$librosPub = $connection->fetchAll('SELECT * FROM libro WHERE username = "' . $userlog . '" and tipoLibro="Gratis"');
		$fotoPub = $connection->fetchAll('SELECT fotoPort FROM libro WHERE username = "' . $userlog . '" ');
		$cFotoPub = $connection->fetchAll('SELECT count(fotoPort) FROM libro WHERE username = "' . $userlog . '" ');
		/* 	foreach ($fotoPub as $productIndex => $product)
		{
			$imagen=$product;
			var_dump($imagen);
		} */



		$imagen = base64_encode($fotoPub);
		$librosFavCount = $connection->fetchColumn('SELECT count(*) FROM enbiblioteca WHERE username = "' . $userlog . '" and tipo ="Favorito"');
		$librosPubCount = $connection->fetchColumn('SELECT count(*) FROM libro WHERE username = "' . $userlog . '" and tipoLibro="Gratis"');
		$librosLisCount = $connection->fetchColumn('SELECT count(*) FROM enbiblioteca WHERE username = "' . $userlog . '" and tipo ="Lista"');
		$librosVentaCount = $connection->fetchColumn('SELECT count(*) FROM libro WHERE username = "' . $userlog . '" and tipoLibro="Anuncio"');
		$librosDeseadoCount = $connection->fetchColumn('SELECT count(*) FROM enbiblioteca WHERE username = "' . $userlog . '" and tipo="Deseado"');

		$params = array('libros' => $librosPub, 'clibrosPub' => $librosPubCount, 'clibrosFav' => $librosFavCount, 'clibrosLis' => $librosLisCount, 'cVenta' => $librosVentaCount, 'cDeseo' => $librosDeseadoCount);
		return $this->render('DWESLibrosBundle:Default:publicadosBib.html.twig', $params);
	}
	public function ventaBibAction()
	{
		$userlog = $this->getUser()->getUsername();		//Variable donde guardamos el usuario logeado; '.$userlog.'
		$connection = $this->get("database_connection");
		$librosPub = $connection->fetchAll('SELECT * FROM libro WHERE username = "' . $userlog . '" and tipoLibro="Anuncio"');
		$fotoPub = $connection->fetchAll('SELECT fotoPort FROM libro WHERE username = "' . $userlog . '" ');
		/* foreach ($fotoPub as $productIndex => $imagen) {
			$f = base64_encode($imagen);
			var_dump($imagen);
			var_dump($f);
			exit;
		}  
			*/
		//$imagen = base64_encode($fotoPub);
		$librosFavCount = $connection->fetchColumn('SELECT count(*) FROM enbiblioteca WHERE username = "' . $userlog . '" and tipo ="Favorito"');
		$librosPubCount = $connection->fetchColumn('SELECT count(*) FROM libro WHERE username = "' . $userlog . '" and tipoLibro="Gratis"');
		$librosLisCount = $connection->fetchColumn('SELECT count(*) FROM enbiblioteca WHERE username = "' . $userlog . '" and tipo ="Lista"');
		$librosVentaCount = $connection->fetchColumn('SELECT count(*) FROM libro WHERE username = "' . $userlog . '" and tipoLibro="Anuncio"');

		$librosDeseadoCount = $connection->fetchColumn('SELECT count(*) FROM enbiblioteca WHERE username = "' . $userlog . '" and tipo="Deseado"');

		$params = array('libros' => $librosPub, 'clibrosPub' => $librosPubCount, 'clibrosFav' => $librosFavCount, 'clibrosLis' => $librosLisCount, 'cVenta' => $librosVentaCount, 'cDeseo' => $librosDeseadoCount);
		return $this->render('DWESLibrosBundle:Default:ventaBib.html.twig', $params);
	}

	public function favoritoBibAction()
	{
		$userlog = $this->getUser()->getUsername();		//Variable donde guardamos el usuario logeado; '.$userlog.'
		$connection = $this->get("database_connection");
		$librosPub = $connection->fetchAll('SELECT distinct libro.username ,libro.titulo,libro.idLibro,libro.colorPortada,libro.fotoPort,libro.descripcion 
		FROM enbiblioteca,libro WHERE enbiblioteca.idLibro= libro.idLibro AND enbiblioteca.username="' . $userlog . '"
		 and enbiblioteca.tipo="Favorito" GROUP BY enbiblioteca.idLibro');


		$fotoPub = $connection->fetchAll('SELECT fotoPort FROM libro WHERE username = "' . $userlog . '" ');

		$imagen = base64_encode($fotoPub);
		$librosPubCount = $connection->fetchColumn('SELECT count(*) FROM libro WHERE username = "' . $userlog . '" and tipoLibro="Gratis"');
		$librosFavCount = $connection->fetchColumn('SELECT count(*) FROM enbiblioteca WHERE username = "' . $userlog . '" and tipo ="Favorito"');
		$librosLisCount = $connection->fetchColumn('SELECT count(*) FROM enbiblioteca WHERE username = "' . $userlog . '" and tipo ="Lista"');
		$librosVentaCount = $connection->fetchColumn('SELECT count(*) FROM libro WHERE username = "' . $userlog . '" and tipoLibro="Anuncio"');

		$librosDeseadoCount = $connection->fetchColumn('SELECT count(*) FROM enbiblioteca WHERE username = "' . $userlog . '" and tipo="Deseado"');

		$params = array('libros' => $librosPub, 'clibrosPub' => $librosPubCount, 'clibrosFav' => $librosFavCount, 'clibrosLis' => $librosLisCount, 'cVenta' => $librosVentaCount, 'cDeseo' => $librosDeseadoCount);
		return $this->render('DWESLibrosBundle:Default:favoritoBib.html.twig', $params);
	}

	public function deseadoBibAction()
	{
		$userlog = $this->getUser()->getUsername();		//Variable donde guardamos el usuario logeado; '.$userlog.'
		$connection = $this->get("database_connection");
		$librosPub = $connection->fetchAll('SELECT distinct libro.username ,libro.titulo,libro.idLibro,libro.colorPortada,libro.fotoPort,libro.descripcion 
		FROM enbiblioteca,libro WHERE enbiblioteca.idLibro= libro.idLibro AND enbiblioteca.username="' . $userlog . '"
		and enbiblioteca.tipo="Deseado" GROUP BY enbiblioteca.idLibro');


		$fotoPub = $connection->fetchAll('SELECT fotoPort FROM libro WHERE username = "' . $userlog . '" ');

		$imagen = base64_encode($fotoPub);
		$librosPubCount = $connection->fetchColumn('SELECT count(*) FROM libro WHERE username = "' . $userlog . '" and tipoLibro="Gratis"');
		$librosFavCount = $connection->fetchColumn('SELECT count(*) FROM enbiblioteca WHERE username = "' . $userlog . '" and tipo ="Favorito"');
		$librosLisCount = $connection->fetchColumn('SELECT count(*) FROM enbiblioteca WHERE username = "' . $userlog . '" and tipo ="Lista"');
		$librosVentaCount = $connection->fetchColumn('SELECT count(*) FROM libro WHERE username = "' . $userlog . '" and tipoLibro="Anuncio"');
		$librosDeseadoCount = $connection->fetchColumn('SELECT count(*) FROM enbiblioteca WHERE username = "' . $userlog . '" and tipo="Deseado"');

		$params = array('libros' => $librosPub, 'clibrosPub' => $librosPubCount, 'clibrosFav' => $librosFavCount, 'clibrosLis' => $librosLisCount, 'cVenta' => $librosVentaCount, 'cDeseo' => $librosDeseadoCount);
		return $this->render('DWESLibrosBundle:Default:deseadoBib.html.twig', $params);
	}

	public function listaBibAction()
	{
		$userlog = $this->getUser()->getUsername();		//Variable donde guardamos el usuario logeado; '.$userlog.'
		$connection = $this->get("database_connection");
		$librosPub = $connection->fetchAll('SELECT distinct libro.username ,libro.titulo,libro.idLibro,libro.colorPortada,libro.fotoPort,libro.descripcion 
		FROM enbiblioteca,libro WHERE enbiblioteca.idLibro= libro.idLibro  AND enbiblioteca.username="' . $userlog . '"
		 and enbiblioteca.tipo="Lista" GROUP BY enbiblioteca.idLibro');


		$fotoPub = $connection->fetchAll('SELECT fotoPort FROM libro WHERE username = "' . $userlog . '" ');

		$imagen = base64_encode($fotoPub);
		$librosPubCount = $connection->fetchColumn('SELECT count(*) FROM libro WHERE username = "' . $userlog . '" and tipoLibro="Gratis"');
		$librosFavCount = $connection->fetchColumn('SELECT count(*) FROM enbiblioteca WHERE username = "' . $userlog . '" and tipo ="Favorito"');
		$librosLisCount = $connection->fetchColumn('SELECT count(*) FROM enbiblioteca WHERE username = "' . $userlog . '" and tipo ="Lista"');
		$librosVentaCount = $connection->fetchColumn('SELECT count(*) FROM libro WHERE username = "' . $userlog . '" and tipoLibro="Anuncio"');

		$librosDeseadoCount = $connection->fetchColumn('SELECT count(*) FROM enbiblioteca WHERE username = "' . $userlog . '" and tipo="Deseado"');

		$params = array('libros' => $librosPub, 'clibrosPub' => $librosPubCount, 'clibrosFav' => $librosFavCount, 'clibrosLis' => $librosLisCount, 'cVenta' => $librosVentaCount, 'cDeseo' => $librosDeseadoCount);
		return $this->render('DWESLibrosBundle:Default:listaBib.html.twig', $params);
	}

	public function historiaAction($idLibro, $numCap)
	{//TODO:

		$userlog = $this->getUser()->getUsername();		//Variable donde guardamos el usuario logeado; '.$userlog.'
		$connection = $this->get("database_connection");
		$libro = $connection->fetchAll('SELECT idLibro,video,username,progreso,RestEdad,Idioma,colorPortada,nombre,titulo,tipoLibro,fotoPort, libro.descripcion as descLib  FROM libro,genero WHERE libro.idLibro = "' . $idLibro . '" and genero.idGenero=libro.idGenero');
		$capitulos = $connection->fetchAll('SELECT * FROM capitulo WHERE idLibro = "' . $idLibro . '" and estado ="Publicado" ');
		$contCapituloHTML=$connection->fetchAll('SELECT contenidoCap FROM capitulo WHERE idLibro = "' . $idLibro . '" and estado ="Publicado" ');
		$cHTML=htmlspecialchars_decode(stripslashes("<div><b>raw HTML</b></div>"));
		
		$numCapitulos = $connection->fetchColumn('SELECT count(*) FROM capitulo WHERE idLibro = "' . $idLibro . '" and estado ="Publicado" ');
		$fotoLibro = $connection->fetchColumn('SELECT fotoPort FROM libro WHERE idLibro="' . $idLibro . '"');
		$lista = $connection->fetchColumn('SELECT idLibro FROM enbiblioteca WHERE idLibro="' . $idLibro . '" and tipo ="Lista"  and username="' . $userlog . '"');
		$favorito = $connection->fetchColumn('SELECT idLibro FROM enbiblioteca WHERE idLibro="' . $idLibro . '" and tipo ="Favorito"  and username="' . $userlog . '"');
		$deseo = $connection->fetchColumn('SELECT idLibro FROM enbiblioteca WHERE idLibro="' . $idLibro . '" and tipo ="Deseado"  and username="' . $userlog . '"');
		$tipoLibro = $connection->fetchColumn('SELECT tipoLibro FROM libro WHERE idLibro="' . $idLibro . '"');
		$imagenLibro = base64_encode($fotoLibro);
		$autor = $connection->fetchAll('SELECT usuario.nombre,usuario.apellidos,usuario.biografia,libro.username 
		FROM libro,usuario WHERE usuario.username =libro.username and libro.idLibro ="' . $idLibro . '"');
		$fotoAutor = $connection->fetchColumn('SELECT fotoPerfil FROM libro,usuario WHERE usuario.username =libro.username and libro.idLibro ="' . $idLibro . '"');
		$fAutor = base64_encode($fotoAutor);
 
		$comentariosLibro = $connection->fetchAll('SELECT comentarlibro.fecha,comentarlibro.comentario,comentarlibro.numCapitulo,comentarlibro.username,usuario.nombre,usuario.apellidos
		 from comentarLibro,usuario where idLibro ="' . $idLibro . '" AND comentarlibro.username=usuario.username  AND comentarlibro.numCapitulo IS NULL  GROUP BY fecha ORDER BY fecha desc');

		$cComentLibro = $connection->fetchColumn('SELECT count(*) from comentarLibro where idLibro ="' . $idLibro . '" AND comentarlibro.numCapitulo IS NULL');

		$comentariosCap = $connection->fetchAll('SELECT comentarlibro.fecha,comentarlibro.comentario,comentarlibro.numCapitulo,comentarlibro.username,usuario.nombre,usuario.apellidos
		 from comentarLibro,usuario where idLibro ="' . $idLibro . '" AND comentarlibro.username=usuario.username  AND comentarlibro.numCapitulo IS NOT NULL 
		 and numCapitulo= "' . $numCap . '" GROUP BY fecha ORDER BY fecha desc');

		$cComentCap = $connection->fetchColumn('SELECT count(*) from comentarLibro where idLibro ="' . $idLibro . '" AND comentarlibro.numCapitulo IS NOT NULL  and numCapitulo= "' . $numCap . '"');


		$userlog = $this->getUser()->getUsername();		//Variable donde guardamos el usuario logeado; '.$userlog.'	
		$fotoUser = $connection->fetchColumn('SELECT fotoPerfil FROM usuario WHERE username ="' . $userlog . '"');
		$fUser = base64_encode($fotoUser);

		$params = array(
			'libro' => $libro, 'foto' => $imagenLibro, 'capitulos' => $capitulos,
			'numCap' => $numCapitulos, 'lista' => $lista, 'favorito' => $favorito, 'deseo' => $deseo,
			'tipoLibro' => $tipoLibro, 'autor' => $autor, 'fotoAutor' => $fAutor, 'comentarios' => $comentariosLibro, 'cComent' => $cComentLibro,
			'fUser' => $fUser, 'comentario' => '', 'comentarioCap' => '', 'comentariosCap' => $comentariosCap, 'cComentCap' => $cComentCap,'html'=>$cHTML
		);

		return $this->render('DWESLibrosBundle:Default:historia.html.twig', $params);
	}

	public function perfilHistoriaAction($idLibro)
	{
		$userlog = $this->getUser()->getUsername();		//Variable donde guardamos el usuario logeado; '.$userlog.'		
		$connection = $this->get("database_connection");	//Conexión con la BD 1º Metodo
		$libro = $connection->fetchAll('SELECT * FROM libro WHERE idLibro="' . $idLibro . '"'); //Titulo  historia (Se muestra en el Header)
		$capitulo = $connection->fetchAll('SELECT numCapitulo,tituloCap,estado,max(operacionlibros.fechaOL) actualizado
		 FROM `capitulo` INNER JOIN operacionlibros WHERE capitulo.idLibro="' . $idLibro . '" GROUP BY numCapitulo');
		$fotoLibro = $connection->fetchColumn('SELECT fotoPort FROM libro WHERE idLibro="' . $idLibro . '"');
		$tituloLibro = $connection->fetchColumn('SELECT titulo FROM libro WHERE idLibro="' . $idLibro . '"');
		$descripcionLibro = $connection->fetchColumn('SELECT descripcion FROM libro WHERE idLibro="' . $idLibro . '"');
		$trailer = $connection->fetchColumn('SELECT video FROM libro WHERE idLibro="' . $idLibro . '"');
		$imagen = base64_encode($fotoLibro);
		$G = $connection->fetchColumn('SELECT nombre FROM libro,genero WHERE libro.idLibro = "' . $idLibro . '" and genero.idGenero=libro.idGenero');//Género 

		$autor = $connection->fetchColumn('SELECT username FROM libro WHERE idLibro="' . $idLibro . '"');

		$enlaces = $connection->fetchAll('SELECT * FROM enlaces WHERE idLibro="' . $idLibro . '"');
		$params = array(
			'userlog' => $userlog, 'autor' => $autor, 'infoLibro' => $libro, 'infoCapitulo' => $capitulo, 'foto' => $imagen,
			'tituloLibro' => $tituloLibro, 'descripcionLibro' => $descripcionLibro, 'trailer' => $trailer, 'g' => $G, 'enlaceLibro' => '', 'paginaLibro' => '', 'enlaces' => $enlaces
		);

		return $this->render('DWESLibrosBundle:Default:perfilhistoria.html.twig', $params);
	}
	public function comentarLibroAction($idLibro)
	{
		$userlog = $this->getUser()->getUsername();
		$connection = $this->get("database_connection");	//Conexión con la BD 1º Metodo
		$peticion = $this->getRequest(); 	//Llamada al Form
		$comentario = $peticion->request->get('comentario');

		if ($peticion->server->get('REQUEST_METHOD') == 'POST') {
			$connection->executeUpdate('INSERT INTO comentarlibro (username, idLibro, fecha, comentario, numCapitulo) VALUES ("' . $userlog . '", "' . $idLibro . '", CURRENT_TIMESTAMP, "' . $comentario . '", NULL);');


			return $this->redirect($this->generateUrl('dwes_libros_historia', array('idLibro' => $idLibro, 'numCap' => 0)));
			
		}

	}

	public function comentarCapituloAction($idLibro, $numCap)
	{
		$userlog = $this->getUser()->getUsername();
		$connection = $this->get("database_connection");	//Conexión con la BD 1º Metodo
		$peticion = $this->getRequest(); 	//Llamada al Form
		$comentario = $peticion->request->get('comentarioCap');

		if ($peticion->server->get('REQUEST_METHOD') == 'POST') {
			$connection->executeUpdate('INSERT INTO comentarlibro (username, idLibro, fecha, comentario, numCapitulo) VALUES ("' . $userlog . '", "' . $idLibro . '", CURRENT_TIMESTAMP, "' . $comentario . '", "' . $numCap . '");');
			return $this->redirect($this->generateUrl('dwes_libros_historia', array('idLibro' => $idLibro, 'numCap' => $numCap)));
		}

	}

	public function updateDescLibroAction($idLibro)
	{
		$connection = $this->get("database_connection");	//Conexión con la BD 1º Metodo
		$peticion = $this->getRequest(); 	//Llamada al Form
		$tituloLibro = $peticion->request->get('tituloLibro');
		$descripcionLibro = $peticion->request->get('descripcionLibro');
		$trailer = $peticion->request->get('trailer');
		$fotoSubida = addslashes(file_get_contents($_FILES['file_upload']['tmp_name'])); //Imagen Subida del  usuario
		if ($peticion->server->get('REQUEST_METHOD') == 'POST') {
			$connection->executeUpdate('UPDATE libro SET fotoPort ="' . $fotoSubida . '", titulo = "' . $tituloLibro . '", descripcion = "' . $descripcionLibro . '", video = "' . $trailer . '" WHERE idLibro = "' . $idLibro . '";');

			return $this->redirect($this->generateUrl('dwes_libros_perfilhistoria', array('idLibro' => $idLibro)));
		}

		return $this->render('DWESLibrosBundle:Default:perfilhistoria.html.twig', $params);
	}

	public function addEnlaceAction($idLibro)
	{
		$connection = $this->get("database_connection");	//Conexión con la BD 1º Metodo
		$peticion = $this->getRequest(); 	//Llamada al Form
		$paginaLibro = $peticion->request->get('paginaLibro');
		$enlaceNuevo = $peticion->request->get('enlaceLibro');

		$enlace = $connection->fetchColumn('SELECT enlaceLibro FROM enlaces WHERE idLibro="' . $idLibro . '"');
		if ($peticion->server->get('REQUEST_METHOD') == 'POST') {
				//Compruebo si no existe el libo hago la insert
			if ($enlaceNuevo == $enlace) {
				return $this->redirect($this->generateUrl('dwes_libros_perfilhistoria', array('idLibro' => $idLibro)));
			} else {
				$connection->executeUpdate('INSERT INTO enlaces (idLibro, paginaLibro, enlaceLibro) VALUES ("' . $idLibro . '","' . $paginaLibro . '", "' . $enlaceNuevo . '")');
				return $this->redirect($this->generateUrl('dwes_libros_perfilhistoria', array('idLibro' => $idLibro)));
			}
		}

		return $this->render('DWESLibrosBundle:Default:perfilhistoria.html.twig', $params);
	}
	public function editarEnlaceAction($idLibro, $idEnlace)
	{
		$connection = $this->get("database_connection");	//Conexión con la BD 1º Metodo
		$peticion = $this->getRequest(); 	//Llamada al Form
		$paginaLibro = $peticion->request->get('paginaLibro');
		$enlaceNuevo = $peticion->request->get('enlaceLibro');


		if ($peticion->server->get('REQUEST_METHOD') == 'POST') {
			$connection->executeUpdate('UPDATE enlaces SET paginaLibro = "' . $paginaLibro . '", enlaceLibro = "' . $enlaceNuevo . '" WHERE idEnlace = "' . $idEnlace . '"');
			return $this->redirect($this->generateUrl('dwes_libros_perfilhistoria', array('idLibro' => $idLibro)));
		}

		return $this->render('DWESLibrosBundle:Default:perfilhistoria.html.twig', $params);
	}
	public function updateInfoLibroAction($idLibro)
	{
			/*Generos:
		0:Default
		1:Aventura
		2:Acción
		3:Terror	
		4:Fantasía
		5:Misterio
		6:Poesía
		7:Romance
		8:Drama
		 */
		$connection = $this->get("database_connection");	//Conexión con la BD 1º Metodo
		$peticion = $this->getRequest(); 	//Llamada al Form
		$progreso = $peticion->request->get('progreso');
		$genero = $peticion->request->get('genero');
		$edad = $peticion->request->get('edad');
		$idioma = $peticion->request->get('idioma');

		if ($peticion->server->get('REQUEST_METHOD') == 'POST') {


			$connection->executeUpdate('UPDATE libro SET progreso = "' . $progreso . '",idGenero= "' . $genero . '", RestEdad = "' . $edad . '", Idioma = "' . $idioma . '" WHERE idLibro = "' . $idLibro . '";');

			return $this->redirect($this->generateUrl('dwes_libros_perfilhistoria', array('idLibro' => $idLibro)));
		}

		return $this->render('DWESLibrosBundle:Default:perfilhistoria.html.twig', $params);
	}

	public function addfavoritosAction($idLibro)
	{
		$connection = $this->get("database_connection");
		$userlog = $this->getUser()->getUsername();		//Variable donde guardamos el usuario logeado; '.$userlog.'

		$capExist = $connection->fetchColumn('SELECT count(idLibro) FROM enbiblioteca WHERE idLibro = "' . $idLibro . '" and tipo ="Favorito" and username="' . $userlog . '"'); //Id genero seleccionado

		if ($capExist == 0) {
			$connection->executeUpdate('INSERT INTO enbiblioteca (username, idLibro, tipo) VALUES ("' . $userlog . '", "' . $idLibro . '", "Favorito")');

			return $this->redirect($this->generateUrl('dwes_libros_historia', array('idLibro' => $idLibro, 'numCap' => $numCap)));
			

		} else {
			//Rediriga a la página de Biblioteca con un parámetro
		//	return $this->redirect($this->generateUrl('dwes_libros_historia', array('idLibro' => $idLibro)));
			return $this->redirect($this->generateUrl('dwes_libros_historia', array('idLibro' => $idLibro, 'numCap' => 0)));
			
		}
	}
	public function delfavoritosAction($idLibro)
	{
		$connection = $this->get("database_connection");
		$userlog = $this->getUser()->getUsername();		//Variable donde guardamos el usuario logeado; '.$userlog.'

		$connection->executeUpdate('DELETE FROM enbiblioteca WHERE username = "' . $userlog . '" AND idLibro = "' . $idLibro . '" AND tipo = "Favorito"');

		return $this->redirect($this->generateUrl('dwes_libros_historia', array('idLibro' => $idLibro, 'numCap' => 0)));
		
	}

	public function addbibliotecaAction($idLibro)
	{
		$connection = $this->get("database_connection");
		$userlog = $this->getUser()->getUsername();		//Variable donde guardamos el usuario logeado; '.$userlog.'

		$capExist = $connection->fetchColumn('SELECT count(idLibro) FROM enbiblioteca WHERE idLibro = "' . $idLibro . '" and tipo ="Lista" and username="' . $userlog . '"'); //Id genero seleccionado

		if ($capExist == 0) {
			$connection->executeUpdate('INSERT INTO enbiblioteca (username, idLibro, tipo) VALUES ("' . $userlog . '", "' . $idLibro . '", "Lista")');
			
			return $this->redirect($this->generateUrl('dwes_libros_historia', array('idLibro' => $idLibro, 'numCap' => $numCap)));
			

		} else {
			//Rediriga a la página de Biblioteca con un parámetro
			return $this->redirect($this->generateUrl('dwes_libros_historia', array('idLibro' => $idLibro, 'numCap' => 0)));
			
		}

	}

	public function delbibliotecaAction($idLibro)
	{
		$connection = $this->get("database_connection");
		$userlog = $this->getUser()->getUsername();		//Variable donde guardamos el usuario logeado; '.$userlog.'

		$connection->executeUpdate('DELETE FROM enbiblioteca WHERE username = "' . $userlog . '" AND idLibro = "' . $idLibro . '" AND tipo = "Lista"');
	
		return $this->redirect($this->generateUrl('dwes_libros_historia', array('idLibro' => $idLibro, 'numCap' => 0)));
		
	}
	
	//TODO:
	public function adddeseosAction($idLibro)
	{
		$connection = $this->get("database_connection");
		$userlog = $this->getUser()->getUsername();		//Variable donde guardamos el usuario logeado; '.$userlog.'

		$capExist = $connection->fetchColumn('SELECT count(idLibro) FROM enbiblioteca WHERE idLibro = "' . $idLibro . '" and tipo ="Deseado" and username="' . $userlog . '"'); //Id genero seleccionado

		if ($capExist == 0) {
			$connection->executeUpdate('INSERT INTO enbiblioteca (username, idLibro, tipo) VALUES ("' . $userlog . '", "' . $idLibro . '", "Deseado")');
	
			return $this->redirect($this->generateUrl('dwes_libros_historia', array('idLibro' => $idLibro, 'numCap' => 0)));
			

		} else {
		//Rediriga a la página de Biblioteca con un parámetro
			
			return $this->redirect($this->generateUrl('dwes_libros_historia', array('idLibro' => $idLibro, 'numCap' => 0)));
			
		}

	}

	public function deldeseosAction($idLibro)
	{
		$connection = $this->get("database_connection");
		$userlog = $this->getUser()->getUsername();		//Variable donde guardamos el usuario logeado; '.$userlog.'

		$connection->executeUpdate('DELETE FROM enbiblioteca WHERE username = "' . $userlog . '" AND idLibro = "' . $idLibro . '" AND tipo = "Deseado"');
		
		return $this->redirect($this->generateUrl('dwes_libros_historia', array('idLibro' => $idLibro, 'numCap' => 0)));
		
	}

	public function ajustesAction()
	{

		$params = array('mensaje' => 'Este es el mensaje de bienvenida.');
		return $this->render('DWESLibrosBundle:Default:ajustes.html.twig', $params);
	}

	public function contactoAction()
	{
		$params = array('mensaje' => 'Este es el mensaje de bienvenida.');
		return $this->render('DWESLibrosBundle:Default:contacto.html.twig', $params);
	}
	public function suscripcionAction()
	{

		$em = $this->getDoctrine()->getManager(); //Llamada a la BD

		$QUERY = 'SELECT * FROM `suscripcion`'; //Consulta SQL

		$statement = $em->getConnection()->prepare($QUERY); //Preparo la consulta  
		$statement->execute(); 	//Ejecuto consulta

		$result = $statement->fetchAll(); //Obtengo los datos		
		$params = array('mensaje' => 'Este es el mensaje de bienvenida.');
		return $this->render('DWESLibrosBundle:Default:suscripcion.html.twig', array('suscripciones' => $result));
	} 

	
	public function generoAction($tipo,$idGenero)
	{
		$connection = $this->get("database_connection");
		
		if ($tipo == "anuncio") {
			$libros = $connection->fetchAll('SELECT * FROM libro WHERE idGenero = "' . $idGenero . '" and tipoLibro="Anuncio"');

			$ClibrosAventura = $connection->fetchColumn('SELECT count(*) FROM libro WHERE idGenero = 1 and tipoLibro="Anuncio"');
			$ClibrosAccion = $connection->fetchColumn('SELECT count(*) FROM libro WHERE idGenero = 2 and tipoLibro="Anuncio"');
			$ClibrosTerror = $connection->fetchColumn('SELECT count(*) FROM libro WHERE idGenero = 3 and tipoLibro="Anuncio"');
			$ClibrosFantasia = $connection->fetchColumn('SELECT count(*) FROM libro WHERE idGenero = 4 and tipoLibro="Anuncio"');
			$ClibrosMisterio = $connection-fetchColumn('SELECT count(*) FROM libro WHERE idGenero = 5 and tipoLibro="Anuncio"');
			$ClibrosPoesia = $connection->fetchColumn('SELECT count(*) FROM libro WHERE idGenero = 6 and tipoLibro="Anuncio"');
			$ClibrosRomance = $connection->fetchColumn('SELECT count(*) FROM libro WHERE idGenero = 7 and tipoLibro="Anuncio"');
			$ClibrosDrama = $connection->fetchColumn('SELECT count(*) FROM libro WHERE idGenero = 8 and tipoLibro="Anuncio"');
			
			$genero=$connection->fetchColumn('SELECT genero.nombre FROM genero,libro WHERE genero.idGenero = "' . $idGenero . '" GROUP BY genero.nombre');

			$params = array('libros' => $libros,'ClibrosAventura'=>$ClibrosAventura,'ClibrosAccion'=>$ClibrosAccion,
			'ClibrosTerror'=>$ClibrosTerror,'ClibrosFantasia'=>$ClibrosFantasia,'ClibrosMisterio'=>$ClibrosMisterio,
			'ClibrosPoesia'=>$ClibrosPoesia,'ClibrosRomance'=>$ClibrosRomance,'ClibrosDrama'=>$ClibrosDrama,'genero'=>$genero
		);
		} elseif ($tipo == "gratis") {
			$libros = $connection->fetchAll('SELECT * FROM libro WHERE idGenero = "' . $idGenero . '" and tipoLibro="Gratis"');

			$ClibrosAventura = $connection->fetchColumn('SELECT count(*) FROM libro WHERE idGenero = 1 and tipoLibro="Gratis"');
			$ClibrosAccion = $connection->fetchColumn('SELECT count(*) FROM libro WHERE idGenero = 2 and tipoLibro="Gratis"');
			$ClibrosTerror = $connection->fetchColumn('SELECT count(*) FROM libro WHERE idGenero = 3 and tipoLibro="Gratis"');
			$ClibrosFantasia = $connection->fetchColumn('SELECT count(*) FROM libro WHERE idGenero = 4 and tipoLibro="Gratis"');
			$ClibrosMisterio = $connection->fetchColumn('SELECT count(*) FROM libro WHERE idGenero = 5 and tipoLibro="Gratis"');
			$ClibrosPoesia = $connection->fetchColumn('SELECT count(*) FROM libro WHERE idGenero = 6 and tipoLibro="Gratis"');
			$ClibrosRomance = $connection->fetchColumn('SELECT count(*) FROM libro WHERE idGenero = 7 and tipoLibro="Gratis"');
			$ClibrosDrama = $connection->fetchColumn('SELECT count(*) FROM libro WHERE idGenero = 8 and tipoLibro="Gratis"');
			
			$genero=$connection->fetchColumn('SELECT genero.idGenero FROM genero,libro WHERE genero.idGenero = "' . $idGenero . '" GROUP BY genero.nombre');
			
			$params = array('libros' => $libros,'ClibrosAventura'=>$ClibrosAventura,'ClibrosAccion'=>$ClibrosAccion,
			'ClibrosTerror'=>$ClibrosTerror,'ClibrosFantasia'=>$ClibrosFantasia,'ClibrosMisterio'=>$ClibrosMisterio,
			'ClibrosPoesia'=>$ClibrosPoesia,'ClibrosRomance'=>$ClibrosRomance,'ClibrosDrama'=>$ClibrosDrama,'genero'=>$genero
		);

		}
		return $this->render('DWESLibrosBundle:Default:genero.html.twig', $params);
	}


}
?>
