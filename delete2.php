<?php 

$db = mysqli_connect('localhost','root','','storemyresults') or die('Could not connect to db');

extract($_GET);
{
    $query="DELETE FROM sem2 WHERE id='$id'";
    mysqli_query($db,$query);
    header('location:sem2.php');
}



?>