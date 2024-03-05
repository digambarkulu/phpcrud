

<?php 

 include('Dbconn.php');

require_once 'flashmsg.php';


$editID = $_GET['EditID'];

$FtchSinglDataQuery = "SELECT * FROM `emp_tbl` WHERE sqlid = '".$editID."'";
$ExeQry = mysqli_query($conn,$FtchSinglDataQuery);

if($ExeQry){

	// Fetch all the data as an associative array

	$rows = mysqli_fetch_array($ExeQry,MYSQLI_ASSOC);
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Employee record edit</title>
	<!-- Bootstrap5 css link-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
	<style type="text/css">
		.error-message{
			color:red;
		}
	</style>

</head>
<body>

	<div class="container">

		<h1 class="text-center text-dark mt-3"> Employee Data Entry Form</h1>


		<span><?php // displayMessage();?></span>

		<form  id="employeeForm" action="editEmployeeData.php" method="POST" >
			<input type="hidden" name="EmployeesqlID" value="<?php echo $editID;?>">
			<div class="row">
				<div class="col">
					<label for="EmployeeName" class="form-label"><b>Emloyee Name:</b></label>
					<input type="text" name="Empname" class="form-control" id="empName" value="<?php echo $rows['Emp_nm'];?>" placeholder="Employee Name">
					
				</div>
			</div>
			<div class="row">
				<div class="col">
					<label for="EmployeeEmail" class="form-label"><b>Employee Email:</b></label>
					<input type="text" name="empemail" class="form-control" id="empEmail" placeholder="Employee Email" value="<?php echo $rows['Emp_email'];?>">
					
				</div>
				<div class="col">
					<label for="EmployeePhno" class="form-label"><b>Emloyee Phno:</b></label>
					<input type="number" name="empphno" class="form-control" id="empPhno" placeholder="Employee Phno" value="<?php echo $rows['Emp_phno'];?>">
				</div>
			</div>
		  <div class="row">
		  	<div class="col">
			    <label for="EmployeeSalary" class="form-label"><b>Employee Salary:</b></label>
			    <input type="number" name="empsalary" class="form-control" id="employeesalary" placeholder="Employee Salary" value="<?php echo $rows['salary'];?>">
		  	</div>
		  </div>
		  <div class="row">
		  	<div class="col">
			    <label for="EmployeeDesignation" class="form-label"><b>Employee Designation:</b></label>
			    <input type="text" class="form-control" name="empdesgn" id="employeeDesg" placeholder="Employee Designation" value="<?php echo $rows['designation'];?>">
		  	</div>
		  </div>
		  
		  <button type="submit" name="save" class="btn btn-primary mt-3">Submit</button>
		</form>
		<br>
		<span><b><a href="DisplayRecords.php">Display All</a></b></span>
		
	</div>

	

	<!-- Bootstrap5 Bundle Js link -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>