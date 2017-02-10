<?php

/**
 * This is the individual robot pieces you have on hand. Each will have an unique identifier.
 * Identifiers:
 * 	- A robot part code [(a-zA-Z){1}\d{1}]
 *  - A certificate of authenticity (CA)
 *  - The plant that the part was built
 *  - Date & Time of the part that was built
 *
 * @author Daniel Tian
 */
 class Robots extends CI_Model {
	 
	var $data = array(

		array('RID' => 'RRRR-0000', 'CA_HEAD' => 'C1', 'CA_BODY' => 'M2', 'CA_FEET' => 'A3'),
		array('RID' => 'RRRR-0000', 'CA_HEAD' => 'A1', 'CA_BODY' => 'A2', 'CA_FEET' => 'R3'),
		array('RID' => 'RRRR-0000', 'CA_HEAD' => 'B1', 'CA_BODY' => 'R2', 'CA_FEET' => 'W3'),
		array('RID' => 'RRRR-0000', 'CA_HEAD' => 'M1', 'CA_BODY' => 'C2', 'CA_FEET' => 'M3')
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
	
	// Retrieve all the information stored in the data
	public function all(){
		return $this->data;
	}
 }