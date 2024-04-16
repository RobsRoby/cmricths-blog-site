
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
  <?php  

  If (isset ($_POST['submitfile'])){
	$FILE = $_FILES['file'];
	
	$filename = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$filenameError = $_FILES['file']['error'];
	$filenameType = $_FILES['file']['type'];

	$fileExt = explode('.',$filename);
	$fileActualExt = strtolower(end($fileExt));
	
	$allowed = array('jpg','png','gif',);
	
	If(in_array($fileActualExt, $allowed)){
		If($filenameError === 0){
			If($fileSize < 5000000){
				$fileDestination = 'imported photos/'.$filename;
				move_uploaded_file($fileTmpName, $fileDestination);
				include('connection.php');
				$position = "blog";
				$inputs = "$filename";	
				$table= "photo";
				$sql= "UPDATE $table SET photo='$inputs' WHERE position='".$position."' ";
				mysqli_query($conn, $sql);
				mysqli_close($conn);
				header("Location:BlogAdmin.php");
			}
			else{
				echo "File is too big!";
			}
		}
		else{
			echo "Error";
		}
		
	}
	else{
		echo "nope";
		
	}
	
	
}
?>
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
            <li class=""><a href="HomeAdmin.php">Home</a></li>            
            <li class="dropdown">
              <a href="AboutAdmin.php">About </a>
              <ul class="dropdown-menu" role="menu">
                             
              </ul>
            </li>           
            <li> <li class=""><a href="GalleryAdmin.php">Gallery</a></li>
            <li class="dropdown">
              <li class="active"><a href="BlogAdmin.php" >Blog </span></a>
            </li>            

            <li><a href="Privacy Policy Admin.php">Privacy Policy</a></li>   
            <li><a href="second.php">Log Out</a></li>               
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
							<br><br>
			<form action="BlogAdmin.php" method="POST" enctype="multipart/form-data" style="background:white;">
			<center>
			<input type="file" name="file" required>
			<Br>
			<input type="submit" name="submitfile" onclick="return confirm('If your file have an identical one, it will be replaced. Do you wish to procced?')" value="Upload..">
			</center>
			</form>
                          <figcaption class="mu-blog-caption">						
							<form action="updatedata.php" method="post">
			<?php	
			include('connection.php');
			$position= "div1";
			$table = "blog";
			$SQL = "SELECT * FROM $table WHERE position='$position' LIMIT 1";
			$result = mysqli_query($conn, $SQL);
			$user = mysqli_fetch_assoc($result);
			$where ="BlogAdmin";
			?>
			<br>
			<input type="hidden" name="where" value="<?php echo $where; ?>">
			<input type="hidden" name="table" value="<?php echo $table; ?>">
			  <input type="hidden" name="position" value="<?php echo $position; ?>">
              <input style="color:black;" type="text" name="inputs" value="<?php echo $user['inputs']; ?>" >
			  <br>
			  <button type="submit">Update</button>
			 </form>
			 
                          </figcaption>                      
                        </figure>
                        <div class="mu-blog-meta">
                          <a href="#">By Admin</a>
                          <a href="#">02 June 2016</a>
                          <span><i class="fa fa-comments-o"></i>87</span>
                        </div>
                        <div class="mu-blog-description">
                          <form action="updatedata.php" method="post">
			<?php	
			include('connection.php');
			$position= "div2";
			$table = "blog";
			$SQL = "SELECT * FROM $table WHERE position='$position' LIMIT 1";
			$result = mysqli_query($conn, $SQL);
			$user = mysqli_fetch_assoc($result);
			$where ="BlogAdmin";
			?>
			<br>
			<input type="hidden" name="where" value="<?php echo $where; ?>">
			<input type="hidden" name="table" value="<?php echo $table; ?>">
			  <input type="hidden" name="position" value="<?php echo $position; ?>">
              <input style="color:black;" type="text" name="inputs" value="<?php echo $user['inputs']; ?>" >
			  <br>
			  <button type="submit">Update</button>
			 </form>
			 
                         <form action="updatedata.php" method="post">
			<?php	
			include('connection.php');
			$position= "div3";
			$table = "blog";
			$SQL = "SELECT * FROM $table WHERE position='$position' LIMIT 1";
			$result = mysqli_query($conn, $SQL);
			$user = mysqli_fetch_assoc($result);
			$where ="BlogAdmin";
			?>
			<br>
			<input type="hidden" name="where" value="<?php echo $where; ?>">
			<input type="hidden" name="table" value="<?php echo $table; ?>">
			  <input type="hidden" name="position" value="<?php echo $position; ?>">
              <input style="color:black;" type="text" name="inputs" value="<?php echo $user['inputs']; ?>">
			  <br>
			  <button type="submit">Update</button>
			 </form>
			 
                          
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
							$date = "DATE";
							$comment = $_POST['comment'];
							$query = "INSERT INTO comments (Username, Comment, date) VALUES('$name', '$comment', '$date')";
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
							   <form action="deletecomment1.php?id=<?php echo $row['id'];?>" method="post">
									<button type="submit">Delete</button>
								</form>
                              </div>
                            </div>
                          </li>
                        </ul>
					  
					<?php 	
							}
							}
						else{echo "There are no comments yet. Leave on right now!";}
                        ?>
						
						<div class="row">
                  <div class="col-md-12">
                    <div class="mu-comments-area">
					<?php 
							$sql = "SELECT * FROM confirmcomment";
							$result = mysqli_query($conn, $sql);
							$number = mysqli_num_rows($result);
							?>
                      <h3><?php echo $number;?> Confirm Comments</h3>
					<?php 
					include ('connection.php');	
						
							$sql = "SELECT * FROM confirmcomment";
							$result = mysqli_query($conn, $sql);
							$number = mysqli_num_rows($result);
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
                               <span class="comments-date"> Passed on &nbsp<?php echo $row['date'];?> </span>
                               <p><?php echo $row['Comment']?></p>
							   <form action="submitcomment.php" method="post">
									<input type="hidden" value="<?php echo $row['id'];?> " name="id">
									<input type="hidden" value="<?php echo $row['Username'];?> " name="username">
									<input type="hidden" value="<?php echo $row['Comment'];?> " name="comment">
									<input type="hidden" value="<?php echo $row['date'];?> " name="date">
									<br>
									<a href="deletecomment.php?id=<?php echo $row['id'];?>" type="submit">X</a>
									<button type="submit" name="submitcomment">Confirm</button>
								</form>
                              </div>
                            </div>
                          </li>
                        </ul>
					  
					<?php 	
							}
							}
						else{echo "There are no comments yet. Leave on right now!";}
                        ?>
 
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