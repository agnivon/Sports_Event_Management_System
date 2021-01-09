<?php


    $conn= mysqli_connect("localhost","root","","olympic");
    error_reporting(0);

    if(!$conn) {
        die("connection failed: ".mysqli_connect_error());
    }

    $Sponsorship_Id=$_GET['rn'];

    $result1=mysqli_query($conn,"DELETE FROM sponsorer WHERE Sponsorship_Id='$Sponsorship_Id'");

    if($result1) {

        echo "<script>alert('Successfully deleted')</script>";
        echo "<script>window.location.href='Edit-Sponsorer.php'</script> ";
    }
    else
    {
        echo '<script>alert("Team not deleted")</script>';
    }


 ?>
