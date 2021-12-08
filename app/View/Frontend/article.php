<div class="main-container" style="max-width: 1230px; margin: 50px auto;">
  <div class="row mb-2">
      <?php
      foreach ($vars as $article) :
      ?>
        <article class="blog-post">
          <img src="https://picsum.photos/200/300?random=2">
          <h2 class="blog-post-title"><?= $article->getTitle(); ?></h2>
          <p class="blog-post-meta"><?= $article->getDatetime(); ?>
          <p><?= $article->getContent(); ?><p>
        </article>
    <?php
        endforeach;

    ?>
  </div>
</div>
