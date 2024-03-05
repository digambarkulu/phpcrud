<?php

 include('Dbconn.php');

 require_once 'flashmsg.php';

// Let's check for Form is set or not

if(isset($_POST['save'])){

	$Empname = $_POST['Empname'];
	$empemail = $_POST['empemail'];
	$empphno = $_POST['empphno'];
	$empsalary = $_POST['empsalary'];
	$empdesgn = $_POST['empdesgn'];

	// Write Query For Insert Record to the database

	$QueryInsrt = "INSERT INTO emp_tbl (Emp_nm,Emp_email,Emp_phno,salary,designation) VALUES ('".$Empname."','".$empemail."','".$empphno."','".$empsalary."','".$empdesgn."')";
	$ExeQry = mysqli_query($conn,$QueryInsrt);

	

	if($ExeQry == 1){
		setFlashMessage("<font color='success' size='5px'><b>Record Submitted Successfully</b></font>","success");
	}else{
		setFlashMessage("<font color='red' size='5px'><b>Error Submitting Record</b></font>","error");
	}

	header('location:createEmployeeForm.php');
}

?>