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
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMznIG72qeQsLsPMFTXeZsNvbM3Hmw7NVGAg&usqp=CAU"
                    style="width: 3rem;"> Library</a>
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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Books
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Coding</a></li>
                            <li><a class="dropdown-item" href="#">Programming Languages</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Authors</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
    </nav>

    <h1 id="login" class="text-success fw-bold text-center" style="margin-top: 5rem;">Login</h1>
    <form id="customForm" method="post" action="controller.php?action=login" class="border border-3 border-success">
        <div class="row mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="customInput" name="email" placeholder="name@example.com"
                class="row mb-3">
            <label for="inputPassword5" class="form-label mt-3">Password</label>
            <input type="password" id="customInput" class="form-control" name="password">
        </div>
        </div>
        <div>
            <button type="submit" class="btn btn-success mt-3 mb-3">Login</button>
        </div>
        <a href="register.php" href="login.php">Non ti sei ancora registrato? Registrati subito!</a>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>