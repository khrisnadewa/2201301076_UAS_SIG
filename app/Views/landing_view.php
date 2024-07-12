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
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
  <style>
      #map { height: 500px; width: 100%; }
  </style>
  <title>Snap &mdash; Free Photography Website Template by Untree.co</title>
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="200">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <header class="header-bar d-flex d-lg-block align-items-center site-navbar-target" data-aos="fade-right">
      <div class="site-logo">
        <a href="index.html">Snap</a>
      </div>

      <div class="d-inline-block d-lg-none ml-md-0 ml-auto py-3" style="position: relative; top: 3px;">
        <a href="#" class="site-menu-toggle js-menu-toggle ">
          <span class="icon-menu h3"></span>
        </a>
      </div>

      <div class="main-menu">
        <ul class="js-clone-nav">
          <li><a href="#section-home" class="nav-link">Home</a></li>
          <li><a href="#section-contact" class="nav-link">Contact</a></li>
          <li><a href="login" class="nav-link">Login</a></li>
        </ul>
      </div>
    </header> 

    <main class="main-content">

     

      <section class="site-section" id="section-map">
        <div id="map"></div>
      </section>

      <section class="site-section" id="section-contact">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <h2 class="mb-5 heading">Contact</h2>
              <form action="#">
                <div class="row form-group">
                  <div class="col-md-6 mb-3 mb-md-0">
                    <label class="" for="fname">First Name</label>
                    <input type="text" id="fname" class="form-control">
                  </div>
                  <div class="col-md-6">
                    <label class="" for="lname">Last Name</label>
                    <input type="text" id="lname" class="form-control">
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col-md-12">
                    <label class="" for="email">Email</label> 
                    <input type="email" id="email" class="form-control">
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col-md-12">
                    <label class="" for="subject">Subject</label> 
                    <input type="subject" id="subject" class="form-control">
                  </div>
                </div>
                <div class="row form-group mb-5">
                  <div class="col-md-12">
                    <label class="" for="message">Message</label> 
                    <textarea name="message" id="message" cols="30" rows="7" class="form-control"></textarea>
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col-md-12">
                    <input type="submit" value="Send Message" class="btn btn-primary btn-md">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

      <div class="row justify-content-center">
        <div class="col-md-12 text-center py-5">
          <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a> Distributed By <a href="https://themewagon.com">ThemeWagon</a><!-- License information: https://untree.co/license/ -->
          </p>
        </div>
      </div>
    </main>
  </div> <!-- .site-wrap -->

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
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
  <script>
        var map = L.map('map').setView([-3.316694, 114.590111], 10);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        <?php foreach ($rumah_sakit as $rs): ?>
        L.marker([<?= $rs['lat'] ?>, <?= $rs['long'] ?>]).addTo(map)
            .bindPopup('<b><?= $rs['nama'] ?></b><br><?= $rs['alamat'] ?><br>Telepon: <?= $rs['telepon'] ?><br>Email: <?= $rs['email'] ?>');
        <?php endforeach; ?>
    </script>
</body>
</html>
