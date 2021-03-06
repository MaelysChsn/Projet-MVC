
<div class="main-container" style="max-width: 80%; margin: 50px auto;">
   <h2>Update User</h2>
   <?php
   if($vars['data'] !== NULL){
      $info = $vars['data'];
   }else{
      $info = $vars['user'];
   }

   ?>
     <form action="/updateUser/<?php echo $info['id'];?>" method="POST">
       <div class="form-group" style="margin: 30px auto;">
         <label for="inputFirstname">Firstname</label>
         <input type="text" class="form-control" name="firstname" id="inputFirstname" value="<?php echo $info['firstname'];?>" />
         <p class="invalid" style="color: red; font-weight: bold;"><?= $info['firstnameError']; ?></p>
       </div>
       <div class="form-group" style="margin: 30px auto;">
         <label for="inputLastname">Lastname</label>
         <input type="text" class="form-control" name="lastname" id="inputLastname" value="<?php echo $info['lastname'];?>" />
         <p class="invalid" style="color: red; font-weight: bold;"><?= $info['lastnameError']; ?></p>
       </div>

       <div class="form-group" style="margin: 30px auto;">
         <label for="inputEmail">Email</label>
         <input type="email" class="form-control" name="email" id="inputEmail" value="<?php echo $info['email'];?>" />
         <p class="invalid" style="color: red; font-weight: bold;"><?= $info['emailError']; ?></p>
       </div>


       <div class="form-group" style="margin: 30px auto;">
         <label for="inputPassword">Password</label>
         <input type="text" class="form-control" name="password" id="inputPassword" value="<?php echo $info['password']; ?>">
         <p class="invalid" style="color: red; font-weight: bold;"><?= $info['passwordError']; ?></p>

       </div>


       <div class="form-group">
         <label for="inputAdmin">Admin</label>
         <?= $info['is_admin'] === "1" ? '<input class="form-check-input" type="checkbox" id="inputAdmin" name="isAdmin" value="1" checked="checked"/>' : '<input class="form-check-input" type="checkbox" id="inputAdmin"  name="isAdmin" value="1" />';
         ?>
       </div>

       <br>
       <button type="submit" class="btn btn-primary">Update infos</button>
    </form>



</div>
