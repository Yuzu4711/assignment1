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
		$role = $this->session->userdata('userrole');
		if((strcmp($role, "Boss") != 0))
			redirect($_SERVER['HTTP_REFERER']); // back where we came from
		

		$this->data['pagebody'] = "manage";
		$role = $this->session->userdata('userrole');
		$this->data['pagetitle'] = 'Manage ('. $role . ')';

		$this->data['nav'] = viewBuilder($role); //view based on user role
        $this->data['apiKey'] = $this->Utility->getApiKey();

        // build the list of robots, then pass to the view
		$robots = array();
		$robotsList = $this->Robots->getAllBots();
		foreach($robotsList as $bot)
		{
			$imgSrcHead =  $bot['head_model'].$bot['head_piece'].".jpeg";
			$imgSrcBody = $bot['body_model'].$bot['body_piece'].".jpeg";
			$imgSrcFeet = $bot['foot_model'].$bot['foot_piece'].".jpeg";



			$robots[] = array('RID'=>$bot['ID'] , 'CA_HEAD'=>$bot['head_ca'], 'CA_BODY' => $bot['body_ca'], 
				'CA_FEET' => $bot['foot_ca'], 'imgSrcHead' => $imgSrcHead, 'imgSrcBody' => $imgSrcBody, 
				'imgSrcFeet' => $imgSrcFeet , 'assemble_date' => $bot['assemble_date']);
		}
		
		$this->data['robots'] = $robots;

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

		$url = url() . "/Welcome";
		header( "Location: $url" );

	}

	public function register(){
		$form_data = $this->input->post();
		$team =   $this->input->post("plantName");
		$token =  $this->input->post("secret");

		$apiKey = $this->Utility->getApiKey();
		$response = file_get_contents('https://umbrella.jlparry.com/work/registerme/'.$team.'/'.$token);
		$isOK = explode(" ", $response)[0];

		if($isOK ==='Ok'){
			$apiKey = explode(" ", $response)[1];
			$this->Utility->updateApiKey($apiKey);
			$this->Parts->removeAllParts();
			$this->Robots->removeAllRobots();
			$this->Records->removeAllRecords();
			$this->Utility->resetFinances();	
		}else{
			echo "Failed to register, please provide a valid team name and secret code";
			die();
		}

		$url = url() . "/Manage";
		header( "Location: $url" );
	}

}