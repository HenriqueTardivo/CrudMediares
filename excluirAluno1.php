<?php
//CONECTA COM O BANCO DE DADOS
require_once("abreconexao.php");
?>
<html>
<body>
Exclusão de Semestre
<head>
	<title>Henrique de Souza Olivo Tardivo 1581309</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">	
<META HTTP-EQUIV="REFRESH" CONTENT="2; URL=excluirCurso.php">
</head>
<?php
	echo $dados="delete from tb_alunos where alu_codigo='$_REQUEST[alu_codigo]'";
 	$query=mysql_query($dados, $conexao) or die (mysql_error());
	echo ("<h5>Os dados do cliente foram excluídos com sucesso!<br><br>Aguarde um momento</h5>");
	mysql_close($conexao);
?>
</body>
</html> 

