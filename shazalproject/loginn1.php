<?php
{
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$db='e_commerce';
$conn=new mysqli($dbhost,$dbuser,$dbpass,$db);
if(!$conn){
    die('could not connnect:'.mysqli_error());
}
session_start();
    
    if(!empty($_POST['email']))
{
    $retval=mysqli_query($conn,"select * from signin where email='$_POST[email]' and password='$_POST[password]'");
    if(!$retval){
    die('could not connnect:'.mysqli_error($conn));
    }
                         $row=mysqli_fetch_array($retval,MYSQLI_ASSOC) OR die('could no retrive:'.mysqli_error($conn));
                         if(!empty($row['email'] and !empty($row['password'])))
                         {
                             $_SESSION['email']=$row['email'];
                             header('Location:indexx.html');
                         }
                         else
                         {
                             echo "wrong password";
                         }
}
                         
}
                         if(isset($_POST['submit']))
                         {
                             registeration();
                         }
?>