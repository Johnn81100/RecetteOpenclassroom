<?php
    $namePage = "Site de recettes - Formulaire de contact";
    include '../view/view_header.php';   
?>
<body class="d-flex flex-column min-vh-100">
    <div class="container">

    <?php include '../view/view_navbar.php'; ?>
        <h1>Contactez nous</h1>
        <form action="./ctrl_submit_contact.php" method="GET">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help">
                <div id="email-help" class="form-text">Nous ne revendrons pas votre email.</div>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Votre message</label>
                <textarea class="form-control" placeholder="Exprimez vous" id="message" name="textarea"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Envoyer</button>
        </form>
        <br />
    </div>

    <?php  include '../view/view_footer.php';  ?>
</body>
</html>
