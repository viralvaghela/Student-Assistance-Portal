 <!-- <?php

 $usr=$this->session->userdata('email');        
 $cmd=$this->db->query("select * from users where email= '$usr' ");
 $row = $cmd->row_array();     

 ?> -->
 
 <!DOCTYPE html>
 <html>
 <head>
     <title>home page</title>
     <!-- Meta Tags -->
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Style Sheets -->
     <link rel="stylesheet" href="<?php echo base_url("css/bootstrapValidator.min.css") ?>">
     <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
     crossorigin="anonymous">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

     <!-- Scripts -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
     <script type="text/javascript" src="<?php echo base_url("js/jq.js") ?>"></script>
     <script type="text/javascript" src="<?php echo base_url("js/form-validator/jquery.form-validator.js") ?>"></script>
     <script type="text/javascript" src="<?php echo base_url("js/bootstrap.min.js") ?>"></script>
     <script type="text/javascript" src="<?php echo base_url("js/jqui.js") ?>"></script>
 </head>
 <body>

    <div class="modal fade" id="showanswer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Answers</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <?php $this->load->view("showanswer"); ?>
        </div>
        <div class="modal-footer">

        </div>
    </div>
</div>
</div>

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
      <li class="nav-item"><a href="<?php echo site_url("profile/viewProfile/".$_SESSION["myid"]); ?>" class="nav-link text-white">MY PROFILE</a></li>
      <li class="nav-item"><a href="<?php echo site_url("logout/index"); ?>" class="nav-link text-white">LOGOUT</a></li>
  </ul>
</div>

</nav>	

<!-- navbar stop-->


<div class="container-fluid gedf-wrapper" style="margin-top: 20px;">
   <div class="row">
    <div class="col-md-3">
        <div class="card">
            <div class="profile-img">
                <img src="<?php  echo base_url($row['image']);?>"   alt="" height="250px" width="250px" />

            </div>
            <div class="card-body">
                <div class="h5"><?php echo $row['name']; ?></div>
                <div class="h7 text-muted">User id:<?php echo $row['id']; ?></div>
                <div class="h7"><?php $row['intrest']; ?></div>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="h6 text-muted">Followers</div>
                    <div class="h5">14555</div>
                </li>
                <li class="list-group-item">
                    <div class="h6 text-muted">Following</div>
                    <div class="h5">6758</div>
                </li>
                <!-- <li class="list-group-item">Vestibulum at eros</li> -->
            </ul>
        </div>
    </div>
    <div class="col-md-6 gedf-main">


        <!-- ASK Question POST -->
        
        <!--- \\\\\\\Post-->

        <form name="askquestion" id="askquestion" method="POST" action="#" >


            <div class="card gedf-card">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="posts-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="posts" aria-selected="true">Ask Questions</a>
                        </li>

                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                            <div class="form-group">
                                <label class="sr-only" for="message">post</label>
                                <textarea class="form-control" required="required" name="question" data-validation='required' id="message" rows="3" placeholder="What are you thinking?"></textarea>
                            </div>

                        </div>

                    </div>
                    <div class="btn-toolbar justify-content-between">
                        <div class="btn-group">
                            <button type="submit" class="btn btn-primary">share</button>
                        </div>

                        <div class="btn-group">

                        </div>
                    </div>
                </div>
            </div>

        </form>
        <center id="questionsbank">
            <?php echo $cards ?>
        </center>


    </div>

</div> 
</div>
</div>


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
                    url : baseurl + '/Home/askquestion',
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