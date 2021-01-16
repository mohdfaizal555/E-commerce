<?php
function registeration()
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
    
if(!empty($_POST['Username']))
{
    $retval=mysqli_query($conn,"select * from admin where username='$_POST[Username]' and password='$_POST[Password]'");
    if(!$retval){
    die('could not connnect:'.mysqli_error($conn));
    }
                         $row=mysqli_fetch_array($retval,MYSQLI_ASSOC) OR die('could not retrive:'.mysqli_error($conn));
                         if(!empty($row['username'] and !empty($row['password'])))
                         {
                             $_SESSION['Username']=$row['username'];
                             header('Location:adminpanel.html');
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