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
<form name="form" action="addSemestre1.php" method="post">
	 <tr>
		<td class="table">Codigo Semstre</td>
		<td><input type="text" name="sem_codigo" size="20" maxlength="10" required class="formulario"></td><br>
	 </tr>
     <tr>
		<td class="table">Descricao</td> 
		<td><input type="text" name="sem_descricao" size="50" required class="formulario"></td><br>
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