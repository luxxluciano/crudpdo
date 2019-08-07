<?php 
include("Class/ClassCrud.php");
    /*se tiver o id - edição de dados */
    if(isset($_GET['id'])){
        $acao="Editar";

        $crud=new ClassCrud();
        $BFetch=$crud->selectDB("*", "cadastro", "where Id=?", array($_GET['id']));
        $Fetch=$BFetch->fetch(PDO::FETCH_ASSOC);
        $id=$Fetch['Id'];
        $nome=$Fetch['nome'];
        $sexo=$Fetch['sexo'];
        $cidade=$Fetch['cidade'];
    }
    /*se não - cadastro novo */
    else{
        $acao="Cadastrar";
        $id="";
        $nome="";
        $sexo="";
        $cidade="";
    }
?>


<div class="resultado"></div>

<div class="formulario">
    <h1 class="center">Cadastro</h1>

    <form name="formCadastro" id="formCadastro" method="post" action="Controllers/controllerCadastro.php">
        <input type="hidden" id="acao" name="acao" value="<?php echo $acao; ?>">
        <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
        
        
        <div class="formularioInput">
            Nome: <br>
            <input type="text" id="nome" name="nome" value="<?php echo $nome; ?>">			
        </div>
        <div class="formularioInput">
            Sexo: <br>
            <select id="sexo" name="sexo">
                <option value="<?php echo $sexo; ?>"><?php echo $sexo; ?></option>
                <option value="Feminino">Feminino</option>
                <option value="Masculino">Masculino</option>
                <option value="Outros">Outros</option>
            </select>				
        </div>
        <div class="formularioInput">
            Cidade: <br>
            <input type="text" id="cidade" name="cidade" value="<?php echo $cidade; ?>">			
        </div>
        <div class="formularioInput formularioInput100 center">
            <input type="submit" value="<?php echo $acao; ?>">			
        </div>
    <script type="text/javascript" src="../Javascript.js">
    <script type="text/javascript" src="./zepto.min.js"></script>
    </form>
    </div>