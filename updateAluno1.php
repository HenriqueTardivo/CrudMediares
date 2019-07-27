<?php
//CONECTA COM O BANCO DE DADOS
require_once("abreconexao.php");
?>
<html>
<head>
<head>
<title>Alteração de Participantes</title>
</head>
<body>

<H4>Alteração de Participantes</H4>
<?php
    $sql="select * from tb_alunos where alu_codigo='$_REQUEST[alu_codigo]'";
    $rs=mysql_query($sql, $conexao) or die ("Consulta nao realizada");
    $linha=mysql_fetch_array($rs);
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

<form name="frm_clientes" method="post" action="updateAluno2.php">
   <table width="80%" border="0" cellspacing="2" cellpadding="2">
	 <tr>
		<td class="table">Codigo Aluno</td>
		<td><input type="text" name="alu_codigo" size="20" maxlength="10" required class="formulario"></td><br>
	 </tr>
     <tr>
		<td class="table">Nome</td> 
		<td><input type="text" name="alu_nome" size="50" required class="formulario"></td><br>
	 </tr>
     <tr>
		<td class="table">Idade</td> 
		<td><input type="text" name="alu_idade" size="50" required class="formulario"></td><br>
	 </tr>
     <tr>
		<td class="table">Nome do responsavel</td> 
		<td><input type="text" name="alu_nomeResponsavel" size="50" required class="formulario"></td><br>
	 </tr>
     <tr>
		<td class="table">Endereco</td> 
		<td><input type="text" name="alu_endereco" size="50" required class="formulario"></td><br>
	 </tr>
     <tr>
		<td class="table">telefone</td> 
		<td><input type="text" name="alu_telefone" size="50" required class="formulario"></td><br>
	 </tr>
     <tr>
		<td class="table">RG</td> 
		<td><input type="text" name="alu_rg" size="50" required class="formulario"></td><br>
	 </tr>
      <td colspan=2>   <input type="submit" name="atualizar" value="Atualizar Curso"></td>
    </tr>
    <tr>
   </table>
</form>
</body>
</html>
