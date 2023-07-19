This is a simple PHP script which displays all form names & values.<hr>
<?php
  foreach ($_POST as $key => $value) {
	  if(is_array($value)){
		  $value = implode(", ", $value);
	  }
	echo '<b>' . $key . '</b> = ' . $value.'<br />';
  }
?>