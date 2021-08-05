<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once '../controller/endereco_cliente.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

	<title>Alteração de endereco_cliente - WEB I</title>

</head>

<body>
	<?php
	
		

	
		$idcliente = $_POST['idcliente'];
		$Cidade = $_POST['Cidade'];		
		$Estado = $_POST['Estado'];
		$Bairro = $_POST['Bairro'];
	    $Rua = $_POST['Rua'];
        $Numero = $_POST['Numero'];
        $CEP = $_POST['CEP'];

		if (isset($_POST['alterarDados']));
		{
		 $endereco_cliente = new Endereco_cliente;
		 	$endereco_cliente->setIdcliente($idcliente);
		 	$endereco_cliente->setcidade($Cidade);
		 	$endereco_cliente->setestado($Estado);
		 	$endereco_cliente->setbairro($Bairro);
		 	$endereco_cliente->update($idendereco_cliente);
		 	$endereco_cliente->setrua($Rua);
            $endereco_cliente->setnumero($Numero);
            $endereco_cliente->setcEP($CEP);
      

		 }

		//endif;
	?>

	<form method='post' action="">
		<br><label for='idcliente'> Cliente: </label>
            <br><input type="text" name="idcliente" value="<?php echo $idcliente;?>"/>
        
		 
		<br><label for='Cidade'> Cidade: </label>
            <br><input type="text" name="Cidade" value="<?php echo $Cidade;?>"/>  

        <br><br><label for='Estado'> Estado: </label>
			<br><input type="text" name="Estado" value="<?php echo $Estado;?>"/>

		 <br><br><label for='Bairro'> Bairro: </label>
			<br><input type="text" name="Bairro" value="<?php echo $Bairro;?>"/>

		<br><br><label for='Rua'> Rua: </label>
			<br><input type="text" name="Rua" value="<?php echo $Rua;?>"/>

		<br><br><label for='Numero'> Numero: </label>
			<br><input type="text" name="Numero" value="<?php echo $Numero;?>"/>


		<br><br><label for='CEP'> CEP: </label>
			<br><input type="text" name="CEP" value="<?php echo $CEP;?>"/>
		
		
		<br><input type="hidden" name="idendereco_cliente" value="<?php echo $idendereco_cliente;?>"/>
		<br><br><input type="submit" value="AlterarDados"/><br>
		<br><br><br><a href=Listarendereco_cliente.php>Lista de endereco_cliente</a>

	</form>
						<!-- Fim da tabela -->

</body>
</html>