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
 class Robots extends CI_Model 
 {
	// Constructor
	public function __construct(){
		parent::__construct();
	}
	
	// gets the amount of all robot made

	public function count(){
		$this->db->from('robots');
		$query = $this->db->get();
		$rowcount = $query->num_rows();
		return $rowcount;
	}
	
	// get a single robot by their id
	public function getSingleBot($id){
		$this->db->from('robots');
		$this->db->where('ID', $id); 
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}
	// Retrieve all the information stored in the robots table
	public function getAllBots(){
		$this->db->from('robots');
		$query = $this->db->get(); 
		return $query->result_array(); 
	}

	// add a robot, usually after making them by parts
	public function addBot($data){
		$this->db->insert('robots', $data);
	}

	// remove a robot by their id, usually when they are sold
	public function deleteBot($id){
		$this->db->delete('robots', array('ID' => $id));
	}

	// remove all robot available on hand
	public function removeAllRobots(){
		$this->db->empty_table('robots');
	}
 }