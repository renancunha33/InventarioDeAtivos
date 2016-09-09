<?php
include "conecta_mysql.inc";
$user     =$_POST["nome"    ];
$pass     =$_POST["senha"   ];
$realname =$_POST["nomereal"];
$matricula    =$_POST["matricula"];
$isadm	  =$_POST["isadm"];
$md5pass  = base64_encode($pass);
try{
		$res = mysqli_query($conexao,"UPDATE `LOGIN` SET `ds_senha` = '$md5pass',`ds_isadm` = '$isadm' WHERE `cd_login` = '$user'");
		$res2 = mysqli_query($conexao,"UPDATE `DAODS` SET `ds_nome` = '$realname',`ds_matricula` = '$matricula' WHERE `cd_login` = '$user'");
		print "sucesso";
}catch(Exception $e){
	print $e;
}
?>
