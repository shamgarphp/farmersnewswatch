<?php

require_once("config/dbconnection.php");

require_once("config/dbconfig.php");
$getsignle = new Dbcon;
if(isset($_SESSION['admin_id']))
{

unset($_SESSION['admin_id']);
unset($_SESSION['admin_name']);

echo"<script>
				window.location.href='index.php';
				</script>";
				exit;
}




?>