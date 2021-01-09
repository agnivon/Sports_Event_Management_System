<?php

require ('helper.php');
// error variable.
$error = array();

$Event_Name = validate_input_text($_POST['Event_Name']);
if (empty($Event_Name)){
    $error[] = "You forgot to enter Event's Name";
}

$Event_Type = validate_input_text($_POST['Event_Type']);
if (empty($Event_Type)){
    $error[] = "You forgot to enter the Event Type";
}

$Venue = validate_input_text($_POST['Venue']);
if (empty($Venue)){
    $error[] = "You forgot to enter the Venue";
}

$Country_Code = validate_input_text($_POST['Country_Code']);
if (empty($Country_Code)){
    $error[] = "You forgot to enter the Country Code";
}

$Event_Date = $_POST['Event_Date'];
if (empty($Event_Date)){
    $error[] = "You forgot to enter the Event_Date";
}

if(empty($error)){
  // register a new user
    require ('mysqli_connect.php');

    // make a query
    $query = "INSERT INTO event (Event_Id, Event_Name,Event_Date,Event_Type,Venue,Country_Code)";
    $query .= "VALUES(' ',? , ?, ?, ?, ?)";

    // initialize a statement
    $q = mysqli_stmt_init($con);

    // prepare sql statement
    mysqli_stmt_prepare($q, $query);

    // bind values
    mysqli_stmt_bind_param($q, 'sssss', $Event_Name,$Event_Date, $Event_Type,$Venue, $Country_Code);

    // execute statement
    mysqli_stmt_execute($q);

    if(mysqli_stmt_affected_rows($q) == 1){

      // start a new session
        session_start();

        // create session variable
        $_SESSION['Event_Id'] = mysqli_insert_id($con);

        header('location: Edit-Event.php');
        exit();

}
}else{
    print "Error while Editting Data...!";
}
