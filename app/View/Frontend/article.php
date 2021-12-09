<div class="main-container" style="max-width: 80%; margin: 50px auto;">
  <div class="row mb-2">
    <a href="/show" type="button" class="btn btn-warning" style="width:auto;margin:0px 20px;">Return</a>
      <?php
        foreach ($vars as $article):
          ?>
          <div class="mb-3" style="width:100%;display:flex; flex-direction: row; justify-content: flex-end;">
            <a href="/update/<?= $article->getId();?>" type="button" class="btn btn-primary" style="margin:0px 20px;">Update</a>
            <form class="" action="/delete/<?= $article->getId();?>" method="POST">
              <input type="submit" class="btn btn-outline-danger" value="Delete">
            </form>

          </div>

            <article class="blog-post">
              <h2 class="blog-post-title"><?= $article->getTitle(); ?></h2>
              <p class="blog-post-meta"><?= $article->getCurrentDate(); ?>
              <p><?= $article->getContent(); ?><p>
            </article>
          <?php
        endforeach;

    ?>

    <div class="row mb-2">
      <form>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Author</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Comments</label>
          <textarea type="password" class="form-control" id="exampleInputPassword1"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Post comment</button>
      </form>
    </div>




  </div>
</div>
