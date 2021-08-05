<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once '../controller/Categorias.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

	<title>Alteração de categorias - WEB I</title>

</head>

<body>
	<?php
		//Alterar Cliente

		$idcategoria = $_POST['idcategoria'];
		$nome_categoria = $_POST['nome_categoria'];
	

		if (isset($_POST['AlterarDados']));
		{
		 $categorias = new Categorias;

		 	$categorias->setNome_categoria($nome_categoria);
		 	$categorias->update($idcategoria);

		 }

		//endif;
	?>

	<form method='post' action="">
		<br><label for='nome_categoria'> Nome da categoria</label>
            <br><input type="text" name="idcategoria" value="<?php echo $nome_categoria;?>"/>        
		<input type="hidden" name="nome_categoria" value="<?php echo $idcategoria;?>"/>
		<br><br><input type="submit" value="AlterarDados"/><br>
		<br><br><br><a href=ListarCategoria.php>Lista de categorias</a>

	</form>
						<!-- Fim da tabela -->

</body>
</html>