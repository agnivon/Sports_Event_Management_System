<?php
//header.php
include('header.php');
 ?>

 <!-- regestration area -->

 <nav class="navbar navbar-expand-md navbar-dark bg-dark">
   <a class="navbar-brand" href="#">Olympics</a>


   <a href="index.php" class="pl-2 ml-auto">Log Out</a>
 </nav>

<section id='Viewindex'>
  <div class="row m-0">
    <div class="col-md-6">
      <div class="text-center pb-5">
          <h1 class="login-title text-dark">Olympics DataBase</h1>
          <p class="p-1 m-0 font-ubuntu text-black-50">Your one stop for everything Olympic</p>
          <p class="p-1 m-0 font-ubuntu text-black-50">View the DataBase</p>
      </div>
      <div class="d-flex justify-content-center">
        <div class="form-row">
          <div class="col">
            <form action="UserView\ViewAthlete.php" enctype="multipart/form-data" id="ViewAthlete">
             <div class="submit-btn text-center my-5">
                   <button type="submit" class="btn btn-warning rounded-pill text-dark px-5">Athlete</button>
             </div>
             </form>
      </div>
      <div class="col">
        <form action="UserView\ViewEvent.php" enctype="multipart/form-data" id="ViewEvent">
         <div class="submit-btn text-center my-5">
               <button type="submit" class="btn btn-warning rounded-pill text-dark px-5">Event</button>
         </div>
         </form>
       </div>
       <div class="col">
         <form action="UserView\ViewResult.php" enctype="multipart/form-data" id="ViewResult">
          <div class="submit-btn text-center my-5">
                <button type="submit" class="btn btn-warning rounded-pill text-dark px-5">Result</button>
          </div>
          </form>
        </div>
        <div class="col">
          <form action="UserView\ViewSponsorers.php" enctype="multipart/form-data" id="ViewSponsorers">
           <div class="submit-btn text-center my-5">
                 <button type="submit" class="btn btn-warning rounded-pill text-dark px-5">Sponsorship</button>
           </div>
           </form>
         </div>
         <div class="col">
           <form action="UserView\ViewCountry.php" enctype="multipart/form-data" id="ViewCountry">
            <div class="submit-btn text-center my-5">
                  <button type="submit" class="btn btn-warning rounded-pill text-dark px-5">Country</button>
            </div>
            </form>
          </div>

          <div class="col">
            <form action="./UserView/ViewRecord.php" enctype="multipart/form-data" id="ViewSponsorers">
             <div class="submit-btn text-center my-5">
                   <button type="submit" class="btn btn-warning rounded-pill text-dark px-5">Record</button>
             </div>
             </form>
           </div>

      </div>

</div>
    </div>
    <div class="col-md-6 ">
      <img src= "./assets./HomePage.jpg" width="339" height="500"
      alt="Backgroundimage"
      align="right"
      style="width=100%;height=100%;border-radius:4%;">
    </div>
  </div>
</section>
<!-- //regestration area -->


<?php
//footer.php
include("footer.php");
?>
