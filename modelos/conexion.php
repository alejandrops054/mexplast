<?php

class Conexion{

	static public function conectar(){

		try{

		}cat

		$link = new PDO("mysql:host=localhost;dbname=sistema1","root","");

		$link->exec("set names utf8");
		
		return $link;
	}

}