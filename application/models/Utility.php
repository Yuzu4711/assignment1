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
 class Utility extends CI_Model {
	 
	
	// Constructor
	public function __construct(){
		parent::__construct();
	}
	

	public function getInfo(){
		$this->db->from('site_statistics');
		$this->db->where('ID', 1); 
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}

	public function getMoneySpent(){
		$info = $this->getInfo();
		return $info[0]['money_spent'];
	}

	public function getMoneyEarned(){
		$info = $this->getInfo();
		return $info[0]['money_earned'];
	}

	public function getApiKey(){
		$info = $this->getInfo();
		return $info[0]['apikey'];
	}

	public function updateApiKey($newKey){
		$info = $this->getInfo();
		$data = array(
               'apikey' => $newKey
        );
		$this->db->where('id', 1);
		$this->db->update('site_statistics', $data);
	}

	public function updateMoneyEarned($earned){
		$info = $this->getInfo();
		$info[0]['money_earned'] += $earned;
		$data = array(
               'money_spent' => $info[0]['money_spent'],
               'money_earned' => $info[0]['money_earned']
        );
		$this->db->where('id', 1);
		$this->db->update('site_statistics', $data);
	}

	public function updateMoneySpent($spent){
		$info = $this->getInfo();
		$info[0]['money_spent'] += $spent;
		$data = array(
               'money_spent' => $info[0]['money_spent'],
               'money_earned' => $info[0]['money_earned']
        );
		$this->db->where('id', 1);
		$this->db->update('site_statistics', $data);
	}

	public function resetFinances(){
		$data = array(
               'money_spent' => 0,
               'money_earned' => 0
        );
		$this->db->where('id', 1);
		$this->db->update('site_statistics', $data);
	}

 }