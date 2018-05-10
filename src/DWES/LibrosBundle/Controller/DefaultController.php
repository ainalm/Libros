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
		$params = array('nombre' => '', 'apellidos' => '', 'fnacimiento' => '', 'pweb' => '', 'biografia' => '', 'fotoSubida' => '');

		$peticion = $this->getRequest(); 	//Llamada al Form

		//Obtengo el valor de los campos del Form
		$nombre = $peticion->request->get('nombre');
		$apellidos = $peticion->request->get('apellidos');
		$fnacimiento = $peticion->request->get('fnacimiento');
		$pweb = $peticion->request->get('pweb');
		$biografia = $peticion->request->get('biografia');
		$userlog = $this->getUser()->getUsername();		//Variable donde guardamos el usuario logeado;
		$fotoSubida = addslashes(file_get_contents($_FILES["fotoSubida"]));
		$connection = $this->get("database_connection");	//Conexión con la BD 
		if ($peticion->server->get('REQUEST_METHOD') == 'POST') {  //Comprueba si se ha enviado el Form

			$connection->executeUpdate('UPDATE usuario SET nombre = "' . $nombre . '", fechaNacimiento = "' . $fnacimiento . '", biografia = "' . $biografia . '", paginaWeb = "' . $pweb . '", apellidos = "' . $apellidos . '" WHERE usuario.username = "' . $userlog . '";');

			return $this->redirect($this->generateUrl('dwes_libros_perfil'));
		}
		//Relleno los datos para editar
		$nombre = $connection->fetchColumn('SELECT nombre FROM usuario WHERE username = "' . $userlog . '"');
		$apellidos = $connection->fetchColumn('SELECT apellidos FROM usuario WHERE username = "' . $userlog . '"');
		$fnacimiento = $connection->fetchColumn('SELECT fechaNacimiento FROM usuario WHERE username = "' . $userlog . '"');
		$pweb = $connection->fetchColumn('SELECT paginaWeb FROM usuario WHERE username = "' . $userlog . '"');
		$biografia = $connection->fetchColumn('SELECT biografia FROM usuario WHERE username = "' . $userlog . '"');

		$params = array('nombre' => $nombre, 'apellidos' => $apellidos, 'fnacimiento' => $fnacimiento, 'pweb' => $pweb, 'biografia' => $biografia, 'fotoSubida' => '');

		return $this->render('DWESLibrosBundle:Default:crearperfil.html.twig', $params);

	}

	public function personalizarLibAction()
	{//TODO:
		
		/* Guardo en el array los campos del form*/
		$params = array('resuHist' => '', 'genero' => '');

		$peticion = $this->getRequest(); 	//Llamada al Form

	
		 
		//Obtengo el valor de los campos del Form
		$resuHist = $peticion->request->get('resuHist');
		$genero = $peticion->request->get('genero');
		$userlog = $this->getUser()->getUsername();
		$connection = $this->get("database_connection");	//Conexión con la BD 1º Metodo
		if ($peticion->server->get('REQUEST_METHOD') == 'POST') {  //Comprueba si se ha enviado el Form

			$IdLibroInsertado = $connection->fetchColumn('SELECT MAX(idLibro) from libro WHERE username="' . $userlog . '"'); //Libro insertado

			$idGeneroSelecc = $connection->fetchColumn('SELECT idGenero from genero WHERE nombre="' . $genero . '"'); //Id genero seleccionado
			//Update descripción del último libro insertado
			$connection->executeUpdate('UPDATE libro SET descripcion = "' . $resuHist . '",idGenero="' . $idGeneroSelecc . '" WHERE libro.idLibro = "' . $IdLibroInsertado . '"');

		}

		$params = array('titulohistoria' => '', 'titulocapitulo' => '', 'contCapitulo' => '', 'tituloHistoria' => $tituloLibro, 'capitulosInsertados' => $capitulosInsertados, 'resuHist' => '');

		return $this->render('DWESLibrosBundle:Default:escribirhistoria.html.twig', $params);
	}


	public function escribirhistoriaAction()
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
		$userlog = $this->getUser()->getUsername();
		$params = array('titulohistoria' => '', 'resuHist' => '', 'genero' => '');/* Guardo en el array los campos del form*/

		$peticion = $this->getRequest(); 	//Llamada al Form

		$titulohistoria = $peticion->request->get('titulohistoria'); //Obtengo el valor de los campos del Form
		$resuHist = $peticion->request->get('resuHist');
		$genero = $peticion->request->get('genero');

		$connection = $this->get("database_connection"); //Conexión con la BD 1º Metodo
		$idGeneroSelecc = $connection->fetchColumn('SELECT idGenero from genero WHERE nombre="' . $genero . '"'); //Id del genero seleccionado
		$numExist = $connection->fetchColumn('SELECT COUNT(titulo) FROM libro WHERE username="' . $userlog . '" and titulo="' . $titulohistoria . '" GROUP BY titulo HAVING COUNT(titulo) > 1'); //Id genero seleccionado

		$idLibro = "";
		if ($peticion->server->get('REQUEST_METHOD') == 'POST') {
				/* FIXME: Evitar meter libros duplicado */
			if (empty($numExist) && $numExist == 0) {
			/* INSERT LIBRO  CREADO*/
				if (isset($titulohistoria) && isset($resuHist) && isset($genero)) {
					$connection->executeUpdate('INSERT INTO libro (idLibro, username, idGenero, titulo, fotoPort, descripcion, fechaPubli, progreso, RestEdad, Idioma)
					VALUES (NULL, "' . $userlog . '", "' . $idGeneroSelecc . '", "' . $titulohistoria . '", NULL, "' . $resuHist . '", CURRENT_TIMESTAMP, "En progreso", NULL, NULL);');

			/*	SELECT Id del libro creado */
					$idLibro = $connection->fetchColumn('SELECT idLibro FROM libro WHERE username="' . $userlog . '" and titulo="' . $titulohistoria . '"'); 	

			/* INSERT OPERACIÓN Añadir Libro */
					$connection->executeUpdate('INSERT INTO operacionlibros (codOperacion, idLibro, username, motivoOL) VALUES ("1","' . $idLibro . '","' . $userlog . '","Libro Añadido")');
			
			/*  INSERT 1º Capitulo  FANTASMA*/

					$connection->executeUpdate('INSERT INTO capitulo (idCapitulo, idLibro, numCapitulo, tituloCap, contenidoCap, estado) VALUES (0, "' . $idLibro . '", 1, 0, 0, "Fantasma");');
				}
			} else {
				var_dump("ya existe el libro");
				exit;
			}

			$params = array('titulohistoria' => '', 'resuHist' => '', 'genero' => '', 'idLibro' => $idLibro);


			return $this->redirect($this->generateUrl('dwes_libros_capitulo', array('idLibro' => $idLibro)));
		}
		return $this->render('DWESLibrosBundle:Default:escribirhistoria.html.twig', $params);
	}

	public function capituloAction($idLibro)
	{
		$userlog = $this->getUser()->getUsername();		//Variable donde guardamos el usuario logeado; '.$userlog.'
		$connection = $this->get("database_connection");	//Conexión con la BD 1º Metodo


		$tituloH = $connection->fetchColumn('SELECT titulo FROM libro WHERE idLibro="' . $idLibro . '"'); //Titulo  historia (Se muestra en el Header)
		$usuarioH = $connection->fetchColumn('SELECT username FROM operacionlibros WHERE idLibro="' . $idLibro . '"GROUP BY username'); //Autor historia (Se muestra en el Header)
		$fechaM = $connection->fetchColumn('SELECT fechaOL FROM operacionlibros WHERE idLibro = "' . $idLibro . '" AND codOperacion = 2'); //Fecha Update
		
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
				$connection->executeUpdate('UPDATE capitulo SET   tituloCap = "' . $titulocapitulo . '", contenidoCap = "' . $contCapitulo . '" , estado = "Borrador" 
					WHERE capitulo.idLibro = "' . $idLibro . '" AND capitulo.numCapitulo = "' . $SelectultimoCapitulo . '";');
				/* UPDATE OPERACIÓN INSERTAR */
				$connection->executeUpdate('UPDATE operacionlibros SET motivoOL = "Capitulo grabado" , fechaOL = CURRENT_TIMESTAMP
					 WHERE operacionlibros.codOperacion = 2 AND operacionlibros.idLibro = "' . $idLibro . '" AND operacionlibros.username = "' . $userlog . '"');
			}

			return $this->render('DWESLibrosBundle:Default:capitulo.html.twig', $params);
		}

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

	public function bibliotecaAction()
	{
		$params = array('mensaje' => 'Este es el mensaje de bienvenida.');
		return $this->render('DWESLibrosBundle:Default:biblioteca.html.twig', $params);
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
	public function perfilHistoriaAction($idLibro)
	{
		$params = array('mensaje' => 'Este es el mensaje de bienvenida.');
		return $this->render('DWESLibrosBundle:Default:perfilhistoria.html.twig', $params);
	}
}
?>
