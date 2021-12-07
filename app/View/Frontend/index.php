

<h1>Home page</h1>

<?php

    foreach ($var as $article) :
    ?>
    <div class="">
        <h2><?= $article->getTitle(); ?></h2>
        <p><?= substr($article->getContent(), 0, 200); ?></p>
        <a href="/article/<?= $article->getId(); ?>">Lire plus</a>
    </div>


    <?php

?>
