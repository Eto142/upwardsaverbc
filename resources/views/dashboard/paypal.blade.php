<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Bank App UI - PayPal Withdrawal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
  <style>
    body {
      background-color: #fff;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", sans-serif;
      padding-bottom: 70px;
    }

    .btn-main {
      background-color: #fddbd3;
      color: #b93b2d;
      border-radius: 20px;
      font-weight: 500;
    }

    .btn-paypal {
      background-color: #003087;
      color: white;
      border-radius: 20px;
      font-weight: 500;
    }

    .btn-paypal:hover {
      background-color: #002b76;
    }

    .transaction-box {
      background-color: #f6f6f6;
      padding: 15px;
      border-radius: 12px;
    }

    .bottom-nav {
      border-top: 1px solid #ddd;
    }

    .bottom-nav .nav-link {
      color: #888;
      font-size: 13px;
    }

    .bottom-nav .nav-link.active {
      color: #f26a63;
    }

    .small-text {
      font-size: 13px;
    }

    .clickable {
      cursor: pointer;
    }
    
    /* PayPal specific styles */
    .paypal-header {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }
    
    .paypal-icon {
      color: #003087;
      font-size: 24px;
      margin-right: 10px;
    }
    
    .balance-display {
      font-size: 24px;
      font-weight: 600;
      color: #2c3e50;
    }
    
    .warning-note {
      background-color: #FFF3E0;
      border-left: 4px solid #FFA000;
      padding: 12px;
      border-radius: 8px;
      margin-bottom: 20px;
    }
    
    .form-control {
      border-radius: 12px;
      padding: 12px 15px;
    }
    
    .input-group-text {
      border-radius: 12px 0 0 12px;
    }
  </style>
</head>
<body>

<div class="container pt-4">
  <!-- Alerts -->
  @if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Error!</strong> {{ session('error') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @elseif (session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success!</strong> {{ session('status') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  <div class="paypal-header">
    <i class="bi bi-paypal paypal-icon"></i>
    <div>
      <h5 class="mb-0 fw-semibold">PayPal Withdrawal</h5>
    </div>
    <div class="ms-auto text-end">
      <span class="text-muted small d-block">
        <span id="accountNumber">{{ Auth::user()->a_number }}</span>
        <i class="bi bi-copy ms-1 clickable" id="copyIcon" onclick="copyAccountNumber()" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy to clipboard"></i>
      </span>
    </div>
  </div>

  <!-- Balance Display -->
  <div class="transaction-box mb-3">
    <div class="d-flex justify-content-between align-items-center">
      <span class="text-muted">Available Balance</span>
      <span class="balance-display">{{Auth::user()->currency}}{{number_format($balance, 2, '.', ',')}}</span>
    </div>
  </div>

  <!-- Withdrawal Form -->
  <div class="transaction-box">
    <div class="warning-note">
      <i class="bi bi-exclamation-triangle-fill me-2"></i>
      You're about to transfer from your account. This action cannot be reversed.
    </div>
    
    <form action="{{ route('paypal.transfer') }}" method="POST" id="withdrawalForm">
      @csrf
      <input type="hidden" name="email" value="{{ Auth::user()->email }}">
      
      <div class="mb-3">
        <label class="form-label">Amount</label>
        <div class="input-group">
          <span class="input-group-text">{{Auth::user()->currency}}</span>
          <input type="number" name="amount" class="form-control" placeholder="Enter amount" required min="0" step="0.01">
        </div>
      </div>
      
      <div class="mb-3">
        <label class="form-label">PayPal Email</label>
        <input type="email" name="paypal_email" class="form-control" placeholder="Enter PayPal email" required value="{{Auth::user()->email}}">
      </div>
      
      <div class="mb-3">
        <label class="form-label">Transaction PIN</label>
        <input type="password" name="transaction_pin" class="form-control" placeholder="Enter 4-digit PIN" maxlength="4" required>
      </div>
      
      <button type="submit" class="btn btn-paypal w-100">
        <i class="bi bi-arrow-up-circle"></i> Withdraw to PayPal
      </button>
    </form>
  </div>
  
  <!-- OTP Modal -->
  <div class="modal fade" id="otpModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">OTP Verification</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="alert alert-warning">
            <i class="bi bi-shield-lock"></i>
            Enter the OTP sent to your registered email
          </div>
          <input type="number" name="otp" class="form-control mb-3" placeholder="Enter OTP">
          <button type="button" class="btn btn-paypal w-100">Confirm Withdrawal</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bottom Navigation -->
<nav class="navbar fixed-bottom bg-white bottom-nav">
  <div class="container d-flex justify-content-around text-center">
    <a class="nav-link" href="{{route('dashboard')}}"><i class="bi bi-house-door"></i><br><small>Home</small></a>
    <a class="nav-link" href="{{route('card')}}"><i class="bi bi-credit-card-2-front"></i><br><small>Card</small></a>
    <a class="nav-link active" href="{{route('bank')}}"><i class="bi bi-arrow-left-right"></i><br><small>Transfers</small></a>
    <a class="nav-link" href="{{route('transactions')}}"><i class="bi bi-clock-history"></i><br><small>History</small></a>
  </div>
</nav>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Copy account number with better UX
  function copyAccountNumber() {
    const accNum = document.getElementById("accountNumber").innerText;
    const icon = document.getElementById("copyIcon");

    navigator.clipboard.writeText(accNum).then(() => {
      const tooltip = bootstrap.Tooltip.getInstance(icon);
      tooltip.setContent({ '.tooltip-inner': 'Copied!' });
      icon.classList.replace("bi-copy", "bi-check2");

      setTimeout(() => {
        tooltip.setContent({ '.tooltip-inner': 'Copy to clipboard' });
        icon.classList.replace("bi-check2", "bi-copy");
      }, 2000);
    });
  }

  // Form submission handling
  document.getElementById('withdrawalForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Show loading state
    const submitBtn = e.target.querySelector('button[type="submit"]');
    submitBtn.disabled = true;
    submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Processing...';
    
    // Simulate form processing
    setTimeout(() => {
      // In a real app, you would submit the form here
      // For demo, we'll show the OTP modal
      var otpModal = new bootstrap.Modal(document.getElementById('otpModal'));
      otpModal.show();
      
      // Reset button state
      submitBtn.disabled = false;
      submitBtn.innerHTML = '<i class="bi bi-arrow-up-circle"></i> Withdraw to PayPal';
    }, 1500);
  });

  // Enable Bootstrap tooltip
  document.addEventListener("DOMContentLoaded", function () {
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function (tooltipTriggerEl) {
      new bootstrap.Tooltip(tooltipTriggerEl);
    });
  });
</script>
</body>
</html>