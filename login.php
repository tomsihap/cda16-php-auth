<?php session_start(); ?>
<?php include('templates/header.php'); ?>
<h1>Formulaire de connexion :</h1>

<!-- Si j'ai un tableau d'erreur en session et qu'il contient des erreurs -->
<?php if (isset($_SESSION['error']) && !empty($_SESSION['error'])) : ?>
    <!-- Je boucle sur ce tableau d'erreur pour les afficher -->
    <?php foreach ($_SESSION['error'] as $error) : ?>
        <div class="alert alert-danger">
            <?= $error ?>
        </div>
    <?php endforeach; ?>
    <!-- Maintenant que les erreurs ont été affichées, je peux supprimer/vider le
    tableau d'erreurs pour ne pas qu'elles réapparaissent en rafraîchissant
    la page -->
    <?php unset($_SESSION['error']); ?>
<?php endif; ?>

<form action="traitement.php" method="post">
    <div class="form-group">
        <label for="">Email</label>
        <input name="email" type="email" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Mot de passe</label>
        <input name="password" type="password" class="form-control">
    </div>

    <input type="submit" class="btn btn-success float-right" value="Connexion">

</form>

<?php include('templates/footer.php'); ?>