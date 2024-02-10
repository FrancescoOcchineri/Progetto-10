<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/mdb-ui-kit@3.3.0/css/mdb.min.css" rel="stylesheet">
</head>

<body>
    <section class="vh-100 bg-image" style="background-color: #619a69;">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Create an account</h2>

                                <form method="post" action="controller.php?action=register"
                                    enctype="multipart/form-data">

                                    <div class="form-outline mb-4">
                                        <input type="text" id="form3Example1cg" class="form-control form-control-lg"
                                            name="firstname" />
                                        <label class="form-label" for="form3Example1cg">Your Name</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="text" id="form3Example1cg" class="form-control form-control-lg"
                                            name="lastname" />
                                        <label class="form-label" for="form3Example1cg">Your Lastname</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="text" id="form3Example1cg" class="form-control form-control-lg"
                                            name="username" />
                                        <label class="form-label" for="form3Example1cg">Your Username</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="email" id="form3Example3cg" class="form-control form-control-lg"
                                            name="email" />
                                        <label class="form-label" for="form3Example3cg">Your Email</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" id="form3Example4cg" class="form-control form-control-lg"
                                            name="password" />
                                        <label class="form-label" for="form3Example4cg">Password</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="text" id="form3Example4cg" class="form-control form-control-lg"
                                            name="city" />
                                        <label class="form-label" for="form3Example4cg">Your City</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input class="form-control" name="image" type="file">
                                    </div>


                                    <div class="d-flex justify-content-center">
                                        <button id="btn" type="submit"
                                            class="btn btn-dark btn-block btn-lg gradient-custom-4 text-light">Register</button>
                                    </div>

                                    <p class="text-center text-muted mt-5 mb-0">Have already an account? <a
                                            href="login.php" class="fw-bold text-body"><u>Login here</u></a></p>

                                </form>

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