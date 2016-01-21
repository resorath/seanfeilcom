<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Errors extends CI_Controller {

	public function index()
	{
		$this->load->template('home');
	}

	public function h404()
	{
		$this->load->template("errors/html/error_404");
	}
}
