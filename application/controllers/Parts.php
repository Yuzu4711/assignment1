<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory extends Application{
	
	public function index(){
		$this->data['pagebody'] = 'listview';
		//retrieve all the parts stored in the inventory
		$source = $this->parts->all();
		$pieces = array();
		foreach($source as $piece){
			$pieces[] = array('imgSrc' = > $piece['img'], 'code' => $piece['code']);
		}
		$this->data['listElements'] = $pieces
		$this->render();
	}
}