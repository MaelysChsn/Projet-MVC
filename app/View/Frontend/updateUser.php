
<div class="main-container" style="max-width: 80%; margin: 50px auto;">
   <h2>Update User</h2>
   <?php
   foreach ($vars as $user):
   ?>
     <form action="/updateUser/<?= $user->getID();?>" method="POST">
       <div class="form-group" style="margin: 30px auto;">
         <label for="inputFirstname">Firstname</label>
         <input type="text" class="form-control" name="firstname" id="inputFirstname" value="<?= $user->getFirstname();?>" />

       </div>
       <div class="form-group" style="margin: 30px auto;">
         <label for="inputLastname">Lastname</label>
         <input type="text" class="form-control" name="lastname" id="inputLastname" value="<?= $user->getLastname();?>" />

       </div>

       <div class="form-group" style="margin: 30px auto;">
         <label for="inputEmail">Email</label>
         <input type="email" class="form-control" name="email" id="inputEmail" value="<?= $user->getEmail();?>" />

       </div>

       <div class="form-group" style="margin: 30px auto;">
         <label for="inputPassword">Password</label>
         <input type="password" class="form-control" name="password" id="inputPassword" value="<?= $user->getPassword();?>">

       </div>

       <div class="form-group">
         <label for="inputAdmin">Admin</label>
         <?= $user->getIsAdmin() === "1" ?
            '<input class="form-check-input" type="checkbox" id="inputAdmin" value="admin" checked="checked"/>' : '<input class="form-check-input" type="checkbox" id="inputAdmin" value="admin" />';
         ?>
       </div>

       <button type="submit" class="btn btn-primary">Update user</button>
    </form>
    <?php
      endforeach;
    ?>
</div>
