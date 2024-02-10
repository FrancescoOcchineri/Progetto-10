<?php
session_start();

if (!isset($_SESSION['user_login'])) {
    header('Location: http://localhost/PHP/Progetto%2010/login.php');
}

session_write_close();

include 'header.php';
require_once 'config.php';
include_once('function.php');

if (isset($_SESSION['user_login'])) {
    $books = getBook($mysqli, $_SESSION['user_login']['id']);
    $all_books = getAllBooks($mysqli);
    ?>

    <div class="container mt-5 text-center">
        <?php if (count($books) > 0) { ?>
            <h1 class="fw-bold" style="margin-top: 8rem;">Your Books</h1>
            <div id="userBooksCarousel" class="carousel slide mx-auto" data-bs-ride="carousel" data-bs-interval="5000"
                style="width: 80%; margin-top: 4rem;">
                <div class="carousel-inner">
                    <?php
                    $items = 3;
                    $num_books = count($books);
                    $num_slides = ceil($num_books / $items);

                    for ($i = 0; $i < $num_slides; $i++) {
                        echo '<div class="carousel-item';
                        if ($i == 0) {
                            echo ' active';
                        }
                        echo '">';

                        echo '<div class="row justify-content-center">';
                        for ($j = 0; $j < $items; $j++) {
                            $index = $i * $items + $j;
                            if ($index < $num_books) {
                                $book = $books[$index];
                                echo '<div class="col-md-4">';
                                echo '<div class="card mb-3" style="width: 20rem;">
                                <img src="' . $book['img'] . '" class="card-img-top" alt="' . $book['titolo'] . '" style="height: 25rem; height: 30rem">
                                <div class="card-body">
                                    <h4 class="card-title">' . $book['titolo'] . '</h4>
                                    <p class="card-text fw-bold">' . $book['autore'] . '</p>
                                    <span class="badge text-bg-dark">' . $book['genere'] . '</span>
                                    <p class="card-text text-muted" style="font-size: 15px; line-height: 3rem;">Published in ' . $book['anno'] . '</p>
                                </div>
                            </div>';
                                echo '</div>';
                            }
                        }
                        echo '</div>';
                        echo '</div>';
                    }
                    ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#userBooksCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#userBooksCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        <?php } ?>

        <h1 class="fw-bold" style="margin-top: 8rem;">Books in Store</h1>
        <div id="allBooksCarousel" class="carousel slide mx-auto mb-5" data-bs-ride="carousel" data-bs-interval="5000"
            style="width: 90%; margin-top: 4rem;">
            <div class="carousel-inner">
                <?php
                $items_per_row = 4;
                $num_all_books = count($all_books);
                $num_rows = ceil($num_all_books / $items_per_row);

                for ($i = 0; $i < $num_rows; $i++) {
                    echo '<div class="carousel-item';
                    if ($i == 0) {
                        echo ' active';
                    }
                    echo '">';

                    echo '<div class="row justify-content-around">';
                    for ($j = 0; $j < $items_per_row; $j++) {
                        $index = $i * $items_per_row + $j;
                        if ($index < $num_all_books) {
                            $book = $all_books[$index];
                            echo '<div class="col-md-3">
                           <div class="card mb-3" style="width: 18rem; height: 37rem">
                            <img src="' . $book['img'] . '" class="card-img-top" alt="' . $book['titolo'] . '" style="height: 25rem;">
                            <div class="card-body">
                            <h4 class="card-title">' . $book['titolo'] . '</h4>
                            <p class="card-text fw-bold">' . $book['autore'] . '</p>
                            <span class="badge text-bg-dark">' . $book['genere'] . '</span>
                          <p class="card-text text-muted" style="font-size: 15px; line-height: 3rem;">Published in ' . $book['anno'] . '</p>
                            </div>
                            </div>
                            </div>';
                        }
                    }
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#allBooksCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#allBooksCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <?php
    include('footer.php');
}
?>
</body>

</html>