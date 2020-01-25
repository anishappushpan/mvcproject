<!------------add notice------------->
<?php include("superuserbase.php");
?>
<div class="container-fluid bg-style media1">
	<div class="row">
		<div class="col-md-12 log-style">
		<!------------start form------------->
	<form name="notices" method="post" class="m-auto py-3 text-light p-3 form-style rounded">	
	
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='noticeid' required="required" placeholder="Notice_ID">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='title' required="required" placeholder="Title">
	<input type="date" class="form-control inputcomponent mt-md-3 space" name='beginningdate' required="required" placeholder="Beginning_Date">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='author' required="required" placeholder="Author">
	<input type="date" class="form-control inputcomponent mt-md-3 space" name='endingdate' required="required" placeholder="Ending_Date">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='description' required="required" placeholder="Description">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='adminid' required="required" placeholder="ID">
	<button type="submit" class="btn-primary mt-md-3 px-5 rounded shadow" name="submit">submit</button>
	</form>
<!------------end form------------->
<!------------start function------------->
<?php 
if(isset($_POST['submit']))
	{
		include '../controller/MyController.php';
		$obj=new MyController();
		$obj->Noticeinsert($_POST['noticeid'],$_POST['title'],$_POST['beginningdate'],$_POST['author'],$_POST['endingdate'],$_POST['description'],$_POST['adminid']);
	}
?>
<!------------end function------------->
</div>
</div>
</div>