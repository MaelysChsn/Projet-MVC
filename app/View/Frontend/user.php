
<div class="main-container" style="max-width: 80%; margin: 50px auto;">
  <h2>Users list</h2>
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th></th>
        <th scope="col">Firstname</th>
        <th scope="col">Lastname</th>
        <th scope="col">Email</th>
        <th scope="col">Is Admin</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
        foreach ($vars as $key => $user):
          ?>
          <tr>
            <th scope="row"><?= $key; ?></th>
            <td><?= $user->getFirstname();?></td>
            <td><?= $user->getLastname();?></td>
            <td><?= $user->getEmail();?></td>
            <td>
              <?= $user->getIsAdmin() === "1" ?
                '<input type="checkbox" checked="checked"/>' : '<input type="checkbox"/>';
                ?>
            </td>
            <td>
              <a href="/updateUser/<?= $user->getId();?>" type="button" class="btn btn-primary" style="margin:0px 20px;">Update</a>
              <?php if($_SESSION['user_id'] !== $user->getId()) :  ?>
              <form class="" action="/deleteUser/<?= $user->getId();?>" method="POST" style="display: contents;">
                <input type="submit" class="btn btn-outline-danger" value="Delete">
              </form>
            <?php endif; ?>

            </td>
          </tr>
          <?php
          endforeach;

        ?>
    </tbody>
  </table>

</div>
