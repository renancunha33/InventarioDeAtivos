
 <?php
error_reporting(0);
ini_set('display_errors', 0);
	include 'conecta_mysql.inc';
	$user = $_POST['nome'];
	$reso = mysqli_query($conexao, "select DAODS.*,LOGIN.* from DAODS inner join LOGIN on DAODS.cd_login = LOGIN.cd_login WHERE LOGIN.cd_login = '$user'");
	$row = mysqli_fetch_array($reso); 
	$matricula = $row['ds_matricula'];
	$nome = $row['ds_nome'];
	$isadm = $row['ds_isadm'];
	$senha = base64_decode($row['ds_senha']);
	$array = array("$matricula","$nome","$senha","$isadm");
	echo json_encode(array_values($array));

	
  ?>
