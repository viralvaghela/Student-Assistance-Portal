<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class register extends CI_Controller {
	
	public function index()
	{

		$usr=$this->session->userdata('email'); 
		//echo $usr;
		//$this->db->query();
		$this->load->view("register");
	}

	


}

?>