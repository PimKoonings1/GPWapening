<?php include 'connection.php';?>


<?php




if(isset($_POST['delete']))
{ 
    $id = $_GET['file_id'];
    mysql_query("DELETE FROM `files` WHERE id=$id");
    header("location:downloads.php");
} 


?>