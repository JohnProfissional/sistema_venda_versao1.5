<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once '../controller/Marcas.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

	<title>Alteração de marcas - WEB I</title>

</head>

<body>
	<?php
		//Alterar Cliente

		$idmarca = $_POST['idmarca'];
		$nomemarca = $_POST['nomemarca'];
	

		if (isset($_POST['alterarDados']));
		{
		 $marcas = new Marcas;

		 	$marcas->setNomemarca($nomemarca);
		 	$marcas->update($idmarca);

		 }

		//endif;
	?>

	<form method='post' action="">
		<br><label for='nomemarca'> Nome da marca</label>
            <br><input type="text" name="nomemarca" value="<?php echo $nomemarca;?>"/>        
		<input type="hidden" name="idmarca" value="<?php echo $idmarca;?>"/>
		<br><br><input type="submit" value="AlterarDados"/><br>
		<br><br><br><a href=ListarMarca.php>Lista de marcas</a>
		

	</form>
						<!-- Fim da tabela -->

</body>
</html>