<?php
//header.php
include('header.php');
include('mysqli_connect.php');
error_reporting(0);
$ri=$_GET['ri'];
$ei=$_GET['ei'];
$en=$_GET['en'];
$ai=$_GET['ai'];
$mt=$_GET['mt'];
$tt=$_GET['tt'];
 ?>

 <!-- dataentry area -->
<section id='NewResult'>
  <div class="row m-0">
    <div class="col-md-6">
      <div class="text-center pb-5">
          <h1 class="login-title text-dark">Result</h1>

          <span class="font-ubuntu text-black-50">Go <a href="Edit-Result.php">Back*</a></span>
        </div>

      <div class="d-flex justify-content-center" id="NewEntry">
    <form action="UpdateResult.php" method="get" enctype="multipart/form-data" id="NewResult-form">

      <div class="form-row my-4">
        <div class="col">
            <input type="text"  value="<?php echo "$ri"?>" readonly name="ri" id="Result_Id" class="form-control" placeholder="Result Id">
        </div>
      </div>

      <div class="form-row my-4">
        <div class="col">
            <input type="text"  value="<?php echo "$ei"?>" required name="ei" id="Event_Id" class="form-control" placeholder="Event_Id">
        </div>
      </div>

      <div class="form-row my-4">
        <div class="col">
            <input type="text"  value="<?php echo "$en"?>" required name="en" id="Event_Name" class="form-control" placeholder="Event Name">
      </div>
    </div>

      <div class="form-row my-4">
        <div class="col">
            <input type="text"  value="<?php echo "$ai"?>" required name="ai" id="Athlete_Id" class="form-control" placeholder="Athlete_Id">
        </div>
      </div>
      <div class="form-row my-4">
        <div class="col">
            <input type="text" value="<?php echo "$mt"?>" required name="mt" id="Medal_Type" class="form-control" placeholder="Medal_Type">
        </div>
      </div>

      <div class="form-row my-4">
        <div class="col">
            <input type="text"  value="<?php echo "$tt"?>" required name="tt" id="Total_Time" class="form-control" placeholder="Total_Time">
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
  $ri=$_GET['ri'];
  $ei=$_GET['ei'];
  $en=$_GET['en'];
  $ai=$_GET['ai'];
  $mt=$_GET['mt'];
  $tt=$_GET['tt'];
  $query="UPDATE result SET Result_Id='$ri',Event_Id='$ei',Event_Name='$en', Athlete_Id='$ai',Medal_Type='$mt',Total_Time='$tt' WHERE Result_Id='$ri' ";
  $data =mysqli_Query($con,$query);
  if($data){

    echo "<script>window.location.href='Edit-Result.php'</script>";
  }
  else{
    echo"<script>alert('Error')</script>";
  }
} ?>
