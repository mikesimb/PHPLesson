<?php
include("con.php");

if($_POST['submit']){
	 $sql= "insert into Message(id,user,title,content,lastdate)".
		   " values('0','$_POST[user]','$_POST[title]','$_POST[content]',now())"; 
	 echo $sql ;
	 mysql_query($sql);
	 echo "发表成功！";
	 
}
?>

<form action="add.php" method= "post" >
username:<input type="text" size = "10" name= "user" ><br>
title:<input type="text" size="20" name= "title"><br>
content:<textarea rows="5" cols="50" name = "content"></textarea><br>

<input type="submit" name="submit" value= "发布留言">
  
</form>