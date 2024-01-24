<?php
	include "connect.php";
	
	if($_GET['query']==1)
	{
		$sql="insert into users(username,password,email) value('$_POST[usr]','$_POST[pwd]','$_POST[email]')";
		if(mysqli_query($db,$sql))
		{
			echo "true";
		}
		else
		{
			echo "false";
		};
	}

	
	if($_GET['query']==2)
	{
		$sql="select * from users where username='$_POST[usr]' and password='$_POST[pwd]'";
		$q=mysqli_query($db,$sql);
		
		if(mysqli_num_rows($q)>0)
		{
			$r=mysqli_fetch_assoc($q);
			$_SESSION['idu']=$r['id'];
			echo "true";
		}
		else
		{
			echo "false";
		};
	}

	
	if($_GET['query']==3)
	{
		$sql="select * from admin where username='$_POST[usr]' and password='$_POST[pwd]'";
		$q=mysqli_query($db,$sql);
		
		if(mysqli_num_rows($q)>0)
		{
			$r=mysqli_fetch_assoc($q);
			$_SESSION['ida']=$r['id'];
			echo "true";
		}
		else
		{
			echo "false";
		};
	}


?>