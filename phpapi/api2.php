<?php
	include "connect.php";
	
	if($_GET['query']==1)
	{
		
		if(move_uploaded_file($_FILES['file1']['tmp_name'],'../upload/'.$_FILES['file1']['name'])){
			
			$data=file_get_contents('../upload/'.$_FILES['file1']['name']);
			if($jsdata=json_decode($data))
			{
				$flag=1;
			}
			else
			{
				$flag=0;
			}
			
			foreach($jsdata as $rec)
				{ 
					$nm=htmlspecialchars($rec->name, ENT_QUOTES);
					$add=htmlspecialchars($rec->address, ENT_QUOTES);
					
					mysqli_query($db,"delete from poi id='".$rec->id."'");
					
					$sql="INSERT INTO poi (id, name, address, lat, lng, rating, rating_n) VALUES ('".$rec->id."', '".$nm."', '".$add."', 
					'".$rec->coordinates->lat."', '".$rec->coordinates->lng."', 
					'".@$rec->rating."', '".@$rec->rating_n."');";
					
					if(!mysqli_query($db,$sql))
					{
					$flag=0;
					}
					$sql2="INSERT INTO `poi_type` (`id_poi`, `type`) VALUES";
					$comma="";
					foreach($rec->types as $t1)
					{
						$sql2=$sql2.$comma." ('".$rec->id."', '$t1')";
						$comma=",";
					
					}
					mysqli_query($db,$sql2);
					
					$sql3="INSERT INTO `populartimes` (`id_poi`, `day`, `hour`, `percent`) VALUES ";
					$comma="";
					foreach($rec->populartimes as $r2)
					{
						$hour=0;
						foreach($r2->data as $p)
						{
						$sql3=$sql3.$comma."('".$rec->id."', '".$r2->name."', '$hour', '$p')";
						$comma=",";
						
						$hour++;
						}
					}
					mysqli_query($db,$sql3);
				}
		
			
			
			unlink('../upload/'.$_FILES['file1']['name']);
			if($flag==1) echo "true";
			else echo "false";
		}
		else
		{
		echo "false";
		}
		
	}

	
	


?>