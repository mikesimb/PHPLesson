<?php
$conn = mysql_connect("127.0.0.1","root","");
mysql_select_db("BBSDB",$conn);
mysql_query("set names 'GBK'");//实用中文GBK
?>