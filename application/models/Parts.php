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
	

	public function getAllParts(){
		//$this->db->get('parts');
		$this->db->from('parts');
		$this->db->order_by("piece", "asc");
		$query = $this->db->get(); 
		return $query->result_array(); 
	}

	public function getSinglePart($id){
		$this->db->from('parts');
		$this->db->where('ID', $id); 
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}

	public function removeSinglePart($id){
		$this->db->delete('parts', array('ID' => $id));// Produces: // DELETE FROM mytable  // WHERE id 
	}

	public function insertPart($data){
		$this->db->insert('parts', $data);
	}

	public function removeAllParts(){
		$this->db->empty_table('parts');
	}

 }