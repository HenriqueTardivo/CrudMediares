<?php
require_once("abreconexao.php");
?>
<html>
<head>
<title>Henrique de Souza Olivo Tardivo 1581309</title>
<link rel="stylesheet" type="text/css" href="estilo.css">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
</head>
<body>
<h4> Formulário de Exclusão de Itens </h4>
<?php
//codigo do evento
$sql= "select *  from tb_turma";
$rs =mysql_query($sql,$conexao) or die ("Consulta nao realizada");
?>
<table border='1' width='70%' class="table" cellspacing=0 cellpadding=0>
<tr>
	<th width="20%">Atualizar</th>	
	<th width="20%">Codigo</th>
	<th width="20%">Descrição</th>
	<th width="20%">Curso</th>
	<th width="20%">Semestre</th>
</tr>
<?php
	while($linha=mysql_fetch_array($rs)){
	$cod_nota=$linha["trm_codigo"];
	$nome=$linha["trm_descricao"];
	$telefone=$linha["trm_curso"];
	$email=$linha["trm_semestre"];
	
?>
<tr>
	<td><a href="updateTurma1.php?trm_codigo=<?php echo $trm_codigo; ?>">Alterar</a></td>
	<td><?php echo $trm_codigo;?></td>
	<td><?php echo $trm_descricao;?></td>
	<td><?php echo $trm_curso;?></td>
	<td><?php echo $trm_semestre;?></td>

</tr>
<?php
	} 
?>
</table>
</body>
</html>
 