<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/mdb-ui-kit@3.3.0/css/mdb.min.css" rel="stylesheet">
</head>

<body>

    <section class="vh-100" style="background-color: #619a69;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="https://wallpapercave.com/wp/wp2298202.jpg" alt="login form" class="img-fluid"
                                    style="border-radius: 1rem 0 0 1rem; width: 30rem" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form method="post" action="controller.php?action=login">

                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <p class="fw-bold h1 fw-bold mb-0" href="index.php"><img
                                                    class="rounded-circle"
                                                    src="https://cdn-icons-png.flaticon.com/512/7641/7641225.png"
                                                    style="width: 3rem;"> Library<strong
                                                    class="text-danger">All</strong></p>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your
                                            account</h5>

                                        <div class="form-outline mb-4">
                                            <input type="email" id="form2Example17" class="form-control form-control-lg"
                                                name="email" />
                                            <label class="form-label" for="form2Example17">Email address</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="form2Example27"
                                                class="form-control form-control-lg" name="password" />
                                            <label class="form-label" for="form2Example27">Password</label>
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                                        </div>
                                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a
                                                href="register.php" style="color: #393f81;">Register here</a></p>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/mdb-ui-kit@3.3.0/js/mdb.min.js"></script>
</body>

</html>