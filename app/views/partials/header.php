<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link rel="stylesheet" href="<?= ROOT ?>/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= ROOT ?>/assets/css/headerdesu.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary custom-navbar">
    <div class="container">
      <img src="<?=ROOT?>/assets/images/logs.png" width="80" alt="Logo">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= ROOT ?>/home">Home</a>
          </li>

          <?php if (!empty($_SESSION['USER'])): ?>
          <li class="nav-item">
            <a class="nav-link" href="<?=ROOT?>/stocks">Stocks</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=ROOT?>/sales">Sales</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=ROOT?>/createusers">Users</a>
          </li>
          <?php endif; ?>
        </ul>
        <?php if (empty($_SESSION['USER'])): ?>
          <a href="<?= ROOT ?>/login" class="btn btn-secondary">Login</a>
        <?php else: ?>
          <a href="<?= ROOT ?>/logout" class="btn btn-secondary">Logout</a>
        <?php endif; ?>
      </div>
    </div>
  </nav>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
