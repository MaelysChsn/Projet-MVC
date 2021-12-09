<div class="main-container" style="max-width: 1230px; margin: 50px auto;">
  <div class="row mb-2">
      <div class="mb-3">
        <a href="/updatepost" type="button" class="btn btn-primary">Update</a>
        <a type="button" class="btn btn-outline-danger">Delete</a>
      </div>
      <?php
        foreach ($vars as $article):
          ?>
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
