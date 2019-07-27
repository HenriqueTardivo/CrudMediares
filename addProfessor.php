<?php
//CONECTA COM O BANCO DE DADOS
require_once("abreconexao.php");
?>
<html>
<head>
	<title>Henrique de Souza Olivo Tardivo 1581309</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

<table border="0">
<form name="form" action="addProfessor1.php" method="post">
	 <tr>
		<td class="table">Codigo Professor:</td>
		<td><input type="text" name="prf_codigo" size="20" maxlength="10" required class="formulario"></td><br>
	 </tr>
     <tr>
		<td class="table">Nome:</td> 
		<td><input type="text" name="prf_nome" size="50" required class="formulario"></td><br>
	 </tr>
     <tr>
		<td class="table">RA:</td> 
		<td><input type="text" name="prf_RA" size="50" required class="formulario"></td><br>
	 </tr>
     <tr>
     <tr>
		<td class="table">Curso utfpr:</td> 
		<td><input type="text" name="prf_cursoUTFPR" size="50" required class="formulario"></td><br>
	 </tr>
     <tr>
     <tr>
		<td class="table">Telefone:</td> 
		<td><input type="text" name="prf_telefone" size="50" required class="formulario"></td><br>
	 </tr>
     <tr>
		<td class="table">Endereco</td> 
		<td><input type="text" name="prf_endereco" size="50" required class="formulario"></td><br>
     <tr>
	 <tr>
	 <td class="table">Semestre&nbsp;</td>
    <td height="left"><select name="prf_semestre"  size="1" maxlength="100" class="formulario">
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