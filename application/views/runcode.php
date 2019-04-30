<!DOCTYPE html>
<html>
<head>
    <!--link an bootstrab online-->
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/homepage.css">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- responsive website -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title></title>
</head>
<body>

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
             <!--  <li class="nav-item"><a href="<?php echo site_url("/profile/viewProfile/".$data->id);  ?>" class="nav-link text-white">MY PROFILE</a></li> -->
             <li class="nav-item"><a href="<?php echo site_url("logout/index"); ?>" class="nav-link text-white">LOGOUT</a></li>
          </ul>
          
        </div>
      </div>
    </nav>  
    
    <!-- navbar stop--> <br>



<script>
SEC_HTTPS = true;
SEC_BASE = "compilers.widgets.sphere-engine.com"; 
(function(d, s, id){ SEC = window.SEC || (window.SEC = []);
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; 
  js.src = (SEC_HTTPS ? "https" : "http") + "://" + SEC_BASE + "/static/sdk/sdk.js";
  fjs.parentNode.insertBefore(js, fjs);   
}(document, "script", "sphere-engine-compilers-jssdk"));
</script>



<div class="sec-widget" data-widget="479dbc9ce4ec5ea154f80329a149eaa5"></div>
</body>
</html>