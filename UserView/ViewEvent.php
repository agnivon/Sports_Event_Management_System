<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <link rel="stylesheet" href="../Sty.css">
    <!-- fontfamily -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital@1&display=swap" rel="stylesheet">

</head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <a class="navbar-brand" href="../UserHome.php">Olympics</a>


      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <form class="form-inline ml-auto" action="../Search/SearchEvent.php" method="post">
           <select class="select mr-sm-2" name="drop" required >
             <option disabled selected>Category</option>
             <option value="Event_Id">Event Id</option>
             <option value="Event_Name">Event's Name</option>
             <option value="Event_Date">Event Date</option>
             <option value="Event_Type">Event Type</option>
             <option value="Venue">Venue</option>
             <option value="Country_Code">Country Code</option>
           </select>
          <input class="form-control  mr-sm-2" required type="text" placeholder="Search" name="search">
          <button class="btn btn-light  my-sm-0" type="submit" name="submit">Search</button>
       </form>
     </div>
    </nav>
    <table class="table table-striped table-hover table-active align-middle; ">
      <tr>
        <th>Event ID</th>
        <th>Event's Name</th>
        <th>Event's Date</th>
        <th>Event Type</th>
        <th>Venue</th>
        <th>Country Code</th>
      </tr>
      <?php
       $con=mysqli_connect("localhost","root","","olympic");
       $sql="SELECT * FROM event";
       $result=$con->query($sql);

       if($result->num_rows>0){
         while($row=$result->fetch_assoc()){
           echo"<tr><td>".$row["Event_Id"]."</td><td>".$row["Event_Name"]."</td><td>".$row["Event_Date"]."</td><td>".$row["Event_Type"]."</td><td>".$row["Venue"]."</td><td>".$row["Country_Code"]."</td></tr>";
         }
       }
       else{
         echo "Table is empty";
       }
       $con->close();
       ?>
    </table>
  </body>
</html>
