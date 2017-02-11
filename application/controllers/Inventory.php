<?php

defined('BASEPATH') OR exit('No direct script access allowed');

//Parts Controller
class Inventory extends Application{ 

	function __construct()
	{
		parent::__construct();
	}
	
	
	public function index(){
		$this->data['pagebody'] = 'listview';
		//retrieve all the parts stored in the inventory
		$source = $this->Parts->all();
		$pieces = array();
		foreach($source as $piece){

			$type = "";
			$viewColor = "";
			switch(substr($piece['code'], -1)){
				case '1':
					$type = "Head";
					$viewColor = "info";
					break;
				case '2':
					$type = "Body";
					$viewColor = "success";
					break;
				case '3':
					$type = "Feet";
					$viewColor = "warning";
					break;
				default:
					$type = "Unknown";
					$viewColor = "danger";
					break;
			}
			$pieces[] = array('imgSrc' => $piece['img'], 'code' => $piece['code'], 
				'type' => $type, 'className' => $viewColor);
		}
		$this->data['listElements'] = $pieces;
		$this->render();
	}
}