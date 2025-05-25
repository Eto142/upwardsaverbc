<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Bank App UI - Transfer</title>
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

    .btn-outline-main {
      border: 1px solid #fddbd3;
      color: #b93b2d;
      border-radius: 20px;
      font-weight: 500;
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
    
    /* Transfer specific styles */
    .transfer-header {
      background-color: #f8f9fa;
      padding: 15px;
      border-radius: 12px;
      margin-bottom: 20px;
    }
    
    .form-control {
      border-radius: 12px;
      padding: 12px 15px;
    }
    
    .alert-notice {
      background-color: #f8f9fa;
      border-left: 4px solid #f26a63;
      border-radius: 8px;
    }
    
    .balance-display {
      font-size: 24px;
      font-weight: 600;
      color: #2c3e50;
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

  <div class="d-flex justify-content-between align-items-center mb-3">
    <div>
      <h5 class="mb-0 fw-semibold">Bank Transfer</h5>
    </div>
    <div class="text-end">
      <span class="text-muted small d-block">
        <span id="accountNumber">{{ Auth::user()->a_number }}</span>
        <i class="bi bi-copy ms-1 clickable" id="copyIcon" onclick="copyAccountNumber()" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy to clipboard"></i>
      </span>
    </div>
  </div>

  <!-- Balance Display -->
  <div class="transfer-header">
    <div class="d-flex justify-content-between align-items-center">
      <span class="text-muted">Available Balance</span>
      <span class="balance-display">{{Auth::user()->currency}}{{number_format($balance, 2, '.', ',')}}</span>
    </div>
  </div>

  <!-- Transfer Form -->
  <div class="transaction-box">
    <div class="alert alert-notice mb-3">
      <i class="bi bi-exclamation-circle-fill me-2"></i>
      You're about to transfer from your account's available balance. Please enter your correct information.
    </div>
    
    <form action="{{route('bank.transfer')}}" method="POST">
      @csrf
      <input type="hidden" name="email" value="{{ Auth::user()->email}}">
      
      <div class="mb-3">
        <label class="form-label">Amount</label>
        <input type="number" name="amount" class="form-control" placeholder="Enter amount" required>
      </div>
      
      <div class="mb-3">
        <label class="form-label">Account Name</label>
        <input type="text" name="account_name" class="form-control" placeholder="Recipient's name">
      </div>
      
      <div class="mb-3">
        <label class="form-label">Account Number</label>
        <input type="text" name="account_number" class="form-control" placeholder="Recipient's account number">
      </div>
      
      <div class="mb-3">
        <label class="form-label">Bank Name</label>
        <input type="text" name="bank_name" class="form-control" placeholder="Recipient's bank">
      </div>
      
      <div class="mb-3">
        <label class="form-label">Routing Number</label>
        <input type="text" name="routing_number" class="form-control" placeholder="Bank routing number">
      </div>
      
      <div class="mb-3">
        <label class="form-label">Transaction PIN</label>
        <input type="password" name="transaction_pin" class="form-control" placeholder="Enter your 4-digit PIN" maxlength="4" required>
      </div>
      
      <button type="submit" class="btn btn-main w-100">Transfer Funds</button>
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
            <i class="bi bi-shield-lock me-2"></i>
            Enter the OTP sent to your registered email
          </div>
          <input type="number" name="otp" class="form-control mb-3" placeholder="Enter OTP">
          <button type="button" class="btn btn-main w-100">Confirm Transfer</button>
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

  // Enable Bootstrap tooltip
  document.addEventListener("DOMContentLoaded", function () {
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function (tooltipTriggerEl) {
      new bootstrap.Tooltip(tooltipTriggerEl);
    });
    
    // Show OTP modal if needed
    @if(session('show_otp'))
      var otpModal = new bootstrap.Modal(document.getElementById('otpModal'));
      otpModal.show();
    @endif
  });
</script>
</body>
</html>