<?php
error_reporting(0);
ini_set('display_errors', 0);
include "conecta_mysql.inc";
$patrimonio     =$_POST["txtpatrimonio"    ];
$identificacao     =$_POST["txtidentificacao"    ];
$cadastro     =$_POST["dtcadastro"    ];
$aquisicao     =$_POST["dtaquisicao"    ];
$nf    =$_POST["txtnf"    ];
$valor    =$_POST["txtvalor"    ];
$status    =$_POST["txtstatus"    ];
$categoria     =$_POST["txtcategoria"    ];
$marca    =$_POST["txtmarca"    ];
$unidade    =$_POST["txtunidade"    ];
$setor     =$_POST["txtsetor"    ]; 
$setoranterior     =$_POST["txtsetoranterior"    ];
$obs     =$_POST["txtobs"    ];

if($patrimonio != "" && $identificacao !=""){
try{
	$rows = mysqli_num_rows(mysqli_query($conexao,"SELECT * FROM ATIVO WHERE `cd_patrimonio` = '$patrimonio'"));
		if($rows == 0){
		mysqli_query($conexao,"INSERT INTO `ATIVO` (`cd_patrimonio`, `ds_identificacao`, `dt_cadastro`, `dt_aquisicao`, `cd_notafiscal`, `ds_valor`, `ds_situacao`, `ds_categoria`, `cd_marca`, `ds_unidade`, `ds_setor`, `ds_setoranterior`, `ds_observacoes`)VALUES('$patrimonio', '$identificacao', '$cadastro', '$aquisicao', '$nf', '$valor', '$status', '$categoria', '$marca', '$unidade', '$setor', '$setoranterior', '$obs')");
		print "sucesso";
		}else{
			print "Código já cadastrado";
		}
}catch(Exception $e){
	print $e;
}
}else{
	print "Varifique os campos obrigatórios!";
}

?>
