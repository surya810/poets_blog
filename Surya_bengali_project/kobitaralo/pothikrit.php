<!DOCTYPE html>
<html lang="en">

<head>
    <style>
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
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>আহরণ</title>
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
    <link rel="stylesheet" href="css/dropdown.css">
    <link rel="stylesheet" href="css/popup.css">


</head>



<body style=" background-image: url('img/b.jpg'); background-size: cover; overflow-x: hidden;">
    <button onclick="topFunction()" id="myBtn" title="Go to top" style="color: white;">
        <i class="fa fa-arrow-up" aria-hidden="true"></i></button>


    <div style="margin-left: 25px; margin-top :10px;">
        <a href="index.php" class="active" style="background-color: transparent;">
            <center>
                <img id="spl" src="img/KOsitebanne3r.png" height="auto" width="80%">
        </a>

        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="CloseNav()">&times;</a>

            <a href="#" class=" nav-link " style="font-size: 16px;"><strong>আত্মপ্রকাশ সংখ্যা</strong></a> </li>
            <a href="bookfair.php" class="nav-link" style="font-size: 16px;"><strong>বইমেলা সংখ্যা – ২০২০</strong></a>
            </li>
            <a href="sompadok.php" class="nav-link" style="font-size: 16px;"><strong>সম্পাদকীয়</strong></a></li>
            <a href="ahoron.php" class=" nav-link" style="font-size: 16px;"><strong>আহরণ</strong></a></li>
            <a href="rupantor.php" class="nav-link " style="font-size: 16px;"><strong>রূপান্তর</strong></a></li>
            <a href="kandari.php " class=" nav-link " style="font-size: 16px;"><strong>কান্ডারী</strong></a></li>
            <a href="pothikrit.php" class=" nav-link " style="font-size: 16px;"><strong>পথিকৃৎ</strong></a></li>
            <a href="notundisha.php" class=" nav-link " style="font-size: 16px;"><strong>নতুন দিশা</strong></a></li>
            <a href="onnovubhan.php " class=" nav-link " style="font-size: 16px;"><strong>অন্যভুবন</strong></a></li>
            <a href="protibimbo.php" class=" nav-link " style="font-size: 16px;"><strong>প্রতিবিম্ব</strong></a></li>

        </div>

        <div class="ex1" style="float: right;">
            <span style="font-size:20px;cursor:pointer;" onclick="OpenNav()"><strong>Menu</strong></span>
            <a class="nav-item nav-link" style="color:black;margin-top: 10px;" href="signin.php">
                <i class="w3-jumbo w3-spin  fa fa-user-circle fa-2x" aria-hidden="true" font-size="20px"></i></a>
        </div>
    </div>
    <br>

    <h2 style="display:inline;text-shadow: 2px 2px grey;">&nbsp;&nbsp;<strong>পথিকৃৎ </strong></h2>&nbsp;&nbsp;
    <img src="img/t.png " style="display: inline;width: 90px; height: 80px;margin-bottom: 5px;">


    <div class="dropdown" style="display:inline; margin-left: 240px;">
        <button class="dropbtn" style="background-color: transparent;font-size: 20px;"><strong>Library</strong></button>
        <div class="dropdown-content" style="margin-left: 520px;">

            <a href="#"><strong>পুরুষ,<br> কমল দে শিকদার </strong></a>
            <a href="#"><strong>দিনাবসান,<br> কৃষ্ণা বসু </strong></a>
            <a href="#"><strong>কবিতার আলো, কমল মুখোপাধ্যায়</strong></a>
            <a href="#"><strong>জিজিয়া,<br> শ্যামল মুখোপাধ্যায় </strong></a>
            <a href="#"><strong>শীতঘুম, অরুণাচল দত্ত চৌধুরী </strong></a>
            <a href="#"><strong>পিপুলকোঠি, দীপক লাহিড়ী </strong></a>
            <a href="#"><strong>স্মৃতির ধারাপাত, রাণা চট্যোপাধ্যায় </strong></a>
            <a href="#"><strong>অনাবাসি, চৈতালি চট্টোপাধ্যায় </strong></a>
            <a href="#"><strong>খড়কুটো,<br> নৃপেন চক্রবর্তী </strong></a>
            <a href="#"><strong> সমস্ত রাত, সুভদ্রা ভট্টাচার্য</strong></a>
            <a href="#"><strong>বাহুবন্ধন, <br> সৈয়দ হাসমত জালাল</strong></a>
            <a href="#"><strong>আহ্বান, ভারতী বন্দ্যোপাধ্যায় </strong></a>
            <a href="#"><strong>কুমুদ, ব্রত চক্রবর্তী </strong></a>
        </div>
    </div>
    &nbsp;&nbsp;&nbsp;&nbsp;

    <!--category section-->
    <div class="dropdown1" style="display:inline;">
        <button class="dropbtn1"
            style="background-color: transparent;font-size: 20px;"><strong>Category</strong></button>
        <div class="dropdown1-content" style="margin-left: 600px;">
            <a href="onnovubhan.php" style="text-decoration: none;"><strong>অন্যভুবন</strong></a>
            <a href="kandari.php" style="text-decoration: none;"><strong>কান্ডারী</strong></a>
            <a href="pothikrit.php" style="text-decoration: none;"><strong>পথিকৃৎ</strong></a>
            <a href="notundisha.php" style="text-decoration: none;"><strong>নতুন দিশা</strong></a>
            <a href="protibimbo.php" style="text-decoration: none;"><strong>প্রতিবিম্ব</strong></a>
            <a href="rupantor.php" style="text-decoration: none;"><strong>রূপান্তর</strong></a>
            <a href="ahoron.php" style="text-decoration: none;"><strong>আহরণ </strong></a>
        </div>
    </div>

    <!-- php started from from line no 121 -->

    <?php
  if (isset($_POST["view"])) {



    $link = mysqli_connect("localhost", "root", "", "rgs");

    if ($link === false) {
      die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    $id = $_GET['id'];

    $sql1 = "SELECT * FROM blog WHERE id='$id' ";





    $result1 = $link->query($sql1);


    if ($result1->num_rows > 0) {
      // output data of each row


      while ($row = $result1->fetch_assoc()) {
        $id = $row['id'];
        $title = $row['title'];
        $selects = $row['selects'];
        $date = $row['date'];
        $name = $row['name'];
        $description = $row['description'];
        $writes = $row['writes'];
        $element = "
          
          <div id=\"new\" class=\"overlay\">

            <div class=\"overlay-content\">
              <a href=\"#\" style=\"font-size: 18px;\">$title&nbsp;&nbsp;|&nbsp;&nbsp;$date</a>
              <a href=\"#\" style=\"font-size: 16px;word-wrap: break-word; \">
               $name<br><br>
               $description<br><br>
               $writes<br>
              </a>
             
            </div>
          </div>
          ";
        echo  $element;
      }
    } else {
      echo "0 results";
    }

    $link->close();
  }
  ?>

    <div class="card-deck" style="margin-top: 50px;cursor: pointer;  margin-right: 0px;">
        <!-- cards logic starting from here -->
        <?php
    $link = mysqli_connect("localhost", "root", "", "rgs");
    if ($link === false) {
      die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    $res = "SELECT * FROM blog where selects='pothikrit' ORDER By id DESC"; //it will show the the card in desc order according to ID

    $result = $link->query($res);

    if ($result->num_rows > 0) {
      // output data of each row

      while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $title = $row['title'];
        $selects = $row['selects'];
        $date = $row['date'];
        $name = $row['name'];
        $element = "

   <form action=\"pothikrit.php?id = $id\" method='post'>
            <div class=\"flip-card\" style=\"Margin-left: 50px; text-align: center; margin-top: 30px;\">
                <div class=\"flip-card-inner\">
                  <div class=\"flip-card-front\">
                    <h4 style=\"margin-top: 30px;\">$title</h4>
                  </div>
                  <div class=\"flip-card-back\">
                    <h6>$title</h6> 
                    <p>$date</p>
                    <span style=\"font-size:30px;cursor:pointer;\" id=\"story\" > 
                      <button style=\"margin-bottom: 10%;background: grey; border: none; padding: 10px; color: white;     width: 40%; border-radius: 25px;font-size: 20px;\"> <a href=\"show.php?id=$id\" style = \"text-decoration: none ; color: white;\" >Read </a>
                      </button>
                    </span>


                  </div>
                </div>
              </div>
              </form>
              ";
        echo  $element;
      }
    } else {
      echo "0 results";
    }

    $link->close();

    ?>
    </div>

    <script src="css/navbar.css"></script>
    <script src="css/card.css"></script>
    <!-- <script src="javascript/navbar.min.js"></script> -->
</body>

</html>