@include('home.header')
<!-- Banner section start -->

  <style>
    .about-hero {
      background: linear-gradient(135deg, #1a3e72 0%, #2a5298 100%);
      color: white;
      padding: 100px 0;
      text-align: center;
      position: relative;
      overflow: hidden;
    }
    .about-hero:after {
      content: "";
      position: absolute;
      top: 0;
      right: 0;
      width: 40%;
      height: 100%;
      background: url('temp/custom/assets/img/about-hero-bg.png') no-repeat;
      background-size: contain;
      background-position: right center;
      opacity: 0.1;
    }
    .promo-section {
      padding: 80px 0;
    }
    .single-promo-block {
      background: white;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
      margin-bottom: 30px;
      transition: transform 0.3s;
      height: 100%;
    }
    .single-promo-block:hover {
      transform: translateY(-10px);
    }
    .promo-block-icon span {
      font-size: 2.5rem;
      color: #2a5298;
    }
    .about-us-section {
      padding: 80px 0;
    }
    .about-img-wrap img {
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }
    .feature-tabs-wrap {
      margin-top: 30px;
    }
    .nav-tabs .nav-link {
      color: #2a5298;
      font-weight: 600;
      border: none;
      padding: 15px 25px;
    }
    .nav-tabs .nav-link.active {
      color: #2a5298;
      border-bottom: 3px solid #2a5298;
      background: transparent;
    }
    .feature-content-two {
      background: #f8f9fa;
    }
    .feature-feature-list {
      background: white;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
      margin-bottom: 30px;
      transition: transform 0.3s;
      height: 100%;
    }
    .feature-feature-list:hover {
      transform: translateY(-10px);
    }
    .feature-feature-list span {
      font-size: 2.5rem;
      color: #2a5298;
    }
    .client-section {
      padding: 60px 0;
      background: white;
    }
    .client-img {
      max-height: 50px;
      width: auto;
      filter: grayscale(100%);
      opacity: 0.7;
      transition: all 0.3s;
    }
    .client-img:hover {
      filter: grayscale(0);
      opacity: 1;
    }
    .video-promo-content h2 {
      color: #2a5298;
      margin-bottom: 30px;
    }
    .video-play-icon {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 70px;
      height: 70px;
      background: rgba(42, 82, 152, 0.8);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 30px;
    }
    .video-play-icon:hover {
      background: #2a5298;
      color: white;
    }
  </style>


  <!-- About Hero Section -->
  <section class="about-hero">
    <div class="container">
      <h1>About Upward Saver Bank Corporation</h1>
      <div class="custom-breadcrumb">
        <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
          <li class="list-inline-item breadcrumb-item active">Upward Saver Bank Corporation</li>
        </ol>
      </div>
    </div>
  </section>

  <!-- Promo Section -->
  <section class="promo-section ptb-100">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-lg-4">
          <div class="single-promo-block p-3 rounded d-flex justify-content-between">
            <div class="promo-block-icon mr-4">
              <span class="ri-shield-check-line icon-md color-primary"></span>
            </div>
            <div class="promo-block-content">
              <h5>STABLE BANKING</h5>
              <p>We provide services void of errors and irregularities while maintaining consistency in quality of service</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-4">
          <div class="single-promo-block p-3 rounded d-flex justify-content-between">
            <div class="promo-block-icon mr-4">
              <span class="ri-refresh-line icon-md color-primary"></span>
            </div>
            <div class="promo-block-content">
              <h5>RELIABLE SYSTEM</h5>
              <p>Our system has been made reliable by making our services available and accessible anytime from anywhere</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-4">
          <div class="single-promo-block p-3 rounded d-flex justify-content-between">
            <div class="promo-block-icon mr-4">
              <span class="ri-lock-2-line icon-md color-primary"></span>
            </div>
            <div class="promo-block-content">
              <h5>FULLY SECURED</h5>
              <p>We use updated and sophisticated fintech technologies to secure and ensure safe transactions for all users</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-4">
          <div class="single-promo-block p-3 rounded d-flex justify-content-between">
            <div class="promo-block-icon mr-4">
              <span class="ri-bank-card-line icon-md color-primary"></span>
            </div>
            <div class="promo-block-content">
              <h5>LOAN SERVICES</h5>
              <p>We offer different kinds of loans including personal loans, business loans, student loans and more</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-4">
          <div class="single-promo-block p-3 rounded d-flex justify-content-between">
            <div class="promo-block-icon mr-4">
              <span class="ri-customer-service-2-line icon-md color-primary"></span>
            </div>
            <div class="promo-block-content">
              <h5>RELIABLE CUSTOMER SERVICE</h5>
              <p>Get help in seconds. Contact Customer Support. We're available to help you 24 hours a day, 7 days a week</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-4">
          <div class="single-promo-block p-3 rounded d-flex justify-content-between">
            <div class="promo-block-icon mr-4">
              <span class="ri-wallet-3-line icon-md color-primary"></span>
            </div>
            <div class="promo-block-content">
              <h5>PERSONAL SAVINGS</h5>
              <p>Savings accounts that give you a safe place to store your money and earn competitive interest rates</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About Us Section -->
  <section class="about-us-section ptb-100">
    <div class="container">
      <div class="row justify-content-around">
        <div class="col-md-12 col-lg-6">
          <div class="about-img-wrap">
            <img src="temp/custom/assets/img/about-us.jpg" alt="About Upward Saver Bank Corporation" class="img-fluid rounded shadow-sm">
          </div>
        </div>
        <div class="col-md-12 col-lg-5">
          <div class="about-content-right mb-md-4 mb-lg-0">
            <h2>Our Story</h2>
            <p>A few years ago, a small team of financial experts determined to transform digital banking launched Upward Saver Bank Corporation. What began as an innovative approach to savings and lending has grown into a fully licensed financial institution dedicated to helping customers get the best out of their money with fair rates and transparent fees.</p>
            <p>Today, we're even more committed to our mission, offering a complete suite of banking tools for tracking spending, saving more, and making smart financial decisions. We understand the frustrations of traditional banking and have built Upward Saver Bank Corporation to work better for everyone, regardless of who you are or where you live.</p>
            
            <div class="feature-tabs-wrap">
              <ul class="nav nav-tabs mb-3 border-bottom-0 feature-tabs" data-tabs="tabs">
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center active" href="#feature-tab-2" data-toggle="tab">
                    <h6 class="mb-0">Our Mission</h6>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center" href="#feature-tab-3" data-toggle="tab">
                    <h6 class="mb-0">Our Vision</h6>
                  </a>
                </li>
              </ul>
              <div class="tab-content feature-tab-content">
                <div class="tab-pane active" id="feature-tab-2">
                  <p>Upward Saver Bank Corporation is committed to providing a unique, safe and secure platform for all financial transactions. We leverage cutting-edge technology and robust infrastructure to create convenient, accessible banking solutions for our customers. Our mission is to democratize financial services, making them available to everyone regardless of location or economic status.</p>
                </div>
                <div class="tab-pane" id="feature-tab-3">
                  <p>We continuously expand our technical capabilities and financial expertise through advanced fintech solutions to facilitate seamless transactions. Upward Saver Bank Corporation envisions a global financial ecosystem that serves customers across all races, countries and continents with equal access to premium banking services. Our goal is to be the most trusted digital banking partner worldwide.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- History Section -->
  <section class="about-us-section ptb-100">
    <div class="container">
      <div class="row justify-content-between align-items-center">
        <div class="col-md-12 col-lg-12">
          <div class="video-promo-content mb-md-4 mb-lg-0">
            <h2 class="text-center">Our Journey</h2>
            <p>Upward Saver Bank Corporation was founded in 2012 by a group of socially-minded financial professionals who recognized the need for more accessible banking services. They believed that by providing innovative digital solutions, they could promote financial inclusion and economic growth for underserved communities.</p>
            <p>In our early years, we focused on perfecting our digital platform and core banking services. The positive response from customers encouraged us to expand our offerings, adding features like mobile banking, investment products, and business banking solutions.</p>
            <p>By 2015, Upward Saver Bank Corporation had established itself as a leader in digital banking, serving thousands of customers across multiple states. Our growth was fueled by strategic investments that allowed us to enhance our technology and expand our service offerings.</p>
            <p>Today, Upward Saver Bank Corporation stands as one of the most innovative digital banking providers, recognized for our customer-first approach and technological excellence. Throughout our history, we've remained true to our original mission of empowering customers through accessible financial services. The impact of our work can be seen in the businesses we've helped grow, the families we've helped secure their futures, and the communities we've helped strengthen through financial inclusion.</p>
          </div>
        </div>

        <div class="col-lg-12 text-center" style="margin: 40px 0;">
          <div class="card border-0 shadow-sm text-white" style="display: inline-block;">
            <img src="temp/custom/assets/img/about-1.jpg" alt="Upward Saver Bank Corporation History" class="img-fluid rounded shadow-sm">
            <div class="card-img-overlay">
              <a href="https://www.youtube.com/watch?v=Gc2en3nHxA4" class="popup-youtube video-play-icon color-bip shadow">
                <span class="ri-play-fill"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section class="feature-content-two ptb-100 gray-light-bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="section-heading text-center mb-5">
            <h2>Why Choose Upward Saver Bank Corporation?</h2>
            <p class="lead">
              Here's what sets us apart in the financial services industry
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="feature-feature-list p-4 text-center">
            <span class="ri-bank-card-line icon-sm d-block color-secondary mb-3"></span>
            <h5 class="mb-2">Multiple Payment Options</h5>
            <p>We support all major payment methods including Visa, MasterCard, bank transfers, and digital wallets for maximum convenience</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="feature-feature-list p-4 text-center">
            <span class="ri-earth-line icon-sm d-block color-secondary mb-3"></span>
            <h5 class="mb-2">Global Reach</h5>
            <p>Our services are available to customers in multiple countries across North America, Europe, and Asia with more locations coming soon</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="feature-feature-list p-4 text-center">
            <span class="ri-money-dollar-circle-line icon-sm d-block color-secondary mb-3"></span>
            <h5 class="mb-2">Competitive Rates</h5>
            <p>We offer some of the most competitive interest rates and lowest fees in the industry for all our customers</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="feature-feature-list p-4 text-center">
            <span class="ri-shield-keyhole-line icon-sm d-block color-secondary mb-3"></span>
            <h5 class="mb-2">Bank-Grade Security</h5>
            <p>Your finances are protected with military-grade encryption, multi-factor authentication, and continuous monitoring</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="feature-feature-list p-4 text-center">
            <span class="ri-shield-star-line icon-sm d-block color-secondary mb-3"></span>
            <h5 class="mb-2">Advanced Protection</h5>
            <p>We provide comprehensive protection against digital threats with regular security updates and fraud prevention systems</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="feature-feature-list p-4 text-center">
            <span class="ri-customer-service-2-line icon-sm d-block color-secondary mb-3"></span>
            <h5 class="mb-2">24/7 Customer Support</h5>
            <p>Our dedicated support team is available around the clock to assist you with any questions or concerns</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Clients Section -->
  <div class="client-section gray-light-bg">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-12">
          <div class="owl-carousel owl-theme clients-carousel dot-indicator">
            <div class="item single-client">
              <img src="temp/custom/assets/img/clients/visa.png" alt="Visa" class="client-img">
            </div>
            <div class="item single-client">
              <img src="temp/custom/assets/img/clients/mastercard.png" alt="Mastercard" class="client-img">
            </div>
            <div class="item single-client">
              <img src="temp/custom/assets/img/clients/fdic.png" alt="FDIC" class="client-img">
            </div>
            <div class="item single-client">
              <img src="temp/custom/assets/img/clients/pci.png" alt="PCI Compliant" class="client-img">
            </div>
            <div class="item single-client">
              <img src="temp/custom/assets/img/clients/ssl.png" alt="SSL Secured" class="client-img">
            </div>
            <div class="item single-client">
              <img src="temp/custom/assets/img/clients/truste.png" alt="TRUSTe" class="client-img">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


</div>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
<script src="temp/custom/assets/js/owl.carousel.min.js"></script>
<script src="temp/custom/assets/js/main.js"></script>

<script>
  // Initialize client logo carousel
  $('.clients-carousel').owlCarousel({
    loop: true,
    margin: 30,
    nav: false,
    dots: true,
    autoplay: true,
    responsive: {
      0: {
        items: 2
      },
      600: {
        items: 3
      },
      1000: {
        items: 6
      }
    }
  });
</script>

</body>
</html>
@include('home.footer')