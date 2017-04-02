<?php

defined('BASEPATH') OR exit('No direct script access allowed');

//Parts Controller
class Inventory extends Application
{ 
	function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$role = $this->session->userdata('userrole');
		if((strcmp($role, "Worker") != 0) &&
			(strcmp($role, "Boss") != 0) &&
			(strcmp($role, "Supervisor") != 0)){
			redirect($_SERVER['HTTP_REFERER']); // back where we came from
		}
		$this->data['nav'] = viewBuilder($role);

		$this->data['pagebody'] = 'listview';
		$this->data['pagetitle'] = 'Parts ('. $role . ')';
		//retrieve all the parts stored in the inventory
		//from the database
		$source =  $this->Parts->getAllParts();
		$parts = array();
		foreach($source as $part){
			$type = "";
			$colorInfo = "";
			$imageSource = $part['model'].$part['piece'].'.jpeg';
			switch($part['piece']){
				case 1:
					$type = "Head";
					$colorInfo = "text-info";
					break;
				case 2:
					$type = "Body";
					$colorInfo = "text-success";
					break;
				case 3:
					$type = "Feet";
					$colorInfo = "text-warning";
					break;
				default:
					$type = "ErrorType";
			}

			$parts[] = array('id'=>$part['ID'],'imgSrc' => $imageSource, 'certificate' => $part['ca'], 
				'type' => $type, 'colorInfo' => $colorInfo);
		}

		$this->data['listElements'] = $parts; 	
		$this->render();
	}

	public function buildMoreParts()
	{
		$response = file_get_contents('https://umbrella.jlparry.com/work/mybuilds?key='.$this->Utility->getApiKey()); 
        $parts = json_decode($response, true);
        foreach($parts as $part){
        	$data = array(
	        	'ca' => $part['id'],
				'model' => $part['model'],
				'piece' => $part['piece'],
				'plant' => $part['plant'],
				'stamp' => $part['stamp']
        	);

        	$record = array(
        		'date' => $data['stamp'],
        		'record_type' => "Build",
        		'info' => "Part model: ".$data['model'].$data['piece']." Certificate: ".$data['ca']
        	);

        	$this->Parts->insertPart($data);
        	$this->Records->insertRecord($record);
        }

		$url = url() . "/Inventory";
		header( "Location: $url" );
	}

	public function buyParts()
	{

		$response = file_get_contents('https://umbrella.jlparry.com/work/buybox?key='.$this->Utility->getApiKey());
        $parts = json_decode($response, true);
        foreach($parts as $part){
        	$data = array(
	        	'ca' => $part['id'],
				'model' => $part['model'],
				'piece' => $part['piece'],
				'plant' => $part['plant'],
				'stamp' => $part['stamp']
        	);

        	$record = array(
        		'date' => $data['stamp'],
        		'record_type' => "Purchase",
        		'info' => "Part model: ".$data['model'].$data['piece']." Certificate: ".$data['ca']
        	);

        	$this->Parts->insertPart($data);
        	$this->Records->insertRecord($record);
        	
        }
        $this->Utility->updateMoneySpent(100);
		$url = url() . "/Inventory";
		header( "Location: $url" );
	}

	function displayPartInfo($ID)
	{
		$part = $this->Parts->getSinglePart($ID);
		
		$this->data['pagebody'] = 'part_info';
		$this->data['pagetitle'] = $part[0]['ca'];
		$this->data['ID'] = $part[0]['ID'];
		$this->data['ca'] = $part[0]['ca'];
		$this->data['model'] = $part[0]['model'];
		$this->data['piece'] = $part[0]['piece'];
		$this->data['plant'] = $part[0]['plant'];
		$this->data['stamp'] = $part[0]['stamp'];
		$this->render();
	}
}
