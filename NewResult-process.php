<?php

require ('helper.php');
// error variable.
$error = array();

$Event_Id = validate_input_text($_POST['Event_Id']);
if (empty($Event_Id)){
    $error[] = "You forgot to enter Result's Name";
}
$Event_Name = validate_input_text($_POST['Event_Name']);
if (empty($Event_Name)){
    $error[] = "You forgot to enter Event's Name";
}

$Athlete_Id = validate_input_text($_POST['Athlete_Id']);
if (empty($Athlete_Id)){
    $error[] = "You forgot to enter Result's Athlete_Id";
}

$Medal_Type = validate_input_text($_POST['Medal_Type']);
if (empty($Medal_Type)){
    $error[] = "You forgot to enter the Country Code";
}

$Total_Time = validate_input_text($_POST['Total_Time']);
if (empty($Total_Time)){
    $error[] = "You forgot to enter the Country Code";
}

if(empty($error)){
  // register a new user
    require ('mysqli_connect.php');

    // make a query
    $query = "INSERT INTO result (Result_Id, Event_Id,Event_Name,Athlete_Id,Medal_Type, Total_Time)";
    $query .= "VALUES(' ', ?, ?, ?, ?,?)";

    // initialize a statement
    $q = mysqli_stmt_init($con);

    // prepare sql statement
    mysqli_stmt_prepare($q, $query);

    // bind values
    mysqli_stmt_bind_param($q, 'sssss', $Event_Id,$Event_Name, $Athlete_Id,$Medal_Type, $Total_Time);

    // execute statement
    mysqli_stmt_execute($q);

    if(mysqli_stmt_affected_rows($q) == 1){

      // start a new session
        session_start();

        // create session variable
        $_SESSION['Result_Id'] = mysqli_insert_id($con);

        header('location: Edit-Result.php');
        exit();

}
}else{
    print "Error while Editting Data...!";
}
