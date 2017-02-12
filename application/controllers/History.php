<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class History extends Application
{


	function __construct()
	{
		parent::__construct();
	}


	public function index()
	{
		
		$this->data['pagebody'] = 'history';


		$source = $this->Records->all();
		$records = array();

		foreach($source as $record){
			$records[] = array('DATE' => $record['DATE'], 'RECORD-TYPE' => $record['RECORD-TYPE'], 
				'RECORD-INFO' => $record['RECORD-INFO']);
		}
		$this->data['records'] = $records;

		$this->render();
	}

}