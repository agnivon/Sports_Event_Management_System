<?php
//header.php
include('header.php');
include('mysqli_connect.php');
error_reporting(0);
$ai=$_GET['ai'];
$an=$_GET['an'];
$g=$_GET['g'];
$d=$_GET['d'];
$cc=$_GET['cc'];
 ?>

 <!-- dataentry area -->
<section id='NewAthlete'>
  <div class="row m-0">
    <div class="col-md-6">
      <div class="text-center pb-5">
          <h1 class="login-title text-dark">Athlete</h1>

          <span class="font-ubuntu text-black-50">Go <a href="Edit-Athlete.php">Back*</a></span>
        </div>

      <div class="d-flex justify-content-center" id="NewAthlete-form">
    <form action="UpdateAthlete.php" method="get">
      <div class="form-row my-4">
        <div class="col">
            <input type="text" value="<?php echo "$ai"?>" readonly name="ai" id="Athlete_Id" class="form-control" placeholder="Athlete's Id">
        </div>
      </div>
      <div class="form-row my-4">
        <div class="col">
            <input type="text" value="<?php echo "$an"?>" required name="an" id="Athlete_Name" class="form-control" placeholder="Athlete's Name">
        </div>
      </div>
      <div class="form-row my-4">
        <div class="col">
            <input type="text" value="<?php echo "$g"?>"required name="g" id="Gender" class="form-control" placeholder="Gender">
        </div>
      </div>

        <div class="form-row my-4">
          <div class="col">
              <input type="date" value="<?php echo "$d"?>"required name="d" id="Date" class="form-control" placeholder="DOB">
          </div>
        </div>

        <div class="form-row my-4">
          <div class="col">
              <input type="text" value="<?php echo "$cc"?>"required name="cc" id="Country_Code" class="form-control" placeholder="Country Code">
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
  $ai=$_GET['ai'];
  $an=$_GET['an'];
  $g=$_GET['g'];
  $d=$_GET['d'];
  $cc=$_GET['cc'];
  $query="UPDATE athlete SET Athlete_Id='$ai',Athlete_Name='$an', Gender='$g',DOB='$d',Country_Code='$cc' WHERE Athlete_Id='$ai' ";
  $data =mysqli_Query($con,$query);
  if($data){

    echo "<script>window.location.href='Edit-Athlete.php'</script>";
  }
  else{
    echo"<script>alert('Error')</script>";
  }
} ?>
