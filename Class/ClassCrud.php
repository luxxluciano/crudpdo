<?php
include("../Class/ClassConexao.php");

class ClassCrud extends ClassConexao{



	#Atributos
	private $crud;
	private $contador;

	#Preparação das declarativas
	private function preparedStatements($query, $parametros)
	{
		$this->countParametros($parametros);
		$this->crud=$this->conectaDB()->prepare($query);
		#echo $this->contador;

		if($this->contador > 0){
			for ($i=1; $i <= $this->contador; $i++){
				$this->crud->bindValue($i, $parametros[$i-1]);
			}
		}

		$this->crud->execute();

	}


	#Contador de parâmetros
	private function countParametros($parametros)
	{

		$this->contador=count($parametros);
	}


	#Inserção no banco de dados
	public function insertDB($tabela, $condicao, $parametros){
		$this->preparedStatements("INSERT INTO {$tabela} VALUES ({$condicao})", $parametros);
		return $this->crud;
	}




}

?>