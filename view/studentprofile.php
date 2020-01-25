<!------------view student profile------------->
<!DOCTYPE html>
<html lang="en">
<head>
<?php 
	session_start();
?>
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


<!-- Page Wrapper -->
<div id="wrapper">
<!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
<div>
	<img src="img/log.svg" class="img-fluid">
</div>
   </a>
<!-- Divider -->
    <hr class="sidebar-divider my-0">
<!-- Nav Item - Dashboard -->
    <li class="nav-item active">
      <a class="nav-link" href="index.php" class="text-center">
        <i class="fas fa-user user-font px-4"></i></a></li>
<!-- Divider -->
	<li class="nav-item">
       <a class="nav-link collapsed" href="#" >
        <i class="fas fa-user-graduate"></i>
          <span>Department</span>
        </a>
<!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
       <a class="nav-link collapsed" href="viewresult.php" >
          <i class="fas fa-chalkboard-teacher"></i>
          <span>Result Preview</span>
        </a>
		</li>
	<li class="nav-item">
        <a class="nav-link collapsed" href="#" >
          <i class="fas fa-chalkboard-teacher"></i>
          <span>Subjects</span>
        </a>
	</li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" >
          <i class="fas fa-chalkboard-teacher"></i>
          <span>Current sem</span>
        </a>
	</li>
<!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
	  </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
		<div class="container-fliud">
        <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow bg-gradient-primary">
		<!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle  bg-light">
            <i class="fa fa-bars"></i>
          </button>
		 <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto pr-5 p-hide">

            <!-- Nav Item - Alerts -->
            <li class="nav-item ">
              <a class="nav-link " href="studentbase.php">
                <i class="fas fa-home"><p> Home</p></i>
              </a>
              
            </li>
			<li class="nav-item">
              <a class="nav-link " href="studentprofile.php"  >
                <i class="fas fa-user "><p> Myprofile</p></i>
              </a>
            <li class="nav-item">
              <a class="nav-link " href="firstpage.php" >
                <i class="fas fa-sign-out-alt  text-gray"><p>LogOut</p></i>
              </a>
            </li>

          </ul>
		  </nav>
		</div>
</div> 
<!------------session start---------------->
<section >
				<div class="container">
					<div class="row border ">
						<div class="col-md-6">
							<h3 class="text-primary head"><i class="fas fa-user fa-2x" ></i>MY PROFILE</h3>
							<div class="d-flex">
								<div class="col-md-3">
									<p class="border text-info text-center border-info">Basic Info</p>
								</div>
							</div>
						</div>
						<div class="col-md-6 text-right">
							
							
						</div>
						
					
					<div class="col-md-12">
						<table class="border table table-striped bg-table">
							<tr>
							<th>Emp-id: ORY-k-1234</th>
							<th class="text-right"><a href="updatesstudentprofile.php"></i></button></a>
							<th class="text-right"><a href="updatesstudentprofile.php"><button   class="btn btn-primary text-white px-4">Edit<i class="fas  fa-edit"></i></button></a>
							</th>
							</tr>
<?php 
	
	include '../controller/MyController.php';
	$obj=new MyController();
	$result=$obj->Studentprofile($_SESSION['user']);
	while($row=mysqli_fetch_assoc($result))
	{
	?>
		
							
							<tr>
							<td class="font-weight-bolder">ID</td>
							<td><?php echo $row['id'];?></td>
							</tr>
							
							<tr>
							<td class="font-weight-bolder">NAME</td>
							<td><?php echo $row['name'];?></td>
							</tr>
							
							<tr>
							<td class="font-weight-bolder">DATE OF BIRTH</td>
							<td><?php echo $row['dob'];?></td>
							</tr>
							
							<tr>
							<td class="font-weight-bolder">EMAIL</td>
							<td><?php echo $row['email'];?></td>
							</tr>
							
							<tr>
							<td class="font-weight-bolder">GENDER</td>
							<td><?php echo $row['gender'];?></td>
							</tr>
							
							<tr>
							<td class="font-weight-bolder">PHONE NUMBER</td>
							<td><?php echo $row['phoneno'];?></td>
							</tr>
							
							<tr>
							<td class="font-weight-bolder">QUALIFICATION</td>
							<td><?php echo $row['qualification'];?></td>
							</tr>
							
							<tr>
							<td class="font-weight-bolder">BATCH</td>
							<td><?php echo $row['batch'];?></td>
							</tr>
							
							<tr>
							<td class="font-weight-bolder">USERNAME</td>
							<td><?php echo $row['username'];?></td>
							</tr>
							
							<tr>
							<td class="font-weight-bolder">PASSWORD</td>
							<td><?php echo $row['password'];?></td>
							</tr>
							
						</table>
					</div>
				</div>
			</section>
		
	<?php
	}		
?>		
 

 <!-- Footer -->
      <footer class="">
          <div class="copyright text-center bg-gradient-primary py-2 text-light">
            <span>Copyright &copy; Orisys Academy 2019-2020</span>
        </div>
      </footer>
      <!-- End of Footer -->
</div>
    </div>
    <!-- End of Content Wrapper -->


  <!-- Bootstrap core JavaScript-->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="css/proper.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.js"></script>
</body>

</html>