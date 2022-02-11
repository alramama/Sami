<?php

/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'id18369801_root');
define('DB_PASSWORD', '10Mu32r4****');
define('DB_NAME', 'id18369801_naizak');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$Date = mysqli_real_escape_string($link, $_REQUEST['Date']);
$Name = mysqli_real_escape_string($link, $_REQUEST['Name']);
$Department = mysqli_real_escape_string($link, $_REQUEST['Department']);
$Project_Name = mysqli_real_escape_string($link, $_REQUEST['Project_Name']);
$Location = mysqli_real_escape_string($link, $_REQUEST['Location']);
$AX_Project = mysqli_real_escape_string($link, $_REQUEST['AX_Project']);
$Total_Expenses = mysqli_real_escape_string($link, $_REQUEST['Total_Expenses']);
// Attempt insert query execution
$sql = "INSERT INTO EXPENSE_CLAIM (Date, Name, Department, Project_Name, Location, AX_Project, Total_Expenses) VALUES ('$Date', '$Name','$Department','$Project_Name','$Location','$AX_Project','$Total_Expenses')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
