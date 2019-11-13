<?php
/*
	参数：
		实参：调用函数时传入的参数
		形参：声明函数时给出的参数
	
	形参分类：
		可选参数：有默认值的形参
		必选参数：没有默认值的形参
		
	参数的数量问题：
		少：不能少于必选参数的个数
		多：忽略
*/
function createTable($hang,$lie=5)
{
	echo "<table border='1' align='center' width='700'>";
	for ($row=1;$row<=$hang;$row++){
		echo "<tr>";
		for ($col=1;$col<=$hang;$col++){
			echo "<td>☆</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
}
createTable(5);
createTable(5,7);
createTable(8,6,12,14);
?>