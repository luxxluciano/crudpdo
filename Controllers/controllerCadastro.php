<?php 
include("../Includes/variaveis.php");
include("../Class/ClassCrud.php");

$crud=new ClassCrud();
$crud->insertDB("cadastro",	"?,?,?,?", array($id, $nome, $sexo,	$cidade));

echo "Cadastro realizado com sucesso!";