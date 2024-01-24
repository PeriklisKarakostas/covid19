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
	<form action="" method="post" enctype="multipart/form-data" id="form4">
  <div class="form-group">
    <label for="file1">Data File:</label>
    <input type="file" class="form-control" id="file1" name="file1">
  </div>

  <button type="submit" class="btn btn-default">Submit</button>
</form>
<div id='message'>
  </div>
</div>



<?php
include "down.php";
?>
