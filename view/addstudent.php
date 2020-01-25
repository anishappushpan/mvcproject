<!-----------add student page---------->
<!doctype html>
<html>
<head>
</head>
<body>
<?php include("base.php");
?>
<!----------starting form---------->
<div class="container-fluid bg-style media1">
			
	<div class="row">
					
	<div class="col-md-12 log-style">
	<form method="post" class="m-auto py-3 text-light p-3 form-style rounded" onsubmit="return validate_form()" name="myform"role="form">	
	
	<input type="text" class="form-control inputcomponent mt-md-3 space" name="name"  placeholder="Student_name">
	<input type="date" class="form-control inputcomponent mt-md-3 space" name="dob" placeholder="Date of Birth"  required="required">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name="email" placeholder="E-mail">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name="gender" required="required" placeholder="Gender">
	<input type="text" class="form-control inputcomponent mt-md-3 space" id="phoneno" name="phoneno" required="required" placeholder="mobile number">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name="qualification" required="required" placeholder="qualification">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name="batch" placeholder="batch">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name="username" required="required" placeholder="username">	
	<input type="password" class="form-control inputcomponent mt-md-3 space" id="password" name="password" placeholder="password">	
	<input type="text" class="form-control inputcomponent mt-md-3 space" name="semno" required="required" placeholder="Semester Number">	
	<input type="date" class="form-control inputcomponent mt-md-3 space" name="year" placeholder="Year">	
	<input type="submit" class="btn-primary mt-md-3 px-5 rounded shadow" name="submit" value="Submit">
								
	

</form>
<!-----------ending form------------------->
<!-----------starting function------------------->
<?php 
if(isset($_POST['submit']))
	{
		include '../controller/MyController.php';
		$obj=new MyController();
		$obj->SaveData($_POST['name'],$_POST['dob'],$_POST['email'],$_POST['gender'],$_POST['phoneno'],$_POST['qualification'],$_POST['batch'],$_POST['username'],$_POST['password'],$_POST['semno'],$_POST['year']);
	
	}
	
?>
<!----------------ending function---------->
</div>
</div>
</div>
<!------------start validation------------->
<script>
	
function validate_form()
{
	var str=document.forms["myform"]["password"].value;
	var ph=document.forms["myform"]["phoneno"].value;
	if(str.length<6)
	{

			alert("password is too short");
			return false;
	}
	else if(ph.length!=10)
	{

			alert("invalid phone no");
			return false;
	}
	else
	{
		return true;
	}
}
</script>
<!------------end validation------------->
</body>
</html>