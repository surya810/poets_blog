<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "rgs";


$con = mysqli_connect($server, $user, $password, $db);


if ($con) {
?>
    <script>
        alert("connection success");
    </script>
<?php
} else {
    # code...  
?>
    <script>
        alert("connection not successful");
    </script>
<?php
}

$con->set_charset("utf8");

$db = mysqli_select_db($con, "rgs");
if (!$db) {
    die("Database selection failed: " . mysqli_connect_error());
}



?>