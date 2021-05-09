<?php

use Fuel\Core\Asset;
use Fuel\Core\Session;

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title><?=  $title?></title>
    <?= Asset::css('bootstrap.css')?>
    <?= Asset::css('style.css')?>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/articles">Mon site Fuel PHP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/articles">Liste des articles</a>
                </li>
            </ul>
        </div>
        <span class="navbar-text">
            <?= Session::get('username') ?>
        </span>
        <a class="btn btn-bd-download d-none d-lg-inline-block mb-3 mb-md-0 ml-md-3" href="/auth/logout/">Log Out</a>
    </nav>
    <div class="container">
        <?= $content ?>
    </div>
</body>
</html>



