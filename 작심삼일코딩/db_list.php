<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
    <style>
        table{border:1px solid gray; border-collapse:collapse;}
        td{border:1px solid gray;padding:5px;}
    </style>
</head>
<body>
<?php
 
$conn = mysql_connect("localhost", "root", "2831647");
mysql_query('SET NAMES utf8');
if (!$conn) {
    echo "Unable to connect to DB: " . mysql_error();
    exit;
}
 
if (!mysql_select_db("class")) {
    echo "Unable to select mydbname: " . mysql_error();
    exit;
}
 
$sql = "SELECT * 
        FROM  student
    LIMIT 10";
 
$result = mysql_query($sql);
 
if (!$result) {
    echo "Could not successfully run query ($sql) from DB: " . mysql_error();
    exit;
}
 
if (mysql_num_rows($result) == 0) {
    echo "No rows found, nothing to print so am exiting";
    exit;
}

