<?php


    $conn= mysqli_connect("localhost","root","","olympic");
    error_reporting(0);

    if(!$conn) {
        die("connection failed: ".mysqli_connect_error());
    }

    $Event_Id=$_GET['rn'];

    $result1=mysqli_query($conn,"DELETE FROM event WHERE Event_Id='$Event_Id'");

    if($result1) {

        echo "<script>alert('Successfully deleted')</script>";
        echo "<script>window.location.href='Edit-Event.php'</script> ";
    }
    else
    {
        echo '<script>alert("Not deleted")</script>';
    }


 ?>
