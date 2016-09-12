
<?php
	include 'conecta_mysql.inc';
	$string = $_POST['txtStringUp'];
		
	$reso = mysqli_query($conexao, "select * from ATIVO WHERE cd_patrimonio = '$string'");
	$row = mysqli_fetch_array($reso);
	$patrimonio = $row["cd_patrimonio"];
	$identificacao = $row["ds_identificacao"];
	$dtcad =$row["dt_cadastro"];
	$dtaqui =$row["dt_aquisicao"];
	$nf = $row["cd_notafiscal"];
	$val =$row["ds_valor"]; 
	$status =$row["ds_situacao"];
	$cat =$row["ds_categoria"];
	$marca =$row["cd_marca"];
	$unidade =$row["ds_unidade"];
	$setor =$row["ds_setor"];
	$setorAnt =$row["ds_setoranterior"];
	$obs =$row["ds_observacoes"];
	$array = array("$patrimonio","$identificacao","$dtcad","$dtaqui","$nf","$val","$status","$cat","$marca","$unidade","$setor","$setorAnt","$obs");
	echo json_encode(array_values($array));	
	
  ?>
