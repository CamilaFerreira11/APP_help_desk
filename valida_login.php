<?php

  session_start();




	// variavel para autenticacao
	$usuario_autenticado = false;
	$usuario_id = null;
	$usuario_perfil_id = null;

	$perfis = array(1 => 'Adminstradores', 2 => 'Padrão');
	
	//Usuarios do sistma 

	$usuarios_app = array(
		array('id' => 1, 'email' => 'adm@teste.com.br', 'senha' => '123456', 'perfil_id' => 1),
		array('id' => 2, 'email' => 'user@teste.com.br', 'senha' => '123456', 'perfil_id' => 2),
		array('id' => 3, 'email' => 'maria@teste.com.br', 'senha' => '123456', 'perfil_id' => 2),
		array('id' => 4, 'email' => 'jose@teste.com.br', 'senha' => '123456', 'perfil_id' => 2),
		);

/*
	echo '<pre>';
	print_r($usuarios_app);

	echo '</pre>'; 

*/	

	foreach ($usuarios_app as $user) {
		
		/*		echo 'Usuarios app: ' .$user['email'] . '/' .$user['senha'];

		echo '<br />';

		echo 'Usuarios app: ' .$_POST['email'] . '/' .$_POST['senha'];
*/


		// comparar valores

		if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
			$usuario_autenticado = true;
			$usuario_id = $user['id'];
			$usuario_perfil_id = $user['perfil_id'];
			}
		}

		if ($usuario_autenticado) {
			
			$_SESSION ['autenticado'] = 'SIM';
			$_SESSION ['id'] = $usuario_id;
			$_SESSION ['perfil_id'] = $usuario_perfil_id;
			header('location: home.php');

		}	
		else {
			$_SESSION ['autenticado'] = 'NÃO';
			header('location: index.php?login=erro');
			
		}
	

			
		
	





/* --- SUPER GLOBAL GET -- ARRAY

	print_r($_GET);

	echo '<br />';

	echo $_GET['email'];

	echo '<br />';

	echo $_GET['senha'];
*/

	
/*	print_r ($_POST);


	echo '<br />';

	echo $_POST ['email'];

	echo '<br />';

	echo $_POST ['senha'];
*/	


?>