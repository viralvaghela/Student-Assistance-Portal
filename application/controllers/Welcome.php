<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function index()
	{
		$this->load->view("index");
	}

	public function about()
	{
		$this->load->view("about");
	}
	public function contact()
	{
		$this->load->view("contact");
	}

	public function registration()
	{

		print_r($_POST);
		print_r($_FILES);

		$name=$_POST['name'];
		$gender=$_POST['gender'];
		$dob=$_POST['dob'];
		$email=$_POST['eml'];
		$phone=$_POST['contact'];
		$_FILES["image"]["tmp_name"];
		$country=$_POST['country'];
		$intrest=$_POST['intrest'];
		$fb=$_POST['fb'];
		$insta=$_POST['in'];
		$twitter=$_POST['tw'];
		$linkedin=$_POST['li'];
		$pass=$_POST['password'];			
		$about=$_POST['about'];		
		$timestamp = date("Y-m-d H:i:s");


		$instusers=$this->db->query("insert into users(`name`,`gender`,`dob`,`email`,`phone`,`image`,`intrest`,`timestamp`,`fb`,`insta`,`twitter`,`linkedin`,`country`)values('$name','$gender','$dob','$email','$phone','path...','$intrest','$timestamp','$fb','$insta','$twitter','$linkedin','$country')");
		$uid=$this->db->insert_id(); 

		$generatedName= $uid.".jpg";
		$path="upload/profilepics/";

		move_uploaded_file($_FILES["image"]["tmp_name"], $path.$generatedName);
		
		//update image path
		$this->db->query("update users set `image` = '$path$generatedName' where id=$uid");

		//insert pass in authentication table		
		$insertauth=$this->db->query("insert into authentications(`key`,`users_id`)values('$pass','$uid')");
		
	}	

	public function con()
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$message=$_POST['message'];

		$insertcontact=$this->db->query("insert into contact(`name`,`email`,`message`) values('$name','$email','$message')");
		if ($insertcontact) {
			echo "Thanks for contact";
		}
	}

	public function update()
	{

		print_r($_POST);
		print_r($_FILES);

		$usr=$this->session->userdata('email');        
		$cmd=$this->db->query("select * from users where email= '$usr' "); 
		$row = $cmd->row_array();   
		
		$id=$row['id']; 

		$name=$_POST['name'];
		
		$dob=$_POST['dob'];
		
		$phone=$_POST['contact'];
		$_FILES["image"]["tmp_name"];
		
		$intrest=$_POST['intrest'];
		$fb=$_POST['fb'];
		$insta=$_POST['in'];
		$twitter=$_POST['tw'];
		$linkedin=$_POST['li'];
					
		$about=$_POST['about'];		
		$timestamp = date("Y-m-d H:i:s");


		$updusers=$this->db->query("update users set `name`='$name',`gender`='$gender',`dob`='$dob',`phone`='$phone',`image`='$image',`fb`='$fb',`timestamp`='$timestamp',`insta`='$insta',`twitter`='$twitter',`linkedin`='$linkedin',`country`='$country' where `id`='$id' ");

		$generatedName= $id.".jpg";
		$path="upload/profilepics/";

		move_uploaded_file($_FILES["image"]["tmp_name"], $path.$generatedName);
		//update users set picturre = "path" where id=$uid
		
		//update image path
		$this->db->query("update users set `image` = '$path$generatedName' where id=$id");
		
	}

	public function getemail()
	{
		$email=$_POST['e'];
	
		$insertsubscribers=$this->db->query("insert into subscribers(`email`) values('$email')" );
		if ($insertsubscribers) {
				echo "Thanks :".$email;	
		}
	}



}