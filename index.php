<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'controller/Usuario.php';

?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="views/css/style.css">
     
   <script src="views/js/script.js"></script>
    <script src="views/js/jquery-3.6.0.min.map"></script>
    <meta charset="utf-8">
    <title>Sistema de Vendas</title>
</head>
<head class="cabecario">
    <h1>Perfume Shop</h1>
</head>
<body class="conteudo">
  

    <fieldset class="tela_login" style="width: 400px;">
        <center> <h1>Perfume Shop</h1><img src="views/imagem/logo-sistema.JPG" width="150px"> </center>
        
   
            <form class="tela-login" method="post" action="acoes/login.php">

                 <label class="dados-login" for='usuario'> Usuario </label>    
                    <input class="entra-login" type="text" name="usuario" placeholder="digite o nome de usuario"><br><br>

                 <label class="dados-login" for='senha'> Senha </label>    
                    <input  class="entra-login" type="password" name="senha" placeholder="Digite sua senha"><br><br>
                
            <center><input class="botao-login" type="submit" value="logar" name="logar"/> </center>
                 
                
            </form>
    </fieldset>

   
</body>
</html>
   <?php
      /*
          $Usuario = new Usuarios;
      if(isset($_POST['logar'])):


            $usuario =addslashes($_POST['usuario']);
            $senha =addslashes($_POST['senha']);

            $Usuario->setUsuario($usuario);
            $Usuario->setSenha($senha);

            if (!empty($usuario) && !empty($senha)) {
                if ($Usuario->logar()) {
                header("Location:views/Realizas_Vendas/index.php");
            }
                
                
            }
              else{
                echo "preencha todos os campos";
            }

            
            

      endif;
    */
    ?>
