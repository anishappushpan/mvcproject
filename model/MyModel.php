<?php 
class MyModel
{
		function insert($name,$dob,$email,$gender,$phoneno,$qualification,$batch,$uname,$pass,$semno,$year)
		{
			include '../config/connection.php';
			$sql="insert into registrations(name,dob,email,gender,phoneno,qualification,batch,username,password,semno,year) values('".$name."','".$dob."','".$email."','".$gender."','".$phoneno."','".$qualification."','".$batch."','".$uname."','".$pass."','".$semno."','".$year."')";
			if(mysqli_query($con,$sql))
			{
				echo "successfully";
			}
		}
	function userlogin($user,$pass)
	{
		include '../config/connection.php';
		$sql="select * from registrations where username='".$user."' and password='".$pass."'";
		$result=mysqli_query($con,$sql);
		
		if (mysqli_num_rows($result)>0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
				session_start();
				$_SESSION['user']=$row['username'];
				$_SESSION['name']=$row['name'];
				$_SESSION['year']=$row['year'];
				header('location:../view/studentbase.php');
				
			
			}
		}
	}
	function updat($firstname,$lastname,$email)
	{
		include '../config/connection.php';
		$sq="update registrations set firstname='".$firstname."',lastname='".$lastname."'where email='".$email."' ";
		if(!$result = $con->query($sq))
		{

			die('there was an error running in the query ['.$con->error.']');		
		}
		else
		{
			echo "successful";
		}
	}
	function insertsub($code,$semester,$year,$creadit,$subjectname,$adminid)
		{
			include '../config/connection.php';
			$sql="insert into subject(code,semester,year,creadit,subjectname,adminid) values('".$code."','".$semester."','".$year."','".$creadit."','".$subjectname."','".$adminid."')";
			if(mysqli_query($con,$sql))
			{
				echo "successfully";
			}
		}
function insertsublist($subname,$coursecode,$adminid)
		{
			include '../config/connection.php';
			$sql="insert into subjectlist(subname,coursecode,adminid) values('".$subname."','".$coursecode."','".$adminid."')";
			if(mysqli_query($con,$sql))
			{
				echo "successfully";
			}
		}
function insertnotice($noticeid,$title,$beginningdate,$author,$endingdate,$description,$adminid)
		{
			include '../config/connection.php';
			
			$sql="insert into noticeadmin(noticeid,title,beginningdate,author,endingdate,description,adminid) values('".$noticeid."','".$title."','".$beginningdate."','".$author."','".$endingdate."','".$description."','".$adminid."')";
			
			if(mysqli_query($con,$sql))
			{
				
				echo "successfully";
			}
		}		
function inserttimetable($day,$subname,$coursename,$code,$time,$adminid)
		{
			include '../config/connection.php';
			
			$sql="insert into timetable(day,subname,coursename,code,time,adminid) values('".$day."','".$subname."','".$coursename."','".$code."','".$time."','".$adminid."')";
			
			if(mysqli_query($con,$sql))
			{
				
				echo " ";
			}
		}
function insertadmin($name,$phoneno,$qualification,$batch,$uname,$pass)
		{
			include '../config/connection.php';
			$sql="insert into registrationadmin(name,phoneno,qualification,batch,username,password) values('".$name."','".$phoneno."','".$qualification."','".$batch."','".$uname."','".$pass."')";
			if(mysqli_query($con,$sql))
			{
				echo "successfully";
			}
		}
function adminlogin($user,$pass)
	{
		include '../config/connection.php';
		$sql="select * from registrationadmin where username='".$user."' and password='".$pass."'";
		$result=mysqli_query($con,$sql);
		
		if (mysqli_num_rows($result)>0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
				session_start();
				$_SESSION['id']=$row['id'];
				header('location:../view/base.php');
			
			}
		}
	}	
function profilestudent($uname)
{
		include '../config/connection.php';
		$sql="select * from registrations where username='".$uname."'";
		$result=mysqli_query($con,$sql);
		return ($result);
}

function insertresult($regno,$indexno,$coursecode,$name,$subname,$result,$credit,$totalcgpa)
		{
			include '../config/connection.php';
			$sql="insert into resultstudent(regno,indexno,coursecode,name,subname,result,credit,totalcgpa) values('".$regno."','".$indexno."','".$coursecode."','".$name."','".$subname."','".$result."','".$credit."','".$totalcgpa."')";
			if(mysqli_query($con,$sql))
			{
				echo "successfully";
			}
		}	
		
		
function studentresultview($name)
{
		include '../config/connection.php';
		$sql="select * from resultstudent where name='".$name."'";
		$result=mysqli_query($con,$sql);
		return ($result);
}	

function studentsubjectview($year)
{
		include '../config/connection.php';
		$sql="select * from subject where year='".$year."'";
		$result=mysqli_query($con,$sql);
		return ($result);
		
}	
	function studentsemview($year)
{
		include '../config/connection.php';
		$sql="select * from registrations where year='".$year."'";
		$result=mysqli_query($con,$sql);
		return ($result);
		
}	
	function adminnoticevi($id)
{
		include '../config/connection.php';
		$sql="select * from noticeadmin where id='".$id."'";
		$result=mysqli_query($con,$sql);
		return ($result);
		
}	
	function studenttimetable()
{
		include '../config/connection.php';
		$sql="select * from timetable";
		$result=mysqli_query($con,$sql);
		return ($result);
		
}	
	
function profileallstudent()
{
		include '../config/connection.php';
		$sql="select * from registrations";
		$result=mysqli_query($con,$sql);
		return ($result);
}
function profilestudenteditview($uname)
{
		include '../config/connection.php';
		$sql="select * from registrations where username='".$uname."'";
		$result=mysqli_query($con,$sql);
		return ($result);
}


function profilestudentupdate($email,$gender,$phone,$pass,$user)
{
	
		include '../config/connection.php';
		$sq="update registrations set email='".$email."',gender='".$gender."',phoneno='".$phone."',password='".$pass."' where username='".$user."' ";
		if(!$result = $con->query($sq))
		{

			die('there was an error running in the query ['.$con->error.']');		
		}
		else
		{
			echo "successful";
		}
}	
function alladmin()
{
		include '../config/connection.php';
		$sql="select * from registrationadmin";
		$result=mysqli_query($con,$sql);
		return ($result);
}
function adminremove($user)
{
	
		include '../config/connection.php';
		$sq="DELETE FROM registrationadmin WHERE username='".$user."' ";
		if(!$result = $con->query($sq))
		{

			die('there was an error running in the query ['.$con->error.']');		
		}
		else
		{
			echo "successful";
		}
}	

function studentremove($name)
{
	
		include '../config/connection.php';
		$sq="DELETE FROM registrations WHERE name='".$name."' ";
		if(!$result = $con->query($sq))
		{

			die('there was an error running in the query ['.$con->error.']');		
		}
		else
		{
			echo "successful";
		}
}	
}

?>