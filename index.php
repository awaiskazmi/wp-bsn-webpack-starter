<?php
get_header();
?>

<style>
#hero video {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  height: 100%;
  width: 100%;
  object-fit: cover;
}
</style>

<section id="hero" class="bg-dark bg-cover bg-gradient-overlay">
  <video autoplay playsinline muted loop
    poster="<?php image('bg-index-hero.jpg') ?>">
    <source src="<?php video('hero-banner.mp4') ?>" type="video/mp4">
    Your browser does not support the video tag.
  </video>
  <div class="container bg-overlay-front">
    <div class="row min-vh-100 align-items-center">
      <div class="col-12 col-md-10 col-lg-9 mx-auto text-center text-white">
        <h1 class="fw-normal" data-aos="fade-in">A law practice defined by tradition & excellence</h1>
        <p class="sub-heading sub-text mt-4 mb-6" data-aos="fade-in"
          data-aos-delay="400">Our
          hallmark is the untiring
          and
          consistent
          endeavour to be a home of
          master craftsman and educators of law for the next generation of
          craftsman.</p>
        <a href="<?php echo home_url('contact') ?>" data-aos="fade-in"
          data-aos-delay="1200"
          class="btn btn-outline-accent text-white">Request
          Consultation</a>
      </div>
    </div>
  </div>
</section>

<section id="bg-light">
  <div class="container">
    <div class="row align-items-center py-6 py-md-9">
      <div class="col-12 col-md-6 pe-md-6 me-auto" data-aos="fade-up">
        <h2 class="mb-4">A law firm defined by traditions of excellence,
          unquestionable
          professional standards, & innovation.</h2>
        <p>A tradition of excellence, unquestionable ethical and professional
          standards and innovation define AR&amp;P; a Law
          Firm providing a wide array of legal services that facilitate design
          and delivery of comprehensive solutions for each of its clients.</p>
        <p class="mt-5 mt-md-6 mb-6 mb-md-0">
          <a href="<?php echo home_url('about') ?>"
            class="btn btn-outline-accent">Learn more</a>
        </p>
      </div>
      <div class="col-12 col-md-6 ms-auto" data-aos="fade-up"
        data-aos-delay="400">
        <img class="img-fluid w-100 hvr-grow"
          src="<?php image('img-index-intro.png') ?>" alt="Graphic">
      </div>
    </div>
  </div>
</section>

<?php echo do_shortcode('[practice_areas]') ?>

<section id="toggle-info" data-aos="fade-up">
  <div class="container py-9">
    <div class="row">
      <div class="col-12">
        <div class="stacks stack-cards" style="min-height: 570px;">
          <div data-stack="story-and-history" class="stack-heading active">
            <span>Story &amp; History</span>
          </div>
          <div data-stack-content="story-and-history"
            class="stack-content active">
            <div class="card card-body">
              <img class="img-fluid w-100"
                src="<?php image('cards-story.jpg') ?>" alt="Card image">
              <h5 class="mt-0 mt-md-3">Story & History</h5>
              <p class="text-muted">AR&amp;P is the successor of the well-known
                firm
                Awan Raza consequent to restructuring and merger of established
                legal practices in Lahore, Karachi and Peshawar. AR&amp;P has
                offices, each headed by a Resident Partner, in Islamabad,
                Lahore, Karachi and Peshawar headed by Mr. Qayyum Abbasi, Mr.
                Khalil Ullah Khalil respectively.</p>
              <a href="<?php echo home_url('about') ?>"
                class="text-accent fw-semibold text-decoration-none">Learn
                more</a>
            </div>
          </div>
          <div data-stack="values-and-philosophy" class="stack-heading">
            <span>Values &amp; Philosophy
            </span>
          </div>
          <div data-stack-content="values-and-philosophy" class="stack-content">
            <div class="card card-body">
              <img class="img-fluid w-100"
                src="<?php image('cards-story-2.jpg') ?>" alt="Card image">
              <h5 class="mt-0 mt-md-3">Values & Philosophy</h5>
              <p class="text-muted">The Team at AR&amp;P has acquired a prowess
                for developing and executing ingenious legal solutions; each
                unique yet practical and simple to cater to the varied and
                complex commercial interests of our clients. We believe a
                solution exists to every problem if vision is not limited by
                what is obvious or downcast by apparent complexities.</p>
              <a href="<?php echo home_url('about') ?>"
                class="text-accent fw-semibold text-decoration-none">Learn
                more</a>
            </div>
          </div>
          <div data-stack="mission-and-services" class="stack-heading"><span>
              Mission &amp; Services
            </span></div>
          <div data-stack-content="mission-and-services" class="stack-content">
            <div class="card card-body">
              <img class="img-fluid w-100"
                src="<?php image('cards-story-3.jpg') ?>" alt="Card image">
              <h5 class="mt-0 mt-md-3">Mission & Services</h5>
              <p class="text-muted">Our ethos is defined by integrity,
                inclusivity and a formidable commitment to always presenting the
                truth. While our Principal locations in Pakistan include the
                Federal and Provincial capitals, we are also supported by a
                network of associated legal practioners and small firms in
                various other cities, extending our reach.</p>
              <a href="<?php echo home_url('about') ?>"
                class="text-accent fw-semibold text-decoration-none">Learn
                more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
?>