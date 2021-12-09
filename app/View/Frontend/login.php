<div class="main-container" style="max-width: 80%; margin: 50px auto;">
    <h2>Login</h2>
    <form action="/login" method="POST">
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
      <button type="submit" class="btn btn-primary">Login</button>
    </form>

    <p>You don't have an account ? <a href="/register" class="link-success">Create an account</a></p>
</div>
