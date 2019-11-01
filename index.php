<?php
//session_start();


if($_GET){
		$url = explode('/', $_GET['url']);
		$urlReal = 'view/'.$url[0].'.php';

		if (file_exists($urlReal)){
			if (
				$urlReal == 'view/paginaBloqueio.php' 		||
				$urlReal == 'view/paginaErro500.php' 		||
				$urlReal == 'view/paginaLogin.php' 			||
				$urlReal == 'view/paginaEsqueceuSenha.php' 	||
				$urlReal == 'view/paginaLogout.php' 		||
				$urlReal == 'view/paginaPerfil.php' 		||
				$urlReal == 'view/paginaRegistro.php') {
				require_once $urlReal;
			}else{
				require_once 'header.php';
				require_once $urlReal;
				require_once 'footer.php'; 

			}
		}else{
			header('Location: view/paginaErro404.php');
		}
	}else{
		require_once 'header.php';
		require_once 'view/index.php';		
		require_once 'footer.php';
	}

?>