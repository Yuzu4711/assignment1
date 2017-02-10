<? php

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
	 
	var $data = array{
		array('code' => 'A3', 'CA' => 'AAAA-0000', 'plant' => 'PlantA', 'date' => '02/09/17', 'time' => '09:30',
			'img' => 'a3.jpeg'),
		array('code' => 'C1', 'CA' => 'BBBB-1111', 'plant' => 'PlantB', 'date' => '02/09/17', 'time' => '13:30',
			'img' => 'c1.jpeg'),
		array('code' => 'M2', 'CA' => 'CCCC-0000', 'plant' => 'PlantC', 'date' => '02/11/17', 'time' => '09:30',
			'img' => 'm2.jpeg'),
		array('code' => 'B2', 'CA' => 'BBBB-1112', 'plant' => 'PlantB', 'date' => '02/10/17', 'time' => '11:30',
			'img' => 'b2.jpeg'),
		array('code' => 'R3', 'CA' => 'CCCC-1010', 'plant' => 'PlantA', 'date' => '02/13/17', 'time' => '11:30',
			'img' => 'r3.jpeg'),
		array('code' => 'W1', 'CA' => 'AAAA-0011', 'plant' => 'PlantC', 'date' => '02/12/17', 'time' => '13:30',
			'img' => 'w1.jpeg')
	};
	
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
	
	// Retrieve all the information stored in the data
	public function all(){
		return $this->data;
	}
 }