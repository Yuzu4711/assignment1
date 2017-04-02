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

 class Parts extends CI_Model 
 {
	// Constructor
	public function __construct(){
		parent::__construct();
	}
   
	public function count(){
		$this->db->from('parts');
		$query = $this->db->get();
		$rowcount = $query->num_rows();
		return $rowcount;
	}
   
	// gets all available parts on hand
	public function getAllParts(){
		$this->db->from('parts');
		$this->db->order_by("piece", "asc");
		$query = $this->db->get(); 
		return $query->result_array(); 
	}

	// get a single part by their id
	public function getSinglePart($id){
		$this->db->from('parts');
		$this->db->where('ID', $id); 
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}

	// remove a single part by their id
	public function removeSinglePart($id){
		$this->db->delete('parts', array('ID' => $id));// Produces: // DELETE FROM mytable  // WHERE id 
	}

	// add a single part where data is the part
	public function insertPart($data){
		$this->db->insert('parts', $data);
	}

	// remove all available part on hand
	public function removeAllParts(){
		$this->db->empty_table('parts');
	}

 }