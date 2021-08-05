<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once '../controller/Contato_Cliente.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

	<title>Alteração de contato_cliente - WEB I</title>

</head>

<body>
	<?php
		//Alterar  prateleira
		
		$idcliente = $_POST['idcliente'];
		$idcontatocliente = $_POST['idcontatocliente'];
		$telefone = $_POST['telefone'];		
		$email = $_POST['email'];
		$whatsapp = $_POST['whatsapp'];
				

		if (isset($_POST['alterarDados']));
		{
		 	$contato_cliente = new Contato_cliente;

		 	$contato_cliente->setIdcliente($idcliente);
		 	$contato_cliente->setIdcontatocliente($idcontatocliente);
		 	$contato_cliente->setTelefone($telefone);
		 	$contato_cliente->setEmail($email);
		 	$contato_cliente->setWhatsapp($whatsapp);
		 	$contato_cliente->update($idcontatocliente);

		 }

		//endif;
	?>

	<form method='post' action="">
		<br><label for='idcliente'> Cliente: </label>
            <br><input type="text" name="idcliente" value="<?php echo$idcliente;?>"/>
        
		 
		<br><label for='telefone'> Telefone: </label>
            <br><input type="text" name="telefone" value="<?php echo$telefone;?>"/>  

        <br><br><label for='email'> email: </label>
			<br><input type="text" name="email" value="<?php echo$email;?>"/>

		 <br><br><label for='whatsapp'> whatsapp: </label>
			<br><input type="text" name="whatsapp" value="<?php echo$whatsapp;?>"/>
		
		
		<br><input type="hidden" name="idcontatocliente" value="<?php echo 
$idcontatocliente;?>"/>

		<br><br><input type="submit" value="AlterarDados"/><br>
		<br><br><br><a href=Listarcontato_cliente.php>Lista de contato_cliente</a>

	</form>
						<!-- Fim da tabela -->

</body>
</html>