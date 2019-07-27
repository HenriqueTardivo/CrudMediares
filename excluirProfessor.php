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
$sql= "select *  from tb_professores";
$rs =mysql_query($sql,$conexao) or die ("Consulta nao realizada");
?>
<table border='1' width='70%' class="table" cellspacing=0 cellpadding=0>
<tr>
	<th width="20%">Excluir</th>	
	<th width="20%">Codigo</th>
	<th width="20%">RA</th>
    <th width="20%">Curso utfpr</th>
    <th width="20%">telefone</th>
	<th width="20%">endereco</th>
    <th width="20%">semestre</th>



	
</tr>
<?php
	while($linha=mysql_fetch_array($rs)){
        $prf_codigo=$linha["prf_codigo"];
        $prf_nome=$linha["prf_nome"];
        $prf_RA=$linha["prf_RA"];
        $prf_cursoUTFPR=$linha["prf_cursoUTFPR"];
        $prf_telefone=$linha["prf_telefone"];
        $prf_endereco=$linha["prf_endereco"];
        $prf_semestre=$linha["prf_semestre"];
?>
<tr>
	<td><a href="excluirProfessor1.php?prf_codigo=<?php echo $prf_codigo; ?>"
	onclick="return confirm('Deseja excluir esse registro?')">
	Excluir</a></td>
	<td><?php echo $prf_codigo;?></td>
	<td><?php echo $prf_nome;?></td>
    <td><?php echo $prf_RA;?></td>
    <td><?php echo $prf_cursoUTFPR;?></td>
    <td><?php echo $prf_telefone;?></td>
    <td><?php echo $prf_endereco;?></td>
    <td><?php echo $prf_semestre;?></td>
        
</tr>
<?php
	} 
?>
</table>
</body>
</html>
 
 