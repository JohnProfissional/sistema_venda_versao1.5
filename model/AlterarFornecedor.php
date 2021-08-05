<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once '../controller/Fornecedor.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

	<title>Alteração de fornecedor - WEB I</title>

</head>

<body>
	<?php
		//Alterar  prateleira
		

		$idfornecedor = $_POST['idfornecedor'];
		$razaosocial = $_POST['razaosocial'];		
		$cnpj = $_POST['cnpj'];		
		$nomefantasia = $_POST['nomefantasia'];
				

		if (isset($_POST['alterarDados']));
		{
		 $fornecedor = new Fornecedor;
	
		 
		 	$fornecedor->setCnpj($cnpj);
		 	$fornecedor->setNomefantasia($nomefantasia);
		 	$fornecedor->setRazaosocial($razaosocial);
		 	$fornecedor->update($idfornecedor);

		 }

		//endif;
	?>

	<form method='post' action="">
		
        <br><label for='idfornecedor'> Fornecedor</label>
            <br><input type="text" name="idfornecedor" value="<?php echo $idfornecedor;?>"/>
		 
		<br><label for='cnpj'> cnpj: </label>
            <br><input type="text" name="cnpj" value="<?php echo $cnpj;?>"/> 

        <br><br><label for='nomefantasia'> Nome Fantasia: </label>
			<br><input type="text" name="nomefantasia" value="<?php echo $nomefantasia;?>"/>

		<br><br><label for='razaosocial'> Razão Social: </label>
			<br><input type="text" name="razaosocial" value="<?php echo $razaosocial;?>"/>

		
		<br><input type="hidden" name="idfornecedor" value="<?php echo $idfornecedor;?>"/>
		<br><br><input type="submit" value="AlterarDados"/><br>
		<br><br><br><a href=Listarfornecedor.php>Lista de fornecedor</a>

	</form>
						<!-- Fim da tabela -->

</body>
</html>