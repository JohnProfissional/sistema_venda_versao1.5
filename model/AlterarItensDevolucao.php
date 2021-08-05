<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once '../controller/ItensDevolucao.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

	<title>Alteração de Itens da Devolucao - WEB I</title>

</head>

<body>
	<?php
		//Alterar  prateleira
	
		$iditensdevolucao = $_POST['iditensdevolucao'];
		$iddevolucao = $_POST['iddevolucao'];
		$idproduto = $_POST['idproduto'];		
		$quantidade_devolvida = $_POST['quantidade_devolvida'];
		$datadevolvida = $_POST['datadevolvida'];
				

		if (isset($_POST['alterarDados']));
		{
		 $itensdevolucao = new ItensDevolucao;

		 	
		 	$itensdevolucao->setIddevolucao($iddevolucao);
		 	$itensdevolucao->setIdproduto($idproduto);
		 	$itensdevolucao->setQuantidade_devolvida($quantidade_devolvida);
		 	$itensdevolucao->setDatadevolvida($datadevolvida);
		 	$itensdevolucao->update($iditensdevolucao);

		 }

		//endif;
	?>

	<form method='post' action="">
		 <br><label for='iddevolucao'> Devolucao</label>
            <br><input type="text" name="iddevolucao" value="<?php echo $iddevolucao;?>"/>

		<br><label for='idproduto'> Produto</label>
            <br><input type="text" name="idproduto" value="<?php echo $idproduto;?>"/>     

        <br><br><label for='quantidade_devolvida'> Quantidade de Itens Devolvido</label>
			<br><input type="text" name="quantidade_devolvida" value="<?php echo $quantidade_devolvida;?>"/>

		<br><br><label for='datadevolvida'> Data de Itens Devolvido</label>
			<br><input type="date" name="datadevolvida" value="<?php echo $datadevolvida;?>"/>
		
		<br><input type="hidden" name="iditensdevolucao" value="<?php echo $iditensdevolucao;?>"/>
		<br><br><input type="submit" value="alterarDados"/><br>
		<br><br><br><a href=ListarItensDevolucao.php>Lista de Itens Devolucao</a>

	</form>
						<!-- Fim da tabela -->

</body>
</html>