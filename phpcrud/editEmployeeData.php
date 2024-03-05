<?php

 include('Dbconn.php');

 require_once 'flashmsg.php';

 if(isset($_POST['save'])){

 	$EmployeeId = $_POST['EmployeesqlID'];
 	$Empname = $_POST['Empname'];
	$empemail = $_POST['empemail'];
	$empphno = $_POST['empphno'];
	$empsalary = $_POST['empsalary'];
	$empdesgn = $_POST['empdesgn'];

	$UpdtQry = "UPDATE `emp_tbl` SET `Emp_nm` = '".$Empname."',`Emp_email` = '".$empemail."',`Emp_phno` = '".$empphno."',`salary` = '".$empsalary."',`designation` = '".$empdesgn."' WHERE sqlid = '".$EmployeeId."'";
	$ExeQry = mysqli_query($conn,$UpdtQry);

	if($ExeQry == 1){
		setFlashMessage("<font color='success' size='5px'><b>Record Edited Successfully</b></font>","success");
	}else{
		setFlashMessage("<font color='red' size='5px'><b>Data Not Edited</b></font>","error");
	}

	header('location:DisplayRecords.php');

 }

?>