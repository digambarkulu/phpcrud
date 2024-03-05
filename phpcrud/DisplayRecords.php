<?php

 include('Dbconn.php');

 require_once 'flashmsg.php';

?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Employee Record Display</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" > 
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

</head>
<body>

	<div class="container">

		<h1 class="text-center text-dark mt-3"> Employee Details Table</h1>

		<?php 
			$displayQuery = "SELECT * FROM `emp_tbl` ORDER BY sqlid DESC";
			$ExeQry = mysqli_query($conn,$displayQuery);
		?>

		<span><?php displayMessage();?></span>

		<table class="display" id="example"  style="width:100%">
		  <thead>
		    <tr>
		      <th>Sl no.</th>
		      <th>Employee Name</th>
		      <th>Employee Email</th>
		      <th>Employee phno</th>
		      <th>Employee Salary</th>
		      <th>Employee Designation</th>
		      <th>Action</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php 
		  		if (mysqli_num_rows($ExeQry) > 0) {
				    // Output data of each row
				    $i = 0;
				    while($row = mysqli_fetch_assoc($ExeQry)) {
				    	$i++;
		  	?>
		    <tr>
		      <td><?php echo $i;?></td>
		      <td><?php echo $row['Emp_nm'];?></td>
		      <td><?php echo $row['Emp_email'];?></td>
		      <td><?php echo $row['Emp_phno'];?></td>
		      <td><?php echo $row['salary'];?></td>
		      <td><?php echo $row['designation'];?></td>
		      <td>
		      	<a href="EditEmployeePage.php?EditID=<?php echo $row['sqlid'];?>"><button type="button" class="btn btn-outline-primary" onclick="confirm('Are you sure to edit this record ?')">Edit</button></a>
				<a href="deleteEmployee.php?DeleteID=<?php echo $row['sqlid']?>"><button type="button" class="btn btn-outline-secondary" onclick="confirm('Are you sure to delete this record ?')">Delete</button></a>
			  </td>
		    </tr>
		    <?php
		    	}
		    }else{
		    	
		    }
		    ?>
		   
		  </tbody>
		</table>
		<a href="createEmployeeForm.php">Entry Employee record</a>
	</div>


	<!-- Bootstrap5 Bundle Js link -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
	
	<script type="text/javascript">
	    $(document).ready(function() {
	        $('#example').DataTable();
	    });
	</script>
</body>
</html>