<!---------view and remove field for admin-------->

<!doctype html>
<html>
<?php include("superuserbase.php");
?>
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
	
		
			<h3 class="text-primary head"><i class="fas fa-user fa-2x" ></i>All Admin</h3>
				
					
<table class="border table table-striped bg-table ">
<thead>
	<tr>
	<th>ID</th>
	<th>Name</th>
	<th>PhoneNumber</th>
	<th>Qualification</th>
	<th>Batch</th>
	<th>Username</th>
	<th>Password</th>
	
	</tr>
</thead>	
	<?php 
	session_start();
	include '../controller/MyController.php';
	$obj=new MyController();
	$result=$obj->Adminall();
	while($row=mysqli_fetch_assoc($result))
	{
	?>
	
	<tr>
	<form method="post">
		<td ><?php echo $row['id'];?></td>
		<td ><?php echo $row['name'];?></td>
		<td ><?php echo $row['phoneno'];?></td>
		<td><?php echo $row['qualification'];?></td>
		<td><?php echo $row['batch'];?></td>
		<td><input type="text" value="<?php echo $row['username'];?>" name="username"></td>
		<td><?php echo $row['password'];?></td>
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
		$ob->Removeadmin($_POST['username']);
	
	}


?>


</div>
</div>
</div>
</div>
</body>
</html>