<?php
/**
 * This is the individual robot pieces you have on hand. Each will have an unique identifier.
 * Identifiers:
 * 	- A robot part code [(a-zA-Z){1}\d{1}]
 *  - A certificate of authenticity (CA)
 *  - The plant that the part was built
 *  - Date & Time of the part that was built
 *
 * @author Jonathan Huang
 */
 class Parts extends CI_Model {
	 
	var $data = array(
		array('code' => 'A3', 'CA' => 'AAAA-0000', 'plant' => 'PlantA', 'date' => '02/09/17', 'time' => '09:30',
			'img' => 'a3.jpeg'),
		array('code' => 'A1', 'CA' => 'AAAA-0001', 'plant' => 'PlantA', 'date' => '02/09/17', 'time' => '09:45',
			'img' => 'a1.jpeg'),
		array('code' => 'C1', 'CA' => 'BBBB-1111', 'plant' => 'PlantB', 'date' => '02/09/17', 'time' => '13:30',
			'img' => 'c1.jpeg'),
		array('code' => 'M2', 'CA' => 'MMMM-0000', 'plant' => 'PlantC', 'date' => '02/11/17', 'time' => '09:30',
			'img' => 'm2.jpeg'),
		array('code' => 'B2', 'CA' => 'BBBB-1112', 'plant' => 'PlantB', 'date' => '02/10/17', 'time' => '11:30',
			'img' => 'b2.jpeg'),
		array('code' => 'R3', 'CA' => 'CCCC-1010', 'plant' => 'PlantA', 'date' => '02/13/17', 'time' => '11:30',
			'img' => 'r3.jpeg'),
		array('code' => 'B1', 'CA' => 'BBBB-1100', 'plant' => 'PlantB', 'date' => '02/13/17', 'time' => '11:45',
			'img' => 'b1.jpeg'),
		array('code' => 'W1', 'CA' => 'WWWW-0011', 'plant' => 'PlantW', 'date' => '02/12/17', 'time' => '13:30',
			'img' => 'w1.jpeg'),
		array('code' => 'C2', 'CA' => 'CCCC-0022', 'plant' => 'PlantC', 'date' => '02/12/17', 'time' => '13:30',
			'img' => 'c2.jpeg'),
		array('code' => 'W3', 'CA' => 'WWWW-0033', 'plant' => 'PlantW', 'date' => '02/12/18', 'time' => '13:40',
			'img' => 'w3.jpeg'),
		array('code' => 'R2', 'CA' => 'RRRR-2000', 'plant' => 'PlantR', 'date' => '02/12/17', 'time' => '19:00',
			'img' => 'r2.jpeg')
	);
	
	// Constructor
	public function __construct(){
		parent::__construct();
	}
	
	// Retrieve a single "part" stored in the data defined by the $which
	public function get($which){
		foreach($this->data as $part)
			if($part['code'] == $which)
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