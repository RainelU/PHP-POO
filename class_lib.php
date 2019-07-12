<?php

class Persona{
	public $name;

	function __construct($person_name){
		$this->name = $person_name;
	}

	protected function dar_nombre($new_name){
		$this->name = $new_name;
	}

	function obtener_nombre(){
		return $this->name;
	}
}

class Alias extends Persona{

	protected function dar_nombre($name){
		if ($name === "Kike") {
			$this->name = $name;
		}else if($name === "Kickers") {
			Persona::dar_nombre($name);
		}else if($name === ""){
			return false;
		}
	}

	function __construct($alias_name){
		$this->dar_nombre($alias_name);
	}
}

class favoriteChampion extends Persona
{
	public $champ_name;

	protected function setNameRandomChamp($set_champ_name){
		$champ_name = ["Ekko", "Elise", "Braum", "Lulu"];
		$set_champ_name = array_rand($champ_name, 1);
		
		if ($set_champ_name === 0) {
			$this->champ_name = $set_champ_name;
		}
		
		$this->champ_name = $set_champ_name;
	}

	function getNameRandomChamp($set_champ_name){
		$this->champ_name = $set_champ_name;
	}

	function __construct($champ_name)
	{
		$this->champ_name = $champ_name;
		return $this->champ_name;
	}
}