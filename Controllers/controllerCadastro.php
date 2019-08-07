<?php 
include("../Includes/variaveis.php");
include("../Class/ClassCrud.php");

$crud=new ClassCrud();




if($acao=='cadastrar'){

    $crud->insertDB("cadastro",	"?,?,?,?", array($id, $nome, $sexo,	$cidade));

echo "Cadastro realizado com sucesso!";
}else{
    $crud->updateDB("cadastro", "nome=?, sexo=?, cidade=?", "id=?", array($nome, $sexo, $cidade, $id));

    echo "Cadastro atualizado com sucesso!";
}
