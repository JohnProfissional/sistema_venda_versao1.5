<?php
	//Logout vai destruir a sessão e mandar o usuário de volta para index e ele fazer o login novamente se desejar.
	session_start();
	session_destroy();

	echo "<script>window.location = '../index.html'</script>";

?>