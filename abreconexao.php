<?php
$conexao=mysql_connect("localhost","root","") or die("Conexao não realizada ".mysql_error());
$db=mysql_select_db("mediares1.1",$conexao) or die("Banco perdido ".mysql_error());
?>
