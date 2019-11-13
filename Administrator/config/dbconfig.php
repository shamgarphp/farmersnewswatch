<?php
session_start();


class Dbcon
{


function getsinglerecord($table,$conds)
{
	
	$query=mysql_query("select * from $table $conds");
	$row=mysql_fetch_array($query);
	return $row;
	
}

function insertrecord($tab,$col,$colval)
{
	$dsa=mysql_query("insert into $tab($col) values($colval)");
	
	return $dsa;
}


function updaterecord($table,$columns,$column_values)
{
	$updt=mysql_query("update $table set $columns $column_values");
	
	return $updt;
	
}

function deleterecord($table,$wher)
{
	$det=mysql_query("delete from $table $wher");
	
	return $det;
	
}


function droprecord($table)
{
	$drps=mysql_query("drop table  $table ");
	
	return $drps;
}

function select_query($tab_name,$whrs,$ords)
{
    $sel=mysql_query("select * from $tab_name $whrs $ords");
    return $sel;
}
function is_session()
{
	if(!isset($_SESSION['admin_name']))
	{
		echo"<script>
				window.location.href='index.php';
				</script>";
				exit;
	}
}

function official_mail()
{
	$queryq=mysql_query("select * from admin_profile");
	$rowa=mysql_fetch_array($queryq);
	$da=$rowa['official_mail'];
	return $da;
	
}


}






?>