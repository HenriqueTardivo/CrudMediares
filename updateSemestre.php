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
$sql= "select *  from tb_semestre";
$rs =mysql_query($sql,$conexao) or die ("Consulta nao realizada");
?>
<table border='1' width='70%' class="table" cellspacing=0 cellpadding=0>
<tr>
	<th width="20%">Atualizar</th>	
	<th width="20%">Codigo</th>
	<th width="20%">Descrição</th>
	
</tr>
<?php
	while($linha=mysql_fetch_array($rs)){
	$sem_codigo=$linha["sem_codigo"];
	$sem_descricao=$linha["sem_descricao"];
		
?>
<tr>
	<td><a href="updateSemestre1.php?sem_codigo=<?php echo $sem_codigo; ?>">Alterar</a></td>
	<td><?php echo $sem_codigo;?></td>
	<td><?php echo $sem_descricao;?></td>
	

</tr>
<?php
	} 
?>
</table>
</body>
</html>
 