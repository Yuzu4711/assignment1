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
		array('code' => 'A3', 'CA' => 'AAAA-0000', 'plant' => 'PlantA', 'date' => '02/09/17', 'time' => '09:30'),
		array('code' => 'C1', 'CA' => 'BBBB-1111', 'plant' => 'PlantB', 'date' => '02/09/17', 'time' => '13:30'),
		array('code' => 'M2', 'CA' => 'CCCC-0000', 'plant' => 'PlantC', 'date' => '02/11/17', 'time' => '09:30')
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