<?php
//header.php
include('header.php');
include('mysqli_connect.php');
error_reporting(0);
 $cc=$_GET['cc'];
 $cn=$_GET['cn'];
?>

<!-- dataentry area -->
<section id='NewCountry'>
  <div class="row m-0">
    <div class="col-md-6">
      <div class="text-center pb-5">
          <h1 class="login-title text-dark">Country</h1>

          <span class="font-ubuntu text-black-50">Go <a href="Edit-Country.php">Back*</a></span>
        </div>

      <div class="d-flex justify-content-center" id="NewCountry-form">
    <form action="UpdateCountry.php" method="get">
      <div class="form-row my-4">
        <div class="col">
            <input type="text" value="<?php echo "$cc"?>" readonly name="cc" id="Country_Code" class="form-control" placeholder="Country Code">
        </div>
      </div>
      <div class="form-row my-4">
        <div class="col">
            <input type="text" value="<?php echo "$cn"?>" required name="cn" id="Country_Name" class="form-control" placeholder="Country's Name">
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
  $cc=$_GET['cc'];
  $cn=$_GET['cn'];
  $query="UPDATE country SET Country_Code='$cc',Country_Name='$cn' WHERE Country_Code='$cc' ";
  $data =mysqli_Query($con,$query);
  if($data){

    echo "<script>window.location.href='Edit-Country.php'</script>";
  }
  else{
    echo"<script>alert('Error')</script>";
  }
} ?>
