<?php
$menu=1;
include "up.php";
?>
<script>
var page=2;
</script>
<div class=row>
<div class='col-md-2'></div>
<div class='col-md-8'>
<form action="" id=form2>
  <div class="form-group">
    <label for="usr">Username:</label>
    <input type="text" class="form-control" id="usr" name="usr">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" name="pwd">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
<div id='message'>
  </div>
</div>


<?php
include "down.php";
?>
