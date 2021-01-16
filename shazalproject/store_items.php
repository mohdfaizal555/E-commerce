<?php
  session_start();

  if(isset($_POST['total_cart_items']))
  {
	echo count($_SESSION['name']);
	exit();
  }

  if(isset($_POST['item_src']))
  {
    $_SESSION['name'][]=$_POST['item_name'];
    $_SESSION['price'][]=$_POST['item_price'];
    $_SESSION['src'][]=$_POST['item_src'];
    echo count($_SESSION['name']);
    exit();
  }

  if(isset($_POST['showcart']))
  {
    for($i=0;$i<count($_SESSION['src']);$i++)
    {
      echo "<div class='cart_items'>";
      echo "<img src='".$_SESSION['src'][$i]."'>";
      echo "<p>".$_SESSION['name'][$i]."</p>";
      echo "<p>".$_SESSION['price'][$i]."</p>";
      echo "</div>";
    }
      ?>
          <html>
              <style>
                  body{
                    padding: 0;
                      
                  }
         .textbox{
    width: 100%;
 
    font-size: 20px;
    padding: 8px 0;
    margin: 8px 0;
    border-bottom: 1px solid black;
}
                  .textbox i{
    width: 26px;
    float: left;
    text-align: center;
    color: black;
}
.textbox input{
    border: none;
    outline: none;
    background: none;
    color: black;
    font-size: 18px;
    width: 80%;
   
    margin:0 10px;
}
  .conbtn{
     border: 1px solid #808080;
    background-color: dimgrey;
    padding: 5px;
    text-align: right;
    font-size:20px;
    font-family: monospace;
    cursor:pointer;
      right:4%;
      bottom:0.80%;
      margin:8px;
    transition: 0.8s;
    position:absolute;
    overflow:hidden;
   
}
              </style>
          
              <a href="address.html">
                  <button  class="conbtn">CONFIRM</button></a>
              
              <p>Note:On clicking on confirm,our orders will be confirmed and placed !!</p>
              
</html>
     <?php     
    exit();	
  }
?>
