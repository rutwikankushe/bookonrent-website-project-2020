<?php

include 'dbcon.php';

$selectquery = " select * from myprofile ";

$query = mysqli_query($con,$selectquery);

$nums = mysqli_num_rows($query);

$res = mysqli_fetch_array($query);

while($res = mysqli_fetch_array($query)){
	// echo $res['refer']."<br>";
?>
<tr>
	<td> <?php echo $res['id']?> </td>
	<td><?php echo $res['name']?></td>
	<td><?php echo $res['phone']?></td>
	<td><?php echo $res['adhar']?></td>
	<td><?php echo $res['city']?></td>
	<td><?php echo $res['pincode']?></td>
	<td><?php echo $res['home']?></td>
	<td><?php echo $res['office']?></td>
</tr>	


<?php
}

?>
