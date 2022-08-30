<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Webpack + Bootstrap</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;500;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <?php wp_head(); ?>
</head>

<body>

  <header id="page-header" class="fixed-top page-header-dark">
    <nav class="navbar navbar-dark navbar-expand-lg">
      <div class="container justify-content-between">
        <a class="navbar-brand p-0" href="<?php echo bloginfo( 'siteurl' ) ?>">
          <img src="<?php image('logo-dark.svg') ?>" height="70" alt="Logo">
        </a>
        <button class="navbar-toggler px-0" type="button"
          data-bs-toggle="collapse" data-bs-target="#mobile-menu"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="headerNavbarMenu">
          <?php include get_theme_file_path( 'header-menu-desktop.php' ); ?>
          <a href="#" class="btn btn-accent d-md-none">Request Consultation</a>
        </div>
        <a href="<?php echo home_url('contact') ?>"
          class="btn btn-accent d-none d-lg-block">Request
          Consultation</a>
      </div>
    </nav>
    <nav class="navbar navbar-dark collapse navbar-collapse fixed-top pb-9"
      id="mobile-menu">
      <div class="container justify-content-between">
        <a class="navbar-brand p-0" href="#">
          <img src="<?php image('logo-dark.svg') ?>" height="70" alt="Logo">
        </a>
        <button class="navbar-toggler px-0" type="button"
          data-bs-toggle="collapse" data-bs-target="#mobile-menu"
          aria-expanded="false">
          <span class="text-dark display-5">&times;</span>
        </button>
        <div class="flex-grow-1 flex-shrink-0 w-100 mt-4">
          <?php include get_theme_file_path( 'header-menu.php' ); ?>
          <hr class="my-5">
        </div>
        <div class="mb-9">
          <p><a class="text-decoration-none text-dark"
              href="mailto:info@rkalaw.co">Email:
              info@rkalaw.co</a></p>
          <p><a class="text-decoration-none text-dark"
              href="tel:+924235777797">Phone: +92 42 35777 797</a></p>
        </div>
        <a href="<?php echo home_url('contact') ?>"
          class="btn btn-dark w-100">Request
          Consultation</a>
      </div>
    </nav>
  </header>
  <main>