<?php 
class Modele
{
	private $db;

//Se connecter à la base de données
	public function getBdd() {$this->$db = new PDO('mysql:host=localhost;dbname=cognitio','root','');}

}