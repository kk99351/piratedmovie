<?php
$mysqli  = new mysqli("localhost","root","","moviedukaan");;
if ($mysqli -> connect_errno){
    echo "Failed to Connect";
    exit();
}
?>