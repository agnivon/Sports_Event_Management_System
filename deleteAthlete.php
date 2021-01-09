 <?php


     $conn= mysqli_connect("localhost","root","","olympic");
     error_reporting(0);

     if(!$conn) {
         die("connection failed: ".mysqli_connect_error());
     }

     $Athlete_Id=$_GET['rn'];

     $result1=mysqli_query($conn,"DELETE FROM athlete WHERE Athlete_Id='$Athlete_Id'");

     if($result1) {

         echo "<script>alert('Successfully deleted')</script>";
         echo "<script>window.location.href='Edit-Athlete.php'</script> ";
     }
     else
     {
         echo '<script>alert("Team not deleted")</script>';
     }


  ?>
