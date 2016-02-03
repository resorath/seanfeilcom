<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$this->load->template('contact');
	}

	public function send()
	{
		$payload = $this->input->post();

		if($payload['website'] != "")
			die("success");

		if($payload["fromname"] == "" ||
			$payload["frommail"] == "" ||
			$payload["message"] == "")
			die("missing");

		$this->email->from($payload['frommail'], $payload['fromname']);
		$this->email->to('hidemyemailfromgithub'); 

		$this->email->subject('Message from seanfeil.com');
		$this->email->message($payload["message"]);	

		if(@$this->email->send())
			echo("success");
		else
			echo("sendproblem");

	}
}
