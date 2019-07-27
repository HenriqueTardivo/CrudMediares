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
    $sql="select * from tb_professores where prf_codigo='$_REQUEST[prf_codigo]'";
    $rs=mysql_query($sql, $conexao) or die ("Consulta nao realizada");
    $linha=mysql_fetch_array($rs);
        $prf_codigo=$linha["prf_codigo"];
        $prf_nome=$linha["prf_nome"];
        $prf_RA=$linha["prf_RA"];
        $prf_cursoUTFPR=$linha["prf_cursoUTFPR"];
        $prf_telefone=$linha["prf_telefone"];
        $prf_endereco=$linha["prf_endereco"];
      
?>

<form name="frm_clientes" method="post" action="updateProfessor2.php">
   <table width="80%" border="0" cellspacing="2" cellpadding="2">
   <tr>
     <td>Codigo Semestre</td>
     <td><input type="text" name="prf_codigo" value="<?php echo $prf_codigo; ?>" size="5" READONLY></td>
    </tr>
   <tr>
   <tr>
     <td>Nome</td>
     <td><input type="text" name="prf_nome" value="<?php echo $prf_nome; ?>" size="5" READONLY></td>
    </tr>
   <tr>
   <tr>
     <td>RA</td>
     <td><input type="text" name="prf_RA" value="<?php echo $prf_RA; ?>" size="5" READONLY></td>
    </tr>
   <tr>
   <tr>
     <td>Curso UTFPR</td>
     <td><input type="text" name="prf_cursoUTFPR" value="<?php echo $prf_cursoUTFPR; ?>" size="5" READONLY></td>
    </tr>
   <tr>
   <tr>
     <td>Telefone</td>
     <td><input type="text" name="prf_telefone" value="<?php echo $prf_telefone; ?>" size="5" READONLY></td>
    </tr>
   <tr>
     <td>Endereço</td>
     <td><input type="text" name="prf_endereco" value="<?php echo $prf_endereco; ?>" size="35"></td>
    </tr>
	<tr>
      <td colspan=2>   <input type="submit" name="atualizar" value="Atualizar nota"></td>
    </tr>
    <tr>
   </table>
</form>
</body>
</html>
