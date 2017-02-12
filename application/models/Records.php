<?php

/**
 * This is a model that keeps a record of all transactions
 *
 * @author Daniel Tian
 */
 class Records extends CI_Model {
	 
	var $data = array(

		array('HID' => 'HHHH-0000', 'DATE' => '2/05/2017', 'RECORD-TYPE' => 'Assembly', 
			'RECORD-INFO' => 'A1 M2 W3'),
		array('HID' => 'HHHH-0001', 'DATE' => '2/05/2017', 'RECORD-TYPE' => 'Shipment', 
			'RECORD-INFO' => 'Robot Id: RRRR-0001'),
		array('HID' => 'HHHH-0002', 'DATE' => '2/05/2017', 'RECORD-TYPE' => 'Purchase', 
			'RECORD-INFO' => 'Part ID: A3'),
		array('HID' => 'HHHH-0003', 'DATE' => '2/05/2017', 'RECORD-TYPE' => 'Purchase', 
			'RECORD-INFO' => 'Part ID: A2')
	);
	

	// Constructor
	public function __construct(){
		parent::__construct();
	}
	
	// Retrieve a single "part" stored in the data defined by the $which
	public function get($which){
		foreach($this->data as $part)
			if($part['RID'] == $which)
				return $part;
		return null;
	}

	public function count(){
		return sizeof($this->data);
	}
	
	// Retrieve all the information stored in the data
	public function all(){
		return $this->data;
	}
 }