<?php
session_start();
if (!isset($_SESSION['user_login'])) {
    exit(header('Location: http://localhost/PHP/Progetto%2010/login.php'));
}
session_write_close();

include 'header.php';
require_once 'config.php';
include_once('function.php');

$books = getBook($mysqli, $_SESSION['user_login']['id']);
?>

<h1 id="login" class="text-dark fw-bold text-center" style="margin-top: 5rem;">
    <?php echo "Hi " . $_SESSION['user_login']['username'] . '!'; ?>
</h1>
<div class="container d-flex justify-content-center" style="margin-top: 5rem;">
    <div class="card border border-2 border-success" style="width: 50rem;">
        <div class="card-body bg-dark">
            <h2 class="text-white fw-bold">Add your books!</h1>
                <form method="post" action="controller.php?action=addBook" enctype="multipart/form-data"
                    id='form-register' class="mt-3">
                    <div class="mb-3">
                        <label for="titolo" class="form-label text-white fs-5">Title:</label>
                        <input id="customInput" type="text" class="form-control" name="titolo" required>
                    </div>
                    <div class="mb-3">
                        <label for="autore" class="form-label text-white fs-5">Author:</label>
                        <input id="customInput" type="text" class="form-control" name="autore" required>
                    </div>
                    <div class="mb-3">
                        <label for="anno" class="form-label text-white fs-5">Publication year:</label>
                        <input id="customInput" type="text" class="form-control" name="anno" required>
                    </div>
                    <div class="mb-3">
                        <label for="genere" class="form-label text-white fs-5">Genre:</label>
                        <input id="customInput" type="text" class="form-control" name="genere" required>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label text-white fs-5">Book cover:</label>
                        <input class="form-control" name="image" type="file" id="customInput">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-success btn-lg my-3">Add</button>
                    </div>
                </form>
        </div>
    </div>
</div>

<h1 id="login" class="text-dark fw-bold mx-5" style="margin-top: 5rem;">My Books:</h1>

<div class="d-flex justify-content-center">
    <table class="table table-secondary table-hover mt-5" style="width: 150rem;">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Book Cover</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Publication year</th>
                <th scope="col">Genre</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($books as $key => $post) {
                ?>
                <tr>
                    <th scope="row">
                        <?= $key + 1 ?>
                    </th>
                    <td><img src="<?= $post['img'] ?>" width="100"></td>
                    <td>
                        <?= $post['titolo'] ?>
                    </td>
                    <td>
                        <?= $post['autore'] ?>
                    </td>
                    <td>
                        <?= $post['anno'] ?>
                    </td>
                    <td>
                        <?= $post['genere'] ?>
                    </td>
                    <td>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                            data-bs-target="#exampleModal"><i class="bi bi-pencil-square text-white"></i></button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modify Book</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="controller.php?action=update&id=<?= $_post['id'] ?>"
                                            enctype="multipart/form-data"" novalidate>
                                            <div>
                                                <label for=" formFile" class="form-label fs-5">Book
                                            cover:</label>
                                            <input class="form-control" name="image" type="file" id="customInput">
                                    </div>
                                    <div class="mt-3">
                                        <label for="titolo" class="form-label fs-5">Title:</label>
                                        <input id="customInput" type="text" class="form-control" name="titolo" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <label for="autore" class="form-label fs-5">Author:</label>
                                        <input id="customInput" type="text" class="form-control" name="autore" required>
                                        <div class="invalid-feedback">
                                            Please choose a username.
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <label for="anno" class="form-label fs-5">Publication
                                            year:</label>
                                        <input id="customInput" type="text" class="form-control" name="anno" required>
                                    </div>
                                    <div class="mt-3">
                                        <label for="genere" class="form-label fs-5">Genre:</label>
                                        <input id="customInput" type="text" class="form-control" name="genere" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Modify</button>
                                </div>
                            </div>
                        </div>
    </div>
    </form>
    </td>
    <td>
        <form method="post" action="controller.php?action=deleteBook">
            <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
        </form>
    </td>
    </tr>
    <?php
            }
            ?>
</tbody>
</table>
</div>
</body>

</html>