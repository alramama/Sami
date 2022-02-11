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
$NAME = mysqli_real_escape_string($link, $_REQUEST['NAME']);
$Eqama_no = mysqli_real_escape_string($link, $_REQUEST['Eqama_no']);
$Eqama_Expire_date = mysqli_real_escape_string($link, $_REQUEST['Eqama_Expire_date']);
$Birthday = mysqli_real_escape_string($link, $_REQUEST['Birthday']);
$Blood_Group = mysqli_real_escape_string($link, $_REQUEST['Blood_Group']);
$job_title_Iqama = mysqli_real_escape_string($link, $_REQUEST['job_title_Iqama']);
$job_title_office = mysqli_real_escape_string($link, $_REQUEST['job_title_office']);
$job_title_Iqama = mysqli_real_escape_string($link, $_REQUEST['Mob']);
$Mob = mysqli_real_escape_string($link, $_REQUEST['job_title_Iqama']);
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
$sql = "INSERT INTO NPS_Employee (NAME, Eqama_no,Eqama_Expire_date, Birthday, Blood_Group,job_title_Iqama,job_title_office,Mob) VALUES ('$NAME', '$Eqama_no','$Eqama_Expire_date','$Birthday','$Blood_Group','$job_title_Iqama','$job_title_office','$Mob')";
if(mysqli_query($link, $sql)){
    header("location: index_SEC_id.php");
    exit();
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
