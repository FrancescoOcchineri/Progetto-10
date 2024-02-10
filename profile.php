<link href="https://cdn.jsdelivr.net/npm/mdb-ui-kit@3.3.0/css/mdb.min.css" rel="stylesheet">
<?php
session_start();
if (!isset($_SESSION['user_login'])) {
    exit(header('Location: http://localhost/PHP/Progetto%2010/login.php'));
}
session_write_close();

include("header.php");
include("function.php");
?>

<h1 class="text-center fw-bold" style="margin-top: 6rem;">Edit your profile</h1>

<section class="h-100 gradient-custom-2" style="margin-top: -12rem">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-lg-9 col-xl-7">
                <div class="card">
                    <div class="rounded-top text-white d-flex flex-row" style="background-color: #000; height:210px;">
                        <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                            <img src="<?php echo $user['img']; ?>" alt="<?php echo $user['username']; ?>"
                                class="img-fluid img-thumbnail mb-2"
                                style="margin-top: 4rem; max-width: 150px; max-height: 200px; z-index: 1;">
                        </div>
                        <div class="ms-3" style="margin-top: 130px;">
                            <h5></h5>
                            <p>
                                <?php echo $user['city']; ?>
                            </p>
                            <p>
                                <?php echo $user['username']; ?>
                            </p>
                        </div>
                    </div>
                    <div class="p-4 text-black" style="background-color: #f8f9fa;">
                        <div class="card-body p-4 text-black">
                            <div class="mb-5" style="margin-top: 5rem;">
                                <p class="lead fw-normal mb-1">About</p>
                                <div class="p-4" style="background-color: #f8f9fa;">
                                    <div class="d-flex">
                                        <h5>Firstname:<h5>
                                                <p class="font-italic mx-4">
                                                    <?php echo $user['firstname']; ?>
                                                </p>
                                    </div>
                                    <div class="d-flex">
                                        <h5>Lastname:<h5>
                                                <p class="font-italic mx-4">
                                                    <?php echo $user['lastname']; ?>
                                                </p>
                                    </div>
                                    <div class="d-flex">
                                        <h5>Username:<h5>
                                                <p class="font-italic mx-4">
                                                    <?php echo $user['username']; ?>
                                                </p>
                                    </div>
                                    <div class="d-flex">
                                        <h5>City:<h5>
                                                <p class="font-italic mx-4">
                                                    <?php echo $user['city']; ?>
                                                </p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <button type="button" class="btn btn-outline-dark" data-mdb-ripple-color="dark"
                                            style="z-index: 1; margin-top: 1rem" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            Edit profile
                                        </button>
                                        <div class="modal fade" id="deleteProfileModal" tabindex="-1"
                                            aria-labelledby="deleteProfileModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title text-danger fw-bold"
                                                            id="deleteProfileModalLabel">Delete
                                                            Profile</h5>
                                                        <button type="button" class="btn-close" data-mdb-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Delete your profile and all associated data,
                                                        are you sure?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-mdb-dismiss="modal">Close</button>
                                                        <form method="post"
                                                            action="controller.php?action=deleteProfile&id=<?= $user['id'] ?>"
                                                            enctype="multipart/form-data" novalidate>
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-outline-danger"
                                            data-mdb-ripple-color="danger" style="z-index: 1; margin-top: 1rem"
                                            data-mdb-toggle="modal" data-mdb-target="#deleteProfileModal">
                                            Delete profile
                                        </button>
                                    </div>
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modify Profile
                                                    </h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post"
                                                        action="controller.php?action=updateProfile&id=<?= $user['id'] ?>"
                                                        enctype="multipart/form-data" novalidate>
                                                        <div>
                                                            <label for=" formFile" class="form-label fs-5">Profile
                                                                Image:</label>
                                                            <input class="form-control" name="image" type="file"
                                                                id="customInput">
                                                        </div>
                                                        <div class="mt-3">
                                                            <label for="titolo"
                                                                class="form-label fs-5">Firstname:</label>
                                                            <input id="customInput" type="text" class="form-control"
                                                                name="firstname" value="<?= $user['firstname'] ?>"
                                                                required>
                                                            <div class="valid-feedback">
                                                                Looks good!
                                                            </div>
                                                        </div>
                                                        <div class="mt-3">
                                                            <label for="autore"
                                                                class="form-label fs-5">Lastname:</label>
                                                            <input id="customInput" type="text" class="form-control"
                                                                name="lastname" value="<?= $user['lastname'] ?>"
                                                                required>
                                                            <div class="invalid-feedback">
                                                                Please choose a username.
                                                            </div>
                                                        </div>
                                                        <div class="mt-3">
                                                            <label for="anno" class="form-label fs-5">Username</label>
                                                            <input id="customInput" type="text" class="form-control"
                                                                name="username" value="<?= $user['username'] ?>"
                                                                required>
                                                        </div>
                                                        <div class="mt-3">
                                                            <label for="genere" class="form-label fs-5">City</label>
                                                            <input id="customInput" type="text" class="form-control"
                                                                name="city" value="<?= $user['city'] ?>" required>
                                                        </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Modify</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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