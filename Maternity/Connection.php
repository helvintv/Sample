<?php
$link=mysqli_connect('localhost','root','');
$db="maternity";
if(!$link)
{
	die("Could not connect:".mysqli_error());
}
else
{
	//echo 'connected successfully';
}
$db=mysqli_select_db($link,"maternity");
if(!$db)
{
	die("Could not select:".mysqli_error($link));
}
?>