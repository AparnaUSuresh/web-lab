<?php
$conn=mysqli_connect("localhost","root","","student");
if(mysqli_connect_errno())
{
echo"CONNECTION ERROR:".mysqli_connect_errno();
exit();
}
?>
