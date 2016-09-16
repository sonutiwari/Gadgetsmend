<?php 

$conn=mysqli_connect('localhost','root','','gadgetsmend');

if($conn)
echo "Connected with lh<br>";
else
die("Not connected");

$n=$_POST['username'];
$pa=$_POST['pwd'];

echo $n." ".$pa;

$q="select username,password from customer";
$res=mysqli_query($conn,$q);

if(mysqli_num_rows($res)>0)
{
	$flag=0;
	while($rows=mysqli_fetch_array($res))
	{
		if($n==$rows[0] && $pa==$rows[1])
		{ 
			echo "<br>Valid User";
			$flag=1;
           break; 
            }
            
	}
	if($flag==0)
	echo "<br>Wrong Username and password"; 
}
mysqli_close($conn);

?>