<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once '../controller/Entrada.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

	<title>Alteração de entrada - WEB I</title>

</head>

<body>
	<?php
		//Alterar  prateleira
		

		$identrada = $_POST['identrada'];
		$idusuario = $_POST['idusuario'];
		$idfornecedor = $_POST['idfornecedor'];
		$datacompra = $_POST['datacompra'];		
		$valortotaldanota = $_POST['valortotaldanota'];
				

		if (isset($_POST['alterarDados']));
		{
		 $entrada = new Entrada;
		 	$entrada->setIdusuario($idusuario);
		 	$entrada->setIdfornecedor($idfornecedor);
		 	$entrada->setDatacompra($datacompra);
		 	$entrada->setValortotaldanota($valortotaldanota);
		 	$entrada->update($identrada);

		 }

		//endif;
	?>

	<form method='post' action="">
		<br><label for='idusuario'> Usuario</label>
            <br><input type="text" name="idusuario" value="<?php echo $idusuario;?>"/>

        <br><label for='idfornecedor'> Fornecedor</label>
            <br><input type="text" name="idfornecedor" value="<?php echo $idfornecedor;?>"/>
		 
		<br><label for='datacompra'> Data da Compra</label>
            <br><input type="text" name="datacompra" value="<?php echo $datacompra;?>"/>          
        <br><br><label for='valortotaldanota'> Valor total da nota</label>
			<br><input type="text" name="valortotaldanota" value="<?php echo $valortotaldanota;?>"/>
		
		<br><input type="hidden" name="identrada" value="<?php echo $identrada;?>"/>
		<br><br><input type="submit" value="AlterarDados"/><br>
		<br><br><br><a href=ListarEntrada.php>Lista de entrada</a>

	</form>
						<!-- Fim da tabela -->

</body>
</html>