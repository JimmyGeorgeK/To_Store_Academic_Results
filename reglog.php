 <?php include('server.php') ?>
 <?php include('log_auth.php') ?>

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Registration Form</title>
    <link rel="stylesheet" href="reglog.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
</head>
<body>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button> 
                <button type="button" class="toggle-btn" onclick="register()">Register</button>            
            </div>
            

            <div>
            <form action="reglog.php" id="login" class="input-group" method="POST">
            <?php
               if(isset($_SESSION['status']))
               {
                   ?>
                   <div style="padding: 5px; background-color: DodgerBlue; color: white; border: 0;outline: none;border-radius: 30px;">
                   <span class="ab"> <?php echo $_SESSION['status']; ?> </span>
                   <span class="closebtn" style="margin-left: 15px;color: black;font-weight: bold;float: right;font-size: 22px;line-height: 20px;cursor: pointer;transition: 0.3s;" onclick="this.parentElement.style.display='none';">&times;</span> 
                   </div>

                    
                   <?php
                    
                   unset($_SESSION['status']);
               }
            ?>
                <input type="email" name="email" class="input-field" placeholder="Email Id" required>
                <input type="password" name="password" class="input-field" placeholder="Password" required>
                <button name="login_user" id="log" type="submit" class="submit-btn">Log In</button>  
            </form>
            </div>
            

            <div>
            <form action="reglog.php" id="register" class="input-group" method="POST">
                <input name="username" type="text" class="input-field" placeholder="Name" required>
                <input name="email" id="email" type="email" class="input-field" placeholder="Email Id" required> 
                <p id="emailaval"></p>
                <input name="password" type="password" class="input-field" placeholder="Password" required>
                <input name="usn" id="usn" type="text" class="input-field" placeholder="University Seat Number" required>
                <p id="usnaval"></p>
                <input name="branch" type="text" class="input-field" placeholder="Branch" required>
                <input name="college" type="text" class="input-field" placeholder="College" required>
                <button name="reg_user" type="submit" id="reg" class="submit-btn">Register</button>  
                <br>
            </form>
            
            </div>
            
        </div>
        

    </div>
    
    <script>
        var x= document.getElementById("login");
        var y= document.getElementById("register");
        var z= document.getElementById("btn");

        function register(){
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px"
        }
        function login(){
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0px"
        }




    </script>
</body>
</html>


<script>
    $(document).ready(function(){
        $('#email').blur(function()
        {
            var email = $(this).val();
            $.ajax({
                url:'aval_user.php',
                method:"POST",
                data:{email:email},
                success:function(data)
                {
                    if(data!='0')
                    {
                        $('#emailaval').html('<p class="email_fail">Email Not Available</p>');
                        $('#reg').attr("disabled",true);
                    }
                    else
                    {
                        $('#emailaval').html('<p class="email_pass">Email is available</p>');
                        $('#reg').attr("disabled",false);
                    }

                }

            })
        
        });

    });
    </script>

<script>
    $(document).ready(function(){
        $('#usn').blur(function()
        {
            var usn = $(this).val();
            $.ajax({
                url:'aval_usn.php',
                method:"POST",
                data:{usn:usn},
                success:function(data)
                {
                    if(data!='0')
                    {
                        $('#usnaval').html('<p class="usn_fail">USN Not Available</p>');
                        $('#reg').attr("disabled",true);
                    }
                    else
                    {
                        $('#usnaval').html('<p class="usn_pass">USN is available</p>');
                        $('#reg').attr("disabled",false);
                    }

                }

            })
        
        });

    });
    </script>