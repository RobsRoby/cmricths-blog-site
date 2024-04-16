
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>CODE ICT| Blog</title>

    <link rel="shortcut icon" href="icon2.png" type="image/x-icon">

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
              <a href="About.php">About </a>
              <ul class="dropdown-menu" role="menu">
                             
              </ul>
            </li>           
            <li> <li class=""><a href="Gallery.php">Gallery</a></li>
            <li class="dropdown">
              <li class="active"><a href="Blog.php" >Blog </span></a>
            </li>            

            <li><a href="Privacy Policy.php">Privacy Policy</a></li>               
          </li>                     
        </div>           
        </div><!--/.nav-collapse -->        
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
           <h2>Blog </h2>
           <ol class="breadcrumb">
            <li><a href="#">Home</a></li>            
            <li class="active">Blog </li>
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
                <!-- start course content container -->
                <div class="mu-course-container mu-blog-single">
                  <div class="row">
                    <div class="col-md-12">
                      <article class="mu-blog-single-item">
                        <figure class="mu-blog-single-img">
							<?php 
							include('connection.php');
							$position= "blog";
							$table = "photo";
							$SQL = "SELECT * FROM $table WHERE position='$position' LIMIT 1";
							$result = mysqli_query($conn, $SQL);
							$user = mysqli_fetch_assoc($result);
							?>
							<img alt="img" src="imported photos/<?php echo $user['photo'];?>" width="100%" height="80%" >
                          <figcaption class="mu-blog-caption">
						   <?php	
			include('connection.php');
			$position= "div1";
			$table = "blog";
			$SQL = "SELECT * FROM $table WHERE position='$position' LIMIT 1";
			$result = mysqli_query($conn, $SQL);
			$user = mysqli_fetch_assoc($result);
			?>
                            <h3><a href="#"><?php echo $user['inputs']; ?></a></h3>
                          </figcaption>                      
                        </figure>
                        <div class="mu-blog-meta">
                          <a href="#">By Admin</a>
                          <a href="#">02 June 2018</a>
                          <span><i class="fa fa-comments-o"></i>87</span>
                        </div>
                        <div class="mu-blog-description">
						  <?php	
			include('connection.php');
			$position= "div2";
			$table = "blog";
			$SQL = "SELECT * FROM $table WHERE position='$position' LIMIT 1";
			$result = mysqli_query($conn, $SQL);
			$user = mysqli_fetch_assoc($result);
			?>
                          <p><?php echo $user['inputs']; ?></p>                        
			  <?php	
			include('connection.php');
			$position= "div3";
			$table = "blog";
			$SQL = "SELECT * FROM $table WHERE position='$position' LIMIT 1";
			$result = mysqli_query($conn, $SQL);
			$user = mysqli_fetch_assoc($result);
			?>
                          <p><?php echo $user['inputs']; ?></p>                        
						             
                        </div>
                      
                      </article>
                    </div>                                   
                  </div>
                </div>
                <!-- start blog comment -->
                <div class="row">
                  <div class="col-md-12">
                    <div class="mu-comments-area">
					<?php 
						include ('connection.php');	
						If (isset ($_POST['submit'])){
							$name = $_POST['name'];
							$date = date("Y/m/d");
							$comment = $_POST['comment'];
							$query = "INSERT INTO confirmcomment (Username, Comment, date) VALUES('$name', '$comment', '$date')";
							mysqli_query($conn, $query);
						}
							$sql = "SELECT * FROM comments";
							$result = mysqli_query($conn, $sql);
							$number = mysqli_num_rows($result);
							?>
                      <h3><?php echo $number;?> Comments</h3>
					<?php 
							if (mysqli_num_rows($result) > 0) {
							while($row = mysqli_fetch_assoc($result)) 
							{
		
					?>
                      <div class="comments">
                        <ul class="commentlist">
                          <li>
                            <div class="media">
                              <div class="media-left">    
                                
                              </div>
                              <div class="media-body">
                               <h4 class="author-name"><?php echo $row['Username'];?> </h4>
                               <span class="comments-date"> Posted on &nbsp<?php echo $row['date'];?> </span>
                               <p><?php echo $row['Comment']?></p>
           
                              </div>
                            </div>
                          </li>
                        </ul>
					  
					<?php 	
							}
							}
						else{echo "There are no comments yet. Leave on right now!";}
                        ?>
                <!-- start respond form -->
				<form action = "blog.php" method="POST">
                <div class="row">
                  <div class="col-md-12">
                    <div id="respond">
                      <h3 class="reply-title">Leave a Comment</h3>
                      <form id="commentform" action="blog.php" method="post">
                        <p class="comment-notes">
                          Your email address will not be published. Required fields are marked <span class="required">*</span>
                        </p>
						<form action="Blog.php" method="Post">
                        <p class="comment-form-author">
                          <label for="author">Name <span class="required">*</span></label>
                          <input type="text" required="required" size="30" value="" name="name"></input>
                        </p>
                        <p class="comment-form-comment">
                          <label for="comment">Comment</label>
                          <textarea required="required" aria-required="true" rows="8" cols="45" name="comment"></textarea>
                        </p>
                        
                        <p class="form-submit">
                          <input type="submit" value="Post Comment" class="mu-post-btn" name="submit">
						  </form>
                        </p>        
                      </form>
                    </div>
                  </div>
                </div>
				</form>
                <!-- end respond form -->
              </div>
              <div class="col-md-3">
                <!-- start sidebar -->
                <aside class="mu-sidebar">
                
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

  </body>
  
</html>