<?php
session_start();
session_unset();
session_destroy();
?>

<?php include('templates/header.php'); ?>
<h1>Vous avez bien été déconnecté.</h1>
<?php include('templates/footer.php'); ?>