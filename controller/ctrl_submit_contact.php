<?php

if (isset($_GET['submit']))
{
    if(!empty($_GET['email']) AND !empty($_GET['textarea']))
    {
        $email=$_GET['email'];
        $texterea=$_GET['textarea'];
    
        include '../view/view_submlit_contact.php';
    }
    else
    {
        echo 'Il faut un email et un message pour soumettre le formulaire.';
    }
}

?>

