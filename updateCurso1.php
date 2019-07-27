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
    $sql="select * from tb_cursos where crs_codigo='$_REQUEST[crs_codigo]'";
    $rs=mysql_query($sql, $conexao) or die ("Consulta nao realizada");
    $linha=mysql_fetch_array($rs);
        $crs_codigo=$linha["crs_codigo"];
        $crs_nome=$linha["crs_nome"];
        $crs_descricao=$linha["crs_descricao"];
        $crs_carga_horario=$linha["crs_carga_horario"];

        $crs_horarios=$linha["crs_horarios"];
?>

<form name="frm_clientes" method="post" action="updateCurso2.php">
   <table width="80%" border="0" cellspacing="2" cellpadding="2">
   <tr>
     <td>Codigo Curso</td>
     <td><input type="text" name="crs_codigo" value="<?php echo $crs_codigo; ?>" size="5" READONLY></td>
    </tr>
   <tr>
   <tr>
     <td>Nome</td>
     <td><input type="text" name="crs_nome" value="<?php echo $crs_nome; ?>" size="5" READONLY></td>
    </tr>
   <tr>
   <tr>
     <td>Descrição</td>
     <td><input type="text" name="crs_descricao" value="<?php echo $crs_descricao; ?>" size="5" READONLY></td>
    </tr>
   <tr>
   <tr>
     <td>Carga Horaria</td>
     <td><input type="text" name="crs_carga_horario" value="<?php echo $crs_carga_horario; ?>" size="5" READONLY></td>
    </tr>
   <tr>    
     <td>Horarios</td>
     <td><input type="text" name="crs_horarios" value="<?php echo $crs_horarios; ?>" size="35"></td>
    </tr>
	<tr>
      <td colspan=2>   <input type="submit" name="atualizar" value="Atualizar Curso"></td>
    </tr>
    <tr>
   </table>
</form>
</body>
</html>
