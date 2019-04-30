<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
	public function index()
	{
		$check_login=$this->session->userdata('email');
		if (!isset($check_login)) {
			redirect('http://127.0.0.1:8080/project2/');
		}
		$que=$this->db->query("select u.id,u.name,q.id as qid,u.about,q.question from questions q inner join users u on u.id=q.users_id order by q.id desc");
		$q="";

		foreach ($que->result() as $row) {
			$q.=$this->createCards($row);
		}
		$data=array("cards"=>$q);
		$this->load->view("homepage",$data);
	}

	public function login()
	{
		$this->load->helper("security");
		$email=$_POST['email'];
		$pass=$_POST['password'];

		$email=$this->security->xss_clean($email);
		$pass=$this->security->xss_clean($pass);

		$auth=$this->db->escape($pass);
		$auth=$this->db->query("select u.id from authentications a inner join users u on u.id=a.users_id where u.email='$email' and a.key='$pass'");
		if ($auth->num_rows() > 0) {
			$row=$auth->row();
			$this->session->set_userdata('email',$email);
			$this->session->set_userdata('myid',$row->id);
			$this->session->set_userdata('is_logged_in',1);	 	
			echo site_url("/home/");
			
		}
		else{
			echo 0;
		}
	}
	public function askquestion()
	{
		//print_r($_POST);
		$usr=$this->session->userdata('email');        
		$cmd=$this->db->query("select * from users where email= '$usr' ");
		$row = $cmd->row_array(); 
		$id=$row['id'];
		$timestamp = date("Y-m-d H:i:s");

		$question=$_POST['question'];
		$insertque=$this->db->query("insert into questions(`users_id`,`question`,`timestamp`) VALUES('$id','$question','$timestamp');");
		$que=$this->db->query("select u.id,q.id as qid,u.name,u.about,q.question from questions q inner join users u on u.id=q.users_id order by q.id desc");
		$q="";

		foreach ($que->result() as $row) {
			$q.=$this->createCards($row);
		}
		echo $q;

	}
	public function createCards($row)
	{
		$card="<div class='card gedf-card'>
                <div class='card-header'>

                    <div class='d-flex justify-content-between align-items-center'>
                        <div class='d-flex justify-content-between align-items-center'>
                            <div class='mr-2'>
                                <img class='rounded-circle'  width='45' src='#' alt=''>
                            </div>
                            <div class='ml-2'>
                                <div class='h5 m-0'><a href='".site_url("/profile/viewProfile/".$row->id)."'>$row->name</a></div>
                                <div class='h7 text-muted'>$row->about</div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class='card-body'>

                    <a class='card-link' href='#'>
                        <h5 class='card-title'>$row->question</h5>
                    </a>

                    
               </div>

               <div class='card-footer'>
                <a href='#' class='card-link'><i class='fa fa-gittip'></i> Like</a>
                <form name='ans' method='POST' action='postanswer' >
                    <input type='textarea' class='form-control' placeholder='Write Your Answer' ><Br>
                    <button class='btn btn-primary' name='submitAnswer'> Submit answer</button>
                    <a href='#' data-toggle='modal' data-target='#showanswer' class='nav-link text-white'> <button class='btn btn-secondary' name='showanswer' data-id='$row->qid'>Show  answer</button>  </a>

                </form>



            </div>

        </div><br><br>	";
        return $card;
	}
	

}