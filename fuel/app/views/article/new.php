<?php

use Fuel\Core\Form;
use Fuel\Core\Session;

?>

<section class="OneArticle">
    <h1>Nouvel Article</h1>
    <?= Form::open( "articles/new/"); ?>
    <div>Titre</div>
    <?= Form::input("title" ) ?>
    <div>Contenu</div>
    <?= Form::textarea("content") ?>
    <?= Form::submit("submit", "Créer") ?>
    <?= Form::close() ?>
</section>