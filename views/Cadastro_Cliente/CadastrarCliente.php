<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
    require_once'../../controller/Clientes.php';
    require_once'../../controller/Contato_Cliente.php';
    require_once'../../controller/Endereco_cliente.php';


?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="utf-8">
	<title>cadastrar cliente</title>
</head>
<body>
  
    <form method='post' action="">

        <fieldset>
            <!--Cadastro de Cliente-->
            

             <!--Contatos de Cliente-->
            <input type="hidden" name="idcliente" value="<?php echo($idcliente=$_GET['idcliente']); ?>">

            <center><h2>contatos de cliente</h2></center>
             <br><label class="dados" for='telefone'> Telefone: </label>
            <br><input class="entrada" type="text" name="telefone"  placeholder="Digite o numero do telefone" style="width:350px;"><br><br>

            <br><label class="dados" for='email'>email: </label>    
            <br><input class="entrada" type="email" name="email" placeholder="digite o email do cliente" /><br><br>

            <br><label class="dados" for='whatsapp'>whatsapp: </label>    
            <br><input class="entrada" type="text" name="whatsapp" placeholder="digite  o numero do whatsapp do cliente" /><br><br>

                 <!--endereço do Cliente-->
                  <center><h2>endereço do cliente</h2></center>

            
            <br><label class="dados" for='cidade'> cidade: </label>
            <br><input class="entrada" type="text" name="cidade"  placeholder="Digite a cidade"><br><br>

            <br><label class="dados" for='estado'>estado: </label>    
            <br><input class="entrada" type="text" name="estado"/><br><br>

            <br><label class="dados" for='bairro'>bairro: </label>    
            <br><input class="entrada" type="text" name="bairro"/><br><br>

            <br><label class="dados" for='rua'>rua: </label>    
            <br><input class="entrada" type="text" name="rua"/><br><br>

            <br><label class="dados" for='numero'>numero: </label>    
            <br><input class="entrada" type="text" name="numero"/><br><br>

            <br><label class="dados" for='cep'>cep: </label>    
            <br><input class="entrada" type="text" name="cep"/><br><br>

                       

        </fieldset><br><br>


    	 <input class="botao" type="submit" value="finalizar cadastro" name="cadastrar"/>
        
    </form>
	</body>
</html>


<?php
      

      $endereco_cliente = new Endereco_cliente();
      $contato_cliente = new Contato_Cliente(); 
      if(isset($_POST['cadastrar'])):
            /*dados referente a cliente */
           
            /*contato cliente*/

            $telefone = $_POST['telefone'];
            $email = $_POST['email'];
            $idcliente = $_GET['idcliente'];
            $whatsapp = $_POST['whatsapp'];


            $contato_cliente->setTelefone($telefone);
            $contato_cliente->setEmail($email);
            $contato_cliente->setIdcliente($idcliente);
            $contato_cliente->setWhatsapp($whatsapp);

            if($contato_cliente->insert()){
                echo "O telefone ". $telefone. " do";
            }       

            
      endif;

      if(isset($_POST['cadastrar'])):

         /*dados referente ao endereço do cliente */
            $idcliente=$_POST['idcliente'];
            $cidade = $_POST['cidade'];
            $estado = $_POST['estado']; 
            $bairro = $_POST['bairro'];
            $rua = $_POST['rua'];
            $numero = $_POST['numero'];
            $cep = $_POST['cep'];

            $endereco_cliente->setIdcliente($idcliente);
            $endereco_cliente->setCidade($cidade);
            $endereco_cliente->setEstado($estado);
            $endereco_cliente->setBairro($bairro);
            $endereco_cliente->setRua($rua);
            $endereco_cliente->setNumero($numero);
            $endereco_cliente->setCep($cep);

            if($endereco_cliente->insert()){
                echo "O endereço do cliente ". $_POST['idcliente']. " foi inserida com sucesso";
            }
      
      endif;
     
?>



