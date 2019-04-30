 <?php

 $usr=$this->session->userdata('email');        
 $cmd=$this->db->query("select * from users where email= '$usr' "); 
 $row = $cmd->row_array();      
 ?>

 <!DOCTYPE html>
 <html>
 <head>
     <title>profile</title>
     <!-- <META> -->
     <!-- responsive website -->
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!--link an bootstrab online-->
     <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="<?php echo base_url("css/bootstrapValidator.min.css") ?>">

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>           
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="<?php echo base_url("js/jq.js") ?>"></script>
     <script type="text/javascript" src="<?php echo base_url("js/form-validator/jquery.form-validator.js") ?>"></script>
     <script type="text/javascript" src="<?php echo base_url("js/bootstrap.min.js") ?>"></script>
     <script type="text/javascript" src="<?php echo base_url("js/jqui.js") ?>"></script>


     <!-- ...................... profile style ,,,,,,........................-->
     <style type="text/css">


     .emp-profile{
        padding: 3%;
        margin-top: 3%;
        margin-bottom: 3%;
        border-radius: 0.5rem;
        background: #fff;
    }
    .profile-img{
        text-align: center;
    }
    .profile-img img{
        width: 70%;
        height: 100%;
        border-radius: 50%;
    }
    .profile-img .file {
        position: relative;
        overflow: hidden;
        margin-top: -20%;
        width: 70%;
        border: none;
        border-radius: 0;
        font-size: 15px;
        background: #212529b8;
    }
    .profile-img .file input {
        position: absolute;
        opacity: 0;
        right: 0;
        top: 0;
    }
    .profile-head h5{
        color: #333;
    }
    .profile-head h6{
        color: #0062cc;
    }
    .profile-edit-btn{
        border: none;
        border-radius: 1.5rem;
        width: 70%;
        padding: 2%;
        font-weight: 600;
        color: #6c757d;
        cursor: pointer;
    }
    .proile-rating{
        font-size: 12px;
        color: #818182;
        margin-top: 5%;
    }
    .proile-rating span{
        color: #495057;
        font-size: 15px;
        font-weight: 600;
    }
    .profile-head .nav-tabs{
        margin-bottom:5%;
    }
    .profile-head .nav-tabs .nav-link{
        font-weight:600;
        border: none;
    }
    .profile-head .nav-tabs .nav-link.active{
        border: none;
        border-bottom:2px solid #0062cc;
    }
    .profile-work{
        padding: 14%;
        margin-top: -15%;
    }
    .profile-work p{
        font-size: 12px;
        color: #818182;
        font-weight: 600;
        margin-top: 10%;
    }
    .profile-work a{
        text-decoration: none;
        color: #495057;
        font-weight: 600;
        font-size: 14px;
    }
    .profile-work ul{
        list-style: none;
    }
    .profile-tab label{
        font-weight: 600;
    }
    .profile-tab p{
        font-weight: 600;
        color: #0062cc;
    }

    /*social*/
    .social:hover {
     -webkit-transform: scale(1.1);
     -moz-transform: scale(1.1);
     -o-transform: scale(1.1);
 }
 .social {
     -webkit-transform: scale(0.8);
     /* Browser Variations: */

     -moz-transform: scale(0.8);
     -o-transform: scale(0.8);
     -webkit-transition-duration: 0.5s;
     -moz-transition-duration: 0.5s;
     -o-transition-duration: 0.5s;
 }

/*
    Multicoloured Hover Variations
    */

    #social-fb:hover {
     color: #3B5998;
 }
 #social-tw:hover {
     color: #4099FF;
 }
 #social-in:hover {
     color: #d34836;
 }
 #social-ld:hover {
     color: #f39c12;
 }

</style>


</head>
<body> 


 <div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Form</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
      <?php $this->load->view("updateprofile"); ?>
  </div>
  <div class="modal-footer">

  </div>
</div>
</div>
</div>





<!-- ############ navbar start #################-->

<!-- navbar start-->

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container">
        <!-- website name-->
        <a href="<?php echo base_url(); ?>" class="navbar-brand font-weight-bold">Student Portal</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- seerch box -->
        <form class="form-inline">
            <div class="input-group">
                <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-primary" type="button" id="button-addon2">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

        


        <!-- END SEARCH BOX -->
        <div class="collapse navbar-collapse" id="collapsenavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="<?php echo site_url("home/index"); ?>" class="nav-link text-white">HOME</a></li>
                <li class="nav-item"><a href="<?php echo site_url("runcode/index"); ?> " class="nav-link text-white">RUN CODE</a></li>
                 <li class="nav-item"><a href="<?php echo site_url("profile/viewProfile/".$data->id); ?>" class="nav-link text-white">MY PROFILE</a></li>
                <li class="nav-item"><a href="<?php echo site_url("logout/index"); ?>" class="nav-link text-white">LOGOUT</a></li>
            </ul>

        </div>
    </div>
</nav>  

<!-- navbar stop-->

<!--#################### navbar stop ################-->

<!-- :PROFILE -->

<div class="container emp-profile">

    <div class="row">
        <div class="col-md-4">

         <div class="profile-img">
           <img src="<?php echo base_url($data->image); ?>" height="500px" width="500px" alt=""/>

       </div>
       <div class="data">
        <button href="www.googgle.com" class="btn btn-success" value="follow">FOLLOW
        </button>    
    </div>  
</div>
<div class="col-md-6">
    <div class="profile-head">
        <h5>
         
            <?php echo $data->name; ?>
           <?php echo $data->about; ?> 
       </h5>
       <h6><?php echo $data->about ?>   </h6>

       <!--  <p class="proile-rating">RANKINGS : <span>8/10</span></p> -->

       <!-- follow and followas  -->
       <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">FOLLOWING <?php echo "(N numbers)"; ?></a>
        </li>

        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">FOLLOWERS<?php echo "(N numbers)"; ?></a>

        </li>
    </ul>

    <!-- end -->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
        </li>

    </ul>
</div>

</div>
<div class="col-md-2">
 <a href="#" data-toggle="modal" data-target="#update" class="nav-link text-white">
 

    <?php
    $id=$this->session->userdata('myid');
    if($data->id==$id)
    {
        ?>
        <input type="button" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
    <?php
        }
    ?> 
</a>
</div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="profile-work">

            <p>SKILLS</p>
           
             <?php echo  $data->intrest; ?>
            
        </div>
        <!-- SOCIAL -->
        <div class="container">
            <div class="col-md-4">
                <h5>Social</h5>
                <hr>
                <div class="">
                   <h4>
                      <a href="<?php echo $data->twitter; ?>"><i id="social-fb" class="fa fa-twitter"></i></a>
                      <a href="<?php echo $data->fb; ?>"><i id="social-tw" class="fa fa-facebook"></i></a><br>
                      <a href="<?php echo $data->linkedin; ?>"><i  class="fa fa-linkedin"></i></a>
                      <a href="<?php echo $data->insta; ?>"><i  class="fa fa-instagram"></i></a>
                  </h4>                     
              </div>
          </div>                   
      </div>
  </div>

  <div class="col-md-8">
    <div class="tab-content profile-tab" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="row">
                <div class="col-md-6">
                    <label>Name :: <?php echo $data->name; ?></label>
                </div>

            </div>
            <div class="row">
                <div class="col-md-6">
                    <label>Gender :: <?php  if( $data->gender=="1") echo "male"; else echo "female"; ?></label>
                </div>

            </div>
            <div class="row">
                <div class="col-md-6">
                    <label>Date of Birth :: <?php echo  $data->dob ?></label>
                </div>

            </div>
            <div class="row">
                <div class="col-md-6">
                    <label>Email ::<?php echo $data->email; ?></label>
                </div>

            </div>
            <div class="row">
                <div class="col-md-6">
                    <label>Contact NO :: <?php echo $data->phone; ?></label>
                </div>

            </div>

            <div class="row">
                <div class="col-md-6">
                    <label>Country ::  <?php echo $data->country; ?></label>
                </div>

            </div>


        </div>

    </div>
</div>
</div>
</div>

</form>           
</div>
<!--                             PROFILE END -->




<!-- BOOTSNNIP FOR QUESTIONS AND TEXTBOX TO ASK QUESTIONS -->
<center>



        </center>

    </body> 

<script type="text/javascript">
    $(document).ready(function(){
        var baseurl="<?php echo site_url();?>";
        $.validate({
            form : '#askquestion',
            modules : 'location, date, security, file',
            onSuccess : function($form) {
                var frm = document.getElementById('askquestion');
                var frmdt = new FormData(frm);

                jQuery.ajax({
                    url : baseurl + '/Profile/createCards',
                    type:'POST',
                    data : frmdt,
                    processData: false,
                    contentType: false,
                    async:false,
                    success:function(data){
                        console.log(data);
                        $("#questionsbank").html(data);
                        $("#").html("<b style='color:red'>Invalid Id/Password</b>" );

                    }
                });
                            return false; // Will stop the submission of the form
                        }
                    });
    });

</script>


</html>
