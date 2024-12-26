<?php
session_start();
$conn=mysql_connect("localhost","root","") or die(mysql_error());
$database=mysql_select_db('saqib',$conn)or die(mysql_error());

?>