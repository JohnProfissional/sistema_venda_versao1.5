<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once '../controller/Categorias.php';

?>

<!DOCTYPE HTML>
<html lang="pt-BR">

<head>
        <title>Lista de categorias de produtos - WEB I</title>
</head>

<body>
     <fieldset>
   
    <!-- Inicio da tabela -->
    <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr class="active">

                        <th>Código da categoria</th>
                        <th>Nome da categoria</th>                        
                        
                        
                    </tr>
                </thead>
                <tbody>
                    
                    <?php 
                    
                    $categoria=New Categorias;

                    //exclusao de Usuario
                    if (isset($_POST['excluir'])){
                                            
                        $idcategoria = $_POST['idcategoria'];
                        
                        $categoria->delete($idcategoria);
                    }
                                                         
                    
                    

                    foreach ($categoria->findAll() as $key => $value) { ?>
          
                    <tr>
                        <td> <?php echo $value->idcategoria;?> </td>

                        <td> <?php echo $value->nome_categoria;?> </td>

                    
                        <td>

                             

                        <form method="post" action="AlterarCategoria.php">
                            <tr>
                                <td><input name="idcategoria" type="hidden" value="<?php echo $value->idcategoria;?>"/> </td>          
                                <td><input name="nome_categoria" type="hidden" value="<?php echo $value->nome_categoria;?>"/></td> 
                                
                                
                            </tr>
                                <td><button name="alterar" type="submit">Alterar</button></td>
                                

                         </form>
<td>


                            <form method="post" >
                                <input name="idcategoria" type="hidden" value="<?php echo $value->idcategoria;?>"/>
                                <button name="excluir" type="submit" >Excluir</button>
                            </form>
                        </td>

                    </tr>
                     </fieldset>
                    <?php } ?>
                </tbody>
            </table>
            <!-- Fim da tabela -->

<br><br><br><a href=CadastrarCategoria.php><td><button name="Cadastrar nova Categoria" type="submit">Cadastrar nova Categoria</button></td></a>


    </form>

</body>
</html>
