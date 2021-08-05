<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once '../controller/Devolucao.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

	<title>Alteração de Devolução - WEB I</title>

</head>

<body>
	<?php
		//Alterar  prateleira
	
		$iddevolucao = $_POST['iddevolucao'];
		$idvenda = $_POST['idvenda'];
		$quantidadedevolvida = $_POST['quantidadedevolvida'];
		$datadevolucao = $_POST['datadevolucao'];		
		$descricaodadevolucao = $_POST['descricaodadevolucao'];
				

		if (isset($_POST['alterarDados']));
		{
		 $devolucao = new Devolucao;


		 	$devolucao->setIdvenda($idvenda);
		 	$devolucao->setQuantidadedevolvida($quantidadedevolvida);
		 	$devolucao->setDatadevolucao($datadevolucao);
		 	$devolucao->setDescricaodadevolucao($descricaodadevolucao);
		 	$devolucao->update($iddevolucao);

		 }

		//endif;
	?>

	<form method='post' action="">

		<br><label for='idvenda'> Data da Venda</label>
            <br><input type="date" name="idvenda" value="<?php echo $idvenda;?>"/>   

		 <br><label for='quantidadedevolvida'> Quantidade Devolvida</label>
            <br><input type="text" name="quantidadedevolvida" value="<?php echo $quantidadedevolvida;?>"/>

		<br><label for='datadevolucao'> Data da Devolucao</label>
            <br><input type="date" name="datadevolucao" value="<?php echo $datadevolucao;?>"/>   

        <br><br><label for='descricaodadevolucao'> Descricao da Devolucao</label>
			<br><input type="text" name="descricaodadevolucao" value="<?php echo $descricaodadevolucao;?>"/>
		
		<br><input type="hidden" name="iddevolucao" value="<?php echo $iddevolucao;?>"/>
		<br><br><input type="submit" value="alterarDados"/><br>

		<br><br><br><a href=ListarDevolucao.php>Lista de Devolucao</a>

	</form>
						<!-- Fim da tabela -->

</body>
</html>