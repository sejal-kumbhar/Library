<?php 
include 'dbconnect.php';
if(isset($_POST['login']))
{
    $sql=mysqli_query($conn,"select * from a_registration where email='".$_POST['email']."' and password='".$_POST['password']."'");
    $row=mysqli_fetch_assoc($sql);
    if($row['email']==$_POST['email'] and $row['password']==$_POST['password'])
    {
       $_SESSION['email']=$_POST['email'];
       $_SESSION['name']=$_POST['name'];

       header('location:add_book.php');
    }
    else
    {
       echo "Login Failed";
    }
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">

    <style type="text/css">
        .container
        {
            margin-top: 100px;
            padding: 30px;

        }
               .login
        {
            background-color: lightgray;
            border-top-right-radius:5px;
            border-bottom-right-radius:5px; 
            padding: 20px;


        }
        body
        {
       background-color: whitesmoke;
            height: 700px;
        }
        button
        {
            border-top-left-radius:5px;
            border-bottom-right-radius:5px; 
        }
        label
        {
            color: black;
        }
        h1,h2
        {
           color:teal;          
        }
    </style>
</head>
<body>
    <form action="login.php" class="form" method="POST">
    <br><br>
<div class="container-fluid">
    <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <div class="container">
            <div class="row">
                
              
                </div>
                <div class="col-sm-6 login">
                    <form action="login.php" method="POST">
                      <!-- <center> <img src="logo.jpeg" width="100" height="100"></center> -->
                    <h2 align="center"><b>Log In</b></h2>
                    <div class="row" >
                        <div class="col-sm-2"></div>
                            <div class="col-sm-8">
                            <label>Email/Phone<span style="color: red">*</span></label>
                            <input type="text" name="email" class="form-control" required="">
                            </div>
                        <div class="col-sm-2"></div>
                    <br><br>
                    
                        <div class="col-sm-2"></div>
                            <div class="col-sm-8">
                            <label>Passward<span style="color: red">*</span></label>
                            <input type="Password" name="password" class="form-control" required="">
                            </div>
                            <div class="col-sm-2"></div>
                    
                    <br>
                    <br>
                    <br>
                    <div class="row" >
                       <div class="col-sm-1"></div>
                            <div class="col-sm-5">
                         <center><button type="submit" name="login" class="btn btn-light" value="login" style="background-color:#4d79ff" >Login</button></center>
                        </div>
                         <div class="col-sm-5">
                         <center><a href="registration.php" >Create a new account</a></center>
                        </div>

                        <div class="col-sm-1"></div>

                       

                         <br>
                         
                         
                    </div>
                    </form>
                </div>
                </div>
                </div>
            </div>
        </div>
</div>
</div>

    <div class="col-sm-2"></div>
</form>
</body>
</html>
