<div class="main-container" style="max-width: 1230px; margin: 50px auto;">
  <h2>Our articles</h2>
  <div class="row mb-2">
      <?php
      foreach ($vars as $article) :
      ?>
        <div class="col-md-6">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-primary">Post</strong>
              <h3 class="mb-0"><?= $article->getTitle(); ?></h3>
              <div class="mb-1 text-muted"><?= $article->getCurrentDate(); ?></div>
              <p class="card-text mb-auto"><?= substr($article->getContent(), 0, 150); ?>...</p>
              <a class="btn btn-outline-primary" href="/article/<?= $article->getId(); ?>">Lire plus</a>
            </div>
            <div class="col-auto d-none d-lg-block">
              <img src="https://picsum.photos/200/300?random=2">
            </div>
          </div>
        </div>
    <?php
        endforeach;

    ?>
  </div>
</div>
