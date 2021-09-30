<?php  
if(isset($_POST["login_user"])){  
  
if(!empty($_POST['email']) && !empty($_POST['password'])) {  
    $email=$_POST['email'];  
    $password=$_POST['password'];  
  
    $db = mysqli_connect('localhost','root','','storemyresults') or die('Could not connect to db');  
     
    $hpassword =md5($password);
    $query= "SELECT * FROM users WHERE email='".$email."' LIMIT 1";  
    $results = mysqli_query($db, $query);

    if($results)
    {
        if($results && mysqli_num_rows($results)>0)
        {
            $user_data = mysqli_fetch_assoc($results);

            if($user_data['password'] === $hpassword)
            {
                $_SESSION['email'] = $user_data['email'];
                $_SESSION['status'] = "Login Successfull....:) :)";
                header("Location: home.html");
                die;
            }
        }
    }
  
    $_SESSION['status'] = "Invalid Credentials....:)";
} else 
{  
    echo "All fields are required!";  
}  
}  

?>  