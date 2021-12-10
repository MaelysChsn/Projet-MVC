<div class="main-container" style="max-width: 80%; margin: 50px auto;">
    <h2>Register</h2>
    <form action="/register" method="POST">
      <div class="form-group">
        <label for="inputFirstname">Firstname</label>
        <input type="text" class="form-control" id="inputFirstname"  name="firstname" placeholder="Enter Firstname">
        <p class="invalid" style="color: red; font-weight: bold;"><?= $vars['fistnameError']; ?></p>
      </div>
      <div class="form-group">
        <label for="inputLastname">Lastname</label>
        <input type="text" class="form-control" id="inputLastname" name="lastname" placeholder="Enter Lastname">
        <p class="invalid" style="color: red; font-weight: bold;"><?= $vars['lastnameError']; ?></p>
      <div class="form-group">
        <label for="inputEmail">Email</label>
        <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Enter Email">
        <p class="invalid" style="color: red; font-weight: bold;"><?= $vars['emailError']; ?></p>

      </div>
      <div class="form-group">
        <label for="inputPassword">Password</label>
        <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Enter Password">
        <p class="invalid" style="color: red; font-weight: bold;"><?= $vars['passwordError']; ?></p>
      </div>
      <div class="form-group">
        <label for="inputAdmin">Admin</label>
        <input class="form-check-input" type="checkbox" name="isAdmin" id="inputAdmin" value="1">
      </div>
      <button type="submit" class="btn btn-primary">Register</button>
    </form>

    <p>You already have an account ? <a href="/" class="link-success">Login</a></p>
</div>
