<?php
Include ('connection.php');	
$position = $_POST['position'];
$inputs = $_POST['inputs'];
$table= $_POST['table'];
$where = $_POST['where'];
$sql= "UPDATE $table SET inputs='$inputs' WHERE position='".$position."' ";
 mysqli_query($conn, $sql)
 or die(mysqli_error()); 
 mysqli_close($conn);
 header("Location:$where.php");
 ?>