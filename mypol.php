<?php
require 'navbar.php';
$un = $_SESSION['usern'];
require 'db.php';
date_default_timezone_set('Asia/Kolkata');
$sql = "SELECT verify from clientdetails where uname = '$un'";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($res);
if($row['verify']==0){
	header("location:afterlogin.php?v=n");
}
$sql = "select * from clientpol where uname = '$un'";

$result=mysqli_query($conn,$sql);
?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<table>
	<tr>
		<th colspan="8"><h2>Policy record</h2></th>
	</tr>
	<tr>
		<th>pid</th>
		<th>licno</th>
		<th>year</th>
		<th>Manu</th>
		<th>Status</th>
		<th>Payment status</th>
		<th>Time Left<br>(in days)</th>
		<th>Download policy copy</th>
	</tr>
	<?php
	while ($rows=mysqli_fetch_array($result))
	{
        $t=$rows['term'];
		$date=date("Y-m-d", strtotime("+$t years", strtotime($rows['dop'])));
		if($rows['pay']==1) $dt=(strtotime($date)-strtotime(date('y-m-d')))/86400;
		else $dt = '-';
		?>
	<tr>
		<td><?php $id=$rows['pid']; echo $rows['pid'];?></td>
		<td><?php echo $rows['licno'];?></td>
		<td><?php echo $rows['yearm'];?></td>
		<td><?php echo $rows['manu'];?></td>
		<td><?php if($rows['status']==1) echo "accepted"; elseif($rows['status']==2) echo "rejected";else echo'Pending'; ?></td>
		<td><?php if($rows['pay']==0&&$rows['status']==1) echo "<a href= \"pay.php?id=$id\">pay</a>"; elseif($rows['status']==0) Echo "Pending"; elseif($rows['pay']==1) Echo "paid";elseif($rows['status']==2) Echo "rejected";?></td>
		<td><?php echo $dt;?></td>
		<td><?php if($rows['pay']==1) echo "<a href= \"pdf.php?id=$id\" target = \"_blank\"><i class=\"fas fa-file-download\"></i></a>";else echo "<p style=\"size:20px;\">-</p>";?></td>
		</tr>
	<?php
	}
	?>
</table>
<br>
<br>
<input type="button"  onclick="location.href='afterlogin.php';"class="bt" value="Back">
