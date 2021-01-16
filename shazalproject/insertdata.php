<?php
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$db='e_commerce';
$conn=new mysqli($dbhost,$dbuser,$dbpass,$db);

if(!$conn){
    die('could not connnect:'.mysqli_error());
}
$n='';
$b='';
$u='';
$v='';
$j='';
if(isset($_POST['username'])){
    
$n=$_POST['username'];
$b=$_POST['email']; 
$u=$_POST['mobileno'];  
$v=$_POST['address'];
$j=$_POST['items'];

$res=mysqli_query($conn,"insert into offline(username,email,mobileno,address,items) values('".$n."','".$b."','".$u."','".$v."','".$j."')");
    if(!$res){
    die('could not connnect:'.mysqli_error($conn));
}
echo "<br>";
   header("location:view.html");  
}
mysqli_close($conn);
?>