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

</head>
<body>   
<!-- Php started -->
<?php

include 'abc.php';


if(isset($_POST['submit']))
{
    $username = mysqli_real_escape_string($con, $_POST['username']);

    $email = mysqli_real_escape_string($con, $_POST['email']);
    $mob = mysqli_real_escape_string($con, $_POST['mob']);
    $password  = mysqli_real_escape_string($con, $_POST['password']);

    $pass = password_hash($password, PASSWORD_BCRYPT);

    $emailquery = " select * from users where email = '$email' ";
    $query = mysqli_query($con, $emailquery);
    $emailcount = mysqli_num_rows($query);

    $userquery = " select * from users where username = '$username' ";


    $uquery = mysqli_query($con, $userquery);
    $usercount = mysqli_num_rows($uquery);

    
    if($usercount > 0){
        ?>
           <script>
               alert("Username  already exist!!");
           </script>
       <?php
    }
    
  


    // $query = mysqli_query($con, $emailquery);
    // $emailcount = mysqli_num_rows($query);

   

    if($emailcount  > 0)
    {

            //  <script>
                 echo "Email account already exist!!";
            //  </script>
             
            // <?php
    }
    else
    {
        $insertquery  = "insert into users( username, email, mob, password) values ('$username','$email', '$mob', '$pass')";
        

        $iquery = mysqli_query($con, $insertquery);

        if($iquery){
            ?>
            <script>
            alert("insert success");
            </script>
            <?php
        }else
         {
            # code...  ?>
            <script>
            alert("insert not successful");
            </script>
            <?php
        }

    }
    header('location: signin.php');



}
?>

<!-- php ended  -->

 <div class="bg-img" >
        
        <div class="content">
           
         <header>SIGN UP</header>
          <form action="" method = "POST">
            
            <div class="field ">
                <span class="fa fa-user"></span><br>
                <input type="text" required  placeholder="Name" name = "username">
            </div>

            <div class="field space">
              <span class="fa fa-envelope-o"></span>
              <input type="email" required placeholder="Email" name = "email">
            </div>
           
            <div class="field space">
                <span class="fa fa-mobile"></span><br>
                <input type="tel" required placeholder="Mob. No. " name = "mob">
            </div>

             <div class="field space">
               <span class="fa fa-lock"></span>
               <input type="password" class="pass-key" required placeholder="Password" name = "password">
               <span class="show">SHOW</span>
            </div>

           <br>

           <div class="field" >
                <input type="submit" value="Create Account" name = "submit" href="signin.php">
               
          </div>
          <br>
          
          <div>
                <span class="logn-form-copy" style="color: white;"> Already have an account? <a href="signin.php" class="login-form__sign-up">&nbsp;LogIn</a></span>
          </div>

          </form>
        
      </div>
  
      
  
     <script src="css/navbar.css"></script>
     <script src="javascript/navbar.min.js"></script> 
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>

</html>