<?php


    $conn= mysqli_connect("localhost","root","","olympic");
    error_reporting(0);

    if(!$conn) {
        die("connection failed: ".mysqli_connect_error());
    }

    $Country_Code=$_GET['rn'];

    $result1=mysqli_query($conn,"DELETE FROM country WHERE Country_Code='$Country_Code'");

    if($result1) {

        echo "<script>alert('Successfully deleted')</script>";
        echo "<script>window.location.href='Edit-Country.php'</script> ";
    }
    else
    {
        echo '<script>alert("Not deleted")</script>';
    }


 ?>
