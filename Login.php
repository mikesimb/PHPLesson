<?php


if($_GET[out]){
	setcookie("cookie","out");
	echo "<script language=javascript>location.href='login.php';</script>";
}

if($_POST[id]=="admin")
  $pwd = md5($_POST[pwd]);
  if($pwd =='e1bfd762321e409cee4ac0b63841963c')
  {
  	setcookie("cookie","ok");
  	echo "<script language=javascript>location.href='login.php';</script>";
  }
  include 'head.php';
  if($_COOKIE['cookie']!='ok')
  {
  	echo("��=ok")��
?>
<SCRIPT language=javascript>
function checklogin()
{
	if(myform.id.value=="")
	{
		alert("����д�û�����");
		myform.id.focus();
		return false;
	}
	if(myform.pwd.value=="")
	{
		alert("����д���룡");
		myform.pwd.focus();
		return false;
		
	}		
}
</SCRIPT>
<form action="submit" method="post" name="myform" onsubmit="return checklogin();">
  �û�:<input type="text" name="id" /><br>
  ����:<input type="password" name="pwd"/> <br/>
  <input type="submit" name="submit" value="��½"/>
</form>
<?php
}else{

?>
<form>
<a href='?out=login'>�˳�</a>
</form>
<?php
}
?>