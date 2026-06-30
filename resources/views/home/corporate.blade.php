@include('home.header')

<!-- Page Hero -->
<section class="bk-page-hero">
  <div class="bk-wrap">
    <h1>Corporate Banking</h1>
    <p>Enterprise-grade financial solutions designed to power your organisation's growth.</p>
    <div class="bk-breadcrumb"><a href="/">Home</a> <span>/</span> Corporate Banking</div>
  </div>
</section>

<!-- Corporate Account Packages -->
<section class="bk-page-section">
  <div class="bk-wrap">
    <div class="bk-section-top">
      <span class="bk-label">Account Packages</span>
      <h2 class="bk-title">Corporate Accounts Built for Business</h2>
      <p class="bk-desc">Choose the account structure that fits your organisation — from day-to-day operations to full treasury management.</p>
    </div>
    <div class="bk-page-grid-3">

      <div class="bk-product-card sr">
        <div class="bk-product-card-head">
          <h3>Corporate Checking</h3>
          <p>Day-to-day business transactions</p>
        </div>
        <div class="bk-product-card-body">
          <ul>
            <li><i class="ri-check-line"></i> Unlimited monthly transactions</li>
            <li><i class="ri-check-line"></i> Multi-user access with role controls</li>
            <li><i class="ri-check-line"></i> Integrated payroll disbursements</li>
            <li><i class="ri-check-line"></i> Real-time balance notifications</li>
            <li><i class="ri-check-line"></i> Dedicated relationship manager</li>
          </ul>
        </div>
        <div class="bk-product-card-foot">
          <a href="{{ route('register.corporate') }}" class="bk-btn bk-btn--fill" style="font-size:.78rem;padding:7px 18px">Open Account <i class="ri-arrow-right-line"></i></a>
        </div>
      </div>

      <div class="bk-product-card sr">
        <div class="bk-product-card-head bk-product-card-head--gold">
          <h3>Corporate Savings</h3>
          <p>Grow your business reserves</p>
        </div>
        <div class="bk-product-card-body">
          <ul>
            <li><i class="ri-check-line"></i> Competitive tiered interest rates</li>
            <li><i class="ri-check-line"></i> Flexible deposit & withdrawal terms</li>
            <li><i class="ri-check-line"></i> FSCS protection included</li>
            <li><i class="ri-check-line"></i> Automatic surplus sweeping</li>
            <li><i class="ri-check-line"></i> Monthly performance statements</li>
          </ul>
        </div>
        <div class="bk-product-card-foot">
          <a href="{{ route('register.corporate') }}" class="bk-btn bk-btn--fill" style="font-size:.78rem;padding:7px 18px">Start Saving <i class="ri-arrow-right-line"></i></a>
        </div>
      </div>

      <div class="bk-product-card sr">
        <div class="bk-product-card-head bk-product-card-head--blue">
          <h3>Business Current</h3>
          <p>Full-featured enterprise account</p>
        </div>
        <div class="bk-product-card-body">
          <ul>
            <li><i class="ri-check-line"></i> Overdraft facility on request</li>
            <li><i class="ri-check-line"></i> Priority 24/7 support line</li>
            <li><i class="ri-check-line"></i> Free international wire transfers</li>
            <li><i class="ri-check-line"></i> Custom sub-accounts per department</li>
            <li><i class="ri-check-line"></i> API access for ERP integration</li>
          </ul>
        </div>
        <div class="bk-product-card-foot">
          <a href="{{ route('register.corporate') }}" class="bk-btn bk-btn--fill" style="font-size:.78rem;padding:7px 18px">Apply Now <i class="ri-arrow-right-line"></i></a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Corporate Solutions -->
<section class="bk-page-section--alt">
  <div class="bk-wrap">
    <div class="bk-section-top">
      <span class="bk-label">Our Solutions</span>
      <h2 class="bk-title">End-to-End Corporate Financial Services</h2>
      <p class="bk-desc">From payroll to trade finance, we provide everything your enterprise needs under one roof.</p>
    </div>
    <div class="bk-cards-grid">

      <div class="bk-card sr">
        <div class="bk-card-icon"><i class="ri-group-line"></i></div>
        <h3>Payroll Processing</h3>
        <p>Automate staff salary disbursements, statutory deductions, and payslip generation with zero errors.</p>
        <a href="{{ url('contact') }}" class="bk-card-link">Learn More <i class="ri-arrow-right-line"></i></a>
      </div>

      <div class="bk-card sr">
        <div class="bk-card-icon"><i class="ri-send-plane-line"></i></div>
        <h3>Bulk Transfers</h3>
        <p>Send payments to thousands of beneficiaries simultaneously through our secure batch payment engine.</p>
        <a href="{{ url('contact') }}" class="bk-card-link">Learn More <i class="ri-arrow-right-line"></i></a>
      </div>

      <div class="bk-card sr">
        <div class="bk-card-icon"><i class="ri-bank-card-2-line"></i></div>
        <h3>Corporate Cards</h3>
        <p>Issue physical and virtual cards to employees with configurable spending limits and real-time controls.</p>
        <a href="{{ url('contact') }}" class="bk-card-link">Learn More <i class="ri-arrow-right-line"></i></a>
      </div>

      <div class="bk-card sr">
        <div class="bk-card-icon"><i class="ri-ship-line"></i></div>
        <h3>Trade Finance</h3>
        <p>Letters of credit, bank guarantees, and import/export financing to support your global trade activities.</p>
        <a href="{{ url('contact') }}" class="bk-card-link">Learn More <i class="ri-arrow-right-line"></i></a>
      </div>

      <div class="bk-card sr">
        <div class="bk-card-icon"><i class="ri-pie-chart-2-line"></i></div>
        <h3>Cash Management</h3>
        <p>Optimise liquidity with our comprehensive treasury tools, including sweeping, pooling, and forecasting.</p>
        <a href="{{ url('contact') }}" class="bk-card-link">Learn More <i class="ri-arrow-right-line"></i></a>
      </div>

      <div class="bk-card sr">
        <div class="bk-card-icon"><i class="ri-global-line"></i></div>
        <h3>FX & Global Transfers</h3>
        <p>Access competitive foreign exchange rates and send cross-border payments to over 150 countries.</p>
        <a href="{{ url('contact') }}" class="bk-card-link">Learn More <i class="ri-arrow-right-line"></i></a>
      </div>

    </div>
  </div>
</section>

<!-- Why Choose Us -->
<section class="bk-page-section">
  <div class="bk-wrap">
    <div class="bk-page-grid-2">
      <div class="sr">
        <span class="bk-label">Why Choose Us</span>
        <h2 class="bk-title" style="text-align:left">Corporate Banking Designed for Scale</h2>
        <div style="margin-top:16px">
          <div class="bk-feat-item">
            <div class="bk-fi-icon"><i class="ri-user-star-line"></i></div>
            <div><h4>Dedicated Relationship Managers</h4><p>A senior banker assigned to your account who understands your industry and long-term goals.</p></div>
          </div>
          <div class="bk-feat-item">
            <div class="bk-fi-icon"><i class="ri-team-line"></i></div>
            <div><h4>Multi-User Account Access</h4><p>Set granular permissions per team member — view only, approve, or full admin rights.</p></div>
          </div>
          <div class="bk-feat-item">
            <div class="bk-fi-icon"><i class="ri-shield-check-line"></i></div>
            <div><h4>Enterprise Fraud Monitoring</h4><p>AI-powered transaction screening and real-time alerts protect your organisation 24/7.</p></div>
          </div>
          <div class="bk-feat-item">
            <div class="bk-fi-icon"><i class="ri-line-chart-line"></i></div>
            <div><h4>Financial Reporting & Analytics</h4><p>Exportable dashboards and cash flow reports to keep your finance team fully informed.</p></div>
          </div>
        </div>
      </div>
      <div class="sr">
        <img src="frontassets/images/banner/7.jpg" alt="Corporate Banking" style="border-radius:var(--r-lg);width:100%;height:380px;object-fit:cover">
      </div>
    </div>
  </div>
</section>

<!-- Testimonials -->
<section class="bk-page-section--alt">
  <div class="bk-wrap">
    <div class="bk-section-top">
      <span class="bk-label">Client Stories</span>
      <h2 class="bk-title">Trusted by Leading Organisations</h2>
    </div>
    <div class="bk-page-grid-3">

      <div class="bk-testi-mini sr">
        <div class="bk-stars"><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i></div>
        <p>"Upward Saver Bank transformed our payroll operations. What used to take two days now runs automatically every Friday morning."</p>
        <div class="bk-testi-mini-author"><div><strong>Amanda Osei</strong><span>CFO, NovaTech Solutions</span></div></div>
      </div>

      <div class="bk-testi-mini sr">
        <div class="bk-stars"><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i></div>
        <p>"The trade finance team helped us secure a letter of credit in 48 hours. Their speed and expertise is unmatched in the industry."</p>
        <div class="bk-testi-mini-author"><div><strong>James Owusu</strong><span>Director, Global Imports Ltd</span></div></div>
      </div>

      <div class="bk-testi-mini sr">
        <div class="bk-stars"><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-fill"></i></div>
        <p>"Multi-user access with role controls has made our finance department more accountable and our audits much smoother."</p>
        <div class="bk-testi-mini-author"><div><strong>Patricia Mensa</strong><span>Finance Manager, Apex Holdings</span></div></div>
      </div>

    </div>
  </div>
</section>

<!-- CTA -->
<section class="bk-cta">
  <div class="bk-wrap">
    <div class="bk-cta-box sr">
      <div class="bk-cta-content">
        <h2>Open Your Corporate Account Today</h2>
        <p>Get started in minutes with our streamlined digital onboarding process.</p>
        <div class="bk-cta-btns">
          <a href="{{ route('register.corporate') }}" class="bk-btn bk-btn--white">Register Corporate Account <i class="ri-arrow-right-line"></i></a>
          <a href="{{ url('contact') }}" class="bk-btn bk-btn--glass">Speak to Our Team <i class="ri-phone-line"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

@include('home.footer')
