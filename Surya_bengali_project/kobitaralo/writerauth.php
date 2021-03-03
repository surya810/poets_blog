<?php
session_start();

if (!isset($_SESSION['username'])) {
  echo "u r logged out";
  header('location:index.php');
}
?>

<?php
if (isset($_POST["remove"])) {

  if ($_GET["action"] == "remove") {
    $link = mysqli_connect("localhost", "root", "", "rgs");

    if ($link === false) {
      die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    $id = $_GET['id'];
    $sql1 = "DELETE FROM blog WHERE id='$id'";

    if (mysqli_query($link, $sql1)) {


      echo '<strong>';
      echo "<script>  alert(' Blog has been Removed...!') </script>";
      echo '</strong>';
    }
  }
  header('refresh', 'url:https://localhost/kobitar/writerauth.php');
  mysqli_close($link);
}


if (isset($_POST["submit1"])) {

  $link = mysqli_connect("localhost", "root", "", "rgs");

  if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
  }
  $title = mysqli_real_escape_string($link, $_REQUEST['title']);
  $description = mysqli_real_escape_string($link, $_REQUEST['description']);
  $selects = mysqli_real_escape_string($link, $_REQUEST['select']);
  $writes = mysqli_real_escape_string($link, $_REQUEST['write']);
  $name = $_SESSION['username'];
  $date = date("Y/m/d");


  $sql = "INSERT INTO blog (name,title,description,selects,writes,date) VALUES ('$name','$title','$description','$selects','$writes','$date')";


  if (mysqli_query($link, $sql)) {
    echo '<script>alert("Blog Submitted Successfullly!!")</script>';
  }


  #  header('Location:index.html');
  header('refresh', 'url:https://localhost/kobitar/writerauth.php');
  mysqli_close($link);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/yourcode.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../lib/w3.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/card.css">
    <link rel="stylesheet" href="css/signin.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/tabs.css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
    </link>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>




</head>

<style>
.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {
    background-color: #f1f1f1
}

.dropdown:hover .dropdown-content {
    display: block;
}

@media screen and (max-width: 600px) {
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 30px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }
}


.table {
    flex: 3;
    padding-top: 5px;
    padding-left: 50px;
    padding-right: 50px;
}


table {
    border-radius: 5px;
    border-collapse: collapse;
    width: 100%;
    overflow: hidden;
}

.header {
    background-color: #1C305E;
    color: white;
    border: none;
}

tr {
    padding-top: 15px;
}



.formDiv {
    margin: 50px 100px;
}

@media screen and (max-width: 600px) {
    .formDiv {
        margin: 0px 0px;
    }
}

.contain::-webkit-scrollbar {
    display: none;
}

@media screen and (max-width: 600px) {
    .contain {
        color: #1C305E;
        overflow-x: scroll;
    }
}

.input {
    padding: 5px;
    width: 100%;
    margin-bottom: 50px;
    border-color: 4px grey;
}

@media screen and (max-width: 600px) {
    .input {
        width: 100%;
        border-color: black;
    }
}

@media screen and (max-width: 1150px) {
    .nav-item {
        padding-bottom: 8px;
        text-align: right;
        padding-right: 12px;
    }
}

.nav3 {
    font-size: 20px;
    text-align: center;
    width: 200px;
}

@media screen and (max-width: 600px) {
    .nav3 {
        width: 100px;
        height: 100%;
        padding-left: 0px;
        padding-right: 0px;
        padding-top: 5px;
        font-size: 18px;
    }
}

.tab-content {
    padding: 50px;
    background-color: rgb(169, 169, 169);
}

@media screen and (max-width: 600px) {
    .tab-content {
        padding: 10px;
    }
}

.textarea {
    margin-left: 80%;
}

.button1 {
    margin-top: 15px;
    margin-bottom: 15px;
    background: grey;
    border: none;
    padding: 10px;
    margin-left: 0%;
    color: white;
    width: 10%;
    border-radius: 25px;
}

@media screen and (max-width: 600px) {
    .button1 {
        margin-top: 10px;
        width: 50%;
        margin-left: 15%;
    }
}

.padding1 {
    padding: 80px;
}

@media screen and (max-width: 600px) {
    .padding1 {
        padding: 10px;
    }
}

body {
    counter-reset: Count-Value;
}

table {
    border-collapse: separate;
}

tr td:first-child:before {
    counter-increment: Count-Value;
    content: ""counter(Count-Value);
}

#spl {

    border: 2px solid #fff;
    background: url(img/tiger.png) no-repeat;
    -moz-box-shadow: 10px 10px 5px #ccc;
    -webkit-box-shadow: 10px 10px 5px #ccc;
    box-shadow: 10px 10px 5px #ccc;
    -moz-border-radius: 25px;
    -webkit-border-radius: 25px;
    border-radius: 25px;
}

.red-color {
    color: red;
}
</style>
<!-- css ends here  -->

<body style=" background-image: url('img/b.jpg');
background-size: cover;overflow-x: hidden;">
    <button onclick="topFunction()" id="myBtn" title="Go to top" style="color: white;">
        <i class="fa fa-arrow-up" aria-hidden="true"></i></button>


    <div style="margin-left: 25px; margin-top :10px;">

        <a href="#" class="active" style="background-color: transparent;">
            <center><img id="spl" src="img/KOsitebanne3r.png" height="auto" width="80%">
        </a>
        <!--logo image-->


        <div class="ex1" style="float: right;">

            <a class="nav-item nav-link" style="color:black;margin-top: 40px;margin-right:10px;" href="logout.php">
                <!-- <script>
              //swal("You have logged out successfully!");
              //  logged out message will show 
             
          </script>-->
                <i class="fa fa-sign-out red-color " style="font-size:30px"></i>
            </a>
        </div>
    </div>
    <br>

    <h2
        style="text-align:center; font-size:25px; color: rgb(68, 68, 68);padding-left: 5%;margin-top: 2%;font-family: Alegreya Sans, sans-serif;font-weight: bold;">
        Welcome <?php echo  $_SESSION['username'] ?></h2>
    <!-- <script>
              swal("You have logged in successfully!");
              //  logged in message will show 
             
          </script> -->


    <div class="padding1">
        <ul class="nav nav-tabs">
            <li class="nav-item1 nav3"><a class="nav-link " role="tab" data-toggle="tab" href="#tab-1">Write Stories</a>
            </li>
            <li class="nav-item1 nav3"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-2">Manage Stories</a>
            </li>

        </ul>
        <div class="tab-content">
            <div class="tab-pane active" role="tabpanel" id="tab-1" style="box-shadow: 10px 10px 10px grey;">
                <div class="formDiv">
                    <br>
                    <div>
                        <form action="" method="post" enctype="multipart/form-data" style="padding-left: 10%;">
                            <input type="text" name="title" placeholder="Title"
                                style="padding: 5px; width: 80%; margin-bottom: 50px;border-color:grey;">
                            <input type="text" name="description" placeholder="Author's name"
                                style="padding: 5px; width: 80%; margin-bottom: 50px; border-color:grey;"><br>


                            <input list="browsers" name="select" placeholder="Select "
                                style="padding: 5px; width: 80%; margin-bottom: 60px; border-color:grey;">
                            <datalist id="browsers">
                                <option value="Onnovubhan">
                                <option value="Kandari">
                                <option value="Pothikrit">
                                <option value="Notundisha">
                                <option value="Protibimbo">
                                <option value="Rupantor">
                                <option value="Ahoron">
                            </datalist>

                            <textarea name="write" id="editor" placeholder="start writing from here" rows="30"
                                style="width:80%; font-size:16px; padding: 15px; min-height: 200px; margin-bottom: 40px; border-color:grey;"></textarea><br>

                            <button class="button1" type="submit" name="submit1"> Post </button>

                    </div>
                    </form>
                    <!-- 
          <script>
            ClassicEditor
              .create(document.querySelector('#editor'))
              .catch(error => {
                console.error(error);
              });
          </script> -->

                </div>
            </div>

            <div class="tab-pane" role="tabpanel" id="tab-2">
                <div class="table">
                    <div class="contain" style="overflow-x: auto;">
                        <table style="border: 5px grey; box-shadow: 0 8px 16px grey;">
                            <tr class="header"
                                style="background-color: rgb(90, 89, 89); color: white; border-color: black;">
                                <th><strong>S.No</strong></th>
                                <th><strong>Title</strong></th>
                                <th><strong>Author</strong></th>
                                <th><strong>Date Of Publish</strong></th>
                                <th><strong>Delete</strong></th>
                            </tr>

                            <?php
              $link = mysqli_connect("localhost", "root", "", "rgs");
              if ($link === false) {
                die("ERROR: Could not connect. " . mysqli_connect_error());
              }
              $res = "SELECT * FROM blog";

              $result = $link->query($res);

              if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                  $id = $row['id'];
                  $title = $row['title'];
                  $selects = $row['selects'];
                  $date = $row['date'];
                  $name = $row['name'];
                  $description = $row['description'];
                  $element = "
    
    <form action=\"writerauth.php?action=remove&id=$id\" method=\"post\" class=\"cart-items\">
  
         
              <tr>
                  <td>
                  
                  </td>

                  <td>
                      $title

                  </td>
                  <td>
                     $description

                  </td>
                  <td>
                      $date

                  </td>

                  <td>
                                 
                   <button  style=\" background: rgb(237, 68, 68); border: none; padding: 10px;border-radius: 5px;\" type=\"submit\" name=\"remove\">Remove</button>
                  </td>
               </tr>
                                            
             </form> ";
                  echo  $element;
                }
              } else {
                echo "0 results";
              }

              $link->close();

              ?>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>

</html>