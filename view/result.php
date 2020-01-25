<!------------adding result------------->
<?php include("base.php");
?>
<div class="container-fluid bg-style media1">
	<div class="row">
		<div class="col-md-12 log-style">
			<form name="addstudent" method="post" class="m-auto py-3 text-light p-3 form-style rounded">	
				<input type="text" class="form-control inputcomponent mt-md-3 space" name='regno' required="required" placeholder="Register Number">
				<input type="text" class="form-control inputcomponent mt-md-3 space" name='indexno' required="required" placeholder="Index Number">
				<input type="text" class="form-control inputcomponent mt-md-3 space" name='coursecode' required="required" placeholder="Course Code">
				<input type="text" class="form-control inputcomponent mt-md-3 space" name='name' required="required" placeholder="Name">
				<input type="text" class="form-control inputcomponent mt-md-3 space" name='subname' required="required" placeholder="Subject Name">
				<input type="text" class="form-control inputcomponent mt-md-3 space" name='result' required="required" placeholder="Result">
				<input type="text" class="form-control inputcomponent mt-md-3 space" name='credit' required="required" placeholder="Credit">
				<input type="text" class="form-control inputcomponent mt-md-3 space" name='totalcgpa' required="required" placeholder="Total CGPA">	
				<button type="submit" class="btn-primary mt-md-3 px-5 rounded shadow" name="submit">submit</button>
			</form>
<!------------end form------------->
<!------------start function------------->
<?php 
if(isset($_POST['submit']))
	{
		include '../controller/MyController.php';
		$obj=new MyController();
		$obj->Result($_POST['regno'],$_POST['indexno'],$_POST['coursecode'],$_POST['name'],$_POST['subname'],$_POST['result'],$_POST['credit'],$_POST['totalcgpa']);
	
	}
?>
<!------------end function------------->
</div>
</div>
</div>