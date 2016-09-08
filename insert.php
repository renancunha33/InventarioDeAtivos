<?php
include "conecta_mysql.inc";
$user     =$_POST["nome"    ];
$pass     =$_POST["senha"   ];
$realname =$_POST["nomereal"];
$matricula    =$_POST["matricula"];
$isadm	  =$_POST["isadm"];
$res      = mysqli_query($conexao,"select * from LOGIN WHERE cd_login='$user'");
$linha= mysqli_num_rows($res);
if($user!="" && $pass)
{
	$md5pass= base64_encode($pass);
	if($linha == 0)
	{
		mysqli_query($conexao,"INSERT INTO LOGIN(cd_login,ds_senha,ds_isadm) VALUES('$user','$md5pass','$isadm')");
		mysqli_query($conexao,"INSERT INTO DAODS(cd_login,ds_nome,ds_matricula) VALUES('$user','$realname','$matricula')");
		print "Sucesso";
	}else
	{
	print "Erro ao cadastrar";
	}
}else
{
print "Preencha todos os campos";
}
?>
