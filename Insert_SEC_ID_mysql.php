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
$Name = mysqli_real_escape_string($link, $_REQUEST['Name']);
$Company = mysqli_real_escape_string($link, $_REQUEST['Company']);
$Expire_date = mysqli_real_escape_string($link, $_REQUEST['Expire_date']);
$Eqama_no = mysqli_real_escape_string($link, $_REQUEST['Eqama_no']);
$ID_No = mysqli_real_escape_string($link, $_REQUEST['ID_No']);
$Contract_no = mysqli_real_escape_string($link, $_REQUEST['Contract_no']);
if (isset($_POST["submit"]))
{
    $pname = rand(10000,10000)."-".$_FILES["file"]["name"];
    $tname = $_FILES["files"]["tmp_name"];
    $uploads_dir = '/images';
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);
    if (mysqli_query($conn, $sql)) 
    {
        header("location: index.php");
        exit();

    }
    else 
    {
        echo "Error";
    }
}

// Attempt insert query execution
$sql = "INSERT INTO SEC_ID (Name, Company,Expire_date, Eqama_no, ID_No,Contract_no) VALUES ('$Name', '$Company','$Expire_date','$Eqama_no','$ID_No','$Contract_no')";
if(mysqli_query($link, $sql)){
    header("location: index_SEC_id.php");
    exit();
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
