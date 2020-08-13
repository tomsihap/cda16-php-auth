<?php
session_start();

if (!isset($_POST['email']) || !isset($_POST['password'])) {
    $_SESSION['error'][] = "Une erreur technique est survenue.";
    header("Location: login.php");
}

if (empty($_POST['email']) || empty($_POST['password'])) {
    $_SESSION['error'][] = "Le formulaire n'a pas été rempli.";
    header("Location: login.php");
}

$clients = [
    [
        'mail' => 'client@client.com ',
        'password' => '12345azerty',
        'role' => 'client'
    ],
    [
        'mail' => 'johndoe@client.com',
        'password' => 'johnDoe123',
        'role' => 'client'
    ],
    [
        'mail' => 'vendeur@vendeur.com',
        'password' => 'az3rty',
        'role' => 'vendeur'
    ],
    [
        'mail' => 'admin@admin.com',
        'password' => 'super@dmin',
        'role' => 'admin'
    ],
];

// $foundUser = [];

// foreach($clients as $client) {
//     if($_POST['email'] === $client['mail'] && $_POST['password'] === $client['password']) {
//         $foundUser = $client;
//         break;
//     }
// }

// var_dump($foundUser);


// On extrait la colonne de $clients dans laquelle on souhaite rechercher
$colonneMails = array_column($clients, 'mail');
// On trouve la clé de la liste de users qui correspond (0, 1, 2...)
$userIndex = array_search($_POST['email'], $colonneMails);
// Maintenant qu'on a la clé, on récupère le user via sa clé dans le tableau $clients
$user = $clients[$userIndex];

if ($_POST['password'] === $user['password']) {
    $_SESSION['user'] = $user;
    header("Location: user.php");
}
else {
    $_SESSION['error'][] = "Erreur de connexion.";
    header("Location: login.php");
}