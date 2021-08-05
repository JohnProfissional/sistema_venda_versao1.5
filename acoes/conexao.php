<?php
//Responsável pela conexão com o banco de dados 

	//Parâmetros
	$server = "localhost"; //Pelo Ip já conecta direto, já o localhost precisar passar pelo servidor de DNS para buscar o ip, demora!
	$usuario = "postgres";
	$senha= "123456";
	$banco = "venda";


	//MOSTRA OS ERROS
	try{ 
	$conexao = new PDO("pgsql:host=$server;dbname=$banco", $usuario, $senha);
	//Ativar relatorio de erros
	//Setar o relatorio de erros
	$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $erro){
		echo "Falha na conexão: {$erro->getMessage()}";
		//senão consegui conectar, o resultado da conexão será nulo
		$conexao = null;


	}


?> 