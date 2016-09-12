
<?php
	include 'conecta_mysql.inc';
	$string = $_POST['txtString'];
	$setor = $_POST['txtsetorDel'];
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
	}	
	
	$reso = mysqli_query($conexao, "select * from ATIVO WHERE `$pesquisa` LIKE '%$string%'");
	$eco = "<table class='table table-condensed table-striped'>";
	$eco = $eco.'<thead><tr>';
	$eco=$eco."<th>Patrimônio</th>";
    $eco=$eco."<th>Identificação</th>";
	$eco = $eco.'</tr></thead>';
	while($row = mysqli_fetch_array($reso)){  
	$eco = $eco."</tr>";
	 $eco=$eco."<td>".$row['cd_patrimonio']."</td>";
	 $eco=$eco."<td>".$row['ds_identificacao']."</td>
	  <td>
				  <form method='post'>
				  <button type='submit' class='btn btn-danger btn-sm'name='deletaAtivo' value='".$row['cd_patrimonio']."'>
				  Excluir
				  </button>
				  </form>
				  </td>";
	
	}
	$eco = $eco."</tr>";		
	$eco = $eco."</table>
<script type='text/javascript'>
	$('button[name=deletaAtivo]').click(function(){
	alert($(this).attr('value'));	
	var nome = $(this).attr('value');
	info = {'nome' : nome};
	$.ajax({
	type:'post',
	url:'control/deleteAtivo.php',
	data: info,
	success: function (response) {
            alert(response);
	}
			});
	return false;
});
</script>";
	echo $eco;
	
  ?>
