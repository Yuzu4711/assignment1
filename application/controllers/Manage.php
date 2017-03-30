<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Manage extends Application
{


	function __construct()
	{
		parent:: __construct();
	}

	//https://www.sitepoint.com/pagination-with-codeigniter/
	public function index()
	{	
		$this->data['pagebody'] = "manage";
		$role = $this->session->userdata('userrole');
		$this->data['pagetitle'] = 'Manage ('. $role . ')';

		$this->data['nav'] = viewBuilder($role); //view based on user role
                  

		$this->render();
	}

	public function resetApp(){
		//api key
		$apiKey = $this->Utility->getApiKey();
		$response = file_get_contents('https://umbrella.jlparry.com/work/rebootme?key='.$apiKey);

		$isOK = explode(" ", $response)[0];

		if($isOK ==='Ok'){
			$this->Parts->removeAllParts();
			$this->Robots->removeAllRobots();
			$this->Records->removeAllRecords();
			$this->Utility->resetFinances();	
		}

	}

}