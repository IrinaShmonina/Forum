<html>
<head><title>���� ������</title><head>
<body>
������ ��������� ������<p>
<?php
require 'connection.php';
//mysql_query("SET NAMES cp1251");

$query='select name, address from students';
$result=mysql_query($query);
$num=mysql_num_rows($result);
echo "$num ������ <p>";

echo '<table border=1 width=300>';
for($i=0;$i<$num;$i++)
	{
	$row=mysql_fetch_row($result);
	echo '<tr>';
	foreach($row  as $val)
		echo "<td>$val</td> ";
	echo '</tr>';
	}
echo '</table>';
?>


</body>
</html>