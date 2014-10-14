<?php
include 'con.php';
include 'head.php';
$sql = "select * from message order by id desc";
$query = mysql_query($sql);
while($row = mysql_fetch_array($query)){
?>

<table width=500 border="0" cellpadding="5" cellspacing="1" bgcolor="#add3ef">
<tr bgcolor="#eff0ff"><td>标题:<?=$row[title]?> 用户:<?=$row[user] ?></tr>
<tr bgcolor="#eff9ff"><td>内容:<?= htmtocode($row[content])?></td></tr>
</table>

<?php 
}
?>