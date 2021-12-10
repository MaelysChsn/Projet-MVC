<div class="main-container" style="max-width: 80%; margin: 50px auto;">
  <div class="row mb-2">
    <a href="/" type="button" class="btn btn-warning" style="width:auto;margin:0px 20px;">Return</a>

          <div class="mb-3" style="width:100%;display:flex; flex-direction: row; justify-content: flex-end;">

            <?php if($_SESSION['is_admin']) :  ?>
              <a href="/update/<?= $vars['article']->getId();?>" type="button" class="btn btn-primary" style="margin:0px 20px;">Update</a>
              <form class="" action="/delete/<?= $vars['article']->getId();?>" method="POST">
                <input type="submit" class="btn btn-outline-danger" value="Delete">
              </form>
            <?php elseif($_SESSION['user_id'] === $vars['article']->getUserId()) :  ?>
              <a href="/update/<?= $vars['article']->getId();?>" type="button" class="btn btn-primary" style="margin:0px 20px;">Update</a>

            <?php endif; ?>
          </div>

          <article class="blog-post">
            <p class="blog-post-meta">Écrit par:
              <?php
                $users = $vars['modelUser']->getUserByID($vars['article']->getUserId());

                if($users){
                    echo $users->getFirstname().' '. $users->getLastname();
                }
              ?>
            </p>
            <h2 class="blog-post-title"><?= $vars['article']->getTitle(); ?></h2>
            <p class="blog-post-meta">Le <?= $vars['article']->getCurrentDate(); ?>
            <p><?= $vars['article']-> getContent(); ?><p>
          </article>

          <?php if(isset($_SESSION['user_id'])) : ?>
            <div class="row mb-2">
              <form action="/addComment/<?= $vars['article']->getId();?>" method="POST">
                <div class="form-group" style="margin: 30px auto;">
                  <label for="inputAuhtor">Author</label>
                  <input type="text" class="form-control" name="author" id="inputAuhtor" aria-describedby="titleHelp" value="<?php echo $_SESSION['firstname'].' '. $_SESSION['lastname'] ?>" disabled>

                </div>
                <div class="form-group" style="margin: 30px auto;">
                  <label for="InputComment">Comments</label>
                  <textarea type="text" class="form-control" name="content" id="InputComment" placeholder="Your comment" style="min-height: 30vh;"></textarea>

                </div>
                <button type="submit" class="btn btn-primary">Publish post</button>
             </form>
            </div>
        <?php endif; ?>

    <?php if(!empty($vars['comments'])) : ?>
      <div class="comment-widgets">
        <h3>Comments</h3>
        <?php
          foreach ($vars['comments'] as $comment):
            ?>
          <div class="d-flex flex-row comment-row m-t-0" style='margin: 40px 0px; border: 1px solid black; padding: 20px;'>
              <div class="comment-text w-100">
                  <p class="font-medium">Écrit par :
                    <?php
                      $users = $vars['modelUser']->getUserByID($comment->getUserId());

                      if($users){
                          echo $users->getFirstname().' '. $users->getLastname();
                      }
                    ?>
                  </p>
                  <span class="text-muted float-right">Publié le <?php echo $comment->getDatetime(); ?></span>
                  <p class="text-muted float-right"><?php echo $comment->getContent(); ?></p>

                  <div class="mb-3" style="width:100%;display:flex; flex-direction: row; justify-content: flex-start;">

                    <?php if($_SESSION['is_admin'] || $_SESSION['user_id'] === $comment->getUserId()) :  ?>
                      <form class="" action="/deleteComment/<?= $comment->getId();?>" method="POST">
                        <input type="submit" class="btn btn-outline-danger" value="Delete">
                      </form>
                    <?php endif; ?>
                  </div>
              </div>
          </div>
          <?php
          endforeach;
        ?>

      </div>
    <?php endif; ?>





  </div>
</div>
