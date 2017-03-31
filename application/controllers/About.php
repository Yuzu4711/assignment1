<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class About extends Application
{


	function __construct()
	{
		parent::__construct();
	}


	public function index()
	{
		$role = $this->session->userdata('userrole');
		$this->data['nav'] = viewBuilder($role);
		$this->data['pagetitle'] = 'About ('. $role . ')';
		$this->data['pagebody'] = 'about';
		$this->render();
	}

}
