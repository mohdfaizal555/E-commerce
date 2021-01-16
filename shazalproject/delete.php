CUSTOMER DELETED
<?php
if(isset($_POST['btn_home']))
{
    header('Location:adminpanel.html');
}
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$db='e_commerce';
$conn=new mysqli($dbhost,$dbuser,$dbpass,$db);

if(!$conn){
    die('could not connnect:'.mysqli_error());
}
if(isset($_POST['username'])){
    
$n=$_POST['username'];
$res=mysqli_query($conn,"DELETE FROM signin WHERE username='$n'");
    if($res){
    $r=mysqli_num_rows($res);
        if($r==0) {
            echo "not found";
  
    }
    else {
echo "CUSTOMER DELETED";  
}
    }
}

mysqli_close($conn);

?>