<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$this->homepage();
	}

	function homepage() {
		$this->load->view('homepage');
	}
}
