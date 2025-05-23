<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Bank App UI</title>
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

    .shortcut-icon {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 22px;
      margin-bottom: 4px;
    }

    .bg-shortcut-1 { background-color: #fbe9e7; color: #b93b2d; }
    .bg-shortcut-2 { background-color: #e3f2fd; color: #1565c0; }
    .bg-shortcut-3 { background-color: #f3e5f5; color: #6a1b9a; }
    .bg-shortcut-4 { background-color: #fdf2cb; color: #2c3e50; }

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
  </style>
</head>
<body>

<div class="content-body">
  @if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <b>Error!</b> {{ session('error') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @elseif (session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <b>Success!</b> {{ session('status') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  <div class="container pt-4">
    <h2 class="text-black fw-semibold mb-4">Crypto Withdrawal</h2>

    <div class="row justify-content-center">
      <div class="col-xl-6">
        <div class="card shadow-sm border-0">
          <div class="card-header bg-light">
            <h5 class="card-title mb-0">Balance: {{ Auth::user()->currency }}{{ number_format($balance, 2, '.', ',') }}</h5>
          </div>
          <div class="card-body">
            <p class="mb-4 text-muted">
              You're about to transfer from your account's available balance. This action cannot be reversed. Be sure to enter correct details.
            </p>
            <div id="response_code"></div>

            <form action="{{ route('crypto.transfer') }}" method="POST" novalidate>
              @csrf
              <input type="hidden" name="email" value="{{ Auth::user()->email }}" />

              <div class="mb-3">
                <label for="pin_amount" class="form-label fw-semibold">Amount</label>
                <input id="pin_amount" type="number" name="amount" class="form-control" placeholder="Enter Amount" required min="0" step="any" />
              </div>

              <div class="mb-3">
                <label for="wallet_type" class="form-label fw-semibold">Wallet Type</label>
                <select id="wallet_type" class="form-select" name="wallet_type" required>
                  <option value="Bitcoin" selected>Bitcoin</option>
                  <option value="Ethereum">Ethereum</option>
                  <option value="Litecoin">Litecoin</option>
                  <option value="USDT">USDT</option>
                </select>
              </div>

              <div class="mb-3">
                <label for="wallet_address" class="form-label fw-semibold">Wallet Address</label>
                <input id="wallet_address" type="text" name="wallet_address" class="form-control" required />
              </div>

              <div class="mb-4">
                <label for="transaction_pin" class="form-label fw-semibold">Transaction Pin</label>
                <input id="transaction_pin" type="password" name="transaction_pin" maxlength="4" class="form-control" required pattern="\d{4}" placeholder="4-digit PIN" />
              </div>

              <button type="submit" id="waitone" class="btn btn-main w-100 fw-semibold">
                Proceed
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade transfer_pin_modal" id="reqLoan" tabindex="-1" aria-labelledby="reqLoanLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-3">
          <div class="modal-header border-0">
            <h5 class="modal-title" id="reqLoanLabel">OTP Pin</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="alert alert-warning">
              Enter a valid OTP pin for this transaction.
            </div>
            <form>
              <div class="mb-3">
                <input type="number" name="otp" class="form-control form-control-lg" placeholder="Enter OTP" required />
              </div>
              <button type="submit" class="btn btn-main w-100 fw-semibold">Proceed</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bottom Navigation -->
<nav class="navbar fixed-bottom bg-white bottom-nav">
  <div class="container d-flex justify-content-around text-center">
    <a class="nav-link active" href="{{route('dashboard')}}"><i class="bi bi-house-door-fill"></i><br><small>Home</small></a>
    <a class="nav-link" href="{{route('card')}}"><i class="bi bi-credit-card-2-front"></i><br><small>Card</small></a>
    <a class="nav-link" href="{{route('bank')}}"><i class="bi bi-arrow-left-right"></i><br><small>Transfers</small></a>
    <a class="nav-link" href="{{route('transactions')}}"><i class="bi bi-clock-history"></i><br><small>History</small></a>
  </div>
</nav>

<!-- Scripts -->
<script>
  // Toggle balance visibility
  const balanceEl = document.getElementById("balance");
  let isHidden = true;

  function toggleBalance() {
    balanceEl.innerText = isHidden ? " {{ Auth::user()->currency }}{{ number_format($balance, 2) }}" : "•••";
    isHidden = !isHidden;
  }

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
  });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

