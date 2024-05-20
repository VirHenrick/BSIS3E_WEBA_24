<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="<?= ROOT ?>/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/logindesu.css"> <!-- Link to custom CSS -->
  </head>
  <body>
    <div class="container position-absolute top-50 start-50 translate-middle">
      <form action="" method="POST" class="mt-5 w-50 mx-auto pharmacy-form">
        <h2>Login</h2>

        <?php if(!empty($errors)): ?>
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <?php foreach ($errors as $error): ?>
              <?= $error . "<br>" ?>
            <?php endforeach; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        <?php endif; ?>

        <div class="mb-2">
          <label for="email" class="form-label">Email</label>
          <input type="text" name="email" value="<?= get_var('email') ?>" class="form-control pharmacy-input">
        </div>
        <div class="mb-2">
          <label for="password" class="form-label">Password</label>
          <input type="password" name="password" class="form-control pharmacy-input">
        </div>
        <button type="submit" class="btn btn-primary pharmacy-button">Login</button>
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
