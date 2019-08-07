<?php 
include("Includes/header.php"); 
include("Class/ClassCrud.php");
?>

	<div class="content">
        <?php 
            $crud=new ClassCrud();
            $IdUser=filter_input(INPUT_GET,'id', FILTER_SANITIZE_SPECIAL_CHARS);
            
            $BFetch=$crud->selectDB(
                "*",
                "cadastro",
                "where Id=?",
                array($IdUser)
            );
            $Fetch=$BFetch->fetch(PDO::FETCH_ASSOC);
        ?>
        <h1>Dados do Usuário</h1>
        <hr>
        <strong>Nome:</strong><?php echo $Fetch['nome']; ?><br>
        <strong>Sexo:</strong><?php echo $Fetch['sexo']; ?><br>
        <strong>Cidade:</strong><?php echo $Fetch['cidade']; ?><br>
        
	</div>


<?php include("Includes/footer.php") ?>