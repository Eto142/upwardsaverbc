<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Bank App UI - Loan Request</title>
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
    
    /* Loan specific styles */
    .loan-card {
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
    
    .loan-option {
      display: flex;
      align-items: center;
      padding: 10px;
      border-radius: 12px;
      margin-bottom: 10px;
      background-color: white;
    }
    
    .loan-icon {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-right: 15px;
      font-size: 20px;
      background-color: #b93b2d;
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
    
    .info-note {
      background-color: #E3F2FD;
      border-left: 4px solid #1976D2;
      padding: 12px;
      border-radius: 8px;
      margin-bottom: 20px;
    }
    
    .terms-box {
      background-color: #f6f6f6;
      border-radius: 12px;
      padding: 15px;
      margin-top: 20px;
    }
    
    .loan-stats {
      display: flex;
      justify-content: space-between;
      margin-bottom: 15px;
    }
    
    .stat-item {
      text-align: center;
      padding: 10px;
      background-color: white;
      border-radius: 12px;
      flex: 1;
      margin: 0 5px;
    }
    
    .stat-value {
      font-weight: 600;
      font-size: 18px;
      color: #2c3e50;
    }
    
    .stat-label {
      font-size: 12px;
      color: #888;
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
      <h5 class="mb-0 fw-semibold">Loan Request</h5>
    </div>
    <div class="text-end">
      <span class="text-muted small d-block">
        <span id="accountNumber">{{ Auth::user()->a_number }}</span>
        <i class="bi bi-copy ms-1 clickable" id="copyIcon" onclick="copyAccountNumber()" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy to clipboard"></i>
      </span>
    </div>
  </div>

  <!-- Loan Stats -->
  <div class="loan-stats">
    <div class="stat-item">
      <div class="stat-value">{{Auth::user()->currency}}{{number_format(Auth::user()->eligible_loan, 2)}}</div>
      <div class="stat-label">Eligible Amount</div>
    </div>
    <div class="stat-item">
      <div class="stat-value">{{Auth::user()->currency}}{{number_format($outstanding_loan, 2)}}</div>
      <div class="stat-label">Outstanding</div>
    </div>
    <div class="stat-item">
      <div class="stat-value">{{Auth::user()->currency}}{{number_format($pending_loan, 2)}}</div>
      <div class="stat-label">Pending</div>
    </div>
  </div>

  <!-- Loan Form -->
  <div class="transaction-box">
    <div class="info-note">
      <i class="bi bi-info-circle-fill me-2"></i>
      You're eligible for a loan up to {{Auth::user()->currency}}{{number_format(Auth::user()->eligible_loan, 2)}} based on your account activity.
    </div>
    
    <form action="{{ route('make.loan') }}" method="POST">
      @csrf
      <input type="hidden" name="email" value="{{ Auth::user()->email }}">
      
      <div class="mb-3">
        <label class="form-label">Loan Amount</label>
        <div class="input-group">
          <span class="input-group-text">{{Auth::user()->currency}}</span>
          <input type="number" name="amount" class="form-control" 
                 placeholder="Enter amount" 
                 required 
                 min="100" 
                 max="{{Auth::user()->eligible_loan}}"
                 step="100">
        </div>
        <small class="text-muted">Minimum: {{Auth::user()->currency}}100</small>
      </div>
      
      <div class="mb-3">
        <label class="form-label">Loan Type</label>
        <select class="form-select" name="loan_type" required>
          <option value="Personal Loan">Personal Loan</option>
          <option value="Business Loan">Business Loan</option>
          <option value="Emergency Loan">Emergency Loan</option>
          <option value="Education Loan">Education Loan</option>
        </select>
      </div>
      
      <div class="mb-3">
        <label class="form-label">Repayment Period</label>
        <select class="form-select" name="repayment_period" required>
          <option value="30">1 Month</option>
          <option value="90">3 Months</option>
          <option value="180" selected>6 Months</option>
          <option value="365">12 Months</option>
        </select>
      </div>
      
      <div class="mb-3">
        <label class="form-label">Purpose</label>
        <textarea name="reason" class="form-control" rows="3" placeholder="Briefly describe the purpose of this loan" required></textarea>
      </div>
      
      <div class="mb-3">
        <label class="form-label">Transaction PIN</label>
        <input type="password" name="transaction_pin" class="form-control" placeholder="Enter 4-digit PIN" maxlength="4" required>
      </div>
      
      <div class="terms-box">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="termsCheck" required>
          <label class="form-check-label small" for="termsCheck">
            I agree to the loan terms and conditions. I understand that late repayments may incur additional fees.
          </label>
        </div>
      </div>
      
      <button type="submit" class="btn btn-main w-100 mt-3">
        <i class="bi bi-cash-stack"></i> Request Loan
      </button>
    </form>
  </div>
  
  <!-- Loan History -->
  <div class="mt-4">
    <h6 class="fw-semibold mb-3">Recent Loan Transactions</h6>
    
    @if(count($transaction) > 0)
      @foreach($transaction as $details)
      <div class="loan-option mb-2">
        <div class="loan-icon">
          <i class="bi bi-cash-coin"></i>
        </div>
        <div class="flex-grow-1">
          <div class="d-flex justify-content-between">
            <span class="fw-semibold">{{$details->transaction_ref}}</span>
            <span class="{{$details->transaction_status == '1' ? 'text-success' : 'text-warning'}}">
              {{$details->transaction_status == '1' ? 'Completed' : 'Pending'}}
            </span>
          </div>
          <div class="d-flex justify-content-between small">
            <span class="text-muted">{{ \Carbon\Carbon::parse($details->transaction_created_at)->format('M d, Y') }}</span>
            <span class="fw-semibold">{{Auth::user()->currency}}{{number_format($details->transaction_amount, 2)}}</span>
          </div>
        </div>
      </div>
      @endforeach
    @else
      <div class="text-center py-4">
        <i class="bi bi-cash-stack fs-1 text-muted"></i>
        <p class="text-muted">No loan transactions yet</p>
      </div>
    @endif
  </div>
</div>

<!-- Bottom Navigation -->
<nav class="navbar fixed-bottom bg-white bottom-nav">
  <div class="container d-flex justify-content-around text-center">
    <a class="nav-link" href="{{route('dashboard')}}"><i class="bi bi-house-door"></i><br><small>Home</small></a>
    <a class="nav-link" href="{{route('card')}}"><i class="bi bi-credit-card-2-front"></i><br><small>Card</small></a>
    <a class="nav-link" href="{{route('bank')}}"><i class="bi bi-arrow-left-right"></i><br><small>Transfers</small></a>
    <a class="nav-link active" href="{{route('transactions')}}"><i class="bi bi-clock-history"></i><br><small>History</small></a>
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
    
    // Set max amount to eligible loan amount
    const amountInput = document.querySelector('input[name="amount"]');
    if(amountInput) {
      amountInput.max = {{Auth::user()->eligible_loan}};
    }
  });
</script>
</body>
</html>