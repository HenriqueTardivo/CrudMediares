<?php
require_once("abreconexao.php");
?>
<html>
<head>
	<title>Henrique de Souza Olivo Tardivo 1581309</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<table border="0">
<form name="form" action="addAluno1.php" method="post">
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
	 <tr>
	 <td class="table">Semestre&nbsp;</td>
    <td height="left"><select name="alu_semestre"  size="1" maxlength="100" class="formulario">
	<?php
		$sql= "select *  from tb_semestre order by sem_codigo";
		$rs =mysql_query($sql,$conexao) or die ("Consulta nao realizada");
		echo("<option>Escolha o semestre</option>");
		while ($linha =mysql_fetch_array($rs)){
			echo $sem_codigo=$linha["sem_codigo"];
		
			echo "<option value=$sem_codigo>$sem_codigo - $sem_codigo </option>";
		}
		echo("</select>");
	?>
	</td></tr>
	<tr>
	<td class="table">Turma&nbsp;</td>
    <td height="left"><select name="alu_turma"  size="1" maxlength="100" class="formulario">
	<?php
		$sql= "select *  from tb_turma order by trm_codigo";
		$rs =mysql_query($sql,$conexao) or die ("Consulta nao realizada");
		echo("<option>Escolha a turma</option>");
		while ($linha =mysql_fetch_array($rs)){
			echo $trm_codigo=$linha["trm_codigo"];
			
			echo "<option value=$trm_codigo>$trm_codigo - $trm_codigo  </option>";
		}
		echo("</select>");
	?>
	</td>
	</tr>
	<tr> 
		<td class="table"></td>
		<td class="table"><input type="reset" class="botao" value="Limpar">
						<input type="submit" value="Enviar" class="botao">
		</td>
	</tr>
	 
</form>
</table>
</body>
</html>