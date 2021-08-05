<?php
	//validar se o usuário está realmente logado, pra ser redirecionado do login pra cá
	session_start();

	if(isset($_SESSION['usuario']) && is_array($_SESSION['usuario'])){
		//Só inclui o arquivo de conexão se o usuário estiver logado
		require ("acoes/conexao.php");
		//adm, vai receber a session no indice usuario e vai está no primeiro indíce do array, indice 1
		$adm = $_SESSION['usuario'][1];
		$nomeusuario = $_SESSION['usuario'][0];

	}else{
		echo "<script>window.location = 'index.html'</script>";
	}
?>

<html>
<head>
	<meta charset="utf-8">
	<?php //nome do usuario exibindo no título da guia?>
	<title>Dashboard - <?php echo $nomeusuario; ?></title>
</head>
<body>
	
	<?php //Verificação pra vê se usuário é administrador?>
	<?php if($adm):	//if($adm ==1) não precisa colocar == 1, pq true é igual a 1?>

		<h4><?php echo "Seja Bem-Vindo - ADMINISTRADOR"; ?></h4>
		<h1>Lista de usuários</h1>
		<?php //criar tabela para vê os usuários que existem?>
		<fieldset>
		<table width="80%">
			<thead>				
				<tr style="font-weight: bold">
					<td>Nome do usuario</td>
					<td>Login</td>
					<td>Senha</td>
					<td>Cargo</td>
					<td>Sexo</td>
					<td>Adm</td>
					<td>Id</td>
					<?php //<td>Excluir</td> ?>
				</tr>				
			</thead>
			<tbody>
					<?php //procurar os usuarios no banco de dados, sem condicoes no select?>
					<?php
					$query = $conexao->prepare("SELECT * FROM usuario");
					$query->Execute();
					//echo $query->rowCount();
					$users = $query->fetchAll (PDO::FETCH_ASSOC);

						//Um for para repetir a estrutura da tabela, ou seja, para cada linha da tabela usuario, mudando os valores;
						for($i = 0; $i < sizeof($users); $i++):
							$usuarioAtual = $users[$i];
					?>

				<tr>
					<?php //Imprimindo os valores das variáveis?>
					<td><?php echo $usuarioAtual["nomeusuario"]; ?></td>
					<td><?php echo $usuarioAtual["login"]; ?></td>
					<td><?php echo $usuarioAtual["senha"]; ?></td>
					<td><?php echo $usuarioAtual["cargo"]; ?></td>
					<td><?php echo $usuarioAtual["sexo"]; ?></td>
					<td><?php echo $usuarioAtual["adm"]; ?></td>
					<td><?php echo $usuarioAtual["idusuario"]; ?></td>
					<?php //<td><button>Excluir</button></td> ?>
				</tr>
					<?php endfor; ?>
			</tbody>
		</table>
		</fieldset>
		<fieldset><br><a href=../views/CadastrarUsuario.php><td><button name="Cadastrar novo Usuário" type="submit">Cadastrar Usuário</button></td></a></fieldset>
		
		<br><br><a href=../login2/AdministracaodoSistema.php><td><button name="AdministracaodoSistema" type="submit">Administração do Sistema</button></td></a><br>

	<?php endif ?>

	<?php //usuario saindo da pagina que acessou, atraves do destroy da sessão que esta em logout ?>


	<br><br><a href ='acoes/logout.php'> Sair</a>
</body>
</html>