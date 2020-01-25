<!---------admin adding page----------->
<!---------starting form----------->
<?php include("superuserbase.php");
?>

	<div class="container-fluid bg-style media1">		
	<div class="row">
					
	<div class="col-md-12 log-style">
	<form name="addstudent" method="post" class="m-auto py-3 text-light  form-style rounded">	
	
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='name' required="required" placeholder="Admin_name">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='phoneno' required="required" placeholder="mobile number">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='qualification' required="required" placeholder="qualification">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='batch' required="required" placeholder="department">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='username' required="required" placeholder="username">	
	<input type="password" class="form-control inputcomponent mt-md-3 space" name='password' required="required" placeholder="password">	
	<button type="submit" class="btn-primary mt-md-3 px-5 rounded shadow" name="submit">submit</button>
	</form>
<!-------ending forms----------->
<!-----------starting function-------->
<?php 
if(isset($_POST['submit']))
	{
		include '../controller/MyController.php';
		$obj=new MyController();
		$obj->SaveDataadmin($_POST['name'],$_POST['phoneno'],$_POST['qualification'],$_POST['batch'],$_POST['username'],$_POST['password']);
	
	}
?>
<!----------ending function------------>
</div>
</div>
</div>