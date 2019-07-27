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
<form name="form" action="addCurso1.php" method="post">
	 <tr>
		<td class="table">Codigo Curso</td>
		<td><input type="text" name="crs_codigo" size="20" maxlength="10" required class="formulario"></td><br>
	 </tr>
     <tr>
		<td class="table">Nome</td> 
		<td><input type="text" name="crs_nome" size="50" required class="formulario"></td><br>
	 </tr>
	 <tr>
		<td class="table">Descricao</td>
		<td><input type="text" name="crs_descricao" size="50" maxlength="10" required class="formulario"></td><br>
	 </tr>
     <tr>
		<td class="table">Carga Horaria</td> 
		<td><input type="text" name="crs_carga_horario" size="50" required class="formulario"></td><br>
	 </tr>
	 <tr>
		<td class="table">Horarios</td>
		<td><input type="text" name="crs_horarios" size="20" maxlength="10" required class="formulario"></td><br>
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