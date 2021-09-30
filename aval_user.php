<?php

//connect db

$db = mysqli_connect('localhost','root','','storemyresults') or die('Could not connect to db');

if(isset($_POST["email"]))
{
    $email = mysqli_real_escape_string($db,$_POST['email']);

    $user_check_query = "SELECT * FROM users WHERE email = '".$email."' ";

    $results = mysqli_query($db, $user_check_query);
    echo mysqli_num_rows($results);

  
}
?>