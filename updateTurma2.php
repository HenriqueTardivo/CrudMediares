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
echo $dados="update tb_turma set  trm_descricao='$_POST[trm_descricao]'
  where trm_codigo='$_POST[trm_codigo]'";

$query=mysql_query($dados, $conexao) or die (mysql_error());
echo ("<h5>Os dados do cliente foram alterados com sucesso!<br><br>Aguarde um momento</h5>");
mysql_close($conexao);
?>
</body>
</html> 

