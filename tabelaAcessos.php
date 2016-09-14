  <button class="btn btn-info btn-sm" style="float: right;" onclick="printContent2('tabelaAcessos')">Relatório de acessos</button>
  <div id="tabelaAcessos">
 <?php
include 'control/conecta_mysql.inc';
$reso = mysqli_query($conexao,"select * from ACESSO");
	echo "
		<table class='table table-condensed table-striped'>
		<thead>
		<tr>
		<th>Usuário</th>
		<th>Data de login</th>
		</tr>
	</thead>"; 
	while($row = mysqli_fetch_array($reso)){  
		echo '<tr><td>' . $row['cd_login_acesso'] . '</td><td>' . $row['dt_acesso']. '</td>
			</tr>'; 
	}
	echo "</table>";
 ?>
 </div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
function printContent2(el){
	var restorepage = document.body.innerHTML;
	var printcontent = document.getElementById(el).innerHTML;
	document.body.innerHTML =  "<h1>Relatório de Acessos<h1>"+printcontent;
	window.print();
	document.body.innerHTML = restorepage;
	location.reload();
}
</script>
