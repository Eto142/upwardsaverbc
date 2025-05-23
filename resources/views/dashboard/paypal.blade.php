<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>PayPal Withdrawal | Bank App</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
  <style>
    :root {
      --primary-color: #b93b2d;
      --primary-bg: #fddbd3;
      --secondary-text: #888;
      --card-bg: #f6f6f6;
      --active-nav: #f26a63;
      --success-color: #2BC155;
      --error-color: #FF2E2E;
      --warning-color: #FFA500;
      --info-color: #1EAAE7;
      --paypal-color: #003087;
    }
    
    body {
      background-color: #fff;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", sans-serif;
      padding-bottom: 70px;
    }

    .btn-main {
      background-color: var(--primary-bg);
      color: var(--primary-color);
      border-radius: 20px;
      font-weight: 500;
      transition: all 0.3s ease;
    }

    .btn-main:hover {
      background-color: #fcc9bc;
      color: var(--primary-color);
    }

    .btn-paypal {
      background-color: var(--paypal-color);
      color: white;
      border-radius: 20px;
      font-weight: 500;
    }

    .btn-paypal:hover {
      background-color: #002b76;
      color: white;
    }

    .transaction-box {
      background-color: var(--card-bg);
      padding: 15px;
      border-radius: 12px;
    }

    .bottom-nav {
      border-top: 1px solid #ddd;
      padding: 0.5rem 0;
    }

    .bottom-nav .nav-link {
      color: var(--secondary-text);
      font-size: 0.8rem;
      padding: 0.5rem;
      text-align: center;
      flex: 1;
    }

    .bottom-nav .nav-link i {
      font-size: 1.2rem;
      display: block;
      margin: 0 auto 0.2rem;
    }

    .bottom-nav .nav-link.active {
      color: var(--active-nav);
    }

    .small-text {
      font-size: 0.8125rem;
    }

    .clickable {
      cursor: pointer;
    }
    
    /* Card styling */
    .card {
      border-radius: 15px;
      border: none;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
      margin-bottom: 1.5rem;
    }
    
    .card-header {
      border-radius: 15px 15px 0 0 !important;
      background-color: var(--card-bg);
    }
    
    /* Form styling */
    .form-control, .form-select {
      padding: 0.75rem 1rem;
      border-radius: 10px;
      border: 1px solid #ddd;
    }
    
    .form-control:focus, .form-select:focus {
      border-color: var(--paypal-color);
      box-shadow: 0 0 0 0.25rem rgba(0, 48, 135, 0.2);
    }
    
    /* Alert styling */
    .alert {
      border-radius: 10px;
      padding: 1rem;
    }
    
    .box-bdr-red {
      border-left: 4px solid var(--error-color);
      background-color: rgba(255, 46, 46, 0.1);
    }
    
    .box-bdr-green {
      border-left: 4px solid var(--success-color);
      background-color: rgba(43, 193, 85, 0.1);
    }
    
    .text-red {
      color: var(--error-color);
    }
    
    .text-green {
      color: var(--success-color);
    }
    
    /* PayPal branding */
    .paypal-brand {
      color: var(--paypal-color);
      font-weight: 600;
    }
    
    .paypal-icon {
      color: var(--paypal-color);
      margin-right: 0.5rem;
    }
    
    /* Responsive adjustments */
    @media (max-width: 768px) {
      .container {
        padding-left: 1rem;
        padding-right: 1rem;
      }
      
      h2 {
        font-size: 1.5rem;
      }
    }
    
    @media (max-width: 576px) {
      .card-body {
        padding: 1rem;
      }
    }
    
    /* Loading spinner */
    .btn-loading .spinner-border {
      display: inline-block;
      margin-left: 0.5rem;
    }
  </style>
</head>
<body>

    

<div class="content-body">
  @if (session('error'))
    <div class="alert box-bdr-red alert-dismissible fade show text-red mx-3 mt-3" role="alert">
      <b>Error!</b> {{ session('error') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @elseif (session('status'))
    <div class="alert box-bdr-green alert-dismissible fade show text-green mx-3 mt-3" role="alert">
      <b>Success!</b> {{ session('status') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  <div class="container pt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h2 class="text-black fw-semibold mb-0">PayPal Withdrawal</h2>
    </div>

    <div class="row justify-content-center">
      <div class="col-xl-8">
        <div class="card">
          <div class="card-header bg-light">
            <h5 class="card-title mb-0">Balance: {{Auth::user()->currency}}{{number_format($balance, 2, '.', ',')}}</h5>
          </div>
          <div class="card-body">
            <div class="alert alert-light mb-4">
              <i class="bi bi-exclamation-circle-fill paypal-icon"></i>
              You're about to transfer from your account's available balance. This action cannot be reversed. Be sure to enter correct details.
            </div>
            <div id="response_code"></div>

            <form action="{{route('paypal.transfer')}}" method="POST" id="withdrawalForm">
              @csrf
              <input type="hidden" name="email" value="{{ Auth::user()->email }}" />

              <div class="mb-3">
                <label for="amount" class="form-label fw-semibold">Amount</label>
                <div class="input-group">
                  <span class="input-group-text">{{Auth::user()->currency}}</span>
                  <input id="amount" type="number" name="amount" class="form-control" placeholder="Enter Amount" required min="0" step="0.01">
                </div>
                <div class="invalid-feedback">Please enter a valid amount</div>
              </div>

              <div class="mb-3">
                <label for="paypal_email" class="form-label fw-semibold">PayPal Email</label>
                <input id="paypal_email" type="email" name="email" class="form-control" value="{{Auth::user()->email}}" required>
                <div class="invalid-feedback">Please enter a valid PayPal email</div>
              </div>

              <div class="mb-4">
                <label for="transaction_pin" class="form-label fw-semibold">Transaction Pin</label>
                <input id="transaction_pin" type="password" name="transaction_pin" maxlength="4" class="form-control" required pattern="\d{4}" placeholder="4-digit PIN">
                <div class="invalid-feedback">Please enter a valid 4-digit PIN</div>
              </div>

              <button type="submit" id="submitBtn" class="btn btn-paypal w-100 py-2">
                <span id="buttonText">Withdraw via PayPal</span>
                <span class="spinner-border spinner-border-sm d-none" id="spinner" role="status" aria-hidden="true"></span>
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- OTP Modal -->
    <div class="modal fade" id="otpModal" tabindex="-1" aria-labelledby="otpModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="otpModalLabel">OTP Verification</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="alert alert-warning">
              <i class="bi bi-shield-lock-fill me-2"></i> Enter the OTP sent to your registered email
            </div>
            <form id="otpForm">
              <div class="mb-3">
                <input type="number" name="otp" class="form-control form-control-lg text-center" placeholder="Enter 6-digit OTP" required>
              </div>
              <button type="submit" class="btn btn-paypal w-100">Verify & Complete</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bottom Navigation -->
<nav class="navbar fixed-bottom bg-white bottom-nav">
  <div class="container-fluid d-flex justify-content-around text-center px-0">
    <a class="nav-link" href="{{route('dashboard')}}">
      <i class="bi bi-house-door"></i>
      <span class="d-block small-text">Home</span>
    </a>
    <a class="nav-link" href="{{route('card')}}">
      <i class="bi bi-credit-card-2-front"></i>
      <span class="d-block small-text">Card</span>
    </a>
    <a class="nav-link active" href="{{route('bank')}}">
      <i class="bi bi-arrow-left-right"></i>
      <span class="d-block small-text">Transfers</span>
    </a>
    <a class="nav-link" href="{{route('transactions')}}">
      <i class="bi bi-clock-history"></i>
      <span class="d-block small-text">History</span>
    </a>
  </div>
</nav>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('withdrawalForm');
    const submitBtn = document.getElementById('submitBtn');
    const buttonText = document.getElementById('buttonText');
    const spinner = document.getElementById('spinner');
    
    form.addEventListener('submit', function(e) {
      if (!form.checkValidity()) {
        e.preventDefault();
        e.stopPropagation();
      } else {
        // Show loading state
        submitBtn.disabled = true;
        buttonText.textContent = 'Processing...';
        spinner.classList.remove('d-none');
        
        // In a real app, you would submit the form here
        // For demo, we'll show the OTP modal after a delay
        setTimeout(() => {
          const otpModal = new bootstrap.Modal(document.getElementById('otpModal'));
          otpModal.show();
          submitBtn.disabled = false;
          buttonText.textContent = 'Withdraw via PayPal';
          spinner.classList.add('d-none');
        }, 1500);
      }
      
      form.classList.add('was-validated');
    }, false);
    
    // OTP form handling
    const otpForm = document.getElementById('otpForm');
    if (otpForm) {
      otpForm.addEventListener('submit', function(e) {
        e.preventDefault();
        // Here you would validate the OTP and submit the form
        alert('Withdrawal request submitted successfully!');
        const otpModal = bootstrap.Modal.getInstance(document.getElementById('otpModal'));
        otpModal.hide();
      });
    }
    
    // Prevent form submission on Enter key in input fields
    const inputs = form.querySelectorAll('input:not([type="submit"])');
    inputs.forEach(input => {
      input.addEventListener('keydown', function(e) {
        if (e.key === 'Enter') {
          e.preventDefault();
        }
      });
    });
  });
</script>
</body>
</html>