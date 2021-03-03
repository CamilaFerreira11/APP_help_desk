<?php

  session_start();




	// variavel para autenticacao
	$usuario_autenticado = false;
	
	//Usuarios do sistma 

	$usuarios_app = array(
		array('email' => 'adm@teste.com.br', 'senha' => '123456'),
		array('email' => 'user@teste.com.br', 'senha' => '123456'),

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
			}
		}

		if ($usuario_autenticado) {
			
			$_SESSION ['autenticado'] = 'SIM';
			
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