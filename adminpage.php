<?php
session_start();
if(!isset($_SESSION['admin'])){header("location:admin.php");}
require 'db.php';

$sql = "select * from clientpol where status = 0";
$sql2 = "select * from clientpol where status != 0";
$sql3 = "select * from clientdetails";
$res = mysqli_query($conn,$sql);
$res2 = mysqli_query($conn,$sql2);
$res3 = mysqli_query($conn,$sql3);
?>
<head>
<link rel="stylesheet" href="sty.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  .btn{
    width: 30%;
  display: block;
  background: none;
  border: 1px solid #ff6700;
  color: #ff6700;
  padding: 5px;
  font-size: 18px;
  cursor: pointer;
  margin: auto;
  position: relative;
  text-transform: uppercase;
  }
  </style>
</head>
<div class="admin-panel clearfix">
  <div class="slidebar">
    <div class="logo">
      <a href=""></a>
    </div>
    <ul>
      <li><a href="#offers" id="targeted">Offers</a></li>
      <li><a href="#history">History</a></li>
      <li><a href="#rem">Remove</a></li>
      <li><input type="button"  onclick="location.href='logout.php?ad=x';"class="btn" value="Log out">

    </ul>
  </div>
  <div class="main">
    <div class="mainContent clearfix">
      <div id="offers" style="z-index: 10;">
        <h2 class="header">Offers</h2>
        <?php if(mysqli_num_rows($res)>0){ ?>
	 <table>
            <tr>
            <th>pid</th>
            <th>RC Number</th>
            <th>Year of Manufature</th>
            <th>Manufaturer Name</th>
            <th colspan="2">STATE</th>
            </tr>
	 <tr>
 <?php while($row = mysqli_fetch_array($res))
           {
            ?>
            <tr>
            <td><?php echo $row['pid'];$id=$row['pid'];?></td>
            <td><?php echo $row['licno'];?></td>
            <td><?php echo $row['yearm'];?></td>
            <td><?php echo $row['manu'];?></td>
            <td><?php echo "<i id=\"y\" class=\"fa fa-check\" onclick=\"location.href='offersp.php?id=$id&s=a'\" ></i>"
            ?></td>
            <td><?php echo "<i id=\"x\" class=\"fa fa-times\" onclick=\"location.href='offersp.php?id=$id&s=r'\"></i>"
           ?></td>
           <?php } ?>
           
	</table>
<?php } else echo"<h2>no offers</h2>";  ?>
         </div>
          <div id="history" style="z-index: 5;">
        <h2 class="header">History</h2>
   <table>
            <tr>
            <th>pid</th>
            <th>RC Number</th>
            <th>Year of Manufature</th>
            <th>Manufaturer Name</th>
            <th>STATE</th>
                <th>Payment</th>
            </tr>
   <tr>
 <?php while($row = mysqli_fetch_array($res2))
           {
            ?>
            <tr>
            <td><?php echo $row['pid'];$id=$row['pid'];?></td>
            <td><?php echo $row['licno'];?></td>
            <td><?php echo $row['yearm'];?></td>
            <td><?php echo $row['manu'];?></td>
            <td><?php if($row['status']==1) echo "accepted"; else echo "rejected"; ?></td>
            <td><?php if($row['pay']==1) echo "Done"; elseif($row['pay']==0&&$row['status']==1) echo "<a href=\"email.php?id=$id\">Reminder</a>"; else echo"-"; ?></td>
           <?php } ?>
           
  </table>
         </div>
         <div id="rem" style="z-index: 4;">
        <h2 class="header">Users</h2>
   <table>
            <tr>
            <th>User Name</th>
            <th>F name</th>
            <th>Lname</th>
            <th>Email </th>
            <th>mobile</th>
            <th>policies applied</th>
            <th></th>
            </tr>
   <tr>
 <?php while($row = mysqli_fetch_array($res3))
           {
            ?>
            <tr>
            <td><?php echo $row['uname'];$id=$row['uname'];?></td>
            <td><?php echo $row['fname'];?></td>
            <td><?php echo $row['lname'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['mobile'];?></td>
            <td><?php
            $query = "select count(pid) from clientpol where uname = '$id'";
            $res4 = mysqli_query($conn,$query);
            $row =  mysqli_fetch_array($res4);
            $c =   $row['count(pid)'];
            echo "$c";
            ?></td>
            <td><?php echo "<a href = \"remove.php?id=$id\">Remove</a>"?></td>
           <?php } ?>
           
  </table>
         </div>
       </div>
      
     </div>
</div>