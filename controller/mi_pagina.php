<?php

class mi_pagina extends fs_controller{
	public $variable1;
	public function __construct(){
		parent::__construct(__CLASS__,'mi pagina','informes');
	}
	protected function private_core(){
		//$this->variable1="Hola Mundo!";
		$this->variable1=array(
			"manzanas"=>array("color"=>"verde","peso"=>200),
			"pera"=>array("color"=>"amarilla","peso"=>100),
			"piña"=>array("color"=>"marron","peso"=>600),
		);
	}
}