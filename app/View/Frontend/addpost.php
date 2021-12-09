
<div class="main-container" style="max-width: 80%; margin: 50px auto;">
   <h2>New post</h2>
   <form action="/add" method="POST">
     <div class="form-group" style="margin: 30px auto;">
       <label for="inputTitle">Title</label>
       <input type="text" class="form-control" name="title" id="inputTitle" aria-describedby="titleHelp" placeholder="Enter title">
       <span class="invalid-feedback">
         <?php echo $data['titleError']; ?>
       </span>
     </div>
     <div class="form-group" style="margin: 30px auto;">
       <label for="InputContent">Post</label>
       <textarea type="text" class="form-control" name="content" id="InputContent" placeholder="Your content" style="min-height: 30vh;"></textarea>
       <span class="invalid-feedback">
         <?php echo $data['contentError']; ?>
       </span>
     </div>
     <button type="submit" class="btn btn-primary">Publish post</button>
  </form>

</div>
