<?php

function createUser($mysqli, $firstname, $lastname, $username, $email, $hash, $city, $image)
{
    $sql = "INSERT INTO utenti (firstname, lastname, username, email, pass, city, img)
    VALUES ('$firstname', '$lastname', '$username', '$email', '$hash', '$city', '$image');";
    if (!$mysqli->query($sql)) {
        echo ($mysqli->connect_error);
    } else {
        header('Location: http://localhost/PHP/Progetto%2010/login.php');
        exit();
    }
}

function login($mysqli, $email, $password)
{
    $sql = "SELECT * FROM utenti WHERE email = '$email'";
    $res = $mysqli->query($sql);

    if ($res) {
        $result = $res->fetch_assoc();
    }

    if (password_verify($password, $result['pass'])) {
        echo 'Login effettuato!!';
        $_SESSION['user_login'] = $result;
        session_write_close();
        exit(header('Location: http://localhost/PHP/Progetto%2010/index.php'));
    } else {
        echo 'Password errata!!';
    }
}

function addBook($mysqli, $titolo, $autore, $anno, $genere, $image)
{
    $user = $_SESSION['user_login']['id'];
    if ($user) {
        $sql = "INSERT INTO books (titolo, autore, anno, genere, img, utenti_id) VALUES 
        ('$titolo', '$autore', '$anno', '$genere', '$image', $user)";
        if (!$mysqli->query($sql)) {
            echo ($mysqli->connect_error);
        }
    }
}

function getBook($mysqli, $userId)
{
    $result = [];
    $sql = "SELECT * FROM books WHERE utenti_id = $userId";
    $res = $mysqli->query($sql);
    if ($res) {
        while ($row = $res->fetch_assoc()) {
            $result[] = $row;
        }
    }
    return $result;
}

function updateBook($mysqli, $id, $titolo, $autore, $anno, $genere, $image)
{
    $sql = "UPDATE books SET 
    titolo = '" . $titolo . "', 
    autore = '" . $autore . "', 
    anno = '" . $anno . "', 
    genere = '" . $genere . "', 
    img = '" . $image . "'  
    WHERE id = " . $id;
    if (!$mysqli->query($sql)) {
        echo ($mysqli->connect_error);
    } else {
        echo 'Record aggiornato con successo';
    }
}

function deleteBook($mysqli, $id)
{
    if (!$mysqli->query('DELETE FROM books WHERE id = ' . $id)) {
        echo ($mysqli->connect_error);
    } else {
        echo 'Record eliminato!';
    }
}

function getAllBooks($mysqli)
{
    $result = [];
    $sql = "SELECT * FROM books";
    $res = $mysqli->query($sql);
    if ($res) {
        while ($row = $res->fetch_assoc()) {
            $result[] = $row;
        }
    }
    return $result;
}

function updateUser($mysqli, $id, $firstname, $lastname, $username, $city, $image)
{
    $sql = "UPDATE utenti SET 
    firstname = '" . $firstname . "', 
    lastname = '" . $lastname . "', 
    username = '" . $username . "', 
    city = '" . $city . "', 
    img = '" . $image . "'  
    WHERE id = " . $id;
    if (!$mysqli->query($sql)) {
        echo ($mysqli->connect_error);
    } else {
        $_SESSION['user_login']['firstname'] = $firstname;
        $_SESSION['user_login']['lastname'] = $lastname;
        $_SESSION['user_login']['username'] = $username;
        $_SESSION['user_login']['city'] = $city;
        $_SESSION['user_login']['img'] = $image;

        echo 'Profilo aggiornato con successo';
    }
}

function deleteUser($mysqli, $id)
{
    if (!$mysqli->query('DELETE FROM utenti WHERE id = ' . $id)) {
        echo ($mysqli->connect_error);
    } else {
        echo 'Profilo eliminato!';
    }
}
?>