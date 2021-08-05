<?php

	require ("conexao.php");

	//Primeiramente pega os POSTS que o formulário mandou (dados do name)
	if(isset($_POST['login']) && isset($_POST['senha']) && $conexao != null){
		// select no banco, ? é usada para atribuir o valor quando executar
		$query = $conexao->prepare("SELECT * FROM usuario WHERE usuario = ? AND senha = ?");
		//usando arrays com dois indíces, para passar os valores
		$query->execute(array($_POST['usuario'], $_POST['senha']));
		//echo $query->rowCount();
		//mostra o que retornou. Row seria os resultados do select e o Count conta quanto resultados o select trouxe
		if($query->rowCount()){
			//usuario, que recebe o select fetchAll
			//indice [0], porque não terá usuarios com dados iguais
			$user = $query->fetchAll (PDO::FETCH_ASSOC)[0];
			//print_r($user);

			//sessão servirá para redirecionar os dados do usuario buscados no banco
			session_start();
			//Sessão usuario terá um array, e neste terá o nome do usuario e adm
			$_SESSION['usuario'] = array($user['nomeusuario'], $user['idnivelacesso']);

			//redirecionando estes dados solicitados na sessão para outra página específica
			echo "<script>window.location = '../dashboard.php'</script>";

		}else{
			//Senão existir este usuario ou erro de digitação, manda de volta para a pasta index
			echo "<script>window.location = '../index.html'</script>";

		}
	}else{
		//Senão tiver entrada no POST, manda de volta para o index
		echo "<script>window.location = '../index.html'</script>";
	}

?>