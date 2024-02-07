<?php

$config = [
    'mysql_host' => 'localhost',
    'mysql_user' => 'root',
    'mysql_password' => ''
];

$mysqli = new mysqli(
    $config['mysql_host'],
    $config['mysql_user'],
    $config['mysql_password']
);
if ($mysqli->connect_error) {
    die($mysqli->connect_error);
}

$sql = 'CREATE DATABASE IF NOT EXISTS gestione_libreria';
if (!$mysqli->query($sql)) {
    die($mysqli->connect_error);
}

$mysqli->query('USE gestione_libreria');

$sql = 'CREATE TABLE IF NOT EXISTS utenti (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    firstname VARCHAR(255) NOT NULL,
    lastname VARCHAR(255) NOT NULL,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    pass VARCHAR(100) NOT NULL,
    city VARCHAR(255) NULL,
    img VARCHAR(255) NULL
  )';

if (!$mysqli->query($sql)) {
    die($mysqli->error);
}

$sql = 'CREATE TABLE IF NOT EXISTS books (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    titolo VARCHAR(255) NOT NULL,
    autore VARCHAR(255) NOT NULL,
    anno INT NOT NULL,
    genere VARCHAR(255) NOT NULL,
    img VARCHAR(255) NOT NULL,
    utenti_id INT NOT NULL,
    FOREIGN KEY (utenti_id) REFERENCES utenti (id) ON DELETE CASCADE ON UPDATE CASCADE
    )';
if (!$mysqli->query($sql)) {
    die($mysqli->connect_error);
}

?>