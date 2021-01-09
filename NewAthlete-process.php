<?php

require ('helper.php');
// error variable.
$error = array();

$Athlete_Name = validate_input_text($_POST['Athlete_Name']);
if (empty($Athlete_Name)){
    $error[] = "You forgot to enter Athlete's Name";
}

$Gender = validate_input_text($_POST['Gender']);
if (empty($Gender)){
    $error[] = "You forgot to enter Athlete's Gender";
}

$Country_Code = validate_input_text($_POST['Country_Code']);
if (empty($Country_Code)){
    $error[] = "You forgot to enter the Country Code";
}

$DOB = $_POST['DOB'];
if (empty($DOB)){
    $error[] = "You forgot to enter the DOB";
}

if(empty($error)){
  // register a new user
    require ('mysqli_connect.php');

    // make a query
    $query = "INSERT INTO athlete (Athlete_Name, Gender, DOB, Country_Code)";
    $query .= "VALUES(?, ?, ?, ?)";

    // initialize a statement
    $q = mysqli_stmt_init($con);

    // prepare sql statement
    mysqli_stmt_prepare($q, $query);

    // bind values
    mysqli_stmt_bind_param($q, 'ssss', $Athlete_Name, $Gender,$DOB, $Country_Code);

    // execute statement
    mysqli_stmt_execute($q);

    if(mysqli_stmt_affected_rows($q) == 1){

      // start a new session
        session_start();

        // create session variable
        $_SESSION['Athlete_Id'] = mysqli_insert_id($con);

        header('location: Edit-Athlete.php');
        exit();

}
}else{
    print "Error while Editting Data...!";
}
