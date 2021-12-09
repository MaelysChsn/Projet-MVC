<div class="main-container" style="max-width: 80%; margin: 50px auto;">
    <?php var_dump($data); ?>
    <h2>Login</h2>
    <form action="/register" method="POST">
      <div class="form-group">
        <label for="inputFirstname">Firstname</label>
        <input type="text" class="form-control" id="inputFirstname"  name="firstname" placeholder="Enter Firstname">
         <div class="invalid-feedback"><?php echo $data['firstnameError']?></div>
      </div>
      <div class="form-group">
        <label for="inputLastname">Lastname</label>
        <input type="text" class="form-control" id="inputLastname" name="lastname" placeholder="Enter Lastname">
        <div class="">
            <p>
            <?php echo $data['lastnameError']; ?></p></div>
      </div>
      <div class="form-group">
        <label for="inputEmail">Email</label>
        <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Enter Email">
        <div class="invalid-feedback"><?php echo $data['emailError']?></div>
      </div>
      <div class="form-group">
        <label for="inputPassword">Password</label>
        <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Enter Password">
        <div class="invalid-feedback"><?php echo $data['passwordError']?></div>
      </div>
      <div class="form-group">
        <label for="inputAdmin">Admin</label>
        <input class="form-check-input" type="checkbox" id="inputAdmin" value="admin">
      </div>
      <button type="submit" class="btn btn-primary">Register</button>
    </form>

    <p>You already have an account ? <a href="/" class="link-success">Login</a></p>
</div>
