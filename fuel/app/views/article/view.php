<?php use Fuel\Core\Date;
use Fuel\Core\Form;
use Fuel\Core\Session;

if (Session::get_flash('success')) : ?>
    <div class="alert alert-success"> Article enregistré</div>
<?php endif; ?>
<section class="OneArticle">
    <h1><?= $article->title ?></h1>
    <p><?= $article->content ?></p>
    <div class="author">Par <?= $article->user->username ?>, le <?= $article->created_at ?></div>
    <a class="btn btn-primary" href="/articles/edit/<?= $article->id ?>">Modifier</a>

    <?= Form::open( "articles/addComment/".$article->id); ?>
    <?= Form::textarea("content") ?>
    <?= Form::submit("submit", "Ajouter commentaire") ?>
    <?= Form::close() ?>
    <hr>
    <h3>Commentaires</h3>
    <?php foreach ($article->comments as $comment) : ?>

        <section class="comment">
            <p><?= $comment->content ?></p>
            <div class="author">
                de <?= $comment->user->username ?>
                , le <?= $comment->created_at; ?>
            </div>
        </section>

    <?php endforeach; ?>
</section>
<script type="application/javascript">
</script>