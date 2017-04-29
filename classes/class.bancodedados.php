<?php

class Banco{
   private $tipoBanco;
   private $conexao;
   public function Banco ($tipo='mysql'){
   $this->tipoBanco = $tipo;
  }
   public function connect($servidor,$usuario,$senha,$base){
  switch ($this->tipoBanco){
   case 'mysql':
    $this->conexao=mysql_connect($servidor,$usuario,$senha);
	mysql_select_db($base);
	break;
   case 'pgsql':
   $url="host=$servidor port=5432 dbname=$base user-$usuario password=$senha";
   $this->conexao = pg_connect($url);
   break;
   }
   }
    public function execute($codigo_sql){
      switch ($this->tipoBanco){
        case 'mysql':
          $r= mysql_query ($codigo_sql,$this->conexao) or die (mysql_error());
          break;
        case 'pgsql':
          $r=pg_query ($this->conexao, $codigo_sql) or die ('erro');
          break;
		  
   }
   return $r;
  }
  
  public function fetch($ref){
  switch($this->tipoBanco){
  case 'mysql':
  $num=mysql_fetch_assoc($ref);
  break;
  case 'pgsql':
  $num=pg_fetch_assoc($ref);
  break;
  }
  return $num;
  }
  }
  ?>