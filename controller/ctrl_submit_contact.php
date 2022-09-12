<?php

if (isset($_GET['submit']))
{
    if(!empty($_GET['email']) AND !empty($_GET['textarea']))
    {
        $email=$_GET['email'];
        $texterea=$_GET['textarea'];
    
?>
       echo "h1>Message bien reçu !</h1>    
    <div class='card'>
        <div class='card-body'>
            <h5 class='card-title'>Rappel de vos informations</h5>
            <p class='card-text'><b>Email</b> : <?php echo $email; ?></p>
            <p class='card-text'><b>Message</b> : <?php echo $texterea; ?></p>
        </div>
    </div>
<?php

    }
    else
    {
        echo 'Il faut un email et un message pour soumettre le formulaire.';
    }
}

?>

