<?php require_once 'flashmsg.php';?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Employee Record Store</title>
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


		<span><?php displayMessage();?></span>

		<form  id="employeeForm" action="EmployeeDataInsert.php" method="POST" onsubmit="return validateForm()">
			<div class="row">
				<div class="col">
					<label for="EmployeeName" class="form-label"><b>Emloyee Name:</b></label>
					<input type="text" name="Empname" class="form-control" id="empName" placeholder="Employee Name">
					<div id="empNameError" class="error-message"></div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<label for="exampleInputEmail1" class="form-label"><b>Employee Email:</b></label>
					<input type="text" name="empemail" class="form-control" id="empEmail" placeholder="Employee Email">
					<div id="empEmailError" class="error-message"></div>
				</div>
				<div class="col">
					<label for="exampleInputPhno" class="form-label"><b>Emloyee Phno:</b></label>
					<input type="number" name="empphno" class="form-control" id="empPhno" placeholder="Employee Phno">
					<div id="empPhoneError" class="error-message"></div>
				</div>
			</div>
		  <div class="row">
		  	<div class="col">
			    <label for="EmployeeSalary" class="form-label"><b>Employee Salary:</b></label>
			    <input type="number" name="empsalary" class="form-control" id="employeesalary" placeholder="Employee Salary" >
			    <div id="employeesalaryError" class="error-message"></div>
		  	</div>
		  </div>
		  <div class="row">
		  	<div class="col">
			    <label for="EmployeeDesignation" class="form-label"><b>Employee Designation:</b></label>
			    <input type="text" class="form-control" name="empdesgn" id="employeeDesg" placeholder="Employee Designation">
			    <div id="employeeDesgError" class="error-message"></div>
		  	</div>
		  </div>
		  
		  <button type="submit" name="save" class="btn btn-primary mt-3">Submit</button>
		</form>
		<br>
		<span><b><a href="DisplayRecords.php">Display All</a></b></span>
		
	</div>

	<script type="text/javascript">
		function validateForm()
		{


			let isValid = true;

			// Validation for employee name
			const empName = document.getElementById('empName').value;
			if(empName.trim() === ''){
				displayError('empNameError','Please Enter Employee Name');
				isValid = false;
			}else{
				clearMessage('empNameError');
			}

			// Validation for employee Email
			const empEmail = document.getElementById('empEmail').value;
			if(empEmail.trim() === ''){
				displayError('empEmailError','Please Enter Employee Email');
				isValid = false;
			}else{
				clearMessage('empEmailError');
			}

			// Validation for employee Phno

			const empPhno = document.getElementById('empPhno').value;
			if(empPhno.trim() === ''){
				displayError('empPhoneError','Please enter employee phno');
				isValid = false;
			}else{
				clearMessage('empPhoneError');
			}

			// Validation for employee salary

			const employeesalary = document.getElementById('employeesalary').value;
			if(employeesalary.trim() === ''){
				displayError('employeesalaryError','Please enter employee salary');
				isValid = false;
			}else{
				clearMessage('employeesalaryError');
			}

			// Validation for employee designation

			const employeedesg = document.getElementById('employeeDesg').value;
			if(employeedesg.trim() === ''){
				displayError('employeeDesgError','Please enter employee DEsignation details.');
				isValid = false;
			}else{
				clearMessage('employeeDesgError');
			}

			return isValid;
		}

		function displayError(id, message) {
	        const errorElement = document.getElementById(id);
	        errorElement.innerText = message;
	    }

	    function clearMessage(id){
	    	const errorElement = document.getElementById(id);
	    	errorElement.innerText = '';
	    }
	</script>

	<!-- Bootstrap5 Bundle Js link -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>