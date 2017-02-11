<?php
/**
 * Home page for Yuzu's robot production site (dashboard controller)
 *
 * So any other public methods not prefixed with an underscore will
 * map to /welcome/<method_name>
 * @author Daniel Tian + Yuzu
 * @version February 10, 2017
*/

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
{

	public function index()
	{
		$this->data['pagebody'] = 'dashboard';
		$this->data['partsCount'] = $this->Parts->count();;
		$this->data['robotsCount'] = $this->Robots->count();
		$this->render(); 
	}

}
