
<div class="main-container" style="max-width: 80%; margin: 50px auto;">
   <h2>Account</h2>
   <?php
   if($vars['data'] !== NULL){
      $info = $vars['data'];
   }else{
      $info = $vars['user'];
   }

   ?>
     <form action="/account/<?php echo $_SESSION['user_id'];?>" method="POST">
       <div class="form-group" style="margin: 30px auto;">
         <label for="inputFirstname">Firstname</label>
         <input type="text" class="form-control" name="firstname" id="inputFirstname" value="<?php echo $_SESSION['firstname'];?>" />
         <p class="invalid" style="color: red; font-weight: bold;"><?= $info['firstnameError']; ?></p>
       </div>
       <div class="form-group" style="margin: 30px auto;">
         <label for="inputLastname">Lastname</label>
         <input type="text" class="form-control" name="lastname" id="inputLastname" value="<?php echo $_SESSION['lastname'];?>" />
         <p class="invalid" style="color: red; font-weight: bold;"><?= $info['lastnameError']; ?></p>
       </div>

       <div class="form-group" style="margin: 30px auto;">
         <label for="inputEmail">Email</label>
         <input type="email" class="form-control" name="email" id="inputEmail" value="<?php echo $_SESSION['email'];?>" />
         <p class="invalid" style="color: red; font-weight: bold;"><?= $info['emailError']; ?></p>
       </div>


       <div class="form-group" style="margin: 30px auto;">
         <label for="inputPassword">Password</label>
         <?php if(empty($info['password']) || strlen($info['password']) < 7) : ?>
              <input type="text" class="form-control" name="password" id="inputPassword" value="<?php echo $vars['user']['password']; ?>">
         <?php elseif(password_verify($info['password'] , $_SESSION['password'])) : ?>
              <input type="text" class="form-control" name="password" id="inputPassword" value="<?php echo $info['password']; ?>">
         <?php endif; ?>
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
