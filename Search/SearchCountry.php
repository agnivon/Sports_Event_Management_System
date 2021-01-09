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

        <form class="form-inline ml-auto" action="../Search/SearchCountry.php" method="post">
           <select class="select mr-sm-2" name="drop" required >
             <option disabled selected>Category</option>
             <option value="Country_Code">Country Code</option>
             <option value="Country_Name">Country Name</option>
           </select>
          <input class="form-control  mr-sm-2" required type="text" placeholder="Search" name="search">
          <button class="btn btn-light  my-sm-0" type="submit" name="submit">Search</button>
       </form>
     </div>
       <a href="../index.php" class="pl-2">Log Out</a>
    </nav>
  <table class="customTable table table-striped table-hover table-active align-middle; ">
      <tr>
        <th>Country Code</th>
        <th>Country Name</th>
      </tr>
      <?php
       $con=mysqli_connect("localhost","root","","olympic");
       if (isset($_POST['submit']))
         {
           $str=$_POST['drop'];
           $str1 = $_POST['search'];
           $sql="SELECT * FROM country WHERE $str LIKE '%$str1%'";
           $result=$con->query($sql);

       if($result->num_rows>0){
         while($row=$result->fetch_assoc()){
           echo"<tr><td>".$row["Country_Code"]."</td><td>".$row["Country_Name"]."</td></tr>";
         }
       }
       else{
         echo "Table is empty";
       }}
       $con->close();
       ?>
    </table>
  </body>
</html>
