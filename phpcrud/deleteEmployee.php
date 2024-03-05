<?php

include('Dbconn.php');

require_once 'flashmsg.php';

$DeleteID = $_GET['DeleteID'];

$DeleteQry = "DELETE FROM `emp_tbl` WHERE sqlid = '".$DeleteID."'";

$ExeQry = mysqli_query($conn,$DeleteQry);


if($ExeQry == 1){
	setFlashMessage("<font color='success' size='5px'><b>Record Deleted Successfully</b></font>","success");
}else{
	setFlashMessage("<font color='red' size='5px'><b>Data Not Deleted</b></font>","error");
}

header('location:DisplayRecords.php');

?>