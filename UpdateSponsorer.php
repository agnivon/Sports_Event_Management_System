<?php
//header.php
include('header.php');
include('mysqli_connect.php');
error_reporting(0);
$si=$_GET['si'];
$sn=$_GET['sn'];
$ai=$_GET['ai'];
$sa=$_GET['sa'];
?>

 <!-- dataentry area -->
<section id='NewSponsorer'>
  <div class="row m-0">
    <div class="col-md-6">
      <div class="text-center pb-5">
          <h1 class="login-title text-dark">Sponsorer</h1>

          <span class="font-ubuntu text-black-50">Go <a href="Edit-Sponsorer.php">Back*</a></span>
        </div>

      <div class="d-flex justify-content-center" id="NewEntry">
    <form action="UpdateSponsorer.php" method="get" enctype="multipart/form-data" id="NewSponsorer-form">
      <div class="form-row my-4">
        <div class="col">
            <input type="text" value="<?php echo "$si"?>" readonly name="si" id="si" class="form-control" placeholder="Sponsorship Id">
        </div>
      </div>
      <div class="form-row my-4">
        <div class="col">
            <input type="text" value="<?php echo "$sn"?>" required name="sn" id="Sponsorer_Name" class="form-control" placeholder="Sponsorer's Name">
        </div>
      </div>
      <div class="form-row my-4">
        <div class="col">
            <input type="text" value="<?php echo "$ai"?>" required name="ai" id="Athlete_Id" class="form-control" placeholder="Athlete_Id">
        </div>
      </div>

        <div class="form-row my-4">
          <div class="col">
              <input type="text" value="<?php echo "$sa"?>" required name="sa" id="Sponsorship_Amount" class="form-control" placeholder="Sponsorship Amount">
          </div>
        </div>
        <input type="submit" class="btn btn-warning rounded-pill text-dark px-5" name="submit">


    </form>
</div>
    </div>
    <div class="col-md-6 ">
      <img src= "./assets./OlympicGold.jpg"
      alt="Backgroundimage"
      align="right"
      style="width=100%;height=100%;border-radius:4%;">
    </div>
  </div>
</section>
<!-- //data entry area -->


<?php
//footer.php
include("footer.php");
include('mysqli_connect.php');
if($_GET['submit'])
{
  $si=$_GET['si'];
  $sn=$_GET['sn'];
  $ai=$_GET['ai'];
  $sa=$_GET['sa'];
  $query="UPDATE sponsorer SET Sponsorship_Id='$si',Sponsorer_Name='$sn', Athlete_Id='$ai',Sponsorship_Amount='$sa'WHERE Sponsorship_Id='$si' ";
  $data =mysqli_Query($con,$query);
  if($data){

    echo "<script>window.location.href='Edit-Sponsorer.php'</script>";
  }
  else{
    echo"<script>alert('Error')</script>";
  }
} ?>
