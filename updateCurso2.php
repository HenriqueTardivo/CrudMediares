<?php
//CONECTA COM O BANCO DE DADOS
require_once("abreconexao.php");
?>
<html>
<body>
<head>
<title>Alteração de Clientes</title>
<META HTTP-EQUIV="REFRESH" CONTENT="2; URL=updateCurso1.php">
</head>
<?php
echo $dados="update tb_cursos set crs_nome='$_POST[crs_nome]', crs_descricao='$_POST[crs_descricao]', crs_carga_horario='$_POST[crs_carga_horario]' , crs_horarios='$_POST[crs_horarios]'
  where crs_codigo='$_POST[crs_codigo]'";

$query=mysql_query($dados, $conexao) or die (mysql_error());
echo ("<h5>Os dados do cliente foram alterados com sucesso!<br><br>Aguarde um momento</h5>");
mysql_close($conexao);
?>
</body>
</html> 

