
<?php
error_reporting(0);
ini_set('display_errors', 0);
	include 'conecta_mysql.inc';
	$string = $_POST['txt'];
	$setor = $_POST['txtsetor'];
	$pesquisa = "";
	
	switch($setor){
		case "Identificação":
		$pesquisa = "ds_identificacao";
		break;
		case "Data do cadastro":
		$pesquisa = "dt_cadastro";
		break;
		case "Data de aquisição":
		$pesquisa = "dt_aquisicao";
		break;
		case "Código de nota fiscal":
		$pesquisa = "cd_notafiscal";
		break;
		case "Estado de conservação":
		$pesquisa = "ds_situacao";
		break;
		case "Categoria":
		$pesquisa = "ds_categoria";
		break;
		case "Unidade":
		$pesquisa = "ds_unidade";
		break;
		case "Setor":
		$pesquisa = "ds_setor";
		break;
		case "Código":
		$pesquisa = "cd_patrimonio";
		break;
		case "Marca":
		$pesquisa = "cd_marca";
		break;
		
	}	
	
	$reso = mysqli_query($conexao, "select * from ATIVO WHERE `$pesquisa` LIKE '%$string%' ORDER BY `cd_patrimonio` ASC");
	$eco = "<table class='table table-condensed table-striped'>";
	$eco = $eco.'<thead><tr>';
	$eco=$eco."<th>Patrimônio</th>";
	if($_POST['cbidentificacao']== 'true')
{
    $eco=$eco."<th>Identificação</th>";
    
}
if($_POST['cbcadastro']== 'true')
{
    $eco=$eco."<th>Data/cadastro</th>";
    
}
if($_POST['cbaquisicao']== 'true')
{
    $eco=$eco."<th>Data/aquisição</th>";
    
}
if($_POST['cbnotafiscal']== 'true')
{
    $eco=$eco."<th>NF</th>";
    
}
if($_POST['cbvalor']== 'true')
{
    $eco=$eco."<th>Valor(R$)</th>";
    
}
if($_POST['cbsituacao']== 'true')
{
    $eco=$eco."<th>Status</th>";
    
}
if($_POST['cbmarca']== 'true')
{
    $eco=$eco."<th>Marca</th>";
    
}
if($_POST['cbcategoria']== 'true')
{
    $eco=$eco."<th>Categoria</th>";
    
}
if($_POST['cbunidade']== 'true')
{
    $eco=$eco."<th>Unidade</th>";
    
}
if($_POST['cbsetor']== 'true')
{
    $eco=$eco."<th>Setor</th>";
    
}
	
	
	$eco = $eco.'</tr>
</thead>';
	while($row = mysqli_fetch_array($reso)){  
	$eco = $eco."</tr>";
	 $eco=$eco."<td>".$row['cd_patrimonio']."</td>";
	if($_POST['cbidentificacao']== 'true')
{
    $eco=$eco."<td>".$row['ds_identificacao']."</td>";
    
}
if($_POST['cbcadastro']== 'true')
{
    $eco=$eco."<td>".$row['dt_cadastro']."</td>";
    
}
if($_POST['cbaquisicao']== 'true')
{
    $eco=$eco."<td>".$row['dt_aquisicao']."</td>";
    
}
if($_POST['cbnotafiscal']== 'true')
{
    $eco=$eco."<td>".$row['cd_notafiscal']."</td>";
    
}
if($_POST['cbvalor']== 'true')
{
    $eco=$eco."<td>".$row['ds_valor']."</td>";
    
}
if($_POST['cbsituacao']== 'true')
{
    $eco=$eco."<td>".$row['ds_situacao']."</td>";
    
}
if($_POST['cbmarca']== 'true')
{
    $eco=$eco."<td>".$row['cd_marca']."</td>";
    
}
if($_POST['cbcategoria']== 'true')
{
    $eco=$eco."<td>".$row['ds_categoria']."</td>";
    
}
if($_POST['cbunidade']== 'true')
{
    $eco=$eco."<td>".$row['ds_unidade']."</td>";
    
}
if($_POST['cbsetor']== 'true')
{
    $eco=$eco."<td>".$row['ds_setor']."</td>";
    
}
	$eco = $eco."</tr>";		
	}
	$eco = $eco."</table>";
	echo "<br><h3> Total de ativos: ". mysqli_num_rows($reso)."</h3>".$eco;
	
  ?>
