<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Assembly extends Application
{


	function __construct()
	{
		parent::__construct();
	}


	public function index()
	{
		$this->data['pagebody'] = 'assembly_view';

		// build the list of parts, to pass on to our view
		$partsList = $this->Parts->all();

		$parts = array ();
		foreach ($partsList as $record)
		{
			$parts[] = array ('code' => $record['code'], 'CA' => $record['CA'], 'plant' => $record['plant'],
								'date'=> $record['date'], 'time' => $record['time']);
		}
		$this->data['parts'] = $parts;

		$this->render(); 
	}

}
