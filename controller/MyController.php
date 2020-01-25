<?php

class MyController
{
	function LoginAct()
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
			if($username=='super' && $password=='super123')
				{
					header('location:../view/superuserbase.php');
				}
			else
			{
				echo 'failed';
			}	
	}
	function Loadfirst()
		{
			header('location:view/firstpage.php');
			
		}

function SaveData($name,$dob,$email,$gender,$phoneno,$qualification,$batch,$username,$password,$semno,$year)
	{
		include '../model/MyModel.php';
		$mod=new MyModel();
		$mod->insert($name,$dob,$email,$gender,$phoneno,$qualification,$batch,$username,$password,$semno,$year);
	}
function LoginUser($user,$pass)	
{
	include '../model/MyModel.php';
	$mod=new MyModel();
	$mod->userlogin($user,$pass);
}
function Loginadmin($user,$pass)	
{
	include '../model/MyModel.php';
	$mod=new MyModel();
	$mod->adminlogin($user,$pass);
}


//function UpDates($first,$last,$email)
//{//
		//include '../model/MyModel.php';
		//$mod=new MyModel();
		//$mod->updat($first,$last,$email);
//
function Subinsert($code,$semester,$year,$creadit,$subjectname,$adminid)
	{
		include '../model/MyModel.php';
		$mod=new MyModel();
		$mod->insertsub($code,$semester,$year,$creadit,$subjectname,$adminid);
	}
function Sublistinsert($subname,$coursecode,$adminid)
	{
		include '../model/MyModel.php';
		$mod=new MyModel();
		$mod->insertsublist($subname,$coursecode,$adminid);
	}
function Noticeinsert($noticeid,$title,$beginningdate,$author,$endingdate,$description,$adminid)
	{
		include '../model/MyModel.php';
		$mod=new MyModel();
		$mod->insertnotice($noticeid,$title,$beginningdate,$author,$endingdate,$description,$adminid);
	}
function Timetableinsert($day,$subname,$coursename,$code,$time,$adminid)
	{
		include '../model/MyModel.php';
		$mod=new MyModel();
		$mod->inserttimetable($day,$subname,$coursename,$code,$time,$adminid);
	}	
function SaveDataadmin($name,$phoneno,$qualification,$batch,$username,$password)
	{
		include '../model/MyModel.php';
		$mod=new MyModel();
		$mod->insertadmin($name,$phoneno,$qualification,$batch,$username,$password);
	}
function Studentprofile($username)
{
	include '../model/MyModel.php';
	$mod=new MyModel();
	$result=$mod->profilestudent($username);
	return ($result);
}
function Result($regno,$indexno,$coursecode,$name,$subname,$result,$credit,$totalcgpa)
	{
		include '../model/MyModel.php';
		$mod=new MyModel();
		$mod->insertresult($regno,$indexno,$coursecode,$name,$subname,$result,$credit,$totalcgpa);
	}

function Studentresult($name)
{
	include '../model/MyModel.php';
	$mod=new MyModel();
	$result=$mod->studentresultview($name);
	return ($result);
}	

function Studentsubject($year)
{
	include '../model/MyModel.php';
	$mod=new MyModel();
	$result=$mod->studentsubjectview($year);
	return ($result);
}	
function Studentsem($year)
{
	include '../model/MyModel.php';
	$mod=new MyModel();
	$result=$mod->studentsemview($year);
	return ($result);
}
function Adminnoticeview($id)
{
	include '../model/MyModel.php';
	$mod=new MyModel();
	$result=$mod->adminnoticevi($id);
	return ($result);
}

function Studenttime()
{
	include '../model/MyModel.php';
	$mod=new MyModel();
	$result=$mod->studenttimetable();
	return ($result);
}

function Studentallprofile()
{
	include '../model/MyModel.php';
	$mod=new MyModel();
	$result=$mod->profileallstudent();
	return ($result);
}
function Studentprofileviewedit($username)
{
	include '../model/MyModel.php';
	$mod=new MyModel();
	$result=$mod->profilestudenteditview($username);
	return ($result);
}
function UpDates($email,$gender,$phoneno,$password,$user)
{
		
		#include '../model/MyModel.php';
		$md=new MyModel();
		$md->profilestudentupdate($email,$gender,$phoneno,$password,$user);
}
function Adminall()
{
	include '../model/MyModel.php';
	$mod=new MyModel();
	$result=$mod->alladmin();
	return ($result);
}
function Removeadmin($user)
{
		
		#include '../model/MyModel.php';
		$md=new MyModel();
		$md->adminremove($user);
}
function Removestudent($name)
{
		
		#include '../model/MyModel.php';
		$md=new MyModel();
		$md->studentremove($name);
}
}
?>
