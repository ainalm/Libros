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
		$params = array('username' => '', 'email' => '', 'password' => '');

		$peticion = $this->getRequest(); 	//Llamada al Form

		$username = $peticion->request->get('username');
		$email = $peticion->request->get('email');

		$password = sha1($peticion->request->get('password')); // Contraseña encriptada en la BD

		if ($peticion->server->get('REQUEST_METHOD') == 'POST') {  //Comprueba si se ha enviado el Form

			if (!empty($username) && !empty($email) && !empty($password)) {

				$connection = $this->get("database_connection");		//Conexión con la BD 
				$connection->executeUpdate('INSERT INTO usuario (id, username, nombre, fechaNacimiento, biografia,paginaWeb, fotoPerfil, apellidos, salt, password, email, isActive, tokenRegistro) VALUES (NULL, "' . $username . '", "", NULL, NULL, NULL, NULL, "", "", "' . $password . '", "' . $email . '", "1", "");');

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

		$apellidos = $peticion->request->get('apellidos');
		$fnacimiento = $peticion->request->get('fnacimiento');
		$pweb = $peticion->request->get('pweb');
		$biografia = $peticion->request->get('biografia');
		$userlog = $this->getUser()->getUsername();		//Variable donde guardamos el usuario logeado;
		$fotoSubida = addslashes(file_get_contents($_FILES["fotoSubida"]));

		if ($peticion->server->get('REQUEST_METHOD') == 'POST') {  //Comprueba si se ha enviado el Form

			$connection = $this->get("database_connection");	//Conexión con la BD 
			$connection->executeUpdate('UPDATE usuario SET nombre = "' . $nombre . '", fechaNacimiento = "' . $fnacimiento . '", biografia = "' . $biografia . '", paginaWeb = "' . $pweb . '", apellidos = "' . $apellidos . '" WHERE usuario.username = "' . $userlog . '";');

			return $this->redirect($this->generateUrl('dwes_libros_perfil'));
		}
		return $this->render('DWESLibrosBundle:Default:crearperfil.html.twig', $params);

	}

	public function describirLibAction()
	{//TODO:
		
		/* Guardo en el array los campos del form*/
		$params = array('resuHist' => '','genero'=>'');

		$peticion = $this->getRequest(); 	//Llamada al Form

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

		//Obtengo el valor de los campos del Form
		$resuHist = $peticion->request->get('resuHist');
		$genero = $peticion->request->get('genero');
		$userlog = $this->getUser()->getUsername();
		$connection = $this->get("database_connection");	//Conexión con la BD 1º Metodo
		if ($peticion->server->get('REQUEST_METHOD') == 'POST') {  //Comprueba si se ha enviado el Form
			
			$IdLibroInsertado = $connection->fetchColumn('SELECT MAX(idLibro) from libro WHERE username="' . $userlog . '"'); //Libro insertado
			
			$idGeneroSelecc=$connection->fetchColumn('SELECT idGenero from genero WHERE nombre="' . $genero . '"'); //Id genero seleccionado
			//Update descripción del último libro insertado
			$connection->executeUpdate('UPDATE libro SET descripcion = "' . $resuHist . '",idGenero="' . $idGeneroSelecc . '" WHERE libro.idLibro = "' . $IdLibroInsertado . '"');
			
		}
		
		//$params = array('Aventura'=>'','Acción'=>'','Terror'=>'','Fantasía'=>'','Misterio'=>'','Poesía'=>'','Romance'=>'','Drama'=>'');
		$params = array('titulohistoria' => '', 'titulocapitulo' => '', 'contCapitulo' => '','tituloHistoria'=>$tituloLibro,'capitulosInsertados'=>$capitulosInsertados,'resuHist'=>'');

		return $this->render('DWESLibrosBundle:Default:escribirhistoria.html.twig', $params);
	}

	public function contactoAction()
	{
		$params = array('mensaje' => 'Este es el mensaje de bienvenida.');
		return $this->render('DWESLibrosBundle:Default:contacto.html.twig', $params);
	}
	public function escribirhistoriaAction()
	{
		$userlog = $this->getUser()->getUsername();		//Variable donde guardamos el usuario logeado; '.$userlog.'
		
			/* Guardo en el array los campos del form*/
		$params = array('titulohistoria' => '', 'titulocapitulo' => '', 'contCapitulo' => '');

		$peticion = $this->getRequest(); 	//Llamada al Form

			//Obtengo el valor de los campos del Form
		$titulohistoria = $peticion->request->get('titulohistoria');
		$titulocapitulo = $peticion->request->get('titulocapitulo');
		$contCapitulo = $peticion->request->get('contCapitulo');
		$userlog = $this->getUser()->getUsername();
		$connection = $this->get("database_connection");	//Conexión con la BD 1º Metodo

		$IdLibroInsertado = $connection->fetchColumn('SELECT MAX(idLibro) from libro WHERE username="' . $userlog . '"');
			//Mostrar los datos insertados
			$tituloLibro = $connection->fetchColumn('SELECT titulo  from libro WHERE username="admin" AND idLibro = ' . $IdLibroInsertado);
		if ($peticion->server->get('REQUEST_METHOD') == 'POST') {  //Comprueba si se ha enviado el Form
			
				/* Si el título no está vacío hago 2 inserts :1º Añadir libro, 2º Registro la acción en opereacionlibro */
			if ($titulohistoria != $tituloLibro) {
				$connection->executeUpdate('INSERT INTO libro (idLibro, username, idGenero, titulo, fotoPort, descripcion) VALUES (NULL,"' . $userlog . '","0","' . $titulohistoria . '",NULL,NULL);');
				$IdLibroInsertado = $connection->fetchColumn('SELECT MAX(idLibro) from libro WHERE username="' . $userlog . '"');
				$connection->executeUpdate('INSERT INTO operacionlibros (codOperacion, idLibro, username, motivoOL) VALUES ("1","' . $IdLibroInsertado . '","' . $userlog . '","Libro Añadido")');
				$SelectultimoCapitulo = $connection->fetchColumn('SELECT MAX(numCapitulo) FROM operacionlibros, capitulo WHERE capitulo.idLibro=operacionlibros.idLibro and operacionlibros.username="' . $userlog . '" and operacionlibros.idLibro="' . $IdLibroInsertado . '"');
				$ultimoCapitulo = $SelectultimoCapitulo + 1;
					/* Inserto el capítulo */
				$connection->executeUpdate('INSERT INTO capitulo (idLibro, numCapitulo, tituloCap, contenidoCap) VALUES (' . $IdLibroInsertado . ',"' . $ultimoCapitulo . '","' . $titulocapitulo . '","' . $contCapitulo . '")');


			} else {
				/* 	Si el libro existe, le añado un capítulo */
				$IdLibroInsertado = $connection->fetchColumn('SELECT MAX(idLibro) from libro WHERE username="' . $userlog . '"');
				/* Selecciono el ultimo capítulo para incrementarlo*/
				$SelectultimoCapitulo = $connection->fetchColumn('SELECT MAX(numCapitulo) FROM operacionlibros, capitulo WHERE capitulo.idLibro=operacionlibros.idLibro and operacionlibros.username="' . $userlog . '" and operacionlibros.idLibro="' . $IdLibroInsertado . '"');
				$ultimoCapitulo = $SelectultimoCapitulo + 1;
				/* Inserto el capítulo */
				$connection->executeUpdate('INSERT INTO capitulo (idLibro, numCapitulo, tituloCap, contenidoCap) VALUES (' . $IdLibroInsertado . ',"' . $ultimoCapitulo . '","' . $titulocapitulo . '","' . $contCapitulo . '")');

			}


			
		return $this->render('DWESLibrosBundle:Default:escribirhistoria.html.twig', $params);
		}
		
		$capitulosInsertados = $connection->fetchAll('SELECT * FROM operacionlibros, capitulo WHERE capitulo.idLibro=operacionlibros.idLibro and operacionlibros.username="' . $userlog . '" and operacionlibros.idLibro="' . $IdLibroInsertado . '"');
	$params = array('titulohistoria' => '', 'titulocapitulo' => '', 'contCapitulo' => '','tituloHistoria'=>$tituloLibro,'capitulosInsertados'=>$capitulosInsertados,'resuHist'=>'');
	//$params = array('titulohistoria' => '', 'titulocapitulo' => '', 'contCapitulo' => '','tituloHistoria'=>$tituloLibro,'capitulosInsertados'=>$capitulosInsertados,'resuHist'=>'','Aventura'=>'','Acción'=>'','Terror'=>'','Fantasía'=>'','Misterio'=>'','Poesía'=>'','Romance'=>'','Drama'=>'');
		
	return $this->render('DWESLibrosBundle:Default:escribirhistoria.html.twig', $params);
	}



	public function perfilAction()
	{
		$userlog = $this->getUser()->getUsername();		//Variable donde guardamos el usuario logeado; '.$userlog.'
		$connection = $this->get("database_connection");
		$get_info = $connection->fetchAll('SELECT * FROM usuario WHERE username = "' . $userlog . '"');
		//$params = array('mensaje' => 'Este es el mensaje de bienvenida.');

		$fotodPefil = $connection->fetchColumn('SELECT fotoPerfil FROM usuario WHERE username = "' . $userlog . '"');
		//$imagen = base64_encode(stream_get_contents($fotodPefil));
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
		$em = $this->getDoctrine()->getManager(); //Llamada a la BD

        $QUERY = 'SELECT * FROM `suscripcion`'; //Consulta SQL
        
        $statement = $em->getConnection()->prepare($QUERY); //Preparo la consulta  
        $statement->execute(); 	//Ejecuto consulta

		$result = $statement->fetchAll(); //Obtengo los datos		
		$params = array('mensaje' => 'Este es el mensaje de bienvenida.');
		return $this->render('DWESLibrosBundle:Default:ajustes.html.twig', array('suscripciones' =>$result));
	}

}
?>
