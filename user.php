<?php session_start(); ?>
<?php include('templates/header.php'); ?>

<h1>Page d'accueil des utilisateurs connectés</h1>

<?php if (isset($_SESSION['user'])) : ?>

    <a href="logout.php" class="text-danger">Deconnexion</a>
    <p>
        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque cupiditate velit ducimus quis et vitae
            magnam, ea fuga blanditiis aliquam minus eveniet illo quas voluptates excepturi porro enim odit
            dicta.</span>
        <span>Laboriosam cumque repellendus dolores aliquid velit, reiciendis ut fuga perspiciatis magni ipsum numquam
            reprehenderit, quaerat esse alias dicta quibusdam dolorem consequuntur. Error nulla in tempore ipsam quas
            quis odit placeat!</span>
        <span>Aliquid consequatur quam neque aut, tempore inventore alias saepe, veritatis ipsum magnam voluptate minus
            nesciunt. Earum incidunt eius velit ipsa eum perferendis! Expedita id iste adipisci, praesentium beatae
            perferendis accusamus.</span>
        <span>Quaerat excepturi magni laudantium saepe quos cum, quod eaque dignissimos quibusdam debitis. Minima
            necessitatibus enim doloremque sint. Labore repellendus tempora quisquam dolor assumenda? Placeat, sint
            ipsam. Aspernatur harum at dicta!</span>
        <span>Ipsam assumenda nostrum dolores ratione consequuntur? Sint voluptatibus inventore molestias quod?
            Repellendus tempora earum facere maiores dolore aut voluptates cupiditate placeat totam consectetur qui,
            beatae, laudantium tenetur voluptatum expedita neque!</span>
    </p>
<?php else : ?>
    <h1 class="text-danger">Erreur: vous n'avez pas accès à cette page.</h1>
<?php endif; ?>


<?php include('templates/footer.php'); ?>