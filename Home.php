<html>
<head>
<meta charset="utf-8">
	<!-- Bootstrap core CSS -->
	<link href="./bootstrap/bootstrap.min.css" rel="stylesheet">
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<link href="./bootstrap/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="./bootstrap/signin.css" rel="stylesheet">
	<script src="./bootstrap/ie-emulation-modes-warning.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<title>Tela Inicial</title>
</head>
<body>
	<div class="container">
		<?php
		//error_reporting(0);
		//ini_set('display_errors', 0);
		include "conecta_mysql.inc";
		$user=$_POST["nome"];
		$pass=$_POST["senha"];
		
		$res = mysqli_query($conexao,"select * from LOGIN WHERE cd_login ='$user'");		
		$row = mysqli_fetch_array($res);
		
		$linha= mysqli_num_rows($res);
		if($linha != 0){
				if(base64_encode($pass) != $row['ds_senha']){
				echo"
				<center><h3>ACESSO NEGADO</h3></center>			
				<form  class='form-signin'method='post' action='login.html'>
				<button class='btn btn-lg btn-primary btn-block'type='submit' value='LOGIN'>
				Login
				</button>
				</form>
				";
			}else{
				
				$sql= "select LOGIN.*, DAODS.* from LOGIN inner join DAODS on '$user' = DAODS.cd_login";
				$query = mysqli_query($conexao,$sql);
				$DAODS = mysqli_fetch_array($query);
				
				echo "
					<nav class='navbar navbar-inverse navbar-fixed-top'>
					<div class='container-fluid'>
					<div class='navbar-header'>
						<a class='navbar-brand' href='#'>BEM VINDO, " . $DAODS['ds_nome']." !</a>
					</div>
						<ul class='nav navbar-nav navbar-right'>
							<li>
							<a href='login.html'>
							Sair
							</a>
							</li>
						</ul>
					</div>
				</nav>
				<br>
				";				
				if($row['ds_isadm']=="Administrador"){
				
				include "formAdmin.php";
				}else{
				include "formUser.php";
				}
			}
		}else{
			echo"
			<center><h3>USER INVALIDO</h3></center>		
			<form  class='form-signin'method='post' action='login.html'>
			<button class='btn btn-lg btn-primary btn-block'type='submit' value='LOGIN'>
			Login
			</button>
			</form>
			";
		}
		?>
	</div>
</body>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
function ajax2(nome){
	info = {"nome" : nome};
	$.ajax({
	type:"post",
	url:"deletar.php",
	data: info,
	success: function (response) {
            if(response.status == "sucesso") {
                alert(response);
            } else{
                   alert(response);
				   setInterval(function(){
			$("#Pesquisa").load("tabela.php");
		}, 1000);
            }
    }
	});
}
$(document).ready(function(){
	
	$("button[name=cd]").click(function(){
	var nome = $(this).attr("value");
	ajax2(nome);

});
	
});
</script>	
</html>
