
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>CODE ICT | About</title>
	
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

        
   
           <a class="navbar-brand" href="1.php"><img src="tle photos/LOGOO.png" width="200px" height="80px" style="margin-top: -25px;"></a> 
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li class=""><a href="Home.php">Home</a></li>            
            <li class="dropdown">
              <li class="active"> <a href="About.php">About </a>
              <ul class="dropdown-menu" role="menu">
                             
              </ul>
            </li>           
            <li><a href="Gallery.php">Gallery</a></li>
            <li class="dropdown">
              <a href="Blog.php" >Blog </span></a>
            </li>            

            <li><a href="Privacy Policy.html">Privacy Policy</a></li>               
           
          </li>                     
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
           <h2>About</h2>
           <ol class="breadcrumb">
            <li><a href="#">Home</a></li>            
            <li class="active">About</li>
          </ol>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->
 <section id="mu-course-content">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-course-content-area">
            <div class="row">
              <div class="col-md-9">
			  
			  <section id="mu-course-content">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-course-content-area">
            <div class="row">
              <div class="col-md-9">
                <!-- start course content container -->
                <div class="mu-course-container mu-blog-single">
                  <div class="row">
                    <div class="col-md-12">
                      <article class="mu-blog-single-item">
                        <figure class="mu-blog-single-img">
				<?php 
			include('connection.php');
			$position= "about";
			$table = "photo";
			$SQL = "SELECT * FROM $table WHERE position='$position' LIMIT 1";
			$result = mysqli_query($conn, $SQL);
			$user = mysqli_fetch_assoc($result);
				?>	
                         <img alt="img" src="imported photos/<?php echo $user['photo'];?>" width="100%" height="80%" ></a>
                          <figcaption class="mu-blog-caption">
                            <h3><a href="#">Claro M. Recto ICT High School</a></h3>
                          </figcaption>                      
                        </figure>
                        <div class="mu-blog-meta">
                         <?php	
			include('connection.php');
			$position= "div1";
			$table = "about";
			$SQL = "SELECT * FROM $table WHERE position='$position' LIMIT 1";
			$result = mysqli_query($conn, $SQL);
			$user = mysqli_fetch_assoc($result);
			?>
                       
                        </div>
                        <div class="mu-blog-description">
                          <p><?php echo $user['inputs']; ?></p>  
                          </ul>
                          
                        </div>
                      
                        
                      </article>
                    </div>                                   
                  </div>
                </div>
				
                <!-- start course content container -->
                <div class="mu-course-container">
                  <div class="row">
                    <div class="col-md-6 col-sm-6">
                    <div class="mu-latest-course-single">
                      <figure class="mu-latest-course-img">
                       
                        <figcaption class="mu-latest-course-imgcaption">
                          <a>Mission</a>
                          <span></span>
                        </figcaption>
                      </figure>
                      <div class="mu-latest-course-single-content">
                       
To protect and promote the right of every Filipino to quality, equitable, culture-based, and complete basic education where:
<br>> Students learn in a child-friendly, gender-sensitive, safe and motivating environment;
<br>> Teachers facilitate learning and constantly nurture every learner;
<br>> Administrators and staff, as stewards of the institution, ensure an enabling and supportive environment for effective learning to happen;
<Br>> Family, community and other stakeholders are actively engaged and share responsibility for developing life-long learners.</p>
                        <div class="mu-latest-course-single-contbottom">
                          
                        </div>
                      </div>
                    </div> 
                  </div>                  
                  <div class="col-md-6 col-sm-6">
                    <div class="mu-latest-course-single">
                      <figure class="mu-latest-course-img">
                      
                        
						
						
                         
                        </div>
                      </div>
                    </div>
                  </div>
                   <div class="mu-course-container">
                  <div class="row">
                    <div class="col-md-6 col-sm-6">
                    <div class="mu-latest-course-single">
                      <figure class="mu-latest-course-img">
                       
                        <figcaption class="mu-latest-course-imgcaption">
                          <a>Vision</a>
                          <span></span>
                        </figcaption>
                      </figure>
                      <div class="mu-latest-course-single-content">
                    
                        <p>We dream of Filipinos
<br>who passionately love their country
<br>and whose values and competencies
<br>enable them to realize their full potential
<br>and contribute meaningfully to building the nation.

<br>As a learner-centered public institution,
<br>the Department of Education
<br>continuously improves itself
<br>to better serve its stakeholders.

</p>
                        <div class="mu-latest-course-single-contbottom">
                          
                        </div>
                      </div>
                    </div> 
                  </div>                    
                <!-- end course content container -->
              </div>
              <div class="col-md-3">

                <!-- start sidebar -->
                <aside class="mu-sidebar">
                 

                 
                 
                  <!-- end single sidebar -->
                </aside>
                <!-- / end sidebar -->
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 



  <script src="jquery.min.js"></script>  
  <script src="bootstrap.js"></script>   
  <script type="text/javascript" src="slick.js"></script>
  <script type="text/javascript" src="waypoints.js"></script>
  <script type="text/javascript" src="jquery.counterup.js"></script>  
  <script type="text/javascript" src="jquery.mixitup.js"></script>       
  <script type="text/javascript" src="jquery.fancybox.pack.js"></script>
  <script src="custom.js"></script> 

</div>
  </body>
</html>