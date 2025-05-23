<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Upward Saver</title>
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

<div class="container pt-4">
  <div class="d-flex justify-content-between align-items-center">
    <a href="{{ route('profile') }}" class="text-decoration-none text-dark">
  <div>
    <h6 class="mb-0 fw-semibold">Hello, {{ Auth::user()->first_name }}!</h6>
  </div>
</a>

    <div class="text-end">
      <span class="text-muted small d-block">
        <span id="accountNumber"> {{ Auth::user()->a_number }}</span>
        <i class="bi bi-copy ms-1 clickable" id="copyIcon" onclick="copyAccountNumber()" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy to clipboard"></i>
      </span>
    </div>
  </div>

  <div class="mt-2">
    <span class="badge bg-light text-dark small-text">Savings</span>
  </div>

  <div class="mt-2 d-flex align-items-center gap-1">
    <span class="text-muted small-text">Book balance</span>
    <span id="balance" class="fw-bold clickable">{{ Auth::user()->currency }}{{ number_format($balance, 2) }}</span> 
    {{-- <span id="balance" class="fw-bold clickable" onclick="toggleBalance()">••••</span> --}}
    {{-- <i class="bi bi-eye ms-1 text-muted small-text clickable" onclick="toggleBalance()"></i> --}}
  </div>

  <!-- Buttons -->
  <div class="d-flex gap-2 mt-3">
  <a href="{{route('deposit')}}" class="btn btn-main flex-fill">
    <i class="bi bi-plus-circle"></i> Fund account
  </a>
  <a href="{{route('bank')}}" class="btn btn-outline-main flex-fill">
    <i class="bi bi-arrow-right"></i> Transfer
  </a>
  <a href="{{route('cfx')}}" class="btn btn-outline-main flex-fill">
    <i class="bi bi-currency-exchange"></i> FX
  </a>
</div>


 <!-- Shortcuts -->
<h6 class="mt-4">Shortcuts</h6>
<div class="d-flex justify-content-around text-center">
  <a href="{{route('cryptopage')}}" class="text-decoration-none text-dark">
    <div>
      <div class="shortcut-icon bg-shortcut-1"><i class="bi bi-currency-bitcoin"></i></div>
      <small>Crypto</small>
    </div>
  </a>
  <a href="{{route('deposit')}}" class="text-decoration-none text-dark">
    <div>
      <div class="shortcut-icon bg-shortcut-2"><i class="bi bi-bank2"></i></div>
      <small>Check Deposit</small>
    </div>
  </a>
  <a href="{{route('loan')}}" class="text-decoration-none text-dark">
    <div>
      <div class="shortcut-icon bg-shortcut-3"><i class="bi bi-credit-card"></i></div>
      <small>Loan</small>
    </div>
  </a>
  <a href="{{route('paypal')}}" class="text-decoration-none text-dark">
    <div>
      <div class="shortcut-icon bg-shortcut-4"><i class="bi bi-paypal"></i></div>
      <small>PayPal</small>
    </div>
  </a>
</div>


  <!-- Transaction -->
<!-- Transaction -->
<h6 class="mt-4 d-flex justify-content-between align-items-center">
  Transaction history
  <a href="{{route('transactions')}}" class="small text-decoration-none">See more</a>
</h6>

@if($transaction->isEmpty())
  <div class="text-center text-muted py-4">
    No transactions yet.
  </div>
@else
  @foreach($transaction as $details)
    <div class="transaction-box d-flex justify-content-between align-items-center mb-2">
      <div>
        <div class="d-flex align-items-center gap-2">
          @if($details->transaction == 'Bank Transfer')
            <i class="bi bi-arrow-right-circle-fill text-success"></i>
          @elseif($details->transaction == 'Loan')
            <i class="bi bi-arrow-up-circle-fill text-dark"></i>
          @elseif($details->transaction == 'Card')
            <i class="bi bi-credit-card-fill text-dark"></i>
          @elseif($details->transaction == 'Crypto Withdrawal')
            <i class="bi bi-currency-bitcoin text-warning"></i>
          @elseif($details->transaction == 'Paypal Withdrawal')
            <i class="bi bi-paypal text-info"></i>
          @elseif($details->transaction == 'Skrill Withdrawal')
            <i class="bi bi-wallet2 text-success"></i>
          @else
            <i class="bi bi-info-circle-fill text-muted"></i>
          @endif

          <span class="small">
            {{ Str::limit($details->transaction_description, 25) }}
          </span>
        </div>
        <small class="text-muted">{{ $details->transaction }}</small>
      </div>

      <div class="text-end">
        <small class="text-muted">
          @if(str_contains($details->transaction_description, 'From'))
            {{ $details->transaction_description }}
          @else
            From •••{{ substr($details->account_number ?? '0000', -4) }}
          @endif
        </small>
        <br>
        <small>
          @if(in_array($details->transaction, ['Bank Transfer', 'Paypal Withdrawal', 'Skrill Withdrawal', 'Crypto Withdrawal']))
            -{{ Auth::user()->currency }}{{ number_format($details->transaction_amount, 2) }}
          @elseif($details->transaction == 'Loan')
            +{{ Auth::user()->currency }}{{ number_format($details->transaction_amount, 2) }}
          @elseif($details->transaction == 'Card')
            &nbsp;
          @endif
        </small>
        <br>
        @if($details->transaction == 'Card' && $details->transaction_status == '1')
          <a href="javascript:void(0)" class="badge light badge-success">Approved</a>
        @elseif($details->transaction_status == '1')
          <a href="javascript:void(0)" class="badge light badge-success">Successful</a>
        @elseif($details->transaction_status == '0')
          <a href="javascript:void(0)" class="badge light badge-primary">Pending</a>
        @else
          <a href="javascript:void(0)" class="badge light badge-warning">Failed</a>
        @endif
      </div>
    </div>
  @endforeach
@endif


  <!-- Investments -->
  <h6 class="mt-4">Investments</h6>
  <div class="card border-0 bg-light mb-5">
    <div class="card-body text-center">
      <i class="bi bi-safe2-fill" style="font-size: 2rem;"></i>
      <p class="mt-2 mb-0">Your investment vault</p>
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
