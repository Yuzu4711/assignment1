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
		$this->data['pagetitle'] = "Assembly";

		// build the list of parts, to pass on to our view
		$partsList = $this->Parts->all();

		$parts = array();
		foreach ($partsList as $record)
		{
			$parts[] = array ('code' => $record['code'], 'CA' => $record['CA'], 'plant' => $record['plant'],
								'date'=> $record['date'], 'time' => $record['time'], 'imgSrc' => $record['img']);
		}
		$this->data['parts'] = $parts;


		// build the list of robots, then pass to the view
		$robots = array();
		$robotsList = $this->Robots->all();
		foreach($robotsList as $bot)
		{
			$imgSrcHead = $this->Parts->get($bot['CA_HEAD'])['img'];
			$imgSrcBody = $this->Parts->get($bot['CA_BODY'])['img'];
			$imgSrcFeet = $this->Parts->get($bot['CA_FEET'])['img'];

			$robots[] = array('RID'=>$bot['RID'] , 'CA_HEAD'=>$bot['CA_HEAD'], 'CA_BODY' => $bot['CA_BODY'], 
				'CA_FEET' => $bot['CA_FEET'], 'imgSrcHead' => $imgSrcHead, 'imgSrcBody' => $imgSrcBody, 
				'imgSrcFeet' => $imgSrcFeet );
		}
		$this->data['robots'] = $robots;

		$this->render(); 
	}

}
