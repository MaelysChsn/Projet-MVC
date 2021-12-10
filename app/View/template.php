<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../../Assets/css/main.css" media=”screen” />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title><?= $title; ?></title>
  </head>
  <body>
    <header class="p-3 bg-dark text-white">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
          </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="/" class="nav-link px-2 text-secondary">Home</a></li>
            <?php if(isset($_SESSION['user_id'])) :  ?>
                <li><a href="/add" class="nav-link px-2 text-white">Write Posts</a></li>
            <?php if($_SESSION['is_admin'] === "1" ) :  ?>
                    <li><a href="/user" class="nav-link px-2 text-white">Users</a></li>
                <?php else : ?>
                    <li><a href="/account/<?php echo $_SESSION['user_id'];?>" class="nav-link px-2 text-white">Account</a></li>
                  <?php endif;
            endif; ?>

            </ul>


          <div class="text-end">
            <?php if(!isset($_SESSION['user_id'])) :  ?>
              <a href="/login" type="button" class="btn btn-outline-light me-2">Login</a>
              <a href="/register" type="button" class="btn btn-warning">Register</a>
            <?php else : ?>
              <a href="/logout" type="button" class="btn btn-outline-light me-2">Logout</a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </header>
      <?= $content; ?>

  </body>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
