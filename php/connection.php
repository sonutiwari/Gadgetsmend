<?php 

$conn=mysqli_connect('localhost','root','','gadgetsmend');

if($conn)
echo "Connected with lh<br>";
else
die("Not connected");

$n=$_POST['Name'];
$u=$_POST['username'];
$pa=$_POST['pwd'];
$e=$_POST['email'];
$d=$_POST['dob'];
$c=$_POST['contact'];
$r=$_POST['recontact'];

if(strcmp($r,$c)!=0)
{
echo "Please enter correct phone number";
}

else
{

$cn="INSERT into customer(name,username,password,emailid,dob,contact) VALUES ('$n','$u' , '$pa' , '$e' , '$d' , '$c')"; 


if(mysqli_query($conn,$cn)){
	echo "Account Created Successfullly"; 
}

else{	
   echo "Some problem Occured in account craetion please fill form again"; 
}

}
mysqli_close($conn);

?>