
<?php
  
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$db='e_commerce';

$conn=new mysqli($dbhost,$dbuser,$dbpass,$db);
if(!$conn){
    die('could not connnect:'.mysqli_error());
}

$u='';
$r='';


 if(isset($_POST['name']))
  {
$u=$_POST['name'];
$r=$_POST['phoneno'];  
  
  
$res=mysqli_query($conn,"insert into store_items(name,phoneno) values('".$u."','".$r."')");
    if(!$res){
    die('could not connnect:'.mysqli_error($conn));
}
echo "<br>";
   header('Location:feedback.html');
                         
 }
 
mysqli_close($conn);
?>