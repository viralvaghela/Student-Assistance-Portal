<!DOCTYPE html>
<html>
<head>
     <!-- responsive website -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>



 <title>About Us</title>


 <style type="text/css">
 .paddingTB60 {padding:60px 0px 60px 0px;}
 .gray-bg {background: #F1F1F1 !important;}
 .about-title {}
 .about-title h1 {color: #535353; font-size:45px;font-weight:600;}
 .about-title span {color: #AF0808; font-size:45px;font-weight:700;}
 .about-title h3 {color: #535353; font-size:23px;margin-bottom:24px;}
 .about-title p {color: #7a7a7a;line-height: 1.8;margin: 0 0 15px;}
 .about-paddingB {padding-bottom: 12px;}
 .about-img {padding-left: 57px;}

 /* Social Icons */
 .about-icons {margin:48px 0px 48px 0px ;}
 .about-icons i{margin-right: 10px;padding: 0px; font-size:35px;color:#323232;box-shadow: 0 0 3px rgba(0, 0, 0, .2);}
 .about-icons li {margin:0px;padding:0;display:inline-block;}
 #social-fb:hover {color: #3B5998;transition:all .001s;}
 #social-tw:hover {color: #4099FF;transition:all .001s;}
 #social-gp:hover {color: #d34836;transition:all .001s;}
 #social-em:hover {color: #f39c12;transition:all .001s;}
</style>
</head>
<body>


    <!-- ############ navbar start #################-->

    <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
        <div class="container">
            <!--############# website name ##############-->
            <a href="<?php echo site_url(); ?>" class="navbar-brand font-weight-bold">Student Portal</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsenavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="collapsenavbar">
                <ul class="navbar-nav ml-auto">
                  
                    <li class="nav-item"><a href="<?php  echo site_url('welcome/'); ?>" class="nav-link text-white">Sign Up</a></li>
                </ul>

            </div>
        </div>
    </nav>  

    <!--#################### navbar stop ################-->    


    <div class="about-section paddingTB60 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-6">
                    <div class="about-title clearfix">
                        <h1>About <span>Student Assistant Portal</span></h1>
                        
                        <p class="about-paddingB">This project is very helpful for student of  computer engineering, CS or any person who is learning  programming. So here first users need to create account and then user can ask any question related to programming and other users can give answers to them. So it one type of social media of programmers. Users can follow each other, and also run code online.</p>
                    <p>
Simply this project is combination of social networking  + quora.com  + all in 1 compiler. User can run code of more than 50+ programming Languages such as C, C++, java, PHP, Pyhon, Ruby, Go,  Lua and so on.

                    </p>
                        <div class="about-icons"> 
                            <ul >
                                <li><a href="https://www.facebook.com/"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a> </li>
                                <li><a href="https://twitter.com/"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a> </li>
                                <li> <a href="https://plus.google.com/"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a> </li>
                                <li> <a href="mailto:bootsnipp@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a> </li>
                            </ul>       





                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-6">
                    <div class="about-img">
                        <img src="https://devitems.com/preview/appmom/img/mobile/2.png" alt="">
                    </div>
                </div>  
            </div>
        </div>
    </div>

</body>
</html>
