<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'id18369801_root');
define('DB_PASSWORD', '10Mu32r4****');
define('DB_NAME', 'id18369801_naizak');
 
/* Attempt to connect to MySQL database */
$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
//check if form is submitted
if (isset($_POST['submit']))
{
    $filename = $_FILES['file1']['name'];
    
    //upload file
    if($filename != '')
    {
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $allowed = ['pdf', 'txt', 'doc', 'docx', 'png', 'jpg', 'jpeg',  'gif'];
        
        //check if file type is valid
        if (in_array($ext, $allowed))
        {
            
            // get last record id
            $sql = 'select max(id) as id from tbl_files';
            $result = mysqli_query($con, $sql);
            if (count($result) > 0)
            {
                $row = mysqli_fetch_array($result);
                $filename = ($row['id']+1) . '-' . $filename;
            }
            else
                
                
                $filename = '1' . '-' . $filename;
                
                //set target directory
                $path = 'uploads/';
                
                $Bid_name = mysqli_real_escape_string($link, $_REQUEST['Bid_name']);
                $Bid_No = mysqli_real_escape_string($link, $_REQUEST['NAME']);
                $Reference_number = mysqli_real_escape_string($link, $_REQUEST['Reference_number']);
                $Duration_of_contract = mysqli_real_escape_string($link, $_REQUEST['Duration_of_contract']);
                $End_user = mysqli_real_escape_string($link, $_REQUEST['End_user']);
                $Last_date_inquiries = mysqli_real_escape_string($link, $_REQUEST['Last date_inquiries']);
                $Deadline = mysqli_real_escape_string($link, $_REQUEST['Deadline']);
                $Bid_opening_date = mysqli_real_escape_string($link, $_REQUEST['Bid_opening_date']);
                $Expected_award_Date = mysqli_real_escape_string($link, $_REQUEST['Expected_award_Date']);
                $created = mysqli_real_escape_string($link, $_REQUEST['created']);
          
          
                move_uploaded_file($_FILES['file1']['tmp_name'],($path . $filename));
                
                // insert file details into database
                $sql = "INSERT INTO Rami_bid(Bid_name,Bid_No,Reference_number,Duration_of_contract,End_user,Last_date_inquiries,Deadline,Bid_opening_date,Expected_award_Date,filename,created) VALUES('$Bid_name','$Bid_No','$Reference_number','$Duration_of_contract','$Duration_of_contract','$End_user','$Last_date_inquiries','$Deadline','$Bid_opening_date','$Bid_opening_date','$Expected_award_Date' ,'$filename','$created')";
                mysqli_query($con, $sql);
                header("Location: index.php?st=success");
        }
        else
        {
            header("Location: index.php?st=error");
        }
    }
    else
        header("Location: index.php");
}
?>
