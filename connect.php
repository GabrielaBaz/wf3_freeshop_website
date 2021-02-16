<?php
session_start();
//Check form variables
if(isset($_POST['id']) AND isset($_POST['password']) AND $_POST['id']!='' AND $_POST['password']!=''){

    //Check if the ID and the pass are correct
    if($_POST['id']=='root' AND $_POST['password']=='root'){
        //echo "i am in the id pass if";
        //If the credentials are ok then assign the session variables
        $_SESSION['name']="Gabriela";
        $_SESSION['lastName']="Bazan";
        $_SESSION['cart']=array();
        
        header('Location: home.php?current=Home');
    } else {
        header('Location: index.php?auth=1');
        //echo "i am in the wrong id pass if";
    }

} else {

    header('Location: index.php?auth=0');
}


?>