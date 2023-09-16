<?php 

$conn=mysqli_connect("localhost","root","","re");
if($conn==true)
{

	echo "Connected";
}
else
{

	echo "not Connected";
}

?>