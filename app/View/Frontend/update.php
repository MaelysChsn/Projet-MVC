
<div class="main-container" style="max-width: 80%; margin: 50px auto;">
   <h2>Update Post</h2>
   <?php
   foreach ($vars as $post):
   ?>
     <form action="/update/<?= $post->getID();?>" method="POST">
       <div class="form-group" style="margin: 30px auto;">
         <label for="inputTitle">Title</label>
         <input type="text" class="form-control" name="title" id="inputTitle" aria-describedby="titleHelp" value="<?= $post->getTitle();?>">
         <span class="invalid-feedback">
           <?php echo $data['titleError']; ?>
         </span>
       </div>
       <div class="form-group" style="margin: 30px auto;">
         <label for="InputContent">Post</label>
         <textarea type="text" class="form-control" name="content" id="InputContent" style="min-height: 30vh;"><?= $post->getContent();?></textarea>
         <span class="invalid-feedback">
           <?php echo $data['contentError']; ?>
         </span>
       </div>
       <button type="submit" class="btn btn-primary">Update post</button>
    </form>
    <?php
      endforeach;
    ?>
</div>
