<?php
require_once("abreconexao.php");
?>


<html>
<head>
	<title>Henrique de Souza Olivo Tardivo 1581309</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
  <h5>VocÊ preencheu todos os campos. <a href='javascript:history.back(1);'><img src="icones/Arrow_left.png" border=0></a></h5>
<?php
{
   $SqlSit2 = "INSERT into tb_cursos";
   $SqlSit2 = $SqlSit2 . "(crs_codigo, crs_nome, crs_descricao, crs_carga_horario, crs_horarios)";
   echo $SqlSit2 = $SqlSit2 . "values ('$_POST[crs_codigo]', '$_POST[crs_nome]', '$_POST[crs_descricao]', '$_POST[crs_carga_horario]', '$_POST[crs_horarios]')";
   $rsSit2 = mysql_query($SqlSit2, $conexao) or die (mysql_error());
   echo ("<br><br><hr><br><br><h5><img src='imagens/sucesso.gif' border=0>Cadastrado com sucesso.<br><br>Aguarde um momento</h5><br><br><hr>");
   //echo ("<META HTTP-EQUIV='REFRESH' CONTENT='1; URL=formulario.php'>");
    }   
   mysql_close($conexao);
?>
</body>
</html> 