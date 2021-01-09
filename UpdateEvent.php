<?php
//header.php
include('header.php');
include('mysqli_connect.php');
error_reporting(0);
$ei=$_GET['ei'];
$en=$_GET['en'];
$ed=$_GET['ed'];
$et=$_GET['et'];
$v=$_GET['v'];
$cc=$_GET['cc'];
 ?>

 <?php
     if($_SERVER['REQUEST_METHOD'] == 'POST'){
         require ('NewEvent-process.php');
     }
 ?>

 <!-- dataentry area -->
<section id='NewEvent'>
  <div class="row m-0">
    <div class="col-md-6">
      <div class="text-center pb-5">
          <h1 class="login-title text-dark">Event</h1>

          <span class="font-ubuntu text-black-50">Go <a href="Edit-Event.php">Back*</a></span>
        </div>

      <div class="d-flex justify-content-center" id="NewEntry">
    <form action="UpdateEvent.php" method="get" enctype="multipart/form-data" id="NewEvent-form">

      <div class="form-row my-4">
        <div class="col">
            <input type="text" value="<?php echo "$ei"?>" readonly name="ei" id="Event_Id" class="form-control" placeholder="Event's Id">
        </div>
      </div>
      <div class="form-row my-4">
        <div class="col">
            <input type="text" value="<?php echo "$en"?>"required name="en" id="Event_Name" class="form-control" placeholder="Events's Name">
        </div>
      </div>

      <div class="form-row my-4">
        <div class="col">
            <input type="date" value="<?php echo "$ed"?>"required name="ed" id="Event_Date" class="form-control" placeholder="Event Date">
        </div>
      </div>

      <div class="form-row my-4">
        <div class="col">
            <input type="text" value="<?php echo "$et"?>"required name="et" id="Event_Type" class="form-control" placeholder="Event Type">
        </div>
      </div>

      <div class="form-row my-4">
        <div class="col">
            <input type="text" value="<?php echo "$v"?>"required name="v" id="Venue" class="form-control" placeholder="Venue">
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
  $ei=$_GET['ei'];
  $en=$_GET['en'];
  $ed=$_GET['ed'];
  $et=$_GET['et'];
  $v=$_GET['v'];
  $cc=$_GET['cc'];
  $query="UPDATE event SET Event_Id='$ei',Event_Name='$en', Event_Date='$ed',Event_Type='$et',Venue='$v',Country_Code='$cc' WHERE Event_Id='$ei' ";
  $data =mysqli_Query($con,$query);
  if($data){

    echo "<script>window.location.href='Edit-Event.php'</script>";
  }
  else{
    echo"<script>alert('Error')</script>";
  }
} ?>
