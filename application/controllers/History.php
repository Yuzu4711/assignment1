<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class History extends Application
{


	function __construct()
	{
		parent:: __construct();
        $this->load->helper("url");
        $this->load->library("pagination");
	}

	//https://www.sitepoint.com/pagination-with-codeigniter/
	public function index()
	{
		$role = $this->session->userdata('userrole');
		if((strcmp($role, "Boss") != 0))
			redirect($_SERVER['HTTP_REFERER']); // back where we came from
		
		$this->data['pagebody'] = "history";
		$this->data['pagetitle'] = 'History ('. $role . ')';
		$config = array();
		$config["base_url"] = base_url()."History/paginatedRecords";
		$config["total_rows"] = $this->Records->count();
		$config["per_page"] = 20;
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = round($choice);

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->Records->getPaginatedRecords($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        $this->data['records'] = $data['results'];
        $this->data['links'] = $data['links'];
        $this->data['nav'] = viewBuilder($role);

		$this->render();
	}

	public function paginatedRecords($type="Date"){
		$this->data['pagebody'] = "history";
		$this->data['pagetitle'] = "history";
		$config = array();
		$config["base_url"] = base_url()."History/paginatedRecords/";
		$config["total_rows"] = $this->Records->count();
		$config["per_page"] = 20;
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = round($choice);

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

       	$data["results"] = $this->Records->getPaginatedRecords($config["per_page"], $page);

        $data["links"] = $this->pagination->create_links();
        $this->data['records'] = $data['results'];
        $this->data['links'] = $data['links'];

        $role = $this->session->userdata('userrole');
        $this->data['nav'] = viewBuilder($role);
		$this->render();
	}


	public function paginatedRecordsByType($type="Date"){
		$this->data['pagebody'] = "history";
		$this->data['pagetitle'] = "history";
		$config = array();
		$config["base_url"] = base_url()."History/paginatedRecords/";
		$config["total_rows"] = $this->Records->count();
		$config["per_page"] = 200;
        $config["uri_segment"] = 0;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = round($choice);

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

       	$data["results"] = $this->Records->getPaginatedRecordsByType($config["per_page"], $page, $type);

        $data["links"] = $this->pagination->create_links();
        $this->data['records'] = $data['results'];
        $this->data['links'] = $data['links'];

        $role = $this->session->userdata('userrole');
        $this->data['nav'] = viewBuilder($role);
		$this->render();
	}

}