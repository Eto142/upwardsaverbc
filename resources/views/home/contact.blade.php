@include('home.header')  

  <style>
    .contact-hero {
      background: linear-gradient(135deg, #1a3e72 0%, #2a5298 100%);
      color: white;
      padding: 80px 0;
      text-align: center;
    }
    .map-section {
      height: 400px;
      margin-bottom: 50px;
    }
    .contact-map {
      width: 100%;
      height: 100%;
      border: none;
    }
    .contact-info-boxed {
      background: #f8f9fa;
      border-radius: 15px;
      padding: 40px;
      margin-bottom: 50px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }
    .contact-info-boxed h2 {
      color: #2a5298;
      margin-bottom: 20px;
    }
    .contact-info-boxed h2 span {
      font-weight: normal;
      color: #6c757d;
    }
    .form-boxed {
      background: white;
      border-radius: 15px;
      padding: 40px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }
    .sec-title.centered {
      text-align: center;
      margin-bottom: 30px;
    }
    .sec-title .title {
      color: #2a5298;
      font-weight: 600;
      margin-bottom: 10px;
    }
    .sec-title h2 {
      color: #2a5298;
    }
    .sec-title h2 span {
      color: #6c757d;
      font-weight: normal;
    }
    .contact-form .form-control {
      border-radius: 10px;
      padding: 15px;
      margin-bottom: 20px;
    }
    .contact-form textarea.form-control {
      height: 150px;
    }
    .btn-primary {
      background-color: #2a5298;
      border-color: #2a5298;
      padding: 12px 30px;
      border-radius: 10px;
      font-weight: 600;
    }
    .btn-primary:hover {
      background-color: #1a3e72;
      border-color: #1a3e72;
    }
    .alert {
      border-radius: 10px;
      margin-bottom: 20px;
    }
    .box-bdr-red {
      border-left: 4px solid #dc3545;
    }
    .box-bdr-green {
      border-left: 4px solid #28a745;
    }
    .text-red {
      color: #dc3545;
    }
    .text-green {
      color: #28a745;
    }
  </style>


  <!-- Contact Hero Section -->
  <section class="contact-hero">
    <div class="container">
      <h1>Contact Upward Saver Bank Corporation</h1>
      <p>We're here to help with any questions or concerns you may have about our services.</p>
    </div>
  </section>

  <!-- Map Section -->
  <div class="map-section">
    <div class="contact-map-area">
      <iframe class="contact-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2495.4980405835827!2d-3.207795984222675!3d51.47920682210645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486e1c7a61e2e891%3A0x84b6b8fbbbd28f28!2sCanton%2C%20Cardiff%2C%20UK!5e0!3m2!1sen!2sng!4v1626796438815!5m2!1sen!2sng" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
  </div>

  <!-- Contact Page Section -->
  <div class="contact-page-section">
    <div class="container">
      <!-- Contact Info Boxed -->
      <div class="contact-info-boxed">
        <div class="row clearfix">
          <!-- Column -->
          <div class="column col-lg-6 col-md-6 col-sm-12">
            <h2>Canton, <span>United Kingdom</span></h2>
            <div class="text">
              256 Cowbridge Road E, Cardiff CF119TN, United Kingdom
            </div>
            <div class="email">
              Email:
              <a href="mailto:support@upwardsaverbc.com">support@upwardsaverbc.com</a>
            </div>
          </div>
  
          <!-- Column -->
          <div class="column col-lg-6 col-md-6 col-sm-12">
            <div class="call">
              Phone No:<br /><a href="tel:+447701423168">+44 770 142 3168‬
</a>
            </div>
            <ul class="location-list">
              <li>
                <span>Work Hours:</span>Mon - Sat: 8.00 - 17.00
              </li>
            </ul>
          </div>
        </div>
      </div>
  
      <!-- Form Boxed -->
      <div class="form-boxed">
        <div class="sec-title centered">
          <div class="title">contact us</div>
          <h2>We're Always Here <span>To Help You</span></h2>
        </div>
  
        <div class="boxed-inner">
          <!-- Contact Form -->
          <div class="contact-form">
            <div class="col-xl-12">
              <div class="card">
                @if (session('error'))
                <div class="alert box-bdr-red alert-dismissible fade show text-red" role="alert">
                  <b>Error!</b>{{ session('error') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @elseif (session('status'))
                <div class="alert box-bdr-green alert-dismissible fade show text-green" role="alert">
                  <b>Success!</b> {{ session('status') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @elseif (session('message'))
                <div class="alert box-bdr-green alert-dismissible fade show text-green" role="alert">
                  <b>Success!</b> {{ session('message') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <div class="card-body">
                  <form id="inter_form" action="{{ route('send-mail')}}" method="POST">
                    @csrf

                    <div class="row mb-4">
                      <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Email*</label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control" id="user_email" name="user_email" required>
                      </div>
                    </div>
                    <input type="hidden" value="support@upwardsaverbc.com" class="form-control" name="email">
                    
                    <div class="row mb-4">
                      <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Subject*</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="subject" name="subject" required>
                      </div>
                    </div>

                    <div class="row mb-4">
                      <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Message*</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" id="message" rows="4" name="message" required></textarea>
                      </div>
                    </div>

                    <div class="row justify-content-end">
                      <div class="col-sm-9">
                        <div>
                          <button id="send_pin" class="btn btn-primary btn-rounded" type="submit">Send Message</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <p class="response"></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

 
  
  
@include('home.footer')