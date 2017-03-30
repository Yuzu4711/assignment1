<?php

/**
 * This is a model that keeps a record of all transactions
 *
 * @author Daniel Tian
 */
 class Records extends CI_Model {
	

	// Constructor
	public function __construct(){
		parent::__construct();
	}
	
	public function getAllRecords(){
		//$this->db->get('parts');
		$this->db->from('history');
		$this->db->order_by("date", "desc");
		$query = $this->db->get(); 
		return $query->result_array(); 
	}

	public function getPaginatedRecords($limit, $start){
		$this->db->limit($limit, $start);
		$query = $this->db->get('history');
		 if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
	}

	 public function count() {
        return $this->db->count_all("history");
    }

	// Retrieve a single "record" stored in the history table
	public function getSingleRecord($id){
		$this->db->from('history');
		$this->db->where('ID', $id); 
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}

	
	public function insertRecord($data){
		$this->db->insert('history', $data);
	}

	public function removeAllRecords(){
		$this->db->empty_table('history');
	}

	public function removeSingleRecord($id){
		$this->db->delete('history', array('ID' => $id));// Produces: // DELETE FROM mytable  // WHERE id 
	}
 }