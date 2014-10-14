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
  	echo("！=ok")；
?>
<SCRIPT language=javascript>
function checklogin()
{
	if(myform.id.value=="")
	{
		alert("请填写用户名！");
		myform.id.focus();
		return false;
	}
	if(myform.pwd.value=="")
	{
		alert("请填写密码！");
		myform.pwd.focus();
		return false;
		
	}		
}
</SCRIPT>
<form action="submit" method="post" name="myform" onsubmit="return checklogin();">
  用户:<input type="text" name="id" /><br>
  密码:<input type="password" name="pwd"/> <br/>
  <input type="submit" name="submit" value="登陆"/>
</form>
<?php
}else{

?>
<form>
<a href='?out=login'>退出</a>
</form>
<?php
}
?>