

<?php
    $namePage = "Recettes";
    include './view/view_header.php';
    
?>
<body class="d-flex flex-column min-vh-100">
    <div class="container">
        <?php include './view/view_navbar.php'; ?>
        <h1>Site de recettes</h1>

        <!-- inclusion des variables et fonctions -->
        <?php
            include_once('./model/variables.php');
            include_once('./model/functions.php');
        ?>

        <!-- inclusion de l'entête du site -->
        <?php include_once('header.php'); ?>
        
        <?php foreach(getRecipes($recipes) as $recipe) : ?>
            <article>
                <h3><?php echo $recipe['title']; ?></h3>
                <div><?php echo $recipe['recipe']; ?></div>
                <i><?php echo displayAuthor($recipe['author'], $users); ?></i>
            </article>
        <?php endforeach ?>
 </div>
<?php
    include './view/view_footer.php';
?>
