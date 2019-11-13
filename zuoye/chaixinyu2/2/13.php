<?php
/*创建表格的函数*/
CREATETABLE(5,5);
echo "<hr/>";
function createTable($hang,$lie)
{
	echo "<table border='1' align='center' width='700'>";
	for ($row=1;$row<=$hang;$row++){
		echo "<tr>";
		for($col=1;$col<=$lie;$col++){
			echo "<td>☆</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
}
createTable(7,8);
?>