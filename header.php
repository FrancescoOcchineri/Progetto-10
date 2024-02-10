<?php
if (isset($_SESSION['user_login'])) {
    $user = $_SESSION['user_login'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand text-light fw-bold" href="index.php"><img class="rounded-circle"
                    src="https://cdn-icons-png.flaticon.com/512/7641/7641225.png" style="width: 2rem;"> Library<strong
                    class="text-danger">All</strong></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="index.php"
                            id="homePage">Home</a>
                    </li>
                </ul>
                <?php
                if (isset($user)) {
                    echo '<div class="dropdown dropdown-center">
                    <button type="button" class="btn dropdown-toggle text-light py-2 mx-3" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Hi, ' . $user['username'] . ' <img src="' . $user['img'] . '" alt="' . $user['username'] . '" style="width: 40px; height: 40px;">
                    </button>
                    <ul class="dropdown-menu px-4" id="userUl">
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <a class="text-success" href="profile.php">Profile</a>
                            <a class="mt-1 text-success" href="books.php?id=' . $user['id'] . '">Add Books</a>
                            <a class="mt-1 text-success" href="controller.php?action=logout">Logout</a>
                        </div>
                    </ul>
                </div>';
                }
                ?>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>