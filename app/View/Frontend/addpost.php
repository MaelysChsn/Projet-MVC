
<div class="main-container" style="max-width: 80%; margin: 50px auto;">
   <h2>New post</h2>
   <form action="/add" method="POST"  enctype="multipart/form-data">
     <div class="form-group" style="margin: 30px auto;">
       <label for="inputTitle">Title</label>
       <input type="text" class="form-control" name="title" id="inputTitle" aria-describedby="titleHelp" placeholder="Enter title">
       <p class="invalid" style="color: red; font-weight: bold;"><?= $vars['titleError']; ?></p>
     </div>
     <div class="form-group" style="margin: 30px auto;">
       <label for="InputContent">Post</label>
       <textarea type="text" class="form-control" name="content" id="InputContent" placeholder="Your content" style="min-height: 30vh;"></textarea>
       <p class="invalid" style="color: red; font-weight: bold;"><?= $vars['contentError']; ?></p>

     </div>

     <div class="form-group" style="margin: 30px auto;">
       <label for="InputImage">Files</label>
       <input type="file" class="form-control" name="image">
       <p class="invalid" style="color: red; font-weight: bold;"><?= $vars['fileError']; ?></p>

     </div>

     <button type="submit" class="btn btn-primary">Publish post</button>
  </form>

</div>
