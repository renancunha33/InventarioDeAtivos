
<?php
	include 'conecta_mysql.inc';

	$reso = mysqli_query($conexao, "select * from ATIVO ORDER BY `cd_patrimonio` ASC");
	$eco = "<table class='table table-condensed table-striped'>";
	$eco = $eco.'<thead><tr>';
	$eco=$eco."<th>Patrimônio</th>";

    $eco=$eco."<th>Identificação</th>";
    

    $eco=$eco."<th>Data/cadastro</th>";
    

    $eco=$eco."<th>Data/aquisição</th>";
    

    $eco=$eco."<th>NF</th>";
    

    $eco=$eco."<th>Valor(R$)</th>";
    

    $eco=$eco."<th>Status</th>";

    $eco=$eco."<th>Categoria</th>";
    

    $eco=$eco."<th>Unidade</th>";
    
  $eco=$eco."<th>Setor</th>";

	
	$eco = $eco.'</tr></thead>';
	
	while($row = mysqli_fetch_array($reso)){  
	$eco = $eco."</tr>";
	 $eco=$eco."<td>".$row['cd_patrimonio']."</td>";

    $eco=$eco."<td>".$row['ds_identificacao']."</td>";
    

    $eco=$eco."<td>".$row['dt_cadastro']."</td>";
    

    $eco=$eco."<td>".$row['dt_aquisicao']."</td>";

    $eco=$eco."<td>".$row['cd_notafiscal']."</td>";
    

    $eco=$eco."<td>".$row['ds_valor']."</td>";
    

    $eco=$eco."<td>".$row['ds_situacao']."</td>";
    

    $eco=$eco."<td>".$row['ds_categoria']."</td>";
    

    $eco=$eco."<td>".$row['ds_unidade']."</td>";
    

    $eco=$eco."<td>".$row['ds_setor']."</td>";
    

	$eco = $eco."</tr>\n";		
	}
	$eco = $eco."</table>";
	
	echo "<br><h3> Total de ativos: ". mysqli_num_rows($reso)."</h3>".$eco;
	
  ?>
