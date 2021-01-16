<?php
$dbhost='localhost';
$dbuser='root';
$dbpass='';
$db='e_commerce';
$conn=new mysqli($dbhost,$dbuser,$dbpass,$db);

if(!$conn){
    die('could not connnect:'.mysqli_error());
}
$retval=mysqli_query($conn,"select username,email,mobileno,address,items from offline");
if(!$retval)
{
    die('could not get data:'.mysqli_error($conn));
}
echo "<table border='1'>
    <tr>
    <th> NAME </th>
    <th> EMAIL </th>
    <th> MOBILENO </th>
    <th> ADDRESS </th>
    <th> ITEMS </th>
    <tr>";
while($row=$retval-> fetch_assoc()){
     echo "<tr><td>".$row['username'],"</td><td>".$row['email'],"</td><td>".$row['mobileno'],"</td><td>".$row['address'],"</td><td>".$row['items']."</td></tr>";
     
}
echo "</table>";
mysqli_close($conn);
?>