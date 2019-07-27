<?php
//CONECTA COM O BANCO DE DADOS
require_once("abreconexao.php");
?>
<html>
<body>
<head>
<title>Alteração de Clientes</title>
<META HTTP-EQUIV="REFRESH" CONTENT="2; URL=updateSemestre1.php">
</head>
<?php
echo $dados="update tb_semestre set  sem_descricao='$_POST[sem_descricao]'
  where sem_codigo='$_POST[sem_codigo]'";

$query=mysql_query($dados, $conexao) or die (mysql_error());
echo ("<h5>Os dados do cliente foram alterados com sucesso!<br><br>Aguarde um momento</h5>");
mysql_close($conexao);
?>
</body>
</html> 

