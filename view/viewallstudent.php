<!---------doctor field updation-------->

<!doctype html>
<html>
<?php include("superuserbase.php");
?>
<?php session_start();?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> dash board</title>
  <!-- Custom fonts for this template-->
  <link  rel="stylesheet" href="fontawesome/css/all.min.css">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
   <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>
<body id="page-top">
<div>
<div>
<div class="container">
	
		
			<h3 class="text-primary head"><i class="fas fa-user fa-2x" ></i>All Students</h3>
				
					
<table class="border table table-striped bg-table ">
<thead>
	<tr>
	<th>ID</th>
	<th>Name</th>
	<th>DOB</th>
	
	<th>Phoneno.</th>
	<th>Batch</th>
	<th>Username</th>
	<th>Password</th>
	<th>Sem.no</th>
	<th>Year</th>
	</tr>
</thead>	
	<?php 
	
	include '../controller/MyController.php';
	$obj=new MyController();
	$result=$obj->Studentallprofile();
	while($row=mysqli_fetch_assoc($result))
	{
	?>
	
	<tr>
	<form method="post">
		<td ><?php echo $row['id'];?></td>
		<td ><input type="text" value="<?php echo $row['name'];?>" name="name"></td>
		<td ><?php echo $row['dob'];?></td>
		
		<td><?php echo $row['phoneno'];?></td>
		<td><?php echo $row['batch'];?></td>
		<td><?php echo $row['username'];?></td>
		<td><?php echo $row['password'];?></td>
		<td><?php echo $row['semno'];?></td>
		<td><?php echo $row['year'];?></td>
		<td><input type="submit" value="Remove" name="submit"></td>
	</form>
	</tr>
<?php
	}		
?>
</table>
<?php 
if(isset($_POST['submit']))
	{
		#include '../controller/MyController.php';
		$ob=new MyController();
		$ob->Removestudent($_POST['name']);
	
	}


?>
</div>
</div>
</div>
</div>
</body>
</html>