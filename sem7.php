<?php 
   session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semester7</title>
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
         <link href="css/bootstrap.min.css" rel="stylesheet">
         <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
         <link href="css/font-awesome.min.css" rel="stylesheet"> 
         <script src="js/jquery-3.1.1.min.js"></script>
         <script src="js/bootstrap.min.js"></script>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
         <script type="text/javascript">
               $(document).ready(function(){

                   var html = '<tr> <td><input class="form-control" type="text" name="sub_id[]" required=""></td><td><input class="form-control" type="text" name="subject[]" required=""></td><td><input class="form-control" type="number" name="marks[]" required=""></td><td><input class="btn btn-danger" type="button" name="remove"  id="remove" value="Remove" ></td></tr>';
                    
                   var x = 1;

                   $("#add").click(function(){
                       $('#table_field').append(html);    
                   });

                   $("#table_field").on('click','#remove',function(){
                       $(this).closest('tr').remove();    
                   });

               });
               </script>
               <script>
                        function myFunction() {
                          alert("Do you want to add ?");
                        }
                </script>
</head>


<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.html">Home</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>


    <div class="container">
        <form class="insert-form" id="insert_form" method="post" action="">
            <hr>
            <h3 class="text-center">Enter Semester 7 Marks Details.</h3>
            <hr>
            <div class="input-field">
                <table class="table table-dark" id="table_field1">
                    <tr>
                        <th>Email</th>
                        <th>Semester</th>
                    </tr>
                    <tr> 
                        <td><input class="form-control" type="text" name="email[]" value="<?php echo $_SESSION['email']; ?>"></td>
                        <td><input class="form-control" type="number" name="sem[]" value="7"></td>    
                    </tr>
                </table>
                <table class="table table-bordered" id="table_field">
                    <tr>
                        <th>Subject_ID</th>
                        <th>Subject</th>
                        <th>Marks</th>
                    </tr>
                    <?php 
                       
                       $db = mysqli_connect('localhost','root','','storemyresults') or die('Could not connect to db'); 

                       if(isset($_POST['save'])){
                           $sub_id = $_POST['sub_id'];
                           $subject = $_POST['subject'];
                           $marks = $_POST['marks'];
                           $email = $_POST['email'];
                           $sem = $_POST['sem'];

                           foreach($email as $key => $value){
                               $save = "INSERT INTO sem7(email,sem,sub_id,subject,marks)VALUES('".$value."','".$sem[$key]."','".$sub_id[$key]."','".$subject[$key]."','".$marks[$key]."')";
                               $query = mysqli_query($db,$save);
                           }

                        if(isset($_GET['delete'])){
                            $id = $_GET['delete'];
                            $mysqli->query("DELETE FROM sem7 WHERE id=$id") or die($mysqli->error());
                        }
                           
                       } 
                          
                    ?>
                    <tr> 
                        <td><input class="form-control" type="text" name="sub_id[]" required=""></td>
                        <td><input class="form-control" type="text" name="subject[]" required=""></td>
                        <td><input class="form-control" type="number" name="marks[]" required=""></td>
                    </tr>
                </table>
                <center>
                <input class="btn btn-success" type="submit" name="save"  id="save" value="ADD" onclick="myFunction()" > 
                </center>
            </div>
        </form>
       <br>
       <hr>
            <h3 class="text-center">Semester 7 Marks Details.</h3>
        <hr>

        <table class="table table-dark">
            <tr>
                <th>Name</th>
                <th>USN</th>
                <th>Branch</th>
                <th>College</th>
            </tr>
            <?php 
                $e=$_SESSION['email'];
                $select = "SELECT * FROM users WHERE email='".$e."' ";
                $result = mysqli_query($db,$select);
                while($row = mysqli_fetch_array($result)){ ?>
            <tr>
                <td> <?php echo $row['username']; ?> </td>
                <td> <?php echo $row['usn']; ?> </td>
                <td> <?php echo $row['branch']; ?> </td>
                <td> <?php echo $row['college']; ?> </td>  
            </tr>
            <?php
                }
            ?>
        </table>

        <table class="table table-striped">
            
            <tr>
                <th>Subject_ID</th>
                <th>Subject</th>
                <th>Marks</th>
                <th>Delete</th>
            </tr>
            <?php 
                $e=$_SESSION['email'];
                $select = "SELECT * FROM sem7 WHERE email='".$e."' ";
                $result = mysqli_query($db,$select);
                while($row = mysqli_fetch_array($result)){ ?>
            <tr>
                <td> <?php echo $row['sub_id']; ?> </td>
                <td> <?php echo $row['subject']; ?> </td>
                <td> <?php echo $row['marks']; ?> </td>
                <td> <a href="delete7.php?id=<?php echo $row['id'] ?>" <input type="button" class="btn btn-danger"> Delete </a>
            </tr>
            <?php
                }
            ?>

        </table>

        <center>
            <form action="pdf_gen7.php" method="POST">
                <input class="btn btn-success" name="btn_pdf" type="submit" value="Generate PDF" > 
            </form>
        </center>




    </div>
    
</body>
</html>