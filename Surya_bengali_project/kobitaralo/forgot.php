<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    
    <link rel="stylesheet" href="css/signin.css">
    <link rel="stylesheet" href="../lib/w3.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body>   
<!-- Php started -->
<?php

include 'abc.php';


if(isset($_POST['submit']))
{
  

    $email = mysqli_real_escape_string($con, $_POST['email']);
    $token = bin2hex(random_bytes(15));

   

    $emailquery = " select * from users where email = '$email' ";
    $query = mysqli_query($con, $emailquery);
    $emailcount = mysqli_num_rows($query);

    if($emailcount)
    {
        $usename= mysqli_fetch_array($query);
        $username = $userdata['username'];
        $token = $userdata['token'];

        $Subject = "Password Recovery";
        $body = "hi, $username Click here  to activate your account http://localhost/kobi/activate.php?token = $token";
        $sender_email = "From: kobitaralo2021@gmail.";    

          if(mail($email, $Subject, $body,$sender_email))
          {
            $_SESSION['msg'] = "Check your mail to activate your account $email";
            header('location:signin.php');      
          }

          else
          {
              # code...  ?>
              <script>
              alert("Email sending failed");
              </script>
              <?php
          }

    }
    else 
    echo "no email found";
    // header('location: signin.php');
  }



?>

<!-- php ended  -->

 <div class="bg-img" >
        
        <div class="content">
           
         <header style="font-size: 27px; margin: 0 0 11px 0;">  Recover Your Acount </header>
         <p class="text-center" style="color:white;"> Please fill your email id properly</p>
          <form action="" method = "POST">
            
           
            <div class="field space">
              <span class="fa fa-envelope-o"></span>
              <input type="email" required placeholder="Email" name = "email">
            </div>
          
            

           <br>

           <div class="field" >
                <input type="submit" value="Send Mail" name = "submit" href="signin.php">
               
          </div>
          <br>
          
          <div>
                <span class="logn-form-copy" style="color: white;"> Already have an account? <a href="signin.php" class="login-form__sign-up" style = "text-decoration:none;">&nbsp;LogIn</a></span>
          </div>

          </form>
        
      </div>
  
      <style>
          @media screen and (max-height: 450px) 
          {
          body{
            width: 150 px;
            position: absolute;
            text-align: left;
            margin-left: 0px;
            margin-right: 0px;
          }
      </style>
  
     <script src="css/navbar.css"></script>
     <script src="javascript/navbar.min.js"></script> 
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>

</html>