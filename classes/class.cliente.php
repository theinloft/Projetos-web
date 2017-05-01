<?php
//https://www.youtube.com/watch?v=Y-0OQto_reA

require_once 'class.crud.php';

public class Cliente extends Crud{

protected $tabela = 'clientes';
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
	return $this->telefone = $telefone;
}


public function insert(){
	$sql = "INSERT INTO $this->tabela(nome,telefone) VALUES (:nome, :telefone)";
	$stmt = DB::prepare($sql);
	$stmt = bindParam(':nome',$this->nome);
	$stmt = bindParam(':email', $this->telefone);
	return $stmt->execute();

}

public function update($id){
   $sql = "UPDATE $this->tabela SET nome = :nome, telefone = :telefone WHERE id = :id";
   $stmt = DB::prepare($sql);
   $stmt->bindParam(':nome', $this->nome);
   $stmt->bindParam(':telefone', $this->telefone);
   $stmt->bindParam(':id', $id);
   return $stmt->execute();
}

}




?>