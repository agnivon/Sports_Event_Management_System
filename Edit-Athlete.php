<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="Sty.css">
    <!-- fontfamily -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital@1&display=swap" rel="stylesheet">

</head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <a class="navbar-brand" href="AdminIndex.php">Olympics</a>


      <a href="index.php" class="pl-2 ml-auto">Log Out</a>
    </nav>


    <table class="table table-striped table-hover table-active align-middle;">
      <tr>
        <th>Athlete ID</th>
        <th>Athlete's Name</th>
        <th>Gender</th>
        <th>DOB</th>
        <th>Country_Code</th>
        <th>Delete</th>
        <th>Update</th>
      </tr>
        <?php
        include("mysqli_connect.php");
        error_reporting(0);
        $query="SELECT * FROM athlete";
        $data=mysqli_query($con,$query);
        $total=mysqli_num_rows($data);

        if($total!=0){
          while($result=mysqli_fetch_assoc($data))
          {
          echo"
          <tr>
            <td>".$result['Athlete_Id']."</td>
            <td>".$result['Athlete_Name']."</td>
            <td>".$result['Gender']."</td>
            <td>".$result['DOB']."</td>
            <td>".$result['Country_Code']."</td>
            <td><a href= 'deleteAthlete.php?rn=$result[Athlete_Id]'>Delete</a></td>
            <td><a href= 'UpdateAthlete.php?ai=$result[Athlete_Id]&an=$result[Athlete_Name]&
            g=$result[Gender]&d=$result[DOB]&cc=$result[Country_Code]'>Edit</a></td>
          </tr>
          ";
          }
        }
        else{
          echo "Table empty..";
        }


         ?>
      </table>
      <form action="NewAthlete.php" enctype="multipart/form-data" >
       <div class="submit-btn text-right my-5">
             <button type="submit" class="btn btn-warning rounded-pill text-dark px-5">New Entry</button>
       </div>
       </form>
  </body>
</html>
