</main>
<footer class="bg-black pt-7 pt-md-9 pb-7 pb-md-4">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-12 col-md-auto">
        <img src="<?php image('logo.svg') ?>" alt="Logo">
      </div>
      <div class="col-12 col-md-auto mt-5 mt-md-0">
        <a href="<?php echo home_url('contact') ?>" class="btn btn-accent">Request Consultation</a>
      </div>
    </div>
    <hr class="my-4">
    <div class="row align-items-center justify-content-between">
      <div class="col-12 col-md">
        <?php wp_nav_menu(array(
          'theme_location' => 'footer-menu',
          'menu_class' => 'list-unstyled list-inline mt-3 mt-md-0 mb-0',
          'list_item_class' => 'list-inline-item',
          'container' => 'ul',
        )); ?>
        <hr class="my-4 d-md-none">
      </div>
      <div class="col-12 col-md-auto">
        <a target="_blank" href="https://www.linkedin.com/company/raza-khalil-abbasi-suhrawardy/about/" class="social-icon text-decoration-none">
          <span class="fa-stack fa-lg">
            <i class="fa fa-circle text-white fa-stack-2x"></i>
            <i class="fa fa-linkedin text-dark fa-stack-1x fa-inverse"></i>
          </span>
        </a>
        <a target="_blank" href="https://twitter.com/Rsuhrawardy" class="social-icon text-decoration-none">
          <span class="fa-stack fa-lg">
            <i class="fa fa-circle text-white fa-stack-2x"></i>
            <i class="fa fa-twitter text-dark fa-stack-1x fa-inverse"></i>
          </span>
        </a>
      </div>
    </div>
    <hr class="my-4">
    <p class="text-small text-md-center text-white sub-text m-0">
      <small>
        Copyrights 2022. Ali Raza & Partners LLP. All Rights Reserved. <a
          class="text-decoration-none"
          href="<?php echo home_url( 'privacy-policy' ) ?>">Privacy
          Policy</a> and <a class="text-decoration-none" href="<?php echo home_url( 'terms-and-conditions' ) ?>">Terms &
          Condtions</a></small>
    </p>
  </div>
</footer>
<?php
wp_footer();
?>
</body>

</html>