<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
    require_once'../../controller/Clientes.php';
    require_once'../../controller/Contato_Cliente.php';
    require_once'../../controller/Endereco_cliente.php';
?>

<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>cadastro de cliente</title>
</head>
<body>
    <fieldset>
        <form method="post" action="">
            <center><h2>cadastro de cliente</h2></center>
            <label class="dados" for='nomecliente'> nome do cliente:</label><br><br>
            <input class="entrada" type="text" name="nomecliente"/><br><br>

            <label class="dados" for='cpfcliente'> cpf do cliente: </label>    
            <input class="entrada" type="text" name="cpfcliente"/><br><br>

            <label class="dados" for='rgcliente'> rg do cliente: </label>    
            <input class="entrada" type="text" name="rgcliente"/><br><br>

            <label class="dados" for='sexocliente'> sexo do cliente: </label>    
            <input class="entrada" type="text" name="sexocliente"/><br><br>

            <label class="dados" for='datanascimento'> data de nascimento </label>    
            <input class="entrada" type="date" name="datanascimento"/><br><br>

            <input type="submit" name="proximo" value="proximo">
        </form>
    </fieldset>

</body>
</html>

<?php

$cliente = new Clientes;
     if(isset($_POST['proximo'])) {

         $nomecliente = $_POST['nomecliente'];
            $cpfcliente = $_POST['cpfcliente'];
            $rgcliente = $_POST['rgcliente'];
            $sexocliente = $_POST['sexocliente'];
            $datanascimento = $_POST['datanascimento'];

            $cliente->setNome($nomecliente);
            $cliente->setCpfCliente($cpfcliente);
            $cliente->setRgCliente($rgcliente);
            $cliente->setSexoCliente($sexocliente);
            $cliente->setDataNascimento($datanascimento);

             if($cliente->insert()){
                    
            }

            try {
                        $idcliente = $cliente->insert($idcliente, date("Y-m-d"), 0);
                        /*index.php?idcliente significa que vou passa o ultimo idvenda da tabela para proximo pagina
                         para proximo pagina */
                        header("Location:CadastrarCliente.php?idcliente=" . $idcliente);


                    } catch (PDOException $err) {
                        echo $err->getMessage();
                    }

    }
    

?>









