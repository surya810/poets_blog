<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title>
    
    <link rel="stylesheet" href="css/signin.css">
    <link rel="stylesheet" href="../lib/w3.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>
<!-- php strats from here  -->
  <?php

  include 'abc.php';
  if(isset($_POST['submit']))
  {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $email_search = "select * from users where email = '$email' ";
    $query = mysqli_query($con,$email_search);
    $email_count = mysqli_num_rows($query);

    if($email_count)
    {
      $email_pass = mysqli_fetch_assoc($query);
      $db_pass = $email_pass['password'];
      $_SESSION['username'] = $email_pass['username'];

      $password_decode = password_verify($password, $db_pass);

      if($password_decode)
      {
        ?>
            <script>
              
               location.replace("writerauth.php");
            </script>
            <?php

      }else

      {
        ?>
            <script>
            swal("Incorrect Password!", { className: "red-bg",});
            </script>
            <?php
      }

    }
    else{
      ?>
      <script>
      swal("Invail Email!", {className:"red-bg",});
      </script>
      <?php
    }

}


  ?>

  <!-- php ends here  -->
   
    <div class="bg-img" >
        <div class="content">
          <h1 style="color: white;">LogIn</h1><br>
          <form  action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
            
            <div class="field">
              <span class="fa fa-envelope-o"></span>
              <input type="text" required placeholder="Email" name = "email">
            </div>
            <div class="field space">
              <span class="fa fa-lock"></span>
              <input type="password" class="pass-key" required placeholder="Password" name = "password">
              <span class="show">SHOW</span>
            </div>
           
            <div class="pass">
              <!-- <a href="forgot.php" >Forgot Password?</a> -->
            </div>
             <br>
            <div class="field">
              <input type="submit" value="Login" name= "submit">
            </div>
          </form>
          <br>
        <span class="logn-form-copy" style="color: white;">Don't  have an account? <a href="signup.php" class="login-form__sign-up">Sign Up</a></span>
        </div>
      </div>
  
 
     <script src="css/navbar.css"></script>
     <script src="javascript/navbar.min.js"></script> 
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>