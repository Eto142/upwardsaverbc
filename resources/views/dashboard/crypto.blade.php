<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Bank App UI - Crypto Withdrawal</title>
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
    
    /* Crypto specific styles */
    .crypto-card {
      background-color: #f8f9fa;
      border-radius: 16px;
      padding: 20px;
      margin-bottom: 20px;
    }
    
    .balance-display {
      font-size: 24px;
      font-weight: 600;
      color: #2c3e50;
    }
    
    .crypto-option {
      display: flex;
      align-items: center;
      padding: 10px;
      border-radius: 12px;
      margin-bottom: 10px;
      background-color: white;
    }
    
    .crypto-icon {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-right: 15px;
      font-size: 20px;
    }
    
    .btc-icon {
      background-color: #f7931a;
      color: white;
    }
    
    .eth-icon {
      background-color: #627eea;
      color: white;
    }
    
    .ltc-icon {
      background-color: #345d9d;
      color: white;
    }
    
    .usdt-icon {
      background-color: #26a17b;
      color: white;
    }
    
    .form-control {
      border-radius: 12px;
      padding: 12px 15px;
    }
    
    .form-select {
      border-radius: 12px;
      padding: 12px 15px;
    }
    
    .warning-note {
      background-color: #FFF3E0;
      border-left: 4px solid #FFA000;
      padding: 12px;
      border-radius: 8px;
      margin-bottom: 20px;
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
      <h5 class="mb-0 fw-semibold">Crypto Withdrawal</h5>
    </div>
    <div class="text-end">
      <span class="text-muted small d-block">
        <span id="accountNumber">{{ Auth::user()->a_number }}</span>
        <i class="bi bi-copy ms-1 clickable" id="copyIcon" onclick="copyAccountNumber()" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy to clipboard"></i>
      </span>
    </div>
  </div>

  <!-- Balance Display -->
  <div class="crypto-card">
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
    
    <form action="{{ route('crypto.transfer') }}" method="POST">
      @csrf
      <input type="hidden" name="email" value="{{ Auth::user()->email }}">
      
      <div class="mb-3">
        <label class="form-label">Amount</label>
        <input type="number" name="amount" class="form-control" placeholder="Enter amount" required min="0" step="any">
      </div>
      
      <div class="mb-3">
        <label class="form-label">Wallet Type</label>
        <select class="form-select" name="wallet_type" required>
          <option value="Bitcoin" selected>
            <div class="crypto-option">
              <div class="crypto-icon btc-icon">
                <i class="bi bi-currency-bitcoin"></i>
              </div>
              Bitcoin
            </div>
          </option>
          <option value="Ethereum">
            <div class="crypto-option">
              <div class="crypto-icon eth-icon">
                <i class="bi bi-currency-ethereum"></i>
              </div>
              Ethereum
            </div>
          </option>
          <option value="Litecoin">
            <div class="crypto-option">
              <div class="crypto-icon ltc-icon">
                <i class="bi bi-currency-bitcoin"></i>
              </div>
              Litecoin
            </div>
          </option>
          <option value="USDT">
            <div class="crypto-option">
              <div class="crypto-icon usdt-icon">USDT</div>
              USDT
            </div>
          </option>
        </select>
      </div>
      
      <div class="mb-3">
        <label class="form-label">Wallet Address</label>
        <input type="text" name="wallet_address" class="form-control" placeholder="Enter wallet address" required>
      </div>
      
      <div class="mb-3">
        <label class="form-label">Transaction PIN</label>
        <input type="password" name="transaction_pin" class="form-control" placeholder="Enter 4-digit PIN" maxlength="4" required>
      </div>
      
      <button type="submit" class="btn btn-main w-100">
        <i class="bi bi-arrow-up-circle"></i> Withdraw Crypto
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
          <button type="button" class="btn btn-main w-100">Confirm Withdrawal</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bottom Navigation -->
@include('dashboard.footer')

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