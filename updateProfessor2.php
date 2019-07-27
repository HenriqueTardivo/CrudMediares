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
echo $dados="update tb_professores set prf_nome='$_POST[prf_nome]', prf_RA='$_POST[prf_RA]',
                prf_cursoUTFPR='$_POST[prf_cursoUTFPR]' , prf_telefone='$_POST[prf_telefone]',
                prf_endereco='$_POST[prf_endereco]'
  where prf_codigo='$_POST[prf_codigo]'";

$query=mysql_query($dados, $conexao) or die (mysql_error());
echo ("<h5>Os dados do cliente foram alterados com sucesso!<br><br>Aguarde um momento</h5>");
mysql_close($conexao);
?>
</body>
</html> 

