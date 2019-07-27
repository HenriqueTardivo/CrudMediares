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
$sql= "select *  from tb_alunos";
$rs =mysql_query($sql,$conexao) or die ("Consulta nao realizada");
?>
<table border='1' width='70%' class="table" cellspacing=0 cellpadding=0>
<tr>
	<th width="20%">Atualizar</th>	
	<th width="20%">Codigo</th>
	<th width="20%">Nome</th>
    <th width="20%">Idade</th>
	<th width="20%">Nome responsavel</th>
	<th width="20%">endereco</th>
    <th width="20%">Telefone</th>
    <th width="20%">rg</th>
    <th width="20%">turma</th>
    <th width="20%">semestre</th>


</tr>
<?php
	while($linha=mysql_fetch_array($rs)){
    $alu_codigo=$linha["alu_codigo"];
    $alu_nome=$linha["alu_nome"];
    $alu_idade=$linha["alu_idade"];
    $alu_nomeResponsavel=$linha["alu_nomeResponsavel"];
    $alu_endereco=$linha["alu_endereco"];
    $alu_telefone=$linha["alu_telefone"];
    $alu_rg=$linha["alu_rg"];
    $alu_turma=$linha["alu_turma"];
    $alu_semestre=$linha["alu_semestre"];
	
?> 

<tr>
	<td><a href="updateAluno1.php?alu_codigo=<?php echo $alu_codigo; ?>">Alterar</a></td>
	<td><?php echo $alu_codigo;?></td>
	<td><?php echo $alu_nome;?></td>
    <td><?php echo $alu_idade;?></td>
    <td><?php echo $alu_nomeResponsavel;?></td>
	<td><?php echo $alu_endereco;?></td>
    <td><?php echo $alu_telefone;?></td>
    <td><?php echo $alu_rg;?></td>
    <td><?php echo $alu_turma;?></td>
    <td><?php echo $alu_semestre;?></td>    
</tr>
<?php
	} 
?>
</table>
</body>
</html>
 