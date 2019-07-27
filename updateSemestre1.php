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
    $sql="select * from tb_semestre where sem_codigo='$_REQUEST[sem_codigo]'";
    $rs=mysql_query($sql, $conexao) or die ("Consulta nao realizada");
    $linha=mysql_fetch_array($rs);
        $sem_codigo=$linha["sem_codigo"];
        $sem_descricao=$linha["sem_descricao"];
?>

<form name="frm_clientes" method="post" action="updateSemestre2.php">
   <table width="80%" border="0" cellspacing="2" cellpadding="2">
   <tr>
     <td>Codigo Semestre</td>
     <td><input type="text" name="sem_codigo" value="<?php echo $sem_codigo; ?>" size="5" READONLY></td>
    </tr>
   <tr>
     <td>Descrição</td>
     <td><input type="text" name="sem_descricao" value="<?php echo $sem_descricao; ?>" size="35"></td>
    </tr>
	<tr>
      <td colspan=2>   <input type="submit" name="atualizar" value="Atualizar nota"></td>
    </tr>
    <tr>
   </table>
</form>
</body>
</html>
