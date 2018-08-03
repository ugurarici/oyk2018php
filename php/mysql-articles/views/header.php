<!doctype html>
<html lang="tr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="assets/bootstrap.min.css">
  <title>Makaleler</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
    <a class="navbar-brand" href="index.php">Makaleler</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Ana sayfa</a>
        </li>
        <?php if (isset($_SESSION['username'])): ?>
          <li class="nav-item">
              <a class="nav-link disabled" href="#" disabled>
            Hoş geldiniz <?=$_SESSION['username']?>
            <?php if (isset($_SESSION['is_admin'])): ?>
              <?php if ($_SESSION['is_admin']): ?>
                (Yönetici)
              <?php endif?>
            <?php endif?>
          </a>
          </li>
        <?php endif;?>
      </ul>
    </div>
    </div>
  </nav>
  <div class="container">
