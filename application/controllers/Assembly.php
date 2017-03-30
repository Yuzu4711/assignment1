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

		$role = $this->session->userdata('userrole');
		if((strcmp($role, "Supervisor") != 0) &&
			(strcmp($role, "Boss") != 0)){
			redirect($_SERVER['HTTP_REFERER']); // back where we came from
		}

		$this->data['nav'] = viewBuilder($role);

		$this->data['pagebody'] = 'assembly_view';
		$this->data['pagetitle'] = 'Assembly ('. $role . ')';

		// build the list of parts, to pass on to our view
		$partsList = $this->Parts->getAllParts();

		$parts = array();
		foreach ($partsList as $record)
		{
			$imageSource = $record['model'].$record['piece'].'.jpeg';
			$parts[] = array('id'=>$record['ID'], 'CA' => $record['ca'],'imgSrc' => $imageSource, 
				'plant' => $record['plant'], 'date' => $record['stamp']);


		}
		$this->data['parts'] = $parts;


		
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

	public function buildRobot($parts){

		$pieces = explode("_", $parts);

		if(count($pieces) != 3){ //there needs to be three parts.
			echo "There must be three pieces!";
			die();
		}

		$piece1 = $this->Parts->getSinglePart($pieces[0]);
		$piece2 = $this->Parts->getSinglePart($pieces[1]);
		$piece3 = $this->Parts->getSinglePart($pieces[2]);
		
		if( ($piece1[0]['piece'] != $piece2[0]['piece'])
			&& ($piece1[0]['piece'] != $piece3[0]['piece'])
			&& ($piece2[0]['piece'] != $piece3[0]['piece'])) //valid composition
		{

			$data = array(
				'head_ca' => 0,
				'body_ca' => 0,
				'foot_ca' => 0,
				'head_model'=>0,
				'body_model'=>0,
				'foot_model'=>0,
				'head_piece'=>0,
				'body_piece'=>0,
				'foot_piece'=>0,
				'assemble_date'=> 0 
			);

			switch($piece1[0]['piece']){
				case 1: //head
					$data['head_ca'] = $piece1[0]['ca'];
					$data['head_model'] = $piece1[0]['model'];
					$data['head_piece'] = $piece1[0]['piece'];
				break;
				case  2: //body
					$data['body_ca'] = $piece1[0]['ca'];
					$data['body_model'] = $piece1[0]['model'];
					$data['body_piece'] = $piece1[0]['piece'];
				break;
				case 3: //foot
					$data['foot_ca'] = $piece1[0]['ca'];
					$data['foot_model'] = $piece1[0]['model'];
					$data['foot_piece'] = $piece1[0]['piece'];
				break;
				default:die();
			}

			switch($piece2[0]['piece']){
				case 1: //head
					$data['head_ca'] = $piece2[0]['ca'];
					$data['head_model'] = $piece2[0]['model'];
					$data['head_piece'] = $piece2[0]['piece'];
				break;
				case  2: //body
					$data['body_ca'] = $piece2[0]['ca'];
					$data['body_model'] = $piece2[0]['model'];
					$data['body_piece'] = $piece2[0]['piece'];
				break;
				case 3: //foot
					$data['foot_ca'] = $piece2[0]['ca'];
					$data['foot_model'] = $piece2[0]['model'];
					$data['foot_piece'] = $piece2[0]['piece'];
				break;
				default:die();
			}

			switch($piece3[0]['piece']){
				case 1: //head
					$data['head_ca'] = $piece3[0]['ca'];
					$data['head_model'] = $piece3[0]['model'];
					$data['head_piece'] = $piece3[0]['piece'];
				break;
				case  2: //body
					$data['body_ca'] = $piece3[0]['ca'];
					$data['body_model'] = $piece3[0]['model'];
					$data['body_piece'] = $piece3[0]['piece'];
				break;
				case 3: //foot
					$data['foot_ca'] = $piece3[0]['ca'];
					$data['foot_model'] = $piece3[0]['model'];
					$data['foot_piece'] = $piece3[0]['piece'];
				break;
				default:
				die();
			}

			$data['assemble_date'] = date("Y-m-d H:i:s");
			$this->Parts->removeSinglePart($piece1[0]['ID']);
			$this->Parts->removeSinglePart($piece2[0]['ID']);
			$this->Parts->removeSinglePart($piece3[0]['ID']);

        	$record = array(
        		'date' => $data['assemble_date'],
        		'record_type' => "Assemble",
        		'info' => "Parts info: head(".$data['head_ca'].") body(".$data['body_ca'].") foot(".$data['foot_ca'].")" 
        	);
        	$this->Records->insertRecord($record);
			$this->Robots->addBot($data);

		}else{
				echo "invalid composition of parts, please try again";
				die();
		}

		$url = url() . "/Assembly";
		header( "Location: $url" );
	}

	public function sellBot($id){
		
		$bot = $this->Robots->getSingleBot($id);
		$transactionUrl = "https://umbrella.jlparry.com/work/buymybot/".
		$bot[0]['head_ca'].'/'.$bot[0]['body_ca'].'/'.$bot[0]['foot_ca']."?key=".$this->Utility->getApiKey();
		$response = file_get_contents($transactionUrl);
		$isOK = explode(" ", $response)[0];

		if($isOK ==='Ok'){
			
			$record = array(
	    		'date' => date("Y-m-d H:i:s"),
	    		'record_type' => "Sale",
	    		'info' => "Head: ".$bot[0]['head_ca']." Body: ".$bot[0]['body_ca'].' Foot: '.$bot[0]['foot_ca']
    		);
    		$this->Records->insertRecord($record);
    		$this->Robots->deleteBot($id);
    		$profit = explode(" ", $response)[1]; //Ok AMOUNT
    		$this->Utility->updateMoneyEarned($profit);
		}
		$url = url() . "/Assembly";
		header( "Location: $url" );
	}

	public function returnRobot($parts){
		$parts = explode("_", $parts);
		if(count($parts)>3){
			echo "Number of selected parts cannot exceed 3.";
			die();
		}

		$recycleUrl = "https://umbrella.jlparry.com/work/recycle";
		
		foreach($parts as $part){
			
			$recycleUrl .= "/".$part;

			$this->Parts->removeSinglePart($part);

			$record = array(
	    		'date' => date("Y-m-d H:i:s"),
	    		'record_type' => "Return",
	    		'info' => "Model Id: ".$part
    		);
    		$this->Records->insertRecord($record);
		}
		$recycleUrl .= "?key=".$this->Utility->getApiKey();
		$response = file_get_contents($recycleUrl);
		$url = url() . "/Assembly";
		header( "Location: $url" );
		
	}

	public function deleteAll(){
		$this->Parts->removeAllParts();
	}

}

