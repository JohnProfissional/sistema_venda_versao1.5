<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once '../controller/contato_Fornecedor.php';
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>

	<title>Alteração de contato_cliente - WEB I</title>

</head>

<body>
	<?php
		//Alterar  prateleira
		

	
		$idfornecedor = $_POST['idfornecedor'];
		$telefone_fornecedor = $_POST['telefone_fornecedor'];		
		$Email_fornecedor = $_POST['Email_fornecedor'];
		$WhatsappFornecedor = $_POST['WhatsappFornecedor'];
				

		if (isset($_POST['alterarDados']));
		{
		 $contato_fornecedor = new Contato_fornecedor;
		 	$contato_cliente->setIdfornecedor($idfornecedor);
		 	$contato_cliente->setTelefone_fornecedor($telefone_fornecedor);
		 	$contato_cliente->settmail_fornecedor($Email_fornecedor);
		 	$contato_cliente->setthatsappFornecedor($WhatsappFornecedor);
		 	$contato_cliente->update($idcontatofornecedor);

		 }

		//endif;
	?>

	<form method='post' action="">
		<br><label for='idfornecedor'> Fornecedor: </label>
            <br><input type="text" name="idfornecedor" value="<?php echo $idfornecedor;?>"/>
        
		 
		<br><label for='telefone_fornecedor'> telefone fornecedor: </label>
            <br><input type="text" name="telefone_fornecedor" value="<?php echo $telefone_fornecedor;?>"/>  

        <br><br><label for='Email_fornecedor'> Email Fornecedor: </label>
			<br><input type="text" name="Email_fornecedor" value="<?php echo $Email_fornecedor;?>"/>

		 <br><br><label for='WhatsappFornecedor'> Whatsapp Fornecedor: </label>
			<br><input type="text" name="WhatsappFornecedor" value="<?php echo $WhatsappFornecedor;?>"/>
		
		
		<br><input type="hidden" name="idcontatofornecedor" value="<?php echo $idcontatofornecedor;?>"/>
		<br><br><input type="submit" value="AlterarDados"/><br>


		<br><br><br><a href=ListarContato_Fornecedor.php>Lista de contato_cliente</a>

	</form>
						<!-- Fim da tabela -->

</body>
</html>