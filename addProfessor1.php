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
   $SqlSit2 = "INSERT into tb_professores";
   $SqlSit2 = $SqlSit2 . "(prf_codigo, prf_nome, prf_RA, prf_cursoUTFPR, prf_telefone, prf_endereco, prf_semestre)";
   echo $SqlSit2 = $SqlSit2 . " values ('$_POST[prf_codigo]','$_POST[prf_nome]','$_POST[prf_RA]', '$_POST[prf_cursoUTFPR]', '$_POST[prf_telefone]', '$_POST[prf_endereco]', '$_POST[prf_semestre]') ";
   $rsSit2 = mysql_query($SqlSit2, $conexao) or die (mysql_error());
   echo ("<br><br><hr><br><br><h5><img src='imagens/sucesso.gif' border=0>Cadastrado com sucesso.<br><br>Aguarde um momento</h5><br><br><hr>");
   //echo ("<META HTTP-EQUIV='REFRESH' CONTENT='1; URL=formulario.php'>");
    }   
   mysql_close($conexao);
?>
</body>
</html> 
