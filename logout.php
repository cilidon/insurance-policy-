<?php
session_start();
session_unset();
session_destroy();
// Redirect to the login page:
if(isset($_GET['ad']))
	{header('Location:admin.php');}
else{
header('Location: index.php');
}
?>