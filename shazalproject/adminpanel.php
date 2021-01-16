<?php
if(isset($_POST[btn_delete]))
{
header('Location:delete.html');
}
elseif(isset($_POST[btn_insert]))
{
header('Location:insert.html');
}
else(isset($_POST[btn_view]))
{
    header('Location:view.html')
}

?>
