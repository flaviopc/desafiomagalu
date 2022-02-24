<?php

if (isset($_COOKIE['login'])) {
    header("Location: sucesso.php");
    die();
}
