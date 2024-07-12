<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="" />
  
  <link href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900|Oswald:400,700" rel="stylesheet">

  <link rel="stylesheet" href="aseets/fonts/icomoon/style.css">
  <link rel="stylesheet" href="aseets/css/bootstrap.min.css">
  <link rel="stylesheet" href="aseets/css/magnific-popup.css">
  <link rel="stylesheet" href="aseets/css/jquery-ui.css">
  <link rel="stylesheet" href="aseets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="aseets/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="aseets/fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="aseets/css/aos.css">
  <link rel="stylesheet" href="aseets/css/fancybox.min.css">
  <link rel="stylesheet" href="aseets/css/style.css">
  <title>Login</title>
</head>
<body>
        <div class="container">
            <h2>Login</h2>
            <?php if (session()->getFlashdata('error')) : ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
            <?php endif; ?>
            <form action="<?= base_url('/login/auth') ?>" method="post">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>

        <!-- jQuery -->
        <script type="text/javascript" src="<?= base_url('assets-landing/js/jquery-3.4.1.min.js') ?>"></script>
        <!-- Bootstrap JS -->
        <script type="text/javascript" src="<?= base_url('assets-landing/js/bootstrap.js') ?>"></script>
   


  <script src="aseets/js/jquery-3.3.1.min.js"></script>
  <script src="aseets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="aseets/js/jquery.easing.1.3.js"></script>
  <script src="aseets/js/jquery-ui.js"></script>
  <script src="aseets/js/popper.min.js"></script>
  <script src="aseets/js/bootstrap.min.js"></script>
  <script src="aseets/js/owl.carousel.min.js"></script>
  <script src="aseets/js/jquery.stellar.min.js"></script>
  <script src="aseets/js/jquery.countdown.min.js"></script>
  <script src="aseets/js/jquery.magnific-popup.min.js"></script>
  <script src="aseets/js/aos.js"></script>
  <script src="aseets/js/lozad.min.js"></script>
  <script src="aseets/js/jquery.fancybox.min.js"></script>
  <script src="aseets/js/main.js"></script>
</body>
</html>
