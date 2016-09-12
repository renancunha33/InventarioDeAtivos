<?php
error_reporting(0);
ini_set('display_errors', 0);
include 'conecta_mysql.inc';
$ID = $_POST['nome'];
    //verifica se o ID esta vazio
if (isset($_POST['nome'])) {
    //delete e script para voltar ao index
	mysqli_query($conexao,"DELETE DAODS.*, LOGIN.* from LOGIN inner join DAODS on DAODS.cd_login = LOGIN.cd_login WHERE DAODS.cd_login = '$ID' ");
    print "sucesso";
} else {
    //erro e script para voltar ao index
    print"ERRO DURANTE EXCLUSÃO";
}