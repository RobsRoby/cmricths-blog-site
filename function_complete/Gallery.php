
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>CODE ICT| Gallery</title>


	<link rel="shortcut icon" href="imported photos/icon2.png" type="image/x-icon">
    <link href="font-awesome.css" rel="stylesheet">
    <link href="bootstrap.css" rel="stylesheet">  
    <link rel="stylesheet" type="text/css" href="slick.css">         
    <link rel="stylesheet" href="jquery.fancybox.css" type="text/css" media="screen" /> 
    <link id="switcher" href="default-theme.css" rel="stylesheet">  
    <link href="style.css" rel="stylesheet">    
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>
 
  </head>
  <body> 
<!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>      
    </a>
  <!-- END SCROLL TOP BUTTON -->
  <!-- Start menu -->
  <section id="mu-menu">
    <nav class="navbar navbar-default" role="navigation">  
      <div class="container">
        <div class="navbar-header">
        
          <!-- LOGO -->              
          
        <a class="navbar-brand" href="1.php"><img src="tle photos/LOGOO.png" width="200px" height="80px" style="margin-top: -25px;"></a> 
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li class=""><a href="Home.php">Home</a></li>            
            <li class="dropdown">
              <a href="About.php">About </a>
              <ul class="dropdown-menu" role="menu">
                             
              </ul>
            </li>           
            <li> <li class="active"><a href="Gallery.php">Gallery</a></li>
            <li class="dropdown">
              <a href="Blog.php" >Blog </span></a>
            </li>            

            <li><a href="Privacy Policy.php">Privacy Policy</a></li>               
           
          </li>                     
        </div>           
        </div>
		<!--/.nav-collapse -->        
      </div>     
    </nav>
  </section>
  <!-- End menu -->
  <!-- Start search box -->
  <div id="mu-search">
    <div class="mu-search-area">      
      <button class="mu-search-close"><span class="fa fa-close"></span></button>
      <div class="container">
        <div class="row">
          <div class="col-md-12">            
            <form class="mu-search-form">
              <input type="search" placeholder="Type Your Keyword(s) & Hit Enter">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End search box -->
 <!-- Page breadcrumb -->
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>Gallery</h2>
           <ol class="breadcrumb">
            <li><a href="#">Home</a></li>            
            <li class="active">Gallery</li>
          </ol>
         </div>
       </div>
     </div>
   </div>
 </section>
 .
 <!-- End breadcrumb -->
 <!-- Start gallery  -->
 <section id="mu-gallery">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-gallery-area">
          <!-- start title -->
          <div class="mu-title">
            <h2>Some Moments</h2>
            <p>Life is made up of a collection of moments that are not ours to keep. Here is the compilation of the memories that the ICTians have collected throughout the years!</p>
          </div>
          <!-- end title -->
          <!-- start gallery content -->
          <div class="mu-gallery-content">
            <!-- Start gallery menu -->
            <div class="mu-gallery-top">              
              <ul>
                
             
              </ul>
            </div>
            <!-- End gallery menu -->
            <div class="mu-gallery-body">
              <ul id="mixit-container" class="row">
                <!-- start single gallery image -->
                 <?php

            $files = scandir("gallery");
			for ($a = 2; $a < count($files);  $a++){
               ?>

                <!-- start single gallery image -->
                <li class="col-md-4 col-sm-6 col-xs-12 mix lab">
                  <div class="mu-single-gallery">                  
                    <div class="mu-single-gallery-item">
                      <div class="mu-single-gallery-img">
                       <img alt="img" src="gallery/<?php echo $files[$a];?>"></a>
                      </div>
                      <div class="mu-single-gallery-info">
                        <div class="mu-single-gallery-info-inner">
                          <h4>Photos</h4>
                         
                        </div>
                      </div>             
                    </div>
                  </div> 
                </li>
				
			 <?php
			   }
               ?>
              </ul>            
            </div>
          </div>
          <!-- end gallery content -->
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End gallery  -->
 


  <script src="jquery.min.js"></script>  
  <script src="bootstrap.js"></script>   
  <script type="text/javascript" src="slick.js"></script>
  <script type="text/javascript" src="waypoints.js"></script>
  <script type="text/javascript" src="jquery.counterup.js"></script>  
  <script type="text/javascript" src="jquery.mixitup.js"></script>      
  <script type="text/javascript" src="jquery.fancybox.pack.js"></script>
  <script src="custom.js"></script> 

  </body>
</html>