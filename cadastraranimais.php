<?php
$conexao=mysqli_connect("localhost","root","","zooworld");
$nome=$_POST['nome'];
$nomecientifico=$_POST['nomecientifico'];
$especie=$_POST['especie'];
$peso=$_POST['peso'];
$alimentacao=$_POST['alimentacao'];
$idade=$_POST['idade'];
$porte=$_POST['porte'];
$habitate=$_POST['habitate'];
$obs=$_POST['obs'];
echo "{$nome}-{$nomecientifico}-{$especie}-{$peso}-{$alimentacao}-{$idade}-{$porte}-{$habitate}-{$obs}";
$sql_inserir="insert into tbanimais(nome,nomecientifico,especie,peso,alimentacao,idade,porte,habitate,obs) values
('{$nome}','{$nomecientifico}','{$especie}','{$peso}','{$alimentacao}',{$idade},'{$porte}','{$habitate}','{$obs}')";
mysqli_query($conexao,$sql_inserir);
mysqli_close($conexao);
?>