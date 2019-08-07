<?php 
include("../Class/ClassCrud.php");

$crud=new ClassCrud();
$IdUser=filter_input(INPUT_GET,'id', FILTER_SANITIZE_SPECIAL_CHARS);

$crud->deleteDB(
    "cadastro",
    "id=?",
    array(
        $IdUser
    )

);

echo "Dados Deletados com Sucesso!";