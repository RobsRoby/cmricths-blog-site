 <?php
$unlink = $_GET['file'];

unlink("gallery/$unlink");

header("Location:GalleryAdmin.php");
 ?>