<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);


require_onde 'C:\laragon\www\sistema_venda_web1\controller\Contato_Cliente\Contato_Cliente.php';
    

?>
   
<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Cadastro de contato_clientes - WEB I</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
   <?php
     
      $contato_cliente = new Contato_cliente;
      if(isset($_POST['Cadastrar'])):
            //$idproduto = $_POST['idproduto'];

            $idcliente = $_POST['idcliente'];
            $telefone = $_POST['telefone'];
            $email = $_POST['email'];
            $whatsapp = $_POST['whatsapp'];
           
            //$datavencimento = $_POST['datavencimento'];
            
            //$produto->setIdproduto($idproduto);
            $contato_cliente->setTelefone($telefone);
            $contato_cliente->setEmail($email);
            $contato_cliente->setIdcliente($idcliente);
            $contato_cliente->setWhatsapp($whatsapp);
      

            if($contato_cliente->insert()){
                echo "O produto com a data ". $telefone. " foi inserida com sucesso";
            }
      endif;
      //input type="submit" value="Cadastrar"
    ?>

        <fieldset>

        <form method='post' action="">            
            <br><label class="dados" for='telefone'> Telefone: </label>
            <br><input class="entrada" type="text" name="telefone"  placeholder="Digite a data da compra"/><br><br>

            <br><label class="dados" for='email'>email: </label>    
            <br><input class="entrada" type="text" name="email"/><br><br>

            <br><label class="dados" for='whatsapp'>whatsapp: </label>    
            <br><input class="entrada" type="text" name="whatsapp"/><br><br>            


             <br><br><td><button class="botao" name="Cadastrar" type="submit">Cadastrar</button></td>
            

        </form>
         </fieldset>
</body>
</html>
