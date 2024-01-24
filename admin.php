<?php
session_start();
if(@$_SESSION['ida']=="")
{
	echo "Error connection!";
	die();
}
$menu=3;
include "up.php";
?>
<script>
var page=0;
</script>
<div class=row>
<div class='col-md-2'></div>
<div class='col-md-8'>
	You are administrator
</div>


<?php
include "down.php";
?>
