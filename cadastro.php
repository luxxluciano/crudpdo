<?php include("Includes/header.php") ?>

	<div class="content">
		
		<div class="resultado"></div>

		<div class="formulario">
			<h1 class="center">Cadastro</h1>

			<form name="formCadastro" id="formCadastro" method="post" action="Controllers/controllerCadastro.php">
				<div class="formularioInput">
					Nome: <br>
					<input type="text" id="nome" name="nome">			
				</div>
				<div class="formularioInput">
					Sexo: <br>
					<select id="sexo" name="sexo">
						<option value="">Selecione</option>
						<option value="Feminino">Feminino</option>
						<option value="Masculino">Masculino</option>
						<option value="Outros">Outros</option>
					</select>				
				</div>
				<div class="formularioInput">
					Cidade: <br>
					<input type="text" id="cidade" name="cidade">			
				</div>
				<div class="formularioInput formularioInput100 center">
					<input type="submit" value="Cadastrar">			
				</div>
			</form>
			</div>
		</div>


<?php include("Includes/footer.php") ?>

