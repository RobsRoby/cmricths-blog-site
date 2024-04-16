<?php
Include ('connection.php');	
$id = $_GET['id'];
$sql= " DELETE FROM confirmcomment WHERE id='".$id."' ";
 mysqli_query($conn, $sql)
 or die(mysqli_error()); 
 mysqli_close($conn);
 header("Location:BlogAdmin.php");
 ?>