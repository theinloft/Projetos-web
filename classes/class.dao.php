<?php
require_once('class.cliente.php');
require_once('class.conexao.php')

public function create($object){
    $id = $this->getId();
       $nome = $object->getNome();
       $telefone = $object->getTelefone();
       $sqlStmt = “INSERT INTO {conexao::getDatabase()} (ID, NOME,TELEFONE) VALUES (:id, :nome, :telefone)”;
       
}

public function read($id){
 $sqlStmt = “SELECT * from {conexao::getDatabase()} WHERE ID=:id”;
}


public function update($object){
 $id = $object->getId();
       $nome = $object->getNome();
       $telefone = $object->getTelefone();
       $sqlStmt = “UPDATE {conexao::getDatabase()} SET NOME=:nome, EMAIL=:email, TELEFONE=:telefone WHERE ID=:id”;
}

public function delete($id){
$sqlStmt = “DELETE FROM {conexao::getDatabase()} WHERE ID=:id”;
}



?>