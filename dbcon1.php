
<?php

$server="localhost";
$user="root";
$password="";
$db="signup";

$con = mysqli_connect($server,$user,$password,$db);

if ($con) {
	?>
	<script >
		alert("connection Succesful");
	</script>

	<?php
}else{
	?>
	<script >
		alert("No connection Succesful");
	</script>

	<?php
}

?>