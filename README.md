# ABSTRACT

In the emerging world of technology, every system is computerized and is available online. The traditional way of storing the records of sporting events is also now computerized. The SEMS is a web portal where users can view events details by choice. The main objective of this application is to maintain records of the events and allow easy access in viewing and retrieving specific records on requirement. It aims to avoid the overhead of maintaining physical records which are prone to wear and tear, not easily editable and not secure. The SEMS website can store the information about a large number of athletes, events, their result and much more. The business point of view focuses on selling the athletes profile to sponsors. The user who is just a curious enthusiast wanting to know more about the sporting events or a potential sponsor can view the records and retrieve specific information based on his/her choice. The portal is aimed at providing accurate and latest information to all its users in a secure manner.

# INTRODUCTION

The SEMS site is an online platform that works with the event data. The SEMS website is an online platform that helps users to view SEMS data. The database schema is designed to meet the requirements of the SEMS site. The portal consists of Athlete, Country, Event, Record, Result and sponsor module. Athlete module is where the users can view the athlete details. The Event module is where they can view the details of the different events present. The Country module is where they can view the details of the countries present in the sporting events. The Result module is where they can view the results of every event. The Record module is where they can view the world records. The Sponsor module is where they can view the different sponsors and the money invested on the athletes.

# SYSTEM REQUIREMENT
One of the most difficult tasks is that, the selection of the software, once system requirement is known is determining whether a software package fits the requirements. After initial selection further security is needed to determine the desirability of software compared with other candidates. This section first summarizes the application requirement question and then suggests more detailed comparisons.


## (i)	HARDWARE REQUIREMENT
1.	32/64-bit processor
2.	i3 or greater intel processor chip
3.	1.7 or more GHz processor

## (ii)	SOFTWARE REQUIREMENT
1.	Windows 7 or higher version OS
2.	Google chrome 7.0 or greater
3.	XAMPP web server
4.	Microsoft Visual Studio Code

# PROBLEM DESCRIPTION
 

Storing and maintaining a physical copy of the records of athletic events is a tedious and time-consuming process. Over the years as it becomes very large it becomes difficult to maintain. The data in these physical copies is prone to wear and tear and can be easily tampered with. Searching for specific pieces of information in these large physical copies is not only difficult but also time consuming.
The objective of this project is to:

●	Maintain a digital record of the athletes and events in athletic events.<br>
●	Easily view the different tables.<br>
●	Easily retrieve specific details.<br>
●	Easily insert and update and different values in the table.<br>

# SYSTEM DESIGN
 


## ER DIAGRAM:
![image](https://github.com/agnivon/SEMS/assets/122620788/c05a5d87-4256-45fd-8460-a530cfae6238)<br>

## SCHEMA DIAGRAM:
![image](https://github.com/agnivon/SEMS/assets/122620788/dc7fee32-2719-4bb5-90c1-573bac83de3d)<br>
<br>

# IMPLEMENTATION
 


## TABLE DESCRIPTION:  

ATHLETE TABLE:


CREATE TABLE `athlete` (  
`Athlete_Id` int(4) NOT NULL,  
`Athlete_Name` varchar(20) NOT NULL,  
`Gender` char(1) NOT NULL,  
`DOB` date NOT NULL,  
`Country_Code` int(3) DEFAULT NULL  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;  


ALTER TABLE `athlete`  
ADD PRIMARY KEY (`Athlete_Id`),  
ADD KEY `CountryForKey` (`Country_Code`) USING BTREE; ALTER TABLE `athlete`  
MODIFY `Athlete_Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;  
ALTER TABLE `athlete`  
ADD CONSTRAINT `Athlete_CountryForKey` FOREIGN KEY (`Country_Code`) REFERENCES `country` (`Country_Code`) ON DELETE SET NULL ON UPDATE NO ACTION;    
<br>
![image](https://github.com/agnivon/SEMS/assets/122620788/6bd03732-5ead-4351-8450-139473a7a289)<br>
<br>
![image](https://github.com/agnivon/SEMS/assets/122620788/2cd62bea-8794-4db4-a53b-aa9ea7c2f40c)<br>
The athlete table contains all basic information about the athletes participating in various events. The attributes are Athlete_Id, Athlete_Name, Gender, DOB and Country_Code.  

EVENT TABLE:    

CREATE TABLE `event` (  
`Event_Id` int(4) NOT NULL,  
`Event_Name` varchar(20) NOT NULL,  
`Event_Date` date NOT NULL,  
`Event_Type` char(1) NOT NULL,  
`Venue` varchar(20) NOT NULL,  
`Country_Code` int(3) DEFAULT NULL  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;  


ALTER TABLE `event`  
ADD PRIMARY KEY (`Event_Id`),  
ADD KEY `CountryForKey` (`Country_Code`) USING BTREE; ALTER TABLE `event`    
MODIFY `Event_Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;  
ALTER TABLE `event`  
 
 
ADD CONSTRAINT `Event_CountryForKey` FOREIGN KEY (`Country_Code`) REFERENCES `country` (`Country_Code`) ON DELETE SET NULL ON UPDATE NO ACTION;  
<br>
![image](https://github.com/agnivon/SEMS/assets/122620788/311446d1-bd13-45f4-91cc-ab5a1c94591e)  
<br>
![image](https://github.com/agnivon/SEMS/assets/122620788/d9044678-d37d-4c9e-942f-bad02dcf5b1b)  
The event table contains information about all the sporting events in major sports festivals and games. The attributes include Event_Id, Event_Name, Event_Date, Event_Type, Venue and Country_Code.  

COUNTRY TABLE:  


CREATE TABLE `country` (  
`Country_Code` int(3) NOT NULL,  
`Country_Name` varchar(20) NOT NULL,  
`Continent` varchar(20) DEFAULT NULL  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;  


ALTER TABLE `country`  
ADD PRIMARY KEY (`Country_Code`); ALTER TABLE `country`  
 
 
MODIFY `Country_Code` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;  
<br>
![image](https://github.com/agnivon/SEMS/assets/122620788/1c303595-8a35-497c-af95-0b15aecfc3b3)  
<br>
![image](https://github.com/agnivon/SEMS/assets/122620788/b5e4a7de-35d0-4d63-aba5-a7882dfcdac2)  
The country table contains all the details about all the countries which the athletes represent and the host countries for the events. The attributes consist of Country_Code, Country_Name and Continent.  

RECORD TABLE:  


CREATE TABLE `record` (  
`Result_Id` int(4) DEFAULT NULL,  
`Event_Name` varchar(20) NOT NULL,  
`Event_Type` char(1) NOT NULL,  
`Athlete_Id` int(4) DEFAULT NULL,  
 
 
`Record_Time` int(8) NOT NULL DEFAULT 99999999  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;  


ALTER TABLE `record`  
ADD PRIMARY KEY (`Event_Name`);  
<br>
![image](https://github.com/agnivon/SEMS/assets/122620788/3eee3ce0-ba5c-4467-833b-44e4da37c74e)  
<br>
![image](https://github.com/agnivon/SEMS/assets/122620788/2c509728-6e24-4636-8155-a7b0c85dace7)  
The record table consists of record-holding results of all the events conducted. Its attributes consist of Result_Id, Event_Name, Event_Type_ Athlete_Id and Record_Time.  

RESULT TABLE:  


CREATE TABLE `result` (  
`Result_Id` int(4) NOT NULL,  
`Event_Id` int(4) NOT NULL,  
`Event_Name` varchar(20) NOT NULL,  
`Athlete_Id` int(4) NOT NULL,  
`Medal_Type` varchar(6) NOT NULL,  
`Total_Time` int(8) NOT NULL  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;  


ALTER TABLE `result`  
ADD PRIMARY KEY (`Result_Id`), ADD KEY `EventForKey` (`Event_Id`),  
 
 
ADD KEY `AthleteForKey` (`Athlete_Id`); ALTER TABLE `result`  
MODIFY `Result_Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;  
ALTER TABLE `result`  
ADD CONSTRAINT `Result_AthleteForKey` FOREIGN KEY (`Athlete_Id`) REFERENCES `athlete` (`Athlete_Id`) ON DELETE CASCADE ON UPDATE NO ACTION,  
ADD CONSTRAINT `Result_EventForKey` FOREIGN KEY (`Event_Id`) REFERENCES `event` (`Event_Id`) ON DELETE CASCADE ON UPDATE NO ACTION;  
<br>
![image](https://github.com/agnivon/SEMS/assets/122620788/25a3721f-2574-4f57-839b-bfbc8bfb5abd)  
<br>
![image](https://github.com/agnivon/SEMS/assets/122620788/184b224e-307a-4b07-9c3f-dc2dd1d470e6)  
The result table consists of all the results obtained by the athletes after they have completed in their events. The attributes contained are Result_Id, Event_Id, Event_Name, Athlete_Id, Medal_Type, Total_Time.  
 
 
SPONSOR TABLE:  


CREATE TABLE `sponsor` (  
`Sponsorship_Id` int(4) NOT NULL,  
`Sponsor_Name` varchar(20) NOT NULL,  
`Athlete_Id` int(4) NOT NULL,  
`Sponsorship_Amount` int(8) NOT NULL,  
`Sponsorship_Manager` varchar(25) DEFAULT NULL  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;  


ALTER TABLE `sponsor`  
ADD PRIMARY KEY (`Sponsorship_Id`),  
ADD KEY `AthleteForKey` (`Athlete_Id`) USING BTREE; ALTER TABLE `sponsor`  
MODIFY `Sponsorship_Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;  
ALTER TABLE `sponsor`  
ADD CONSTRAINT `Sponsor_AthleteForKey` FOREIGN KEY (`Athlete_Id`) REFERENCES `athlete` (`Athlete_Id`) ON DELETE CASCADE;  
<br>
![image](https://github.com/agnivon/SEMS/assets/122620788/27e45ada-73be-433b-b5a0-408a337121b0)
<br>
<br>
![image](https://github.com/agnivon/SEMS/assets/122620788/bf6fa07c-97e3-4ef9-8f22-55f69c6744b7)
<br>
The sponsor table contains all information about all the entities sponsoring the athletes. The attributes consist of Sponsorship_Id, Sponsor_Name, Athlete_Id, Sponsorship_Amount and Sponsorship_Manager.
  
# SOURCE CODE:  
CODE FOR INDEX PAGE:  
<?php  
//header.php include('header.php'); session_start();  
$_SESSION["ADMIN"] = "false";  
?>  
<nav class="navbar navbar-expand-md navbar-dark bg-dark">  
<a class="navbar-brand" href="#">SEMS</a>  
</nav>  
<section id='index'>  
<div class="row m-0">  
<div class="col-md-6">  
<div class="text-center pb-5">  
<h1 class="login-title text-dark">SEMS</h1>  
<p class="p-1 m-0 font-ubuntu text-black-50">The leading international sporting events featuring summer and winter sports competitions in which thousands of athletes from around the world participate in a variety of competitions</p>  
</div>  
<div class="d-flex justify-content-center">  
<div class="form-row">  
<div class="col">  
<form action="UserHome.php" enctype="multipart/form-data" id="ViewAthlete">  
<div class="submit-btn text-center my-5">  
<button type="submit" class="btn btn-warning rounded-pill text-dark px- 5">User</button>  
</div>  
</form>  
</div>  
 
 
<br>
<br>
<br>
<div class="col">  
<form action="login.php" enctype="multipart/form-data" id="ViewEvent">  
<div class="submit-btn text-center my-5">  
<button type="submit" class="btn btn-warning rounded-pill text-dark px- 5">Admin</button>  
</div>  
</form>  
</div>  
</div>  
</div>  
</div>  
<div class="col-md-6 ">  
<img src= "./assets/Torch.jpg" width="339" height="500" alt="Backgroundimage"  
align="right"  
style="width=100%;height=100%;border-radius:4%;">  
</div>  
</div>  
</section>  
<?php  
//footer.php include("footer.php");  
?>  
<br>  
CODE FOR LOGIN PAGE:  
<?php  
//header.php include('header.php'); include "helper.php";  
?>  
<?php require('mysqli_connect.php');  
if($_SERVER['REQUEST_METHOD'] == 'POST'){  
 
 
require ('login-process.php');  
}  
?>  
<section id='login-form'>  
<div class="row m-0">  
<div class="col-md-6">  
<div class="text-center pb-5">  
<h1 class="login-title text-dark">Login</h1>  
<p class="p-1 m-0 font-ubuntu text-black-50">Login and enjoy additional features</p>  
<span class="font-ubuntu text-black-50">Create a new <a href="register.php">account</a></span>  
</div>  
<div class="d-flex justify-content-center">  
<form action="login.php" method="post" enctype="multipart/form-data" id="log- form">  
<div class="form-row my-4">  
<div class="col">  
<input type="email" required name="email" id="email" class="form- control" placeholder="Email*">  
</div>  
</div>  
<div class="form-row my-4">  
<div class="col">  
<input type="password" required name="password" id="password" class="form-control" placeholder="password*">  
</div>  
</div>  
<div class="submit-btn text-center my-5">  
<button type="submit" class="btn btn-warning rounded-pill text-dark px- 5">Login</button>  
</div>  
</form>  
</div>  
</div>  
 
 
<div class="col-md-6 ">  
<img src= "./assets/OlympicGold.jpg" width="339" height="500" alt="Backgroundimage"  
align="right"  
style="width=100%;height=100%;border-radius:4%;">  
</div>  
</div>  
</section>  
<?php  
//footer.php include("footer.php");  
?>  
<br>  
CODE FOR LOGIN PROCESS PAGE:  
<?php session_start();  
$error = array();  

$email = validate_input_email($_POST['email']); if (empty($email)){  
$error[] = "You forgot to enter your Email";  
}  


$password = validate_input_text($_POST['password']); if (empty($password)){  
$error[] = "You forgot to enter your password";  
}  


if(empty($error)){  
// sql query  
$query = "SELECT userID, firstName, lastName, email, password FROM user WHERE email=?";  
$q = mysqli_stmt_init($con); mysqli_stmt_prepare($q, $query);  
 
 

// bind parameter mysqli_stmt_bind_param($q,'s',$email);  
//execute query mysqli_stmt_execute($q);  

$result = mysqli_stmt_get_result($q);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC); if (!empty($row)){  
// verify password  
if(password_verify($password, $row['password'])){  
$_SESSION["ADMIN"] = "true";  
header("location: UserHome.php"); exit();  
}  
}else{  
print "You are not a member please register!";  
}  


}else{  
echo "Please Fill out email and password to login!";  
}  
<br>  
CODE FOR REGISTER PAGE:  
<?php  
//header.php include('header.php');  
?>  


<?php  
if($_SERVER['REQUEST_METHOD'] == 'POST'){  
require ('register-process.php');  
}  
?>  
 
 
<section id='register'>  
<div class="row m-0">  
<div class="col-md-6">  
<div class="text-center pb-5">  
<h1 class="login-title text-dark">Register</h1>  
<p class="p-1 m-0 font-ubuntu text-black-50">Register and enjoy additional features</p>  
<span class="font-ubuntu text-black-50">I already have <a href="login.php">Login</a></span>  
</div>  


<div class="d-flex justify-content-center">  
<form action="register.php" method="post" enctype="multipart/form-data" id="reg- form">  
<div class="form-row">  
<div class="col">  
<input type="text" value="<?php if(isset($_POST['firstName'])) echo  
$_POST['firstName']; ?>" name="firstName" id="firstName" class="form-control" placeholder="First Name">  
</div>  
<div class="col">  
<input type="text" value="<?php if(isset($_POST['LastName'])) echo  
$_POST['LastName']; ?>" name="LastName" id="LastName" class="form-control" placeholder="Last Name">  
</div>  
</div>  


<div class="form-row my-4">  
<div class="col">  
<input type="email" value="<?php if(isset($_POST['email'])) echo  
$_POST['email']; ?>" required name="email" id="email" class="form-control" placeholder="Email*">  
</div>  
</div>  
 
 
<div class="form-row my-4">  
<div class="col">  
<input type="password" required name="password" id="password" class="form-control" placeholder="password*">  
</div>  
</div>  


<div class="form-row my-4">  
<div class="col">  
<input type="password" required name="confirm_pwd" id="confirm_pwd" class="form-control" placeholder="Confirm Password*">  
<small id="confirm_error" class="text-danger"></small>  
</div>  
</div>  


<div class="form-check form-check-inline">  
<input type="checkbox" name="agreement" class="form-check-input" required>  
<label for="agreement" class="form-check-label font-ubuntu text-black-50">I agree <a href="#">term, conditions, and policy </a>(*) </label>  
</div>  


<div class="submit-btn text-center my-5">  
<button type="submit" class="btn btn-warning rounded-pill text-dark px- 5">Continue</button>  
</div>  



</form>  
</div>  
</div>  
<div class="col-md-6 ">  
<img src= "./assets/Register.jpg" width="339" height="500" alt="Backgroundimage"  
align="right"  
style="width=100%;height=100%;border-radius:4%;">  
 
 
</div>  
</div>  
</section>  
<?php  
//footer.php include("footer.php");  
?>  
<br>  
CODE FOR REGISTER PROCESS PAGE:  
<?php  


require ('helper.php');  
// error variable.  
$error = array();  


$firstName = validate_input_text($_POST['firstName']); if (empty($firstName)){  
$error[] = "You forgot to enter your first Name";  
}  

$lastName = validate_input_text($_POST['LastName']); if (empty($lastName)){  
$error[] = "You forgot to enter your Last Name";  
}  


$email = validate_input_email($_POST['email']); if (empty($email)){  
$error[] = "You forgot to enter your Email";  
}  


$password = validate_input_text($_POST['password']); if (empty($password)){  
$error[] = "You forgot to enter your password";  
}  

$confirm_pwd = validate_input_text($_POST['confirm_pwd']);  
 
 
if (empty($confirm_pwd)){  
$error[] = "You forgot to enter your Confirm Password";  
}  


if(empty($error)){  
// register a new user  
$hashed_pass = password_hash($password, PASSWORD_DEFAULT); require ('mysqli_connect.php');  

// make a query  
$query = "INSERT INTO user(firstName, lastName, email, password) VALUES (?, ?,  
?, ?)";  
// $query .= "VALUES(?, ?, ?, ?)";  


// initialize a statement  
$q = mysqli_stmt_init($con);  


// prepare sql statement mysqli_stmt_prepare($q, $query);  

// bind values  
mysqli_stmt_bind_param($q, 'ssss', $firstName, $lastName, $email, $hashed_pass);  


// execute statement mysqli_stmt_execute($q);  

if(mysqli_stmt_affected_rows($q) == 1){  


// start a new session session_start();  

// create session variable  
$_SESSION['userID'] = mysqli_insert_id($con); header('location: login.php');  
 
 
exit();  


}  
}else{  
print "Error while registration...!";  
}  
<br>  
CODE FOR HOME PAGE:  
<?php  
//header.php include('header.php'); session_start();  
if(!isset($_SESSION['ADMIN'])){  
$_SESSION['ADMIN'] = "false";  
}  
?>  
<nav class="navbar navbar-expand-md navbar-dark bg-dark">  
<a class="navbar-brand" href="#">SEMS</a>  
<?php  
if ($_SESSION['ADMIN'] == "true"){  
echo '<a href="index.php" class="pl-2 ml-auto">Log Out</a>';  
}  
?>  
</nav>  


<section id='UserHome'>  
<div class="row m-0">  
<div class="col-md-6">  
<div class="text-center pb-5">  
<h1 class="login-title text-dark">SEMS Database</h1>  
<p class="p-1 m-0 font-ubuntu text-black-50">Welcome</p>  
<p class="p-1 m-0 font-ubuntu text-black-50">View the database</p>  
<?php  
if($_SESSION["ADMIN"] == "true"){  
echo '<p class="p-1 m-0 font-ubuntu text-black-50">Modify the database</p>';  
}  
 
 
?>  
</div>  
<div class="d-flex justify-content-center">  
<div class="form-row">  
<div class="col">  
<form action="./ViewData.php" enctype="multipart/form-data" id="ViewAthlete">  
<div class="submit-btn text-center my-5">  
<button type="submit" class="btn btn-warning rounded-pill text-dark px-5" name="tablename" value="athlete">  
Athletes  
</button>  
</div>  
</form>  
</div>  
<div class="col">  
<form action="./ViewData.php" enctype="multipart/form-data" id="ViewEvent">  
<div class="submit-btn text-center my-5">  
<button type="submit" class="btn btn-warning rounded-pill text-dark px-5" name="tablename" value="event">  
Events  
</button>  
</div>  
</form>  
</div>  
<div class="col">  
<form action="./ViewData.php" enctype="multipart/form-data" id="ViewResult">  
<div class="submit-btn text-center my-5">  
<button type="submit" class="btn btn-warning rounded-pill text-dark px-5" name="tablename" value="result">  
Results  
</button>  
</div>  
</form>  
 
 
</div>  
<div class="col">  
<form action="./ViewData.php" enctype="multipart/form-data" id="ViewSponsorers">  
<div class="submit-btn text-center my-5">  
<button type="submit" class="btn btn-warning rounded-pill text-dark px-5" name="tablename" value="sponsor">  
Sponsors  
</button>  
</div>  
</form>  
</div>  
<div class="col">  
<form action="./ViewData.php" enctype="multipart/form-data" id="ViewCountry">  
<div class="submit-btn text-center my-5">  
<button type="submit" class="btn btn-warning rounded-pill text-dark px-5" name="tablename" value="country">  
Countries  
</button>  
</div>  
</form>  
</div>  
<div class="col">  
<form action="./ViewData.php" enctype="multipart/form-data" id="ViewRecord">  
<div class="submit-btn text-center my-5">  
<button type="submit" class="btn btn-warning rounded-pill text-dark px-5" name="tablename" value="record">  
Records  
</button>  
</div>  
</form>  
</div>  
</div>  
 
 
</div>  
</div>  
<div class="col-md-6 ">  
<img src= "./assets/HomePage.jpg" width="339" height="500" alt="Backgroundimage"  
align="right"  
style="width=100%;height=100%;border-radius:4%;">  
</div>  
</div>  
</section>  
<?php  
//footer.php include("footer.php");  
?>  
<br>  
CODE FOR VIEW DATA PAGE:  
<!DOCTYPE html>  
<?php  
include('header.php'); session_start(); if(!isset($_SESSION['ADMIN'])){  
$_SESSION['ADMIN'] = "false";  
}  
?>  
<html lang="en">  
<body>  
<?php  
function mysqli_field_name($result, $field_offset)  
{  
$properties = mysqli_fetch_field_direct($result, $field_offset); return is_object($properties) ? $properties->name : null;  
}  
if (isset($_POST['submit']))  
{  
$str=$_POST['drop'];  
$str1 = $_POST['search'];  
 
 
$tablename = strtolower($_POST['submit']);  
$sql = sprintf("select * from %s where %s like '%s'",$tablename, $str, $str1);  
}else{  
$tablename = strtolower($_GET['tablename']);  
$sql = "select * from ".$tablename;  
}  
require ('mysqli_connect.php');  
$result = $con->query($sql);  
?>  
<nav class="navbar navbar-expand-md navbar-dark bg-dark">  
<a class="navbar-brand" href="./UserHome.php">SEMS</a>  
<div class="collapse navbar-collapse" id="navbarSupportedContent">  


<form class="form-inline ml-auto" action="./ViewData.php" method="post">  
<select class="select mr-sm-2" name="drop" required >  
<option disabled selected>Category</option>  
<?php  
if ($result){  
if ($result->num_rows>0){  
//loop thru the field names to print the correct headers  
$i = 0;  
while ($i < mysqli_num_fields($result)){  
$fieldname = mysqli_field_name($result, $i);  
echo sprintf('<option value="%s">%s</option>', $fieldname, str_replace("_", " ", $fieldname));  
$i++;  
}  
}  
}  
?>  
</select>  
<input class="form-control mr-sm-2" required type="text" placeholder="Search" name="search">  
<?php  
 
 
echo sprintf('<button class="btn btn-light my-sm-0" type="submit" name="submit" value="%s">Search</button>',$tablename)  
?>  
</form>  
</div>  
</nav>  
<table class=" customTable table table-striped table-hover table-active align-middle; "  
>  
<?php  
if ($result){  
if ($result->num_rows>0){  
//loop thru the field names to print the correct headers  
$i = 0;  
while ($i < mysqli_num_fields($result)){  
echo "<th>". str_replace("_", " ", mysqli_field_name($result, $i)) ."</th>";  
$i++;  
}  
if($_SESSION["ADMIN"] == "true"){  
echo "<th>". "Update" . "</th>";  
echo "<th>". "Delete" . "</th>";  
}  
echo "</tr>";  
}  
}  
if($result->num_rows>0){  
while ($row=$result->fetch_assoc())  
{  
echo "<tr>";  
foreach ($row as $data)  
{  
echo "<td>". $data . "</td>";  
}  
if($_SESSION["ADMIN"] == "true"){  
 
 
echo sprintf('<td><a href=  
\'UpdateData.php?tablename=%s&tabledata=%s\'>Edit</a></td>', $tablename, urlencode(serialize($row)));  
echo sprintf('<td><a href=  
\'DeleteData.php?tablename=%s&tabledata=%s\'>Delete</a></td>',$tablename, urlencode(serialize($row)));  
}  
echo "</tr>";  
}  
}else{  
echo "<tr><td>No Results found!</td></tr>";  
}  
?>  
</table>  
<?php  
if($tablename == "sponsor"){  
echo '<table class="table table-striped table-hover table-active align-middle; ">  
<tr>  
<th>Money Invested</th>';  
$sql="CALL TSponAmt()";  
$result=$con->query($sql); if($result->num_rows>0){  
while($row=$result->fetch_assoc()){ echo"<th>".$row["SUM(Sponsorship_Amount)"]."</th></tr>";  
}  
}  
else{  
echo "Table is empty";  
}  
echo '</table>';  
}  
?>  
<form action="InsertData.php" enctype="multipart/form-data" >  
<div class="submit-btn text-right my-5">  
<?php  
 
 
if($_SESSION["ADMIN"] == "true"){  
echo sprintf('<button type="submit" class="btn btn-warning rounded-pill text- dark px-5" name="tablename" value="%s">  
New Entry  
</button>', $tablename);  
}  
?>  
</div>  
</form>  
</body>  
</html>  
<br>  
CODE FOR INSERT DATA PAGE:  
<?php  
//header.php include('header.php');  
if($_SERVER['REQUEST_METHOD'] == 'POST'){  
require ('NewAthlete-process.php');  
}else{  
$tablename = $_GET['tablename'];  
$sql = 'describe '.$tablename;  
$con=mysqli_connect("localhost","root","","olympic");  
$result = $con->query($sql);  
}  
?>  


<section id='InsertData'>  
<div class="row m-0">  
<div class="col-md-6">  
<div class="text-center pb-5">  
<?php  
echo '<h1 class="login-title text-dark"> New '.ucfirst($tablename).'</h1>';  
?>  
</div>  

<div class="d-flex justify-content-center" id="NewEntry">  
 
 
<form action="ProcessInsertData.php" method="post" enctype="multipart/form-data" id="InsertData-form">  
<?php  
while($row = $result->fetch_array()) {  
$fieldname = $row['Field'];  
$fieldvalue = "";  
$fieldkey = $row['Key'];  
$type = $row['Type'];  
$m = preg_match('/\w+/', $type, $matches);  
$typename = $matches[0];  
$m = preg_match('/\d+/', $type, $matches); if ($m == 1){  
$typewidth = $matches[0];  
}  
if($fieldkey != "PRI"){  
if($typename == "varchar" or $typename == "char"){  
$inputtype = 'text';  
echo sprintf('<div class="form-row my-4">  
<div class="col">  
<span class="font-ubuntu text-black-50">Enter %s</span>  
<input type="%s" maxlength="%s" value="%s" required name="%s" id="%s" class="form-control" placeholder="%s">  
</div>  
</div>',$fieldname,$inputtype, $typewidth, $fieldvalue, $fieldname,  
$fieldname, $fieldname);  
}  
else if($typename == "int"){  
$inputtype = 'number';  
echo sprintf('<div class="form-row my-4">  
<div class="col">  
<span class="font-ubuntu text-black-50">Enter %s</span>  
<input type="%s" max="%s" min="1" value="%s" required name="%s" id="%s" class="form-control" placeholder="%s">  
</div>  
 
 
</div>',$fieldname, $inputtype, 10**$typewidth-1, $fieldvalue, $fieldname,  
$fieldname, $fieldname);  
}  
else if($typename == "date"){  
$inputtype = "date";  
echo sprintf('<div class="form-row my-4">  
<div class="col">  
<span class="font-ubuntu text-black-50">Enter %s</span>  
<input type="%s" value="%s" required name="%s" id="%s" class="form- control" placeholder="%s">  
</div>  
</div>',$fieldname, $inputtype, $fieldvalue, $fieldname, $fieldname,  
$fieldname);  
}  
}  
}  
echo sprintf('<button type="submit" class="btn btn-warning rounded-pill text-dark px-5" name="tablename" value="%s">  
Submit  
</button>', $tablename);  
?>  
</form>  
</div>  
</div>  
<div class="col-md-6 ">  
<img src= "./assets/NewAthlete.jpg" width="339" height="500" alt="Backgroundimage"  
align="right"  
style="width=100%;height=100%;border-radius:4%;">  
</div>  
</div>  
</section>  
<?php  
//footer.php include("footer.php");  
 
 
?>  
<br>  
CODE FOR UPDATE DATA PAGE:  
<?php  
//header.php include('header.php');  
$tablename = $_GET['tablename'];  
$data = unserialize(urldecode($_GET['tabledata']));  
$sql = 'describe '.$tablename; require ('mysqli_connect.php');  
$result = $con->query($sql);  
?>  


<section id='UpdateData'>  
<div class="row m-0">  
<div class="col-md-6">  
<div class="text-center pb-5">  
<?php  
echo '<h1 class="login-title text-dark">Update '.ucfirst($tablename).'</h1>';  
?>  
</div>  


<div class="d-flex justify-content-center" id="NewEntry">  
<form action="ProcessUpdateData.php" method="post" enctype="multipart/form-data" id="UpdateData-form">  
<?php  
while($row = $result->fetch_array()) {  
$fieldname = $row['Field'];  
$fieldvalue = $data[$fieldname];  
$fieldkey = $row['Key'];  
$type = $row['Type'];  
$m = preg_match('/\w+/', $type, $matches);  
$typename = $matches[0];  
$m = preg_match('/\d+/', $type, $matches); if ($m == 1){  
$typewidth = $matches[0];  
 
 
}  
if($fieldkey != "PRI"){  
$inputmode = "required";  
}else{  
$inputmode = "readonly";  
}  
if($typename == "varchar" or $typename == "char"){  
$inputtype = 'text';  
echo sprintf('<div class="form-row my-4">  
<div class="col">  
<input type="%s" maxlength="%s" value="%s" %s name="%s" id="%s" class="form-control" placeholder="%s">  
</div>  
</div>',$inputtype, $typewidth, $fieldvalue, $inputmode, $fieldname,  
$fieldname, $fieldvalue);  
}  
else if($typename == "int"){  
$inputtype = 'number';  
echo sprintf('<div class="form-row my-4">  
<div class="col">  
<input type="%s" max="%s" min="1" value="%s" %s name="%s" id="%s" class="form-control" placeholder="%s">  
</div>  
</div>',$inputtype, 10**$typewidth, $fieldvalue, $inputmode, $fieldname,  
$fieldname, $fieldvalue);  
}  
else if($typename == "date"){  
$inputtype = "date";  
echo sprintf('<div class="form-row my-4">  
<div class="col">  
<input type="%s" value="%s" required name="%s" id="%s" class="form- control" placeholder="%s">  
</div>  
</div>',$inputtype, $fieldvalue, $fieldname, $fieldname, $fieldvalue);  
}  
 
 
}  
?>  
<div class="submit-btn text-center my-5">  
<?php  
echo sprintf('<button type="submit" class="btn btn-warning rounded-pill text-dark px-5" name="tablename" value="%s">  
Submit  
</button>', $tablename);  
?>  
</div>  
</form>  
</div>  
</div>  
<div class="col-md-6 ">  
<img src= "./assets/NewAthlete.jpg" width="339" height="500" alt="Backgroundimage"  
align="right"  
style="width=100%;height=100%;border-radius:4%;">  
</div>  
</div>  
</section>  
<?php  
//footer.php include("footer.php");  
?>  
<br>  
CODE FOR DELETE DATA PAGE:  
<?php  
//header.php include('header.php');  
$tablename = $_GET['tablename'];  
$data = unserialize(urldecode($_GET['tabledata']));  
$sql = 'describe '.$tablename; require ('mysqli_connect.php');  
$result = $con->query($sql); while($row = $result->fetch_array()){  
 
 
if($row["Key"] == "PRI"){  
$pkfield = $row['Field']; if(strpos($row['Type'], 'char') != false){  
$pkvalue = "'".$data[$pkfield]."'";  
}else{  
$pkvalue = $data[$pkfield];  
}  
break;  
}  
}  
$sql = sprintf("delete from %s where %s=%s", $tablename, $pkfield, $pkvalue); echo $sql;  
if(mysqli_query($con, $sql)){  
echo "<script>alert('Successfully deleted')</script>"; header(sprintf('location: ViewData.php?tablename=%s', $tablename));  
}  
else{  
echo '<script>alert("Error while deleting data...!")</script>';  
}  
?>  
<br>  
CODE FOR INSERT PROCESS PAGE:  
<?php  
require ('helper.php');  
$tablename = $_POST['tablename'];  
// error variable.  
$error = array();  
$sql = "describe ".$tablename; require ('mysqli_connect.php');  
$result = $con->query($sql);  
$csfieldnames = "";  
$csfieldvalues = "";  
while ($row = $result->fetch_array()){ if($row["Key"] != "PRI"){  
$fieldname = $row['Field'];  
$fieldvalue = validate_input_text($_POST[$fieldname]);  
 
 
$fieldtype = $row['Type'];  
$m = preg_match('/\w+/', $fieldtype, $matches);  
$typename = $matches[0]; if (empty($fieldvalue)){  
$error[] = "You forgot to enter ".$fieldname;  
}else{  
$csfieldnames .= $fieldname.", "; if ($typename == "int"){  
$csfieldvalues .= $fieldvalue.", ";  
}else{  
$csfieldvalues .= "'".$fieldvalue."', ";  
}  
}  
}  
}  
if(empty($error)){  
// register a new user  
$csfieldnames = substr($csfieldnames, 0, -2);  
$csfieldvalues = substr($csfieldvalues, 0, -2);  
// make a query  
$sql = sprintf("insert into %s (%s) values(%s)",$tablename, $csfieldnames,  
$csfieldvalues);  
echo $sql; if(mysqli_query($con, $sql)){  
echo "<script>alert('Successfully inserted')</script>"; header(sprintf('location: ViewData.php?tablename=%s', $tablename));  
}  
}else{  
print "Error while inserting data...!";  
}  
?>  
<br>    
CODE FOR UPDATE PROCESS PAGE:  
<?php  
require ('helper.php');  
$tablename = $_POST['tablename'];  
 
 
// error variable.  
$error = array();  
$sql = "describe ".$tablename; require ('mysqli_connect.php');  
$result = $con->query($sql);  
$setclause = "";  
while ($row = $result->fetch_array()){  
$fieldname = $row['Field'];  
$fieldtype = $row['Type']; if($row["Key"] != "PRI"){  
$m = preg_match('/\w+/', $fieldtype, $matches);  
$typename = $matches[0];  
$fieldvalue = validate_input_text($_POST[$fieldname]); if (empty($fieldvalue)){  
$error[] = "You forgot to enter ".$fieldname; break;  
}  
if ($typename == "int"){  
$setclause .= $fieldname."=".$fieldvalue.", ";  
}else{  
$setclause .= $fieldname."="."'".$fieldvalue."', ";  
}  
}else{  
$fieldvalue = $_POST[$fieldname];  
$pkwhereclause = $fieldname."=".$fieldvalue;  
}  
}  
if(empty($error)){  
// register a new user  
$setclause = substr($setclause, 0, -2);  
// make a query  
$sql = sprintf("update %s set %s where %s", $tablename, $setclause,  
$pkwhereclause); echo $sql;  
if(mysqli_query($con, $sql)){    
 
 
echo "<script>alert('Successfully updated')</script>"; header(sprintf('location: ViewData.php?tablename=%s', $tablename));    
}  
}else{  
print "Error while updating data...!";  
}  
?> 
<br>
# SQL TRIGGER:


INSERT AND UPDATE EVENT TRIGGER  
CREATE TRIGGER `InsertEventTrigger` AFTER INSERT ON `event` FOR EACH ROW IF ((SELECT Event_Name FROM record WHERE Event_Name=new.Event_Name) IS NULL) THEN  
INSERT into record (Event_Name, Event_Type) VALUES (new.Event_Name, new.Event_Type);  
END IF  

CREATE TRIGGER `UpdateEventTrigger` AFTER UPDATE ON `event` FOR EACH ROW IF ((SELECT Event_Name FROM record WHERE Event_Name=new.Event_Name) IS NULL) THEN  
INSERT into record (Event_Name, Event_Type) VALUES (new.Event_Name, new.Event_Type);  
END IF  
INSERT AND UPDATE RESULT TRIGGER  
CREATE TRIGGER `InsertResultTrigger` AFTER INSERT ON `result` FOR EACH ROW UPDATE record  
SET Result_Id=new.Result_Id,  
Event_Name=new.Event_Name, Athlete_Id=new.Athlete_Id,  
Record_Time=new.Total_Time  
WHERE Event_Name=new.Event_Name AND  
Event_Type IN ('T','F') AND new.Total_Time < Record_Time  
 
 

CREATE TRIGGER `UpdateResultTrigger` AFTER UPDATE ON `result` FOR EACH ROW UPDATE record  
SET Result_Id=new.Result_Id,  
Event_Name=new.Event_Name, Athlete_Id=new.Athlete_Id,  
Record_Time=new.Total_Time  
WHERE Event_Name=new.Event_Name AND  
Event_Type IN ('T','F') AND new.Total_Time < Record_Time  
<br>
# STORED PROCEDURE:  


TOTAL SPONSORSHIP STORED PROCEDURE:  
CREATE DEFINER=`root`@`localhost` PROCEDURE `TSponAmt` () SELECT SUM(Sponsorship_Amount) FROM sponsor  
<br>
# RESULTS & SCREENSHOTS  
 


## INDEX PAGE:  
![image](https://github.com/agnivon/SEMS/assets/122620788/f342fbea-f67b-4439-80f5-3e3b9ab3b0a5)
This page gives a description of the SEMS and has two buttons one for the administrator to login and the other for the user to just view the contents.  
<br>
## LOGIN PAGE:  
![image](https://github.com/agnivon/SEMS/assets/122620788/04c8a91b-8344-4449-99a4-cc9110029335)  
This Page is the login page for the administrator. Here he/she enters his/her credentials and these credentials are checked against the data stored in the database if it matches, he/she is logged in to the system and allowed to insert, delete and update entries in the database.  

















