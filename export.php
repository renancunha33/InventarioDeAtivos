<?php
include 'control/conecta_mysql.inc';

$filename = 'mytable.sql';
$reso = mysqli_query($conexao, "select * from ATIVO");
$eco ="USE `BANCO`;
";
	while($row = mysqli_fetch_array($reso)){  
	$eco = $eco."INSERT INTO `ATIVO` (`cd_patrimonio`, `ds_identificacao`, `dt_cadastro`, `dt_aquisicao`, `cd_notafiscal`, `ds_valor`, `ds_situacao`, `ds_categoria`, `cd_marca`, `ds_unidade`, `ds_setor`, `ds_setoranterior`, `ds_observacoes`)
	VALUES(	
  '".$row['cd_patrimonio']."',
  '".$row['ds_identificacao']."',
  '".$row['dt_cadastro']."',
  '".$row['dt_aquisicao']."',
  '".$row['cd_notafiscal']."',
  '".$row['ds_valor']."',
  '".$row['ds_situacao']."',
  '".$row['ds_categoria']."',
  '".$row['ds_unidade']."',
  '".$row['ds_setor']."'
  );
  ";
	}	
	
$reso2 = mysqli_query($conexao, "select * from LOGIN");
while($row2 = mysqli_fetch_array($reso2)){  
	$eco = $eco."INSERT INTO `LOGIN`(cd_login,ds_senha,ds_isadm)  
	VALUES(	
  '".$row2['cd_login']."',
  '".$row2['ds_senha']."',
  '".$row2['ds_isadm']."'  
  );
  ";
	}	
$reso3 = mysqli_query($conexao, "select * from DAODS");
while($row3 = mysqli_fetch_array($reso3)){  
	$eco = $eco."INSERT INTO `DAODS`(cd_login,ds_nome,ds_matricula)
	VALUES(	
  '".$row3['cd_login']."',
  '".$row3['ds_nome']."',
  '".$row3['ds_matricula']."'  
  );
  ";
	}	


header("Content-type: text/x-sql");
header("Content-Disposition: attachment; filename='mytable.sql'");
echo($eco);
?>