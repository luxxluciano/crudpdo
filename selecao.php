<?php
include("Includes/header.php");
include("Class/ClassCrud.php");


?>

	<div class="content">
		<table class="tabelaCrud">
      <tr>
        <td>Nome</td>
        <td>Sexo</td>
        <td>Cidade</td>
        <td>Ações</td>
      </tr>

      <!-- Estrutura de loop -->
        <?php 
          $crud=new ClassCrud();
          $BFetch=$crud->selectDB(
            "*",
            "cadastro",
            "",
            array()

          );

          while($Fetch=$BFetch->fetch(PDO::FETCH_ASSOC)){

        ?>
            <tr>
              <td><?php echo $Fetch['nome']; ?></td>
              <td><?php echo $Fetch['sexo']; ?></td>
              <td><?php echo $Fetch['cidade']; ?></td>
              <td>
                  <a href="<?php echo "visualizar.php?id={$Fetch['Id']}"; ?>"><img src="Images/search.png" alt="Visualizar"></a>
                  <a href="<?php echo "cadastro.php?id={$Fetch['Id']}"; ?>"><img src="Images/edit.png" alt="Editar"></a>
                  <a class="deletar" href="<?php echo "Controllers/controllerDeletar.php?id={$Fetch['Id']}"; ?>"><img src="Images/delete.png" alt="Deletar"></a>
              </td>
            </tr>


        <?php

          }
        ?>
        </table>
	</div>

<?php include("Includes/footer.php");