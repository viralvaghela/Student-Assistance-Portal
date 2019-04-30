<!DOCTYPE html>
<html>
<head>
	<title>sap project</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url("css/bootstrapValidator.min.css") ?>">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url("js/jq.js") ?>"></script>
  <script type="text/javascript" src="<?php echo base_url("js/form-validator/jquery.form-validator.js") ?>"></script>
  <script type="text/javascript" src="<?php echo base_url("js/bootstrap.min.js") ?>"></script>
  <script type="text/javascript" src="<?php echo base_url("js/jqui.js") ?>"></script>

  <style type="text/css">
    body {
      margin:0;
      color:#edf3ff;

      background-size: cover;
      font:600 16px/18px 'Open Sans',sans-serif;}
      :after,:before{box-sizing:border-box}
      .clearfix:after,.clearfix:before{content:'';display:table}
      .clearfix:after{clear:both;display:block}
      a{color:inherit;text-decoration:none}

      .login-wrap{
        border-radius: 20px;
        width: 100%;
        margin-right: 10px;
        margin:auto;
        max-width:410px;
        min-height:410px;
        position:relative;
        float: right;

        background: url("../img/intro-bg.png") center bottom no-repeat;
        background-size: cover;
        box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
      }
      .login-html{
        border-radius: 20px;
        width:100%;
        height:100%;
        position:absolute;
        padding:90px 70px 50px 70px;
        background:rgba(0,0,0,0.5);
      }
      .login-html .sign-in,
      .login-html .for-pwd,
      .login-form .group .check{
        display:none;
      }
      .login-html .tab,
      .login-form .group .label,
      .login-form .group .button{
        text-transform:uppercase;
      }
      .login-html .tab{
        font-size:22px;
        margin-right:15px;
        padding-bottom:5px;
        margin:0 15px 10px 0;
        display:inline-block;
        border-bottom:2px solid transparent;
      }
      .login-html .sign-in:checked + .tab,
      .login-html .for-pwd:checked + .tab{
        color:#fff;
        border-color:#1161ee;
      }

      .login-form .group{
        margin-bottom:15px;
      }
      .login-form .group .label,
      .login-form .group .input,
      .login-form .group .button{
        width:100%;
        color:#fff;
        display:block;
      }
      .login-form .group .input,
      .login-form .group .button{
        border:none;
        padding:15px 20px;
        border-radius:25px;
        background:rgba(255,255,255,.1);
      }
      .login-form .group input[data-type="password"]{
        text-security:circle;
        -webkit-text-security:circle;
      }
      .login-form .group .label{
        color:#aaa;
        font-size:12px;
      }
      .login-form .group .button{
        background:#1161ee;
      }
      /*END LOGIN DESIGN*/

    </style>

  </head>
  <body>

    <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Registration Form</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <?php $this->load->view("register"); ?>
          </div>
          <div class="modal-footer">

          </div>
        </div>
      </div>
    </div>
    <div class="bgimg">

      <!-- ############ navbar start #################-->

      <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top" style="height: 55px;">
       <a class="navbar-brand" href="#">

       </a>
       <div class="container">
        <!--############# website name ##############-->
        <a href="" class="navbar-brand font-weight-bold">Student Portal</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
         <span class="navbar-toggler-icon"></span>
       </button>

       <div class="collapse navbar-collapse" id="collapsenavbar">
         <ul class="navbar-nav ml-auto">

          <li class="nav-item"><a href="#" data-toggle="modal" data-target="#register" class="nav-link text-white">Sign Up</a></li>
        </ul>

      </div>
    </div>
  </nav>	

  <!--#################### navbar stop ################-->

		<!--==========================
    Intro Section
    ============================-->
    <section id="intro" class="clearfix">
      <div class="container">

        <div class="intro-img">
          <img src="img/intro.svg" alt="" class="img-fluid">
        </div>
        <form method="POST" id="login" class="form-design" >
          <div class="login-wrap">
           <div class="login-html">


            <div class="login-form">
             <div class="sign-in-htm">
              <div class="group">
               <label for="user" id="email" class="label">Username or Email</label>
               <input id="email"  type="text" name="email" data-validation='required' class="input">
             </div>
             <div class="group">
               <label for="pass" id="pass" class="label">Password</label>
               <input id="pass" type="password" class="input" data-validation='required' name="password" data-type="password">
             </div>
             <div class="group">
               <input type="submit" class="button" value="Sign In">
             </div>
             <div id="msg"></div>
             <div id="registration_msg"></div>
             <div class="hr"></div>
             <div class="forget-pass">
              <span class="forpass"><a href="<?php  echo site_url('forgetpass/'); ?>">Forget Password?</a></span>
              <style type="text/css">
                .forpass{
                  float: right;
                  padding-top:10px;
                }
              </style>

            </div>
          </div>

        </div>
      </div>
    </div>
  </form>




</div>
</section><!-- #intro -->



</div> <!-- bgimg -->
</div>
</div>


	 <!--==========================
      Team Section
      ============================-->

      <section style="margin-top:0px;margin-bottom:0px; ">
        <div class="container">
          <h3 style="text-align: center; color:black;">Top users</h3>
          <div class="row">
            <div class="col-md-4 col-sm-6">
              <div class="our-team">
                <div class="pic">
                  <img src="img/team-1.jpg" class="">
                  <ul class="social">
                    <li><a href="#" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-instagram"></a></li>
                    <li><a href="#" class="fa fa-linkedin"></a></li>
                  </ul>
                </div>
                <div class="team-content">
                  <h3 class="title">Williamson</h3>
                  <span class="post">Web Developer</span>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="our-team">
                <div class="pic">
                  <img src="img/team-2.jpg">
                  <ul class="social">
                    <li><a href="#" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-instagram"></a></li>
                    <li><a href="#" class="fa fa-linkedin"></a></li>
                  </ul>
                </div>
                <div class="team-content">
                  <h3 class="title">Kristiana</h3>
                  <span class="post">Web Designer</span>
                </div>
              </div>
            </div>

            <div class="col-md-4 col-sm-6">
              <div class="our-team">
                <div class="pic">
                  <img src="img/team-3.jpg">
                  <ul class="social">
                    <li><a href="#" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-instagram"></a></li>
                    <li><a href="#" class="fa fa-linkedin"></a></li>
                  </ul>
                </div>
                <div class="team-content">
                  <h3 class="title">Kristiana</h3>
                  <span class="post">Web Designer</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>




      <!-- END TEAM SECTION -->
<!--start footer 
	
		
</footer>-->
<!-- footer -->
<div class="footer" style="margin-top:100px; ">
  <div class="container-fluid">
    <div class="row ">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
       <p class="">Student Portal</p>
     </div>
   </div>
   <hr class="footer-line">
   <div class="row ">
    <!-- footer-about -->
    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 ">
      <div class="footer-widget ">
        <div class="footer-title">Company</div>
        <ul class="list-unstyled">
          <li><a href="<?php echo site_url("welcome/about"); ?>">About US</a></li>
          <li><a href="<?php echo site_url("welcome/contact"); ?>">Contact US</a></li>

        </ul>
      </div>
    </div>
    <!-- /.footer-about -->
    <!-- footer-links -->
    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 ">
      <div class="footer-widget ">
        <div class="footer-title">Quick Links</div>
        <ul class="list-unstyled">

          <li><a href="https://w3schools.com" target="_blank">W3 School</a></li>
          <li><a href="https://tutorialspoint.com" target="_blank">tutorialspoint</a></li>
          <li><a href="https://javatpoint.com" target="_blank">Java</a></li>
          <li><a href="https://geeksforgeek.com" target="_blank">geeksforgeek</a></li>

        </ul>
      </div>
    </div>
    <!-- /.footer-links -->
    <!-- footer-links -->
    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 ">
      <div class="footer-widget ">
        <div class="footer-title">Social</div>
        <ul class="list-unstyled">
          <li><a href="#">Twitter</a></li>
          <li><a href="#">Google +</a></li>
          <li><a href="#">Linked In</a></li>
          <li><a href="#">Facebook</a></li>
          <li><a href="#">Instagram</a></li>

        </ul>
      </div>
    </div>
    <!-- /.footer-links -->
    <!-- footer-links -->
    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-6 col-6 ">
      <div class="footer-widget ">
        <h3 class="footer-title">Subscribe </h3>
        <form name="emlsend" action="<?php echo site_url('welcome/getemail'); ?>" method="POST">
          <div class="newsletter-form">
            <input class="form-control" placeholder="Enter Your Email address" type="email" id="e" name="e">
            <button class="btn btn-sm float-right" type="submit">Subscribe</button>
          </div>
        </form>
      </div>
    </div>

    <!-- /.footer-links -->
    <!-- tiny-footer -->
  </div>
  <div class="row ">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center ">
      <div class="tiny-footer">
        <p>Copyright &copy 2019 | Design & Developed by Viral & Harshal </p>
      </div>
    </div>
    <!-- /. tiny-footer -->
  </div>
</div>
</div>
<!-- /.footer -->

<script type="text/javascript">
  $(document).ready(function(){
    var baseurl="<?php echo site_url();?>";
    $.validate({
      form : '#login',
      modules : 'location, date, security, file',
      onSuccess : function($form) {
        var frm = document.getElementById('login');
        var frmdt = new FormData(frm);

        jQuery.ajax({
          url : baseurl + '/home/login',
          type:'POST',
          data : frmdt,
          processData: false,
          contentType: false,
          async:false,
          success:function(data){
            console.log(data);
            if(data==0)
            {
              $("#msg").html("<b style='color:red'>Invalid Id/Password</b>");

            }
            else
            {
              window.location.href=data;
            }

          }
        });
        return false; 
      }
    });
  });

</script>

</body>
</html>