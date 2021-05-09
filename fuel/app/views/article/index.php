
    <h1>La liste des articles</h1>
    <a class="btn btn-success" href="/articles/new">Nouvel article</a>
<?php use Fuel\Core\Str;

foreach ($articles as $article): ?>

    <section class="article">
        <h2>
            <?= $article->title ?>
        </h2>
        <p>
            <?= Str::truncate($article->content, 300) ?>
        </p>
        <div class="author">Par <?= $article->user->username ?>, le <?= $article->created_at ?></div>
        <a class="btn btn-primary" href="/articles/view/<?= $article->id ?>">Lire</a>
        <a class="btn btn-dark" href="/articles/edit/<?= $article->id ?>">Modifier</a>
    </section>

<?php endforeach; ?>
