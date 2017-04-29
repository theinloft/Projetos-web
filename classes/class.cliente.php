<?php

public class cliente{

private $id;
private $nome;
private $telefone;

public function _Construct($id, $nome, $telefone){
$this->id = $id;
$this->nome = $nome;
$this->telefone = $telefone;

}

public function getId(){
	return $this->id;
}

public function getNome(){
	return $this->nome;
}

public function getTelefone(){
	return $this->telefone;
}

public function setNome($nome){
	return $this->nome = $nome;
}

public function setTelefone($telefone){
	return $this->telefone = $telefoneS;
}


}




?>