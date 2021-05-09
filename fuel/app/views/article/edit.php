<?php

use Fuel\Core\Form;
use Fuel\Core\Session;

?>

<section class="OneArticle">
    <h1>Modifier un article</h1>
    <?= Form::open( array("action" => "articles/edit/".$article->id)); ?>
    <div>Titre</div>
    <?= Form::input("title", $article->title ) ?>
    <div>Contenu</div>
    <?= Form::textarea("content", $article->content) ?>
    <?= Form::submit("submit", "Sauvegarder") ?>
    <?= Form::close() ?>
</section>