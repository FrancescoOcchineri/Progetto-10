<?php
session_start();

require_once 'config.php';
include_once('function.php');

// PER IL LOGIN TUTTI GLI UTENTI HANNO QUESTA PASSWORD -> "Pa$$w0rd!"

if (isset($_REQUEST['action']) && $_REQUEST['action'] === 'login') {
    echo 'Sono nella sezione login';
    login($mysqli, $_REQUEST['email'], $_REQUEST['password']);
    exit(header('Location: http://localhost/PHP/Progetto%2010/index.php'));
} elseif (isset($_REQUEST['action']) && $_REQUEST['action'] === 'logout') {
    session_unset();
    session_destroy();
    header('Location: http://localhost/PHP/Progetto%2010/login.php');
}

if (!empty($_FILES['image']['name'])) {
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    $file_tmp = $_FILES['image']['tmp_name'];

    $target_dir = 'uploads/';

    if (!empty($_FILES['image'])) {
        echo '<h3>File Name: ' . $file_name . '</h3>';
        echo '<h3>File Type: ' . $file_type . '</h3>';
        echo '<h3>File Size: ' . $file_size . '</h3>';
        if (strpos($file_type, "image/") === 0) {
            if ($file_size < 4000000) {
                if (is_uploaded_file($_FILES["image"]["tmp_name"]) && $_FILES["image"]["error"] === UPLOAD_ERR_OK) {
                    if (move_uploaded_file($_FILES['image']["tmp_name"], $target_dir . $file_name)) {
                        echo "Caricamento avvenuto con successo";
                    } else {
                        echo "Caricamento fallito";
                    }
                }
            } else {
                echo "File troppo grande!";
            }
        } else {
            echo "File non supportato!";
        }
    }
}



if (isset($_REQUEST['action']) && $_REQUEST['action'] === 'register') {

    $regexPass = '/^((?=\S*?[A-Z])(?=\S*?[a-z])(?=\S*?[0-9]).{6,})\S$/';
    preg_match_all($regexPass, htmlspecialchars($_REQUEST['password']), $matchesPass, PREG_SET_ORDER, 0);
    $regexEmail = '/^((?!\.)[\w\-_.]*[^.])(@\w+)(\.\w+(\.\w+)?[^.\W])$/m';
    preg_match_all($regexEmail, htmlspecialchars($_REQUEST['email']), $matchesEmail, PREG_SET_ORDER, 0);

    $firstname = strlen(trim(htmlspecialchars($_POST['firstname']))) > 2 ? trim(htmlspecialchars($_POST['firstname'])) : exit();
    $lastname = strlen(trim(htmlspecialchars($_POST['lastname']))) > 2 ? trim(htmlspecialchars($_POST['lastname'])) : exit();
    $username = strlen(trim(htmlspecialchars($_POST['username']))) > 2 ? trim(htmlspecialchars($_POST['username'])) : exit();
    $email = $matchesEmail ? htmlspecialchars($_POST['email']) : exit();
    $city = strlen(trim(htmlspecialchars($_POST['city']))) > 2 ? trim(htmlspecialchars($_POST['city'])) : exit();
    $password = $matchesPass ? htmlspecialchars($_REQUEST['password']) : exit();
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $image = $target_dir . $file_name;

    createUser($mysqli, $firstname, $lastname, $username, $email, $hash, $city, $image);
}

/* include_once 'mail.php'; */

if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'addBook') {
    $titolo = strlen(trim(htmlspecialchars($_POST['titolo']))) > 1 ? trim(htmlspecialchars($_POST['titolo'])) : exit();
    $autore = strlen(trim(htmlspecialchars($_POST['autore']))) > 2 ? trim(htmlspecialchars($_POST['autore'])) : exit();
    $anno = strlen(trim(htmlspecialchars($_POST['anno']))) > 2 ? trim(htmlspecialchars($_POST['anno'])) : exit();
    $genere = strlen(trim(htmlspecialchars($_POST['genere']))) > 2 ? trim(htmlspecialchars($_POST['genere'])) : exit();
    $image = $target_dir . $file_name;

    addBook($mysqli, $titolo, $autore, $anno, $genere, $image);
    exit(header('Location: http://localhost/PHP/Progetto%2010/books.php'));
} else if (isset($_REQUEST['action']) && $_REQUEST['action'] === 'update') {
    $titolo = strlen(trim(htmlspecialchars($_POST['titolo']))) > 1 ? trim(htmlspecialchars($_POST['titolo'])) : exit();
    $autore = strlen(trim(htmlspecialchars($_POST['autore']))) > 2 ? trim(htmlspecialchars($_POST['autore'])) : exit();
    $anno = strlen(trim(htmlspecialchars($_POST['anno']))) > 2 ? trim(htmlspecialchars($_POST['anno'])) : exit();
    $genere = strlen(trim(htmlspecialchars($_POST['genere']))) > 2 ? trim(htmlspecialchars($_POST['genere'])) : exit();
    $image = $target_dir . $file_name;

    updateBook($mysqli, $_REQUEST['id'], $titolo, $autore, $anno, $genere, $image);
    exit(header('Location: http://localhost/PHP/Progetto%2010/books.php?id=' . $user));
} else if (isset($_REQUEST['action']) && $_REQUEST['action'] === 'deleteBook') {
    deleteBook($mysqli, $_REQUEST['id']);
    exit(header('Location: http://localhost/PHP/Progetto%2010/books.php?id=' . $user));
}

if (isset($_REQUEST['action']) && $_REQUEST['action'] === 'updateProfile') {
    $firstname = strlen(trim(htmlspecialchars($_POST['firstname']))) > 2 ? trim(htmlspecialchars($_POST['firstname'])) : exit();
    $lastname = strlen(trim(htmlspecialchars($_POST['lastname']))) > 2 ? trim(htmlspecialchars($_POST['lastname'])) : exit();
    $username = strlen(trim(htmlspecialchars($_POST['username']))) > 2 ? trim(htmlspecialchars($_POST['username'])) : exit();
    $city = strlen(trim(htmlspecialchars($_POST['city']))) > 2 ? trim(htmlspecialchars($_POST['city'])) : exit();
    $image = $target_dir . $file_name;

    updateUser($mysqli, $_REQUEST['id'], $firstname, $lastname, $username, $city, $image);
    exit(header('Location: http://localhost/PHP/Progetto%2010/profile.php'));
} else if (isset($_REQUEST['action']) && $_REQUEST['action'] === 'deleteProfile') {
    deleteUser($mysqli, $_REQUEST['id']);
    exit(header('Location: http://localhost/PHP/Progetto%2010/login.php'));
}
?>