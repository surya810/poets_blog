<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="css/popup.css"> -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="../lib/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



</head>

<body>
    <style>
    body 
        {
        background-color: #444444;
        /* background: rgba(255,255,255,0.04); */

        color: white;
        margin: 12px;
        padding-top: 9px;
        margin-bottom: 25px;
        }
                
         @media screen and (max-height: 450px) {
            .overlay a {
            font-size: 20px;
        }
        .overlay .closebtn {
            font-size: 40px;
            top: 15px;
            right: 35px;
        }
        }
        @media screen and (max-height: 450px) {
        .overlay a {
            font-size: 20px;
        }
        .overlay-content {
            width: 893px;
            position: absolute;
            text-align: left;
            margin-left: 0px;
            margin-right: 0px;
        }
     }
        @media screen and (max-height: 600px) {
            a.font1 {
            font-size: 18px;
            width: 850px;
            position: absolute;
            text-align: center;
            margin-left: 200px;
            margin-right: 200px;
            }
        }
    
        
        hr.style-eight {
        overflow: visible; /* For IE */
        padding: 0;
        border: none;
        border-top: medium double #333;
        color: #333;
        text-align: center;
        }
        hr.style-eight:after {
        content: "§";
        display: inline-block;
        position: relative;
        top: -0.7em;
        font-size: 1.5em;
        padding: 0 0.25em;
        background: white;
    }

      </style> 

    <?php 

    include_once "bengalidate.php";
    
    $link = mysqli_connect("localhost", "root", "", "rgs");
        if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        $id=$_GET['id'];
        
        
    $sql3="SELECT * FROM blog WHERE id='$id'";
    $result2= $link->query($sql3);
        
        if ($result2->num_rows > 0)
            {
            // output data of each row
                while($row = $result2->fetch_assoc())
                {
                    $id= $row['id'];
                    $title=$row['title'];
                    $selects=$row['selects'];
                    $date=$row['date'];
                    $name=$row['name'];
                    $description = $row['description'];
                    $writes =  $row['writes'];
                
                

                        

                       //2nd div
                       echo"<style> margin:0px, padding:0px; box-sizing: border-box</style>";

                        echo "<div> <a class=\"btn btn-primary\" onClick=\"history.go(-1)\" role=\"button\" style=\"background-color:transparent; position: absolute; text-decoration: none; top: 20px; right: 45px; font-size: 60px; display:block; transition: 0.3s; color: white; cursor: pointer;font-size: 50px; margin-bottom:10%; border-color:0px transparent;\"><b>&times;</b></a>"; //1st div open
                        echo "<div style= \"margin-bottom: 8%; margin-left: 25px; margin-top :8px; \" >  </div>";

                        echo "<h1  style=\"font-size: 38px;\">". $title ."</h1>";

                        echo "<h2 style= \"font-size: 24px;\">". $description .'</h2>';

                        echo "<p style = \"padding-bottom: 15px; margin-block-start: 0 em;
                         margin-block-end: 0 em;\">প্রকাশের তারিখ: ".bn_date(date('d M Y',strtotime($row['date'])))." </p>";

                        //  echo bn_date(date(' $row[date]'));

                        //প্রকাশের সময়: ".date('jS M Y', strtotime($row['date']))."

                        // echo bn_date(date(' d M Y'));

                        echo "<br>";

                        echo "<div style= \" margin-bottom:30px;\">";
                        echo "<p style=\"font-size: 20 px; margin-top:25px; \">".nl2br($writes).'</p>'; 
                        echo"</div>";    

                        echo '</div>';// 1st div close
                        
                        
                } 
            }  


    ?>
        <br>
        <br>
        <br>

        <hr>

    <!-- begin wwww.htmlcommentbox.com -->
        <div id="HCB_comment_box"><a href="http://www.htmlcommentbox.com"></a> is loading comments...</div>
        <link rel="stylesheet" type="text/css" href="https://www.htmlcommentbox.com/static/skins/bootstrap/twitter-bootstrap.css?v=0" />

        <script type="text/javascript" id="hcb"> /*<!--*/ if(!window.hcb_user){hcb_user={};} (function(){var s=document.createElement("script"), l=hcb_user.PAGE || (""+window.location).replace(/'/g,"%27"), h="https://www.htmlcommentbox.com";s.setAttribute("type","text/javascript");s.setAttribute("src", h+"/jread?page="+encodeURIComponent(l).replace("+","%2B")+"&opts=16862&num=10&ts=1614334941592");if (typeof s!="undefined") document.getElementsByTagName("head")[0].appendChild(s);})(); /*-->*/ </script>
    <!-- end www.htmlcommentbox.com -->
 <style>  
    textarea 
        {
        resize:none;
        width: 40%;
        height: 100px;
        padding: 10px;
        background-color: red;

        }

</style>
    

</body>

</html>