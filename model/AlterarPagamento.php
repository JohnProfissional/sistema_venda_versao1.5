<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once '../controller/Pagamentos.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

	<title>Alteração de pagamentos - WEB I</title>

</head>

<body>
	<?php
		//Alterar Cliente

		$idpagamento = $_POST['idpagamento'];
		$idparcelas = $_POST['idparcelas'];
		$idforma_de_pagamento = $_POST['idforma_de_pagamento'];
		$valor_pagamento = $_POST['valor_pagamento'];
		$data_pagamento = $_POST['data_pagamento'];
		$numerosdeparcelas = $_POST['numerosdeparcelas'];
		

		if (isset($_POST['alterarDados']));
		{
		 $pagamento = new Pagamentos;

		 	$pagamento->setIdparcelas($idparcelas);
		 	$pagamento->setIdforma_de_pagamento($idforma_de_pagamento);
		 	$pagamento->setValor_pagamento($valor_pagamento);
		 	$pagamento->setData_pagamento($data_pagamento);
		 	$pagamento->setNumerosdeparcelas($numerosdeparcelas);
		 	$pagamento->update($idpagamento);

		 }

		//endif;
	?>

	<form method='post' action="">
		<br><label for='idparcelas'> Parcelas</label>
            <br><input type="text" name="idparcelas" value="<?php echo $idparcelas;?>"/>
		<br><br><label for='idforma_de_pagamento'> Forma_de_pagamento</label>
			<br><input type="text" name="idforma_de_pagamento" value="<?php echo $idforma_de_pagamento;?>"/>
		<br><br><label for='valor_pagamento'> Valor_pagamento</label>
			<br><input type="text" name="valor_pagamento" value="<?php echo $valor_pagamento;?>"/>
		<br><br><label for='data_pagamento'> Data_pagamento</label>
			<br><input type="text" name="data_pagamento" value="<?php echo $data_pagamento;?>"/>
		<br><br><label for='numerosdeparcelas'> Numeros de parcelas</label>
			<br><input type="text" name="numerosdeparcelas" value="<?php echo $numerosdeparcelas;?>"/>
		
		<input type="hidden" name="idpagamento" value="<?php echo $idpagamento;?>"/>
		<br><br><input type="submit" value="AlterarDados"/><br>
		<br><br><br><a href=ListarPagamento.php>Lista de pagamentos</a>

	</form>
						<!-- Fim da tabela -->

</body>
</html>