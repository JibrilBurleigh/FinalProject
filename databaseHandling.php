<?php
include 'config.php';
include 'opendb.php';
//do stuff
$query = "CREATE DATABASE gallery";
$result = mysql_query($query);

mysql_select_db('gallery') or die('Cannot select database');

$query = 'CREATE TABLE contact('.
	'cid INT NOT NULL AUTO_INCREMEMNT,'.
	'cname VARCHAR(20) NOT NULL,'.
	'cemail VARCHAR(50) NOT NULL,'.
	'csubject VARCHAR(30) NOT NULL,'.
	'cmessage TEXT NOT NULL,'.
	'PRIMARY KEY(cid))';
include 'closedb.php';
?>