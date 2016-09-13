  <button class="btn btn-info btn-sm" style="float: right;" onclick="printContent('tabela')">Relatório (BETA)</button>
  <?php include "export.html"?>
 <div id="tabela">
 <?php
include 'control/conecta_mysql.inc';
$reso = mysqli_query($conexao,"select * from DAODS");
	echo "
		<table class='table table-condensed table-striped'>
		<thead>
		<tr>
		<th>Nome</th>
		<th>Matricula</th>
		<th>Login</th>
		<th>Perfil</th>
		</tr>
	</thead>"; 
	while($row = mysqli_fetch_array($reso)){  
		$sql = mysqli_fetch_array(mysqli_query($conexao, "select ds_isadm from LOGIN WHERE cd_login = '".$row['cd_login']."'"));
			echo '<tr><td>' . $row['ds_nome'] . '</td><td>' . $row['ds_matricula'] . '</td><td>' . $row['cd_login'] . '</td><td>' . $sql['ds_isadm']. '</td>
				  <td>
				  <form method="post">
				  <button type="submit" class="btn btn-danger btn-sm" name="deleta" value='.$row['cd_login'].'>
				  Excluir
				  </button>
				  </form>
				  </td>
			</tr>'; 
	}
	echo "</table>";
 ?>
 </div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
	$("button[name=deleta]").click(function(){
		
	var nome = $(this).attr("value");
	info = {"nome" : nome};
	$.ajax({
	type:"post",
	url:"control/delete.php",
	data: info,
	success: function (response) {
                         alert(response);
				   setInterval(function(){
			$("#Pesquisa").load("tabela.php");
		}, 3000);
            }            
			});
			 return false;
	
});
</script>
<script type="text/javascript">
function printContent(el){
	var restorepage = document.body.innerHTML;
	var printcontent = document.getElementById(el).innerHTML;
	document.body.innerHTML =  "<h1>Relatório de usúários<h1>"+printcontent;
	window.print();
	document.body.innerHTML = restorepage;
	location.reload();
}
</script>
