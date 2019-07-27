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
$sql= "select *  from tb_cursos";
$rs =mysql_query($sql,$conexao) or die ("Consulta nao realizada");
?>
<table border='1' width='70%' class="table" cellspacing=0 cellpadding=0>
<tr>
	<th width="20%">Excluir</th>	
	<th width="20%">Codigo</th>
</tr>
<?php
	while($linha=mysql_fetch_array($rs)){
	$crs_codigo=$linha["crs_codigo"];
    $crs_nome=$linha["crs_nome"];
    $crs_descricao=$linha["crs_descricao"];
    $crs_carga_horario=$linha["crs_carga_horario"];
    $crs_horarios=$linha["crs_horarios"];
	
?>
<tr>
	<td><a href="excluirCurso1.php?crs_codigo=<?php echo $crs_codigo; ?>"
	onclick="return confirm('Deseja excluir esse registro?')">
	Excluir</a></td>
	<td><?php echo $crs_codigo;?></td>
	<td><?php echo $crs_nome;?></td>
	<td><?php echo $crs_descricao;?></td>
    <td><?php echo $crs_carga_horario;?></td>
    <td><?php echo $crs_horarios;?></td>
</tr>
<?php
	} 
?>
</table>
</body>
</html>
 
 