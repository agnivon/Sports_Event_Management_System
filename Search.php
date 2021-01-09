
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    </head>
  <body>

    <h1>Search Page</h1>
    <div class="artical-container">
      <?php
      if(isset($_POST['submit-s']))
      {
        $con= mysqli_connect("localhost","root","","olympic");
        $search=mysqli_real_escape_string($con,$_POST['search']);
        $sql="SELECT * FROM athlete WHERE Athlete_Id LIKE '%search%' OR
        Athlete_Name LIKE '%search%' OR
        Gender LIKE '%search%' OR
        DOB LIKE '%search%' OR
        Country_Code LIKE '%search%' ";
        $result=mysqli_query($con,$sql);
        $queryResult=mysqli_num_rows($result);

        echo "There are ".$queryResult."results";
        if($queryResult>0){
          while($row=mysqli_fetch_assoc($result)){
            echo"<div class='article-box'>
            <p>".$row['Athlete_Id']."</p>
            <p>".$row['Athlete_Name']."</p>
            <p>".$row['Gender']."</p>
            <p>".$row['DOB']."</p>
            <p>".$row['Country_Code']."</p>
            </div>
            ";
          }

        }
        else{
          echo "No results in this table";
        }
      }
      ?>
    </div>
  </body>
</html>
