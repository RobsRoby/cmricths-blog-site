<?php
include ('connection.php');
If (isset ($_POST['submitcomment'])){
							$name = $_POST['username'];
							$date = $_POST['date'];
							$comment = $_POST['comment'];
							$query = "INSERT INTO comments (Username, Comment, date) VALUES('$name', '$comment', '$date')";
							mysqli_query($conn, $query);
							
							Include ('connection.php');	
							$id = $_POST['id'];
							$sql= " DELETE FROM confirmcomment WHERE id='".$id."' ";
							mysqli_query($conn, $sql)
							or die(mysqli_error()); 
							mysqli_close($conn);
							header("Location:BlogAdmin.php");
						}
?>