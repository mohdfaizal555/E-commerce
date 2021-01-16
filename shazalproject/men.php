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
$r='';
$v='';
$j='';
if(isset($_POST['username'])){
    
$n=$_POST['username'];
$b=$_POST['email']; 
$u=$_POST['password'];
$r=$_POST['repassword'];  
$v=$_POST['mobileno'];
$j=$_POST['address'];

$res=mysqli_query($conn,"insert into signin(username,email,password,repassword,mobileno,address) values('".$n."','".$b."','".$u."','".$r."','".$v."','".$j."')");
    if(!$res){
    die('could not connnect:'.mysqli_error($conn));
}
echo "<br>";
   header("location:faizal.html");  
}
mysqli_close($conn);
?>