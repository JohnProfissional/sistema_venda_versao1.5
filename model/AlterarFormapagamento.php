<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once '../controller/Formapagamentos.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

	<title>Alteração de formas de pagamento - WEB I</title>

</head>

<body>
	<?php
		//Alterar Cliente

		$idforma_de_pagamento = $_POST['idforma_de_pagamento'];
		$tipo_pagamento = $_POST['tipo_pagamento'];
	

		if (isset($_POST['alterarDados']));
		{
		 $formaspagamento = new Formaspagamentos;

		 	$formaspagamento->setTipo_pagamento($tipo_pagamento);
		 	$formaspagamento->update($idforma_de_pagamento);

		 }

		//endif;
	?>

	<form method='post' action="">
		<br><label for='tipo_pagamento'> Tipo do pagamento</label>
            <br><input type="text" name="tipo_pagamento" value="<?php echo $tipo_pagamento;?>"/>        
		<input type="hidden" name="idforma_de_pagamento" value="<?php echo $idforma_de_pagamento;?>"/>
		<br><br><input type="submit" value="AlterarDados"/><br>
		<br><br><br><a href=ListarFormapagamento.php>Lista de formas de pagamentos</a>
		

	</form>
						<!-- Fim da tabela -->

</body>
</html>