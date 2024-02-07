<?php
session_start();

if (!isset($_SESSION['user_login'])) {
    $error = 'Non puoi usufruire della pagina se non sei loggato!"';
}

session_write_close();

include 'header.php';
require_once 'config.php';
include_once('function.php');
?>
<h1 style="margin-top: 5rem;">
    <?php if (isset($error)) {
        echo $error;
    } ?>
</h1>

</body>

</html>