<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link rel="stylesheet" href="<?= ROOT ?>/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= ROOT?>/assets/css/stheadesu.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <img src="<?=ROOT?>/assets/images/logs.png" width="80" alt="Logo">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <?php if (!empty($_SESSION['USER'])): ?>
          <a class="nav-link active" aria-current="page" href="<?=ROOT?>/staffs">Sales</a>
          <?php endif; ?>
        </ul>
        <?php if (empty($_SESSION['USER'])): ?>
        <?php else: ?>
        <a href="<?= ROOT ?>/logout" class="btn btn-secondary">Logout</a>
        <?php endif; ?>
      </div>
    </div>
  </nav>
</body>

</html>


