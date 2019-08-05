<?php include("Includes/header.php") ?>

	<div class="content">
		
<?php

	//include("Class/ClassConexao.php");
	include("Class/ClassCrud.php");
	//#$Conexao=new ClassConexao();
	//#var_dump($Conexao->conectaDB());
	$Crud=new ClassCrud();
	//#$Crud->preparedStatements('asdasd', array(1,2,3,4,5));

?>	
	</div>


<?php include("Includes/footer.php") ?>

