<?php
session_start();
if(@$_SESSION['idu']=="")
{
	echo "Error connection!";
	die();
}
$menu=2;
include "up.php";
?>
<script>
var page=0;
</script>
<div class=row>
<div class='col-md-12'>
Select type: <select id=category>

</select>
	<div id=map></div>
	
</div>
</div>

<script
      src="https://maps.googleapis.com/maps/api/js?callback=initMap&v=weekly"
      async
    ></script>
	<script>
	alltypes();
	</script>
<?php
include "down.php";
?>
