<?php

//connect db

$db = mysqli_connect('localhost','root','','storemyresults') or die('Could not connect to db');

if(isset($_POST["usn"]))
{
    $usn = mysqli_real_escape_string($db,$_POST['usn']);

    $user_check_query = "SELECT * FROM users WHERE usn = '".$usn."' ";

    $results = mysqli_query($db, $user_check_query);
    echo mysqli_num_rows($results);

  
}
?>