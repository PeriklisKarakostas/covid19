<?php
	include "connect.php";
	
	if($_GET['query']==1)
	{
		
		$sql="select * from poi";
		$q=mysqli_query($db,$sql);
		$J=[];
		while($r=mysqli_fetch_assoc($q))
		{
			$J[]=$r;
		
		}
		echo json_encode($J);
		
	}

	
	
	if($_GET['query']==2)
	{
	$sql="select distinct type from poi_type";
		$q=mysqli_query($db,$sql);
		$J=[];
		while($r=mysqli_fetch_assoc($q))
		{
			$J[]=$r;
		
		}
		echo json_encode($J);
	
	}
	
	
	if($_GET['query']==3)
	{
		
		$sql="select * from poi, poi_type where poi_type.id_poi=poi.id and poi_type.type like '%$_GET[tp]%'";
		$q=mysqli_query($db,$sql);
		$J=[];
		while($r=mysqli_fetch_assoc($q))
		{
			$J[]=$r;
		
		}
		echo json_encode($J);
		
	}


?>