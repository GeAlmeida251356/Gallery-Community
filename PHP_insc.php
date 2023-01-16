<?php
//Conectando ao banco
include_once("PHP_conexao.php");

//traz as variáveis do formulário
$nome = $_POST["nome"];
$rm = $_POST["rm"];
$email = $_POST["email"];

	$sql = ("SELECT * FROM login WHERE rm = '$rm'");
	$resultado = @mysqli_query($conect, $sql);
	if ( @mysqli_num_rows($resultado)==0) {	
	
		//Script para inserir um registro na tabela no Banco de Dados
		$sql = "insert into login (nome,rm,email) values ('$nome','$rm','$email')";

		// executando instrução SQL
		$resultado = @mysqli_query($conect,$sql);

		if (!$resultado) {
			die('Query Inválida: ' . @mysqli_error($conect));  
		} else {
        	mysqli_close($conect);
			echo '<script type="text/javascript">
            alert("Cadastrado com Sucesso! Em breve entraremos em contatos.");
            window.history.go(-2);
        	</script>';
		}
		} else {
			echo '<script type="text/javascript">
            alert("Ops! Algo deu errado.");
			window.history.go(-1);
        	</script>';
	}

?>