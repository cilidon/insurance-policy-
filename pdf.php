<?php
$id=$_GET['id'];
require 'db.php';
$sql = "SELECT * from clientpol where pid = '$id'";
$res = mysqli_query($conn,$sql);
$row2 = mysqli_fetch_array($res); ?>
<html><head><link rel="stylesheet" href="pdf.css">
<script>
function download(){
window.print()
}
</script>
</head>
 	<body>
		<h1>Copy of policy</h1>
 		
		
		<div class="print">
			
				<img class="img" src="logo5.png">
			
			<header>
			<h1>Policy</h1>
		
			<table class="meta">
				<tr>
					<th><span >Policy id </span></th>
					<td><span ><?php echo $row2['pid'];?></span></td>
				</tr>
				<tr>
					<th><span >Date</span></th>
					<td><span ><?php echo $row2['dop']; ?></span></td>
				</tr>
			</table>
			<table class="inventory">
				<thead>
					<tr>
						<th><span >pid</span></th>
						<th><span >Type</span></th>
						<th><span >term</span></th>
						<th><span >Price</span></th>
					
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><span ><?php echo $row2['pid']; ?></span></td>
						<td><span ><?php echo $row2['type'] ;?></span></td>
						<td><span ><?php echo $row2['term']; ?></span></td>
						<td><span data-prefix>&#8377</span><span ><?php echo $row2['price'] ;?></span></td>
						
					
					</tr>
				</tbody>
			</table>
			<table class="inventory">
				<thead>
					<tr>
						<th><span >Licence number</span></th>
						<th><span >Manufacuter</span></th>
						<th><span >Year of Manufacture</span></th>
				
					
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><span ><?php echo $row2['licno'];?></span></td>
						<td><span ><?php echo $row2['manu'] ;?></span></td>
						<td><span ><?php echo $row2['yearm'] ;?></span></td>
					
						
					
					</tr>
				</tbody>
			</table>
	
			<table class="balance">
				<tr>
					<th><span >Total</span></th>
					<td><span data-prefix>&#8377</span><span><?php echo $row2['price'] ;?></span></td>
				</tr>
				<tr>
					<th><span >Amount Paid</span></th>
					<td><span data-prefix>&#8377</span><span ><?php echo $row2['price'] ;?></span></td>
				</tr>
				<tr>
					<th><span >Balance Due</span></th>
					<td><span data-prefix>&#8377</span><span>00.00</span></td>
				</tr>
			</table>
		</article>
		</div>
		<button href="#!" onclick = "download()" class="button">
			Print
		</button>
    
	</body>
</html>