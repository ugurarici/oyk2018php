<?php include __DIR__."/../header.php" ?>
<div class="row">
  <div class="col-sm-4 offset-sm-4">
<form class="form-signin" method="post">
  <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Üye Olun</h1>
  <label for="inpUserName" class="sr-only">Kullanıcı Adı</label>
  <input type="text" name="username" id="inpUserName" class="form-control" placeholder="Kullanıcı Adı" required autofocus>
  <label for="inputPassword" class="sr-only">Parola</label>
  <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Parola" required>
  <input type="password" name="password_confirmation" id="inputPasswordConfirmation" class="form-control" placeholder="Parola Doğrulama" required>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Üye Ol</button>
</form>
</div>
</div>
<?php include __DIR__."/../footer.php" ?>
