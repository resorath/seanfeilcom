<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {

	public function index()
	{
		$this->load->template('portfolio/top');
	}

	public function activeliving()
	{
		$this->load->template('portfolio/activeliving');
	}

	public function benefit()
	{
		$this->load->template('portfolio/benefit');
	}

	public function passwordmanagement()
	{
		$this->load->template('portfolio/passwordmanagement');
	}

	public function canvol()
	{
		$this->load->template('portfolio/canvol');
	}


}

