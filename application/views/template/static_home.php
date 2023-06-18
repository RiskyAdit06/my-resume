<!doctype html>
<html lang="en">

<head>
  <title>Radit-My Resume</title>
  <meta charset="UTF-8">
  <meta name="description" content="Radit-My Resume">
  <meta name="keywords" content="personal, portfolio">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Favicon -->
  <link href="favicon.html" rel="shortcut icon" type="image/x-icon" />

  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?=base_url() ?>assets/css/main.css" />

  <!-- Google Web fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

  <!-- Font icons -->
  <link rel="stylesheet" href="<?=base_url() ?>assets/icon-fonts/flat-icon/flaticon.css" />
  <link rel="stylesheet" href="<?=base_url() ?>assets/icon-fonts/font-awesome/css/all.min.css" />

</head>

<body class=" dark-version without-wrapper">

  <!-- Preloader  -->
  <div id="loader" class="preloader">
    <div class="loading">
      <div class="profile-image">
        <svg style="position: absolute;" width="100px" height="100px" viewBox="0 0 100 100" preserveAspectRatio="none">
          <circle class="js-circle circle" cx="50" cy="50" r="48" stroke="white" stroke-width="2" fill="none" />
          <circle class="js-circle circletwo" cx="50" cy="50" r="48" stroke="white" stroke-width="2" fill="none" />
        </svg>
      </div>
    </div>
  </div>
  <!-- Preloader End -->


  <div class="page-cover">
    <div id="page-scroll">
      <div class="barba-wrapper" data-barba="wrapper">
        <main class="onepage" data-barba="container">
          <!-- Page Wrapper -->
          <div class="container">
            <div class="page-wrapper">

              <header id="fixed">
                <div class="hamburger hamburger--elastic"> 
                  <span class="hamburger-box"> <span class="hamburger-inner"></span> </span> 
                </div>
                <nav>
                  <ul>
                    <li><a class="active" href="#home">Home</a></li>
                    <li><a href="#resume">Resume</a></li>
                    <li><a href="#skill">Skill</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                  </ul>
                </nav>
              </header>
              
              <?= $contents; ?>

              <!-- FOOTER -->
              <footer>
                <div class="container">
                  <div class="footer-inner">
                    <div class="copyright">
                      <p>Copyright 2022 - All right reserved</p>
                    </div>
                    <ul class="social">
                      <li><a target="_blank" href="https://www.facebook.com/RiskyAdit06/">Facebook</a></li>
                      <li><a target="_blank" href="https://twitter.com/Risky_adit06">Twitter</a></li>
                      <li><a target="_blank" href="https://www.instagram.com/raditp06/">Instagram</a></li>
                      <li><a target="_blank" href="https://www.linkedin.com/in/risky-adit-pratama-414726209/">LinkedIn</a></li>
                    </ul>
                  </div>
                </div>
              </footer>
            </main>
          </div>
        </div>
      </div>

      <!-- Javascripts -->
      <script src="<?=base_url() ?>assets/js/jquery.js"></script>
      <script src="<?=base_url() ?>assets/js/plugins.js"></script>
      <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB3gqyHylICdokv-P1q2WtRihCFhiFnm_U&amp;sensor=false"></script>
      <script src="<?=base_url() ?>assets/js/map.js"></script>
      <script src="<?=base_url() ?>assets/js/main.js"></script>

    </body>
    </html>