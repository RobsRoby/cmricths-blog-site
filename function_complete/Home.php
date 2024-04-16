
<html lang="en">
  <head>
  <style>
  .button {
display: inline-block;
border-radius: 4px;
color: black;
text-align: center;
font-size: 10px;
height: 20px;
width: 100px;
transition: all 0.5s;
background-color: white;
font-family: Century Gothic;
}

.button span {
display: inline-block;
position: relative;
transition: 0.5s;
}

.button span:after {
content: '\00bb';
position: absolute;
opacity: 0;
top: 0;
right: -20px;
transition: 0.5s;
}

.button:hover span {
padding-right: 25px;
}

.button:hover span:after {
opacity: 1;
right: 0;
}

</style>
</head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>CODE ICT | Home</title>

   
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

    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>      
    </a>

  <section id="mu-menu">
    <nav class="navbar navbar-default" role="navigation">  
      <div class="container">
        <div class="navbar-header">
		
		
          

          <!-- LOGO  -->
          <a class="navbar-brand" href="1.php"><img src="tle photos/LOGOO.png" width="200px" height="80px" style="margin-top: -25px;"></a> 
        </div>
      <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li class="active"><a href="Home.php">Home</a></li>            
            <li class="dropdown">
               <a href="About.php">About </a>
              <ul class="dropdown-menu" role="menu">
                             
              </ul>
            </li>           
            <li><a href="Gallery.php">Gallery</a></li>
            <li class="">
              <a href="Blog.php" >Blog </span></a>
            </li>            

            <li><a href="Privacy Policy.php">Privacy Policy</a></li>               
           
          </li>          		  
        </div>
<!--/.nav-collapse -->        
      </div>     
    </nav>
  </section>
  <!-- End menu -->
 
  <!-- Slider -->
  <section id="mu-slider">
    <!-- Slider 1 -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="tle photos/teamwork.jpg" alt="img">
        </figure>
      </div>
      <div class="mu-slider-content">
        <h4>Welcome To CODE ICT</h4>
        <span></span>
        <h2>We Will Help You To Learn</h2>
        <p>We consider more comprehessive set of goals that address social and moral development, school and classroom cenvironment, teacher training, school policies and community values, along with student behavior</p>
        
      </div>
    </div>
    <!-- End Slider 1 -->
    <!-- Slider 2 -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="tle photos/pray.jpg" alt="img">
        </figure>
      </div>
      <div class="mu-slider-content">
	<h4>Welcome To CODE ICT</h4>
        <span></span>
        <h2>Be ICT Educated</h2>
        <p>Our main strategy for Information, Communication and Technology implementation in Education is to provide the prospects and trends of integrating Information, Communication and Technology (ICT) into general educational activities</p>
        
      </div>
    </div>
    <!-- End slider 2 -->
    <!-- Slider 3 -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="tle photos/pray.jpg" alt="img">
        </figure>
      </div>
      <div class="mu-slider-content">
		<h4>Welcome To CODE ICT</h4>
        <span></span>
        <h2>Education For Everyone</h2>
        <p>To us, the ultimate goal of education is to spark a pursuit of knowledge in the child, so that they keep on learning as they grow into whoever they choose to be.</p>
        
      </div>
    </div>
    <!-- End Slider 3 -->    
  </section>
  <!-- End Slider -->
  <!-- Services  -->
  <section id="mu-service">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-service-area">
            <!-- ICT -->
            <div class="mu-service-single">
				
			<?php	
			include('connection.php');
			$position= "div1";
			$table = "home";
			$SQL = "SELECT * FROM home WHERE position='$position' LIMIT 1";
			$result = mysqli_query($conn, $SQL);
			$user = mysqli_fetch_assoc($result);
			?>
			<br>		 
              <h3><?php echo $user['inputs']; ?></h3>
			  <br>
			 <?php	
			include('connection.php');
			$position= "div2";
			$table = "home";
			$SQL = "SELECT * FROM home WHERE position='$position' LIMIT 1";
			$result = mysqli_query($conn, $SQL);
			$user = mysqli_fetch_assoc($result);
			?>
              <p><?php echo $user['inputs']; ?></p>
			  <br>
			  <br>
            </div>
            <!-- End ICT -->
            <!-- Teacher  -->
            <div class="mu-service-single">
           <?php	
			include('connection.php');
			$position= "div3";
			$table = "home";
			$SQL = "SELECT * FROM home WHERE position='$position' LIMIT 1";
			$result = mysqli_query($conn, $SQL);
			$user = mysqli_fetch_assoc($result);
			?>
              <h3><?php echo $user['inputs']; ?></h3>
			<?php	
			include('connection.php');
			$position= "div4";
			$table = "home";
			$SQL = "SELECT * FROM home WHERE position='$position' LIMIT 1";
			$result = mysqli_query($conn, $SQL);
			$user = mysqli_fetch_assoc($result);
			?>  
              <p><?php echo $user['inputs']; ?> </p>
			  <br>
            </div>
            <!-- End Teacher -->
            <!-- Classroom -->
            <div class="mu-service-single">
			<?php	
			include('connection.php');
			$position= "div5";
			$table = "home";
			$SQL = "SELECT * FROM home WHERE position='$position' LIMIT 1";
			$result = mysqli_query($conn, $SQL);
			$user = mysqli_fetch_assoc($result);
			?>
              <h3><?php echo $user['inputs']; ?></h3>
			<?php	
			include('connection.php');
			$position= "div6";
			$table = "home";
			$SQL = "SELECT * FROM home WHERE position='$position' LIMIT 1";
			$result = mysqli_query($conn, $SQL);
			$user = mysqli_fetch_assoc($result);
			?>  
              <p><?php echo $user['inputs']; ?></p>
            </div>
            <!-- End Classroom -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End service  -->
           

  <!-- Start about us -->
  <section id="mu-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-about-us-area">           
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="mu-about-us-left">
                  <!-- Start Title -->
                  <div class="mu-title">
                    <h2>CMRICTHS</h2>              
                  </div>
                  <!-- End Title -->
                  <p>Claro M. Recto ICT High School
                  <ul>
                    <li>Is a regular high school that specializes Information Communication and Technology classes.</li>
                  
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="mu-about-us-right">    
				<?php 
			include('connection.php');
			$position= "front";
			$table = "photo";
			$SQL = "SELECT * FROM $table WHERE position='$position' LIMIT 1";
			$result = mysqli_query($conn, $SQL);
			$user = mysqli_fetch_assoc($result);
				?>				
                  <img src="imported photos/<?php echo $user['photo'];?>" alt="img" height="80%" width="100%">
                </a>                
                </div>
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

<a href="second.php"><button class="button" style="vertical-align:middle"><span>ADMIN</i>  </span></button></a>
  </body>
</html>