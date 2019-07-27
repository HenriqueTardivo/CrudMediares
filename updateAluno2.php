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
echo $dados="update tb_alunos set alu_nome='$_POST[alu_nome]', alu_idade='$_POST[alu_idade]',
                    alu_nomeResponsavel='$_POST[alu_nomeResponsavel]' , alu_endereco='$_POST[alu_endereco]',
                    alu_telefone='$_POST[alu_telefone]', alu_rg='$_POST[alu_rg]'
  where alu_codigo='$_POST[alu_codigo]'";

$query=mysql_query($dados, $conexao) or die (mysql_error());
echo ("<h5>Os dados do cliente foram alterados com sucesso!<br><br>Aguarde um momento</h5>");
mysql_close($conexao);
?>
</body>
</html> 

