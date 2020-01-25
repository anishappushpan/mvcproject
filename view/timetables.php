<!------------timetable------------->
<?php include("base.php");
?>
<div class="container-fluid bg-style media1">
			
	<div class="row">
					
		<div class="col-md-12 log-style">
	<form name="notices" method="post" class="m-auto py-3 text-light p-3 form-style rounded">	
	
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='day' required="required" placeholder="Day">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='subname' required="required" placeholder="Subject_Name">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='coursename' required="required" placeholder="Course_Name">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='code' required="required" placeholder="Code">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='time' required="required" placeholder="Time">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='adminid' required="required" placeholder="ID">
	<button type="submit" class="btn-primary mt-md-3 px-5 rounded shadow" name="submit">submit</button>
	
						

</form>

<?php 
if(isset($_POST['submit']))
	{
		include '../controller/MyController.php';
		$obj=new MyController();
		$obj->Timetableinsert($_POST['day'],$_POST['subname'],$_POST['coursename'],$_POST['code'],$_POST['time'],$_POST['adminid']);
	}
?>

</div>
</div>
</div>