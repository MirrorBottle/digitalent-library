

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/main.css">
  </head>

  <body class="text-center" id="login">
    <div class="card">
      <div class="card-body">
        <form action="login.php" class="form-signin" method="POST">
          <i class="lni lni-book fs-1 mb-3 brand-icon"></i>
          <h3 class="h3 mb-3 font-weight-normal text-left">Login</h3>
          <?php if(isset($_GET['denied'])): ?>
            <div class="alert alert-danger p-3 fade show" role="alert">
              <span>Username atau password salah!</span>
            </div>
          <?php endif; ?>
          <div class="input-group mb-3">
            <span class="input-group-text">
              <i class="lni lni-user"></i>
            </span>
            <input type="text" name="username" id="username" class="form-control" placeholder="Username" aria-label="Username"">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">
              <i class="lni lni-key"></i>
            </span>
            <input type="password" name="password" id="password" class="form-control" placeholder="Password" aria-label="Password"">
          </div>
          <button type="submit" class="btn btn-lg btn-primary btn-block w-100">Login</button>
        </form>
      </div>
    </div>
  </body>
</html>