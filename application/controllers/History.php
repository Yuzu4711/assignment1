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
		
		$this->data['pagebody'] = "history";
		$this->data['pagetitle'] = "history";
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

		$this->render();
	}

	public function paginatedRecords(){
		$this->data['pagebody'] = "history";
		$this->data['pagetitle'] = "history";
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

		$this->render();
	}

}