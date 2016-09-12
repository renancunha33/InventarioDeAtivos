<?php
include "conecta_mysql.inc";
$patrimonio     =$_POST["txtpatrimonioUp"    ];
$identificacao     =$_POST["txtidentificacaoUp"    ];
$cadastro     =$_POST["dtcadastroUp"    ];
$aquisicao     =$_POST["dtaquisicaoUp"    ];
$nf    =$_POST["txtnfUp"    ];
$valor    =$_POST["txtvalorUp"    ];
$status    =$_POST["txtstatusUp"    ];
$categoria     =$_POST["txtcategoriaUp"    ];
$marca    =$_POST["txtmarcaUp"    ];
$unidade    =$_POST["txtunidadeUp"    ];
$setor     =$_POST["txtsetorUp"    ]; 
$setoranterior     =$_POST["txtsetoranteriorUp"    ];
$obs     =$_POST["txtobsUp"    ];

if($patrimonio != "" && $identificacao !=""){
try{


		mysqli_query($conexao,"UPDATE `ATIVO` SET `cd_patrimonio` = '$patrimonio', `ds_identificacao` = '$identificacao', `dt_cadastro` = '$cadastro', `dt_aquisicao` = '$aquisicao', `cd_notafiscal` = '$nf', `ds_valor` ='$valor', `ds_situacao` = '$status',`ds_categoria`='$categoria', `cd_marca`='$marca', `ds_unidade`='$unidade', `ds_setor`= '$setor', `ds_setoranterior`= '$setoranterior', `ds_observacoes`= '$obs' WHERE `cd_patrimonio`='$patrimonio'");
		print "sucesso";

		
}catch(Exception $e){
	print $e;
}
}else{
	print "Varifique os campos obrigatórios!";
}

?>
