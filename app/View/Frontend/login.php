<div class="main-container" style="max-width: 80%; margin: 50px auto;">
    <h2>Login</h2>
    <p class="invalid" style="color: red; font-weight: bold;"><?= $vars['data']['errorLog']; ?></p>
    <form action="/login" method="POST">
      <div class="form-group">
        <label for="inputEmail">Email</label>
        <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Enter Email">
       <p class="invalid" style="color: red; font-weight: bold;"><?= $vars['data']['emailError']; ?></p>

      </div>
      <div class="form-group">
        <label for="inputPassword">Password</label>
        <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Enter Password">
         <p class="invalid" style="color: red; font-weight: bold;"><?= $vars['data']['passwordError']; ?></p>
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
    </form>

    <p>You don't have an account ? <a href="/register" class="link-success">Create an account</a></p>
</div>
