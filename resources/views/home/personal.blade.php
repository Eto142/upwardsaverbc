@include('home.header')    <main>

  <style>
    .personal-hero {
      background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('temp/custom/assets/img/personal-hero-bg.jpg');
      background-size: cover;
      background-position: center;
      color: #fff;
      padding: 100px 0;
    }
    .account-card {
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      transition: transform 0.3s;
      margin-bottom: 30px;
      border: none;
    }
    .account-card:hover {
      transform: translateY(-10px);
    }
    .account-card .card-header {
      background: #0056b3;
      color: white;
      border-radius: 10px 10px 0 0 !important;
      padding: 20px;
    }
    .feature-icon-personal {
      font-size: 2.5rem;
      color: #0056b3;
      margin-bottom: 15px;
    }
    .personal-testimonial {
      background: #f8f9fa;
      border-radius: 10px;
      padding: 30px;
    }
  </style>
</head>


  <!-- Personal Hero Section -->
  <section class="personal-hero">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="hero-content">
            <span data-aos="fade-up">PERSONAL BANKING</span>
            <h1 data-aos="fade-up" data-aos-delay="300">Banking Made Simple For You</h1>
            <p data-aos="fade-up" data-aos-delay="400">From everyday checking to savings for your dreams, we have the right accounts and services to help you manage your money with confidence.</p>
            <div class="hero-btn" data-aos="fade-up" data-aos-delay="500">
              <a href="register" class="btn style1">OPEN AN ACCOUNT<i class="ri-arrow-right-s-line"></i></a>
              <a href="login" class="btn style2">PERSONAL ONLINE BANKING</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <img src="temp/custom/assets/img/personal-hero-img.png" alt="Personal Banking" class="img-fluid">
        </div>
      </div>
    </div>
  </section>

  <!-- Account Options Section -->
  <section class="account-options ptb-100">
    <div class="container">
      <div class="section-title style1 text-center mb-50">
        <span>ACCOUNT OPTIONS</span>
        <h2>Find The Right Account For You</h2>
      </div>
      
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="card account-card">
            <div class="card-header text-center">
              <h3>Everyday Checking</h3>
            </div>
            <div class="card-body">
              <ul class="list-style">
                <li><i class="ri-check-line"></i> No monthly maintenance fee with direct deposit</li>
                <li><i class="ri-check-line"></i> Free online and mobile banking</li>
                <li><i class="ri-check-line"></i> Access to 50,000+ ATMs nationwide</li>
                <li><i class="ri-check-line"></i> Debit card with zero liability protection</li>
              </ul>
              <div class="text-center mt-4">
                <a href="#" class="btn style1">LEARN MORE</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6">
          <div class="card account-card">
            <div class="card-header text-center">
              <h3>High-Yield Savings</h3>
            </div>
            <div class="card-body">
              <ul class="list-style">
                <li><i class="ri-check-line"></i> Competitive interest rates</li>
                <li><i class="ri-check-line"></i> No monthly maintenance fees</li>
                <li><i class="ri-check-line"></i> Easy transfers to checking</li>
                <li><i class="ri-check-line"></i> FDIC insured up to $250,000</li>
                <li><i class="ri-check-line"></i> 24/7 account access</li>
              </ul>
              <div class="text-center mt-4">
                <a href="#" class="btn style1">LEARN MORE</a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6">
          <div class="card account-card">
            <div class="card-header text-center">
              <h3>Premium Benefits</h3>
            </div>
            <div class="card-body">
              <ul class="list-style">
                <li><i class="ri-check-line"></i> Higher interest rates</li>
                <li><i class="ri-check-line"></i> Free checks and money orders</li>
                <li><i class="ri-check-line"></i> ATM fee reimbursements</li>
                <li><i class="ri-check-line"></i> Dedicated customer service</li>
                <li><i class="ri-check-line"></i> Discounts on loans</li>
              </ul>
              <div class="text-center mt-4">
                <a href="#" class="btn style1">LEARN MORE</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section class="personal-features bg-light ptb-100">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="feature-img-wrap">
            <img src="temp/custom/assets/img/personal-features.png" alt="Personal Banking Features" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="section-title style1">
            <span>WHY CHOOSE US</span>
            <h2>Banking That Fits Your Life</h2>
          </div>
          
          <div class="feature-list">
            <div class="feature-item">
              <div class="feature-icon">
                <i class="ri-smartphone-line feature-icon-personal"></i>
              </div>
              <div class="feature-text">
                <h3>Mobile Banking</h3>
                <p>Deposit checks, pay bills, transfer money and more with our award-winning mobile app.</p>
              </div>
            </div>
            
            <div class="feature-item">
              <div class="feature-icon">
                <i class="ri-shield-check-line feature-icon-personal"></i>
              </div>
              <div class="feature-text">
                <h3>Security You Can Trust</h3>
                <p>Advanced encryption and fraud monitoring to protect your accounts 24/7.</p>
              </div>
            </div>
            
            <div class="feature-item">
              <div class="feature-icon">
                <i class="ri-customer-service-2-line feature-icon-personal"></i>
              </div>
              <div class="feature-text">
                <h3>24/7 Customer Support</h3>
                <p>Real people ready to help whenever you need it, day or night.</p>
              </div>
            </div>
            
            <div class="feature-item">
              <div class="feature-icon">
                <i class="ri-exchange-dollar-line feature-icon-personal"></i>
              </div>
              <div class="feature-text">
                <h3>Fee-Free ATMs</h3>
                <p>Access your money at thousands of ATMs nationwide without paying fees.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section class="personal-testimonials ptb-100">
    <div class="container">
      <div class="section-title style1 text-center mb-50">
        <span>HAPPY CUSTOMERS</span>
        <h2>What Our Customers Say</h2>
      </div>
      
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="personal-testimonial">
            <div class="rating mb-3">
              <i class="ri-star-fill"></i>
              <i class="ri-star-fill"></i>
              <i class="ri-star-fill"></i>
              <i class="ri-star-fill"></i>
              <i class="ri-star-fill"></i>
            </div>
            <p>"I've been with Upward Saver Bank Corporation for 10 years and their customer service is exceptional. The mobile app makes banking so convenient!"</p>
            <div class="client-info mt-4">
              <img src="temp/custom/assets/img/testimonials/client-1.jpg" alt="Client" class="rounded-circle" width="50">
              <div class="client-details">
                <h5>Michael Johnson</h5>
                <span>Customer since 2013</span>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6">
          <div class="personal-testimonial">
            <div class="rating mb-3">
              <i class="ri-star-fill"></i>
              <i class="ri-star-fill"></i>
              <i class="ri-star-fill"></i>
              <i class="ri-star-fill"></i>
              <i class="ri-star-half-fill"></i>
            </div>
            <p>"Switching to Upward Saver Bank Corporation was the best financial decision I made. Their savings account rates are unbeatable."</p>
            <div class="client-info mt-4">
              <img src="temp/custom/assets/img/testimonials/client-2.jpg" alt="Client" class="rounded-circle" width="50">
              <div class="client-details">
                <h5>Sarah Williams</h5>
                <span>Customer since 2018</span>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-6">
          <div class="personal-testimonial">
            <div class="rating mb-3">
              <i class="ri-star-fill"></i>
              <i class="ri-star-fill"></i>
              <i class="ri-star-fill"></i>
              <i class="ri-star-fill"></i>
              <i class="ri-star-fill"></i>
            </div>
            <p>"The loan process was so smooth and the rates were much better than other banks. Highly recommend for personal loans!"</p>
            <div class="client-info mt-4">
              <img src="temp/custom/assets/img/testimonials/client-3.jpg" alt="Client" class="rounded-circle" width="50">
              <div class="client-details">
                <h5>David Rodriguez</h5>
                <span>Customer since 2020</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="personal-cta bg-primary text-white ptb-60">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8">
          <h2 class="text-white">Ready to Open Your Account?</h2>
          <p class="text-white mb-lg-0">It only takes 5 minutes to apply online and start enjoying better banking.</p>
        </div>
        <div class="col-lg-4 text-lg-end">
          <a href="register" class="btn style2">GET STARTED TODAY</a>
        </div>
      </div>
    </div>
  </section>



@include('home.footer')