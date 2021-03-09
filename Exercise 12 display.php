<?php
include("dbconnect.php");
$sql="SELECT * FROM mca";
$result=$conn->query($sql);
if($result->num_rows>0)
{       
      
	echo"<table border='1' width='500px;' style='border:5px solid black;margin-left:400;margin-top:100px;border-collapse:collapse;'>
	<tr><th>ID</th><th>Name</th><th>Email</th><th>Marks</th></tr>";
	while($row=$result->fetch_assoc())
	{
		echo "<tr><td>".$row["ID"]."</td>";
		echo "<td>".$row["Name"]."</td>";
		echo "<td>".$row["Email"]."</td>";
		echo "<td>".$row["Marks"]."</td></tr>";
	}
	
}
echo"</table>";

?>
