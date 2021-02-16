<?php
session_start();
//Check form variables
if (isset($_POST['id']) and isset($_POST['password']) and $_POST['id'] != '' and $_POST['password'] != '') {

    //Check if the ID and the pass are correct
    if ($_POST['id'] == 'root' and $_POST['password'] == 'root') {
        //echo "i am in the id pass if";
        //If the credentials are ok then assign the session variables
        $_SESSION['name'] = "Gabriela";
        $_SESSION['lastName'] = "Bazan";
        $_SESSION['cart'] = array();

        header('Location: home.php?current=Home');
    } else {
        header('Location: index.php?auth=1');
        //echo "i am in the wrong id pass if";
    }
} else {

    header('Location: index.php?auth=0');
}
