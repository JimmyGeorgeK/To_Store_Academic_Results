<?php

session_start();

//initializing var:

$username = "";
$email = "";

$errors = array();

//connect db

$db = mysqli_connect('localhost','root','','storemyresults') or die('Could not connect to db');

//Register user

@$username = mysqli_real_escape_string($db,$_POST['username']);
@$email = mysqli_real_escape_string($db,$_POST['email']);
@$password = mysqli_real_escape_string($db,$_POST['password']);
@$usn = mysqli_real_escape_string($db,$_POST['usn']);
@$branch = mysqli_real_escape_string($db,$_POST['branch']);
@$college = mysqli_real_escape_string($db,$_POST['college']);

//Form Vald

if(empty($username)) {array_push($errors, "Username is required");}
if(empty($email)) {array_push($errors, "Email is required");}
if(empty($password)) {array_push($errors, "Password is required");}
if(empty($usn)) {array_push($errors, "USN is required");}
if(empty($branch)) {array_push($errors, "Branch is required");}
if(empty($college)) {array_push($errors, "College is required");}


//Check Db for existing users

$user_check_query = "SELECT * FROM users WHERE email = '$email' or usn = '$usn' LIMIT 1 ";

$results = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($results);

if($user){
    
    if($user['email'] === $email)
     { $errors['e'] = "Email already Exists";}
    if($user['usn'] === $usn) 
     { $errors['u'] = "USN Already Exists";}
}

//Register user if No Error

if(count($errors) == 0) {

    $hpassword =md5($password); //this will encrpt password
    $query = "INSERT INTO users (username,email,password,usn,branch,college) VALUES ('$username', '$email', '$hpassword', '$usn', '$branch', '$college')";
    
    mysqli_query($db,$query);
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "Registered Successfully....:)";   
}

?>