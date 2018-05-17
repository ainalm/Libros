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
		$params = array('nombre' => '', 'apellidos' => '', 'fnacimiento' => '', 'pweb' => '', 'biografia' => '', 'file_upload' => '','fotoPerfil'=>'');

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
	
			$connection->executeUpdate('UPDATE `usuario` SET fotoPerfil ="'. $fotoSubida .'" WHERE username ="'. $userlog .'" ;');

			//var_dump('INSERT INTO test(imagen) VALUES ("'. $contImagen .'");');exit;
			return $this->redirect($this->generateUrl('dwes_libros_perfil'));
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
		
		$params = array('titulohistoria' => '', 'resuHist' => '', 'genero' => '', 'file_upload' => '','colorFondo'=>'');/* Guardo en el array los campos del form*/
		$userlog = $this->getUser()->getUsername();
		$peticion = $this->getRequest(); 	//Llamada al Form
		$request->files;
		$titulohistoria = $peticion->request->get('titulohistoria'); //Obtengo el valor de los campos del Form
		$resuHist = $peticion->request->get('resuHist');
		$genero = $peticion->request->get('genero');
		$colorFondo = $peticion->request->get('colorFondo');
		$fotoSubida = addslashes(file_get_contents($_FILES['file_upload']['tmp_name'])); //Imagen Subida del  usuario
		$connection = $this->get("database_connection"); //Conexión con la BD 1º Metodo
		$idGeneroSelecc = $connection->fetchColumn('SELECT idGenero from genero WHERE nombre="' . $genero . '"'); //Id del genero seleccionado
		$numExist = $connection->fetchColumn('SELECT COUNT(titulo) FROM libro WHERE username="' . $userlog . '" and titulo="' . $titulohistoria . '" GROUP BY titulo HAVING COUNT(titulo) > 1'); //Id genero seleccionado
		$idLibro = "";
		if ($peticion->server->get('REQUEST_METHOD') == 'POST') {
				/* FIXME: Evitar meter libros duplicado */
			if (empty($numExist) && $numExist == 0) {
			/* INSERT LIBRO  CREADO*/
				if (isset($titulohistoria) && isset($resuHist) && isset($genero)) {
					//$connection->executeUpdate('UPDATE `usuario` SET fotoPerfil ="'. $fotoSubida .'" WHERE username ="'. $userlog .'" ;');
					$connection->executeUpdate('INSERT INTO libro (idLibro, username, idGenero, titulo, fotoPort, descripcion, fechaPubli, progreso, RestEdad, Idioma,colorPortada)
					VALUES (NULL, "' . $userlog . '", "' . $idGeneroSelecc . '", "' . $titulohistoria . '", "'. $fotoSubida .'", "' . $resuHist . '", CURRENT_TIMESTAMP, "En progreso", NULL, NULL,"'. $colorFondo .'");');

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

			$params = array('titulohistoria' => '', 'resuHist' => '', 'genero' => '', 'idLibro' => $idLibro);
			return $this->redirect($this->generateUrl('dwes_libros_capitulo', array('idLibro' => $idLibro,'numCapitulo'=>1)));
		}
		return $this->render('DWESLibrosBundle:Default:escribirhistoria.html.twig', $params);
	}

	public function nuevoCapAction($idLibro){
		$userlog = $this->getUser()->getUsername();
		$connection = $this->get("database_connection");
		$SelectultimoCapitulo = $connection->fetchColumn('SELECT MAX(numCapitulo) FROM capitulo WHERE idLibro =' . $idLibro . '');
			// Selecciono el ultimo capítulo para incrementarlo
				$ultimoCapitulo = $SelectultimoCapitulo + 1;
			///Hace la INSERT del capitulo
				$connection->executeUpdate('INSERT INTO capitulo ( idLibro, numCapitulo, tituloCap, contenidoCap, estado) VALUES ( "' . $idLibro . '", "' . $ultimoCapitulo . '", "", "", "Fantasma");');
			//INSERT de la operación realizada
				return $this->redirect($this->generateUrl('dwes_libros_capitulo', array('idLibro' => $idLibro,'numCapitulo'=>$ultimoCapitulo)));
	}

	public function eliminarCapAction($idLibro,$numCapitulo){
	
		$connection = $this->get("database_connection");
	
				$connection->executeUpdate('DELETE FROM capitulo WHERE capitulo.idLibro = "' . $idLibro . '" AND capitulo.numCapitulo = "' . $numCapitulo . '";');
				return $this->redirect($this->generateUrl('dwes_libros_perfilhistoria', array('idLibro' => $idLibro)));
	}
	public function eliminarLibAction($idLibro){
	
		$connection = $this->get("database_connection");
	
				$connection->executeUpdate('DELETE FROM operacionlibros WHERE idLibro = "' . $idLibro . '";');
				$connection->executeUpdate('DELETE FROM capitulo WHERE idLibro = "' . $idLibro . '";');
				$connection->executeUpdate('DELETE FROM libro WHERE idLibro = "' . $idLibro . '";');
				

			
				return $this->redirect($this->generateUrl('dwes_libros_biblioteca', array('idLibro' => $idLibro)));
	}
	public function capituloAction($idLibro,$numCapitulo)
	{
		$userlog = $this->getUser()->getUsername();		//Variable donde guardamos el usuario logeado; '.$userlog.'
		$connection = $this->get("database_connection");	//Conexión con la BD 1º Metodo
	
		$tituloH = $connection->fetchColumn('SELECT titulo FROM libro WHERE idLibro="' . $idLibro . '"'); //Titulo  historia (Se muestra en el Header)
		$usuarioH = $connection->fetchColumn('SELECT username FROM operacionlibros WHERE idLibro="' . $idLibro . '"GROUP BY username'); //Autor historia (Se muestra en el Header)
		$fechaM = $connection->fetchColumn('SELECT fechaOL FROM operacionlibros WHERE idLibro = "' . $idLibro . '" AND codOperacion = 2'); //Fecha Update
		$tituloBD=trim($connection->fetchColumn('SELECT tituloCap FROM capitulo WHERE idLibro = "' . $idLibro . '" AND numCapitulo ="' . $numCapitulo . '"')); //Título de la BD Update
		$contBD=trim($connection->fetchColumn('SELECT contenidoCap FROM capitulo WHERE idLibro = "' . $idLibro . '" AND numCapitulo ="' . $numCapitulo . '"')); //Contenido de la BD
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

	public function bibliotecaAction()
	{
		$userlog = $this->getUser()->getUsername();		//Variable donde guardamos el usuario logeado; '.$userlog.'
		$connection = $this->get("database_connection");
		$librosPub = $connection->fetchAll('SELECT * FROM libro WHERE username = "' . $userlog . '"');
		$fotoPub = $connection->fetchAll('SELECT fotoPort FROM libro WHERE username = "' . $userlog . '" ');
	/* 	foreach ($fotoPub as $productIndex => $product)
		{
			$imagen=$product;
			var_dump($imagen);
		} */
		

		$imagen = base64_encode($fotoPub);
		$librosPubCount = $connection->fetchColumn('SELECT count(*) FROM libro WHERE username = "' . $userlog . '"');
		$params = array('libros' => $librosPub,'clibros'=>$librosPubCount);
		return $this->render('DWESLibrosBundle:Default:biblioteca.html.twig', $params);
	}
	public function historiaAction($idLibro)
	{//TODO:

		$userlog = $this->getUser()->getUsername();		//Variable donde guardamos el usuario logeado; '.$userlog.'
		$connection = $this->get("database_connection");
		$libro = $connection->fetchAll('SELECT idLibro,video,username,progreso,RestEdad,Idioma,colorPortada,nombre,titulo,fotoPort, libro.descripcion as descLib FROM libro,genero WHERE libro.idLibro = "' . $idLibro . '" and genero.idGenero=libro.idGenero');
		$capitulos = $connection->fetchAll('SELECT * FROM libro,capitulo,genero WHERE libro.idLibro = capitulo.idLibro and genero.idGenero=libro.idGenero GROUP BY libro.idLibro ');

		$fotoLibro= $connection->fetchColumn('SELECT fotoPort FROM libro WHERE idLibro="' . $idLibro . '"'); 
		$imagen = base64_encode($fotoLibro);

		$params = array('libro' => $libro,'foto'=>$imagen);
		return $this->render('DWESLibrosBundle:Default:historia.html.twig', $params);
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
		$connection = $this->get("database_connection");	//Conexión con la BD 1º Metodo
		$libro = $connection->fetchAll('SELECT * FROM libro WHERE idLibro="' . $idLibro . '"'); //Titulo  historia (Se muestra en el Header)
		$capitulo=$connection->fetchAll('SELECT numCapitulo,tituloCap,estado,max(operacionlibros.fechaOL) actualizado
		 FROM `capitulo` INNER JOIN operacionlibros WHERE capitulo.idLibro="' . $idLibro . '"GROUP BY numCapitulo'); 
		$fotoLibro= $connection->fetchColumn('SELECT fotoPort FROM libro WHERE idLibro="' . $idLibro . '"'); 
		$imagen = base64_encode($fotoLibro);

		
		$params = array('infoLibro' => $libro,'infoCapitulo'=> $capitulo,'foto' => $imagen);

		return $this->render('DWESLibrosBundle:Default:perfilhistoria.html.twig', $params);
	}
}
?>
