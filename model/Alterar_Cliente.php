<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once '../controller/endereco_cliente.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <title>Alteração de cliente - WEB I</title>

</head>

<body>
    <?php
    
        $idcliente = $_POST['idcliente'];
        $Cliente = $_POST['nomecliente'];     

        if (isset($_POST['AlterarDados']));
        {
         $endereco_cliente = new Endereco_cliente;
            $cliente->setIdcliente($idcliente);
            $cliente->setcidade($nomecliente);
         }

        //endif;
    ?>

    <form method='post' action="">
        <br><label for='idcliente'> Cliente: </label>
            <br><input type="text" name="idcliente" value="<?php echo $idcliente;?>"/>
        
         
        <br><label for='Cidade'> Cidade: </label>
            <br><input type="text" name="nomecliente" value="<?php echo $nomecliente;?>"/>  

       
        
        <br><input type="hidden" name="idcliente" value="<?php echo $idcliente;?>"/>
        <br><br><input type="submit" value="AlterarDados"/><br>
        <br><br><br><a href=Listarendereco_cliente.php>Lista de cliente</a>

    </form>
                        <!-- Fim da tabela -->

</body>
</html>