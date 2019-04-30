<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class logout extends CI_Controller {
	

	public function index()
	{
		$this->session->unset_userdata('email');
		redirect("http://127.0.0.1:8080/project2");
	
	}



}