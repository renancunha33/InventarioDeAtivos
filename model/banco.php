<?php
$conexao = mysqli_connect("Localhost", "root", "", "") or die (mysql_error());
 
mysqli_query($conexao,'CREATE DATABASE IF NOT EXISTS BANCO') or die (mysql_error());
$conexao = mysqli_connect("Localhost", "root", "", "BANCO") or die (mysql_error());
 
mysqli_query($conexao, 'CREATE TABLE IF NOT EXISTS `DAODS` (
 `ds_nome` varchar(50) NOT NULL,
 `ds_matricula` varchar(15) NOT NULL,
 `cd_login` varchar(30) NOT NULL,
 KEY `cd_login` (`cd_login`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
') or die (mysql_error());
 
mysqli_query($conexao, 'CREATE TABLE IF NOT EXISTS `LOGIN` (
 `cd_login` varchar(20) NOT NULL,
 `ds_senha` varchar(20) NOT NULL,
 `ds_isadm` varchar(20) NOT NULL,
 PRIMARY KEY (`cd_login`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
') or die (mysql_error());

mysqli_query($conexao, 'CREATE TABLE IF NOT EXISTS `ATIVO` (
 `cd_patrimonio` varchar(7) NOT NULL,
 `ds_identificacao` varchar(50) NOT NULL,
 `dt_cadastro` date NOT NULL,
 `dt_aquisicao` date,
 `cd_notafiscal` varchar(8),
 `ds_valor` float,
 `ds_situacao` varchar(20) NOT NULL,
 `ds_categoria` varchar(20) NOT NULL,
 `cd_marca` varchar(20),
 `ds_unidade` varchar(20) NOT NULL,
 `ds_setor` varchar(20) NOT NULL,
 `ds_setoranterior` varchar(20) NOT NULL,
 `ds_observações` text,
 PRIMARY KEY (`cd_patrimonio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
') or die (mysql_error());

 echo "<script>javascript:alert('Banco criado!')</script>";
 echo "<script>javascript:location.href='cadastrar.html'</script>";
?>
