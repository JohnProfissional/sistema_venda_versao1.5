<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once '../controller/Prateleiras.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

	<title>Alteração de prateleiras - WEB I</title>

</head>

<body>
	<?php
		//Alterar  prateleira
	
		$idprateleira = $_POST['idprateleira'];
		$idcategoria = $_POST['idcategoria'];
		$descricaoprateleira = $_POST['descricaoprateleira'];		
		$quantidadefrascos = $_POST['quantidadefrascos'];
				

		if (isset($_POST['alterarDados']));
		{
		 $prateleiras = new Prateleiras;

		 	
		 	$prateleiras->setIdcategoria($idcategoria);
		 	$prateleiras->setDescricaoprateleira($descricaoprateleira);
		 	$prateleiras->setQuantidadefrascos($quantidadefrascos);
		 	$prateleiras->update($idprateleira);

		 }

		//endif;
	?>

	<form method='post' action="">
		 <br><label for='idcategoria'> Categoria</label>
            <br><input type="text" name="idcategoria" value="<?php echo $idcategoria;?>"/>
		<br><label for='descricaoprateleira'> Descrição da prateleira</label>
            <br><input type="text" name="descricaoprateleira" value="<?php echo $descricaoprateleira;?>"/>          
        <br><br><label for='quantidadefrascos'> Quantidade de frascos</label>
			<br><input type="text" name="quantidadefrascos" value="<?php echo $quantidadefrascos;?>"/>
		
		<br><input type="hidden" name="idprateleira" value="<?php echo $idprateleira;?>"/>
		<br><br><input type="submit" value="AlterarDados"/><br>
		<br><br><br><a href=ListarPrateleira.php>Lista de prateleiras</a>

	</form>
						<!-- Fim da tabela -->

</body>
</html>