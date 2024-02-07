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

    <h1 id="registrazione" class="text-success fw-bold text-center" style="margin-top: 5rem;">Registration</h1>
    <form id="customForm" method="post" action="controller.php?action=register" enctype="multipart/form-data"
        class="row g-3 needs-validation border border-3 border-success" novalidate>
        <div class="col-md-6">
            <label for="validationCustom01" class="form-label">First name</label>
            <input type="text" placeholder="Firstname..." class="form-control" id="customInput" name="firstname"
                required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom02" class="form-label">Last name</label>
            <input type="text" class="form-control" id="customInput" name="lastname" placeholder="LastName..." required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustomUsername" class="form-label">Username</label>
            <input type="text" class="form-control" id="customInput" name="username" placeholder="Username..." required>
            <div class="invalid-feedback">
                Please choose a username.
            </div>
        </div>
        </div>
        <div class="col-md-6">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="customInput" name="email" placeholder="name@example.com">
        </div>
        <div class="col-md-6">
            <label for="inputPassword6" class="form-label">Password</label>
            <input type="password" id="customInput" class="form-control" name="password">
        </div>
        <div class="col-md-6">
            <label for="validationCustom03" class="form-label">City</label>
            <input type="text" class="form-control" id="customInput" name="city" placeholder="City..." required>
            <div class="invalid-feedback">
                Please provide a valid city.
            </div>
        </div>
        <div class="col-md-6">
            <label for="formFile" class="form-label">Default file input example</label>
            <input class="form-control" name="image" type="file" id="customInput">
        </div>
        <div class="col-12">
            <button class="btn btn-success" type="submit">Register</button>
        </div>
        <a href="login.php">Sei già registrato? Fai il login!</a>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>