<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profile extends CI_Controller {
	
	public function index()
	{
		$check_login=$this->session->userdata('email');
		if (!isset($check_login)) {
			redirect('http://127.0.0.1:8080/project2');
		}
		$usr=$this->session->userdata('email');
        
        $cmd=$this->db->query("select * from users where email= '$usr' ");
        $row = $cmd->row_array();		
        //print_r($row);
       	
		$this->load->view("profilepage");
	}
	public function viewProfile($pid)
	{
		$db=$this->db->query("select * from users where id=$pid")->row();
		$this->load->view("profilepage",array("data"=>$db));

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
                    <a href='#' data-toggle='modal' data-target='#showanswer' class='nav-link text-white'> <button class='btn btn-secondary' name='showanswer'>Show  answer</button>  </a>

                </form>



            </div>

        </div><br><br>	";
        return $card;
	}
	

}

?>