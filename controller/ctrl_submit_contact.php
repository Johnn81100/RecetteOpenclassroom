<?php
include '../model/cleanInput.php';

if (isset($_GET['submit']))
{
    if(!empty($_GET['email']) AND !empty($_GET['textarea']))
    {
        $email=cleanInput($_GET['email']);
        $texterea=cleanInput($_GET['textarea']);
    
        include '../view/view_submit_contact.php';
    }
    else
    {
        echo 'Il faut un email et un message pour soumettre le formulaire.';
    }
}

?>

