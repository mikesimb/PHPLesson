<?php
include("con.php");

if($_POST['submit']){
	 $sql= "insert into Message(id,user,title,content,lastdate)".
		   " values('0','$_POST[user]','$_POST[title]','$_POST[content]',now())"; 
	 //echo $sql ;
	 mysql_query($sql);
	 echo "����ɹ���";
	 
}

include("head.php")
?>

<SCRIPT language=javascript>
function Checksubmit()
{
	if(myform.user.value=="")
	{
		alert("����д�û�����");
		myform.user.focus();
		return false;
		
	}
	if(myform.title.value=="")
	{
		alert("����д���⣡");
		myform.title.focus();
		return false;
	}
	if(myform.content.value=="")
	{
		alert("��д���ݰɣ�");
		myform.content.focus();
		return false;
	}
}
</SCRIPT>

<form action="add.php" method= "post" name="myform" onsubmit="return Checksubmit();" >
�û�  :<input type="text" size = "10" name= "user"/ ><br/>
����  :<input type="text" size="10" name= "title"/><br/>
����  :<textarea rows="5" cols="50" name = "content"></textarea><br/>

<input type="submit" name="submit" value= "��������">
  
</form>