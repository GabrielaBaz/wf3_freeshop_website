<?php
session_start();

//Check that user is connected to disconnect
if(!isset($_SESSION['name']) AND !isset($_SESSION['lastName'])){
    header('Location:index.php?auth=3');
} else{
$_SESSION=[];
session_destroy();
header('Location: index.php?auth=2');
}

?>