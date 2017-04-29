<?php
//class.conexao.php

    require_once('class.bancodedados.php');

    $database = 'cliente';


    abstract class conexao {
	public static function getConexao()	{
	$db=new banco ('mysql');
	$db->connect('localhost','root','','banco');
	return $db;
	}
	}
	$banco=conexao::getConexao();




	?>
