<?php
include("con.php");

if($_POST['submit']){
	 $sql= "insert into Message(id,user,title,content,lastdate)".
		   " values('0','$_POST[user]','$_POST[title]','$_POST[content]',now())"; 
	 //echo $sql ;
	 mysql_query($sql);
	 echo "发表成功！";
	 
}

include("head.php")
?>

<SCRIPT language=javascript>
function Checksubmit()
{
	if(myform.user.value=="")
	{
		alert("请填写用户名！");
		myform.user.focus();
		return false;
		
	}
	if(myform.title.value=="")
	{
		alert("请填写标题！");
		myform.title.focus();
		return false;
	}
	if(myform.content.value=="")
	{
		alert("请写内容吧！");
		myform.content.focus();
		return false;
	}
}
</SCRIPT>

<form action="add.php" method= "post" name="myform" onsubmit="return Checksubmit();" >
用户  :<input type="text" size = "10" name= "user"/ ><br/>
标题  :<input type="text" size="10" name= "title"/><br/>
内容  :<textarea rows="5" cols="50" name = "content"></textarea><br/>

<input type="submit" name="submit" value= "发布留言">
  
</form>