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
<form name="form" action="addTurma1.php" method="post">
	 <tr>
		<td class="table">Codigo Turma</td>
		<td><input type="text" name="trm_codigo" size="20" maxlength="10" required class="formulario"></td><br>
	 </tr>
     <tr>
		<td class="table">Descricao</td> 
		<td><input type="text" name="trm_descricao" size="50" required class="formulario"></td><br>
	 </tr>
	 <tr>
	<td class="table">Curso&nbsp;</td>
    <td height="left"><select name="trm_curso"  size="1" maxlength="100" class="formulario">
	<?php
		$sql= "select *  from tb_cursos order by crs_codigo";
		$rs =mysql_query($sql,$conexao) or die ("Consulta nao realizada");
		echo("<option>Escolha o curso</option>");
		while ($linha =mysql_fetch_array($rs)){
			echo $crs_codigo=$linha["crs_codigo"];
			
			echo "<option value=$crs_codigo>$crs_codigo - $crs_codigo </option>";
		}
		echo("</select>");
	?>
	</td>
	</tr>
    <tr>
	<td class="table">Semestre&nbsp;</td>
    <td height="left"><select name="trm_semestre"  size="1" maxlength="100" class="formulario">
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