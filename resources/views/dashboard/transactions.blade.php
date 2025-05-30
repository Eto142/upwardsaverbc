<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Upward Saver - Transactions</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/css/transactions.css" rel="stylesheet" />
</head>
<body>

<div class="container pt-4">
  <div class="transaction-header">
    <div>
      <h5 class="mb-0 fw-semibold">Transaction History</h5>
    </div>
    <div class="text-end">
      <span class="text-muted small d-block">
        <span id="accountNumber">{{ Auth::user()->a_number }}</span>
        <i class="bi bi-copy ms-1 clickable" id="copyIcon" onclick="copyAccountNumber()" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy to clipboard"></i>
      </span>
    </div>
  </div>

  @if($transaction->isEmpty())
    <div class="empty-state">
      <div class="empty-state-icon">
        <i class="bi bi-clock-history"></i>
      </div>
      <h5>No transactions yet</h5>
      <p class="text-muted">Your transaction history will appear here</p>
    </div>
  @else
    @foreach($transaction as $details)
      <div class="transaction-box d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
          @if($details->transaction == 'Bank Transfer')
            <div class="transaction-icon transaction-success">
              <i class="bi bi-arrow-right"></i>
            </div>
          @elseif($details->transaction == 'Loan')
            <div class="transaction-icon transaction-approved">
              <i class="bi bi-cash-stack"></i>
            </div>
          @elseif($details->transaction == 'Card')
            <div class="transaction-icon">
              <i class="bi bi-credit-card"></i>
            </div>
          @elseif($details->transaction == 'Crypto Withdrawal')
            <div class="transaction-icon">
              <i class="bi bi-currency-bitcoin"></i>
            </div>
          @elseif($details->transaction == 'Paypal Withdrawal')
            <div class="transaction-icon">
              <i class="bi bi-paypal"></i>
            </div>
          @elseif($details->transaction == 'Skrill Withdrawal')
            <div class="transaction-icon">
              <i class="bi bi-wallet2"></i>
            </div>
          @endif
          
          <div>
            <div class="fw-medium">{{ Str::limit($details->transaction_description, 30) }}</div>
            <div class="transaction-date">{{ $details->created_at->format('M d, Y · h:i A') }}</div>
          </div>
        </div>
        
        <div class="text-end">
          <div class="transaction-amount">
            @if(in_array($details->transaction, ['Bank Transfer', 'Paypal Withdrawal', 'Skrill Withdrawal', 'Crypto Withdrawal']))
              -{{ Auth::user()->currency }}{{ number_format($details->transaction_amount, 2) }}
            @elseif($details->transaction == 'Loan')
              +{{ Auth::user()->currency }}{{ number_format($details->transaction_amount, 2) }}
            @endif
          </div>
          
          <div class="mt-1">
            @if($details->transaction == 'Card' && $details->transaction_status == '1')
              <span class="badge transaction-approved">Approved</span>
            @elseif($details->transaction_status == '1')
              <span class="badge transaction-success">Successful</span>
            @elseif($details->transaction_status == '0')
              <span class="badge transaction-pending">Pending</span>
            @else
              <span class="badge transaction-failed">Failed</span>
            @endif
          </div>
        </div>
      </div>
    @endforeach
    
    <div class="d-flex justify-content-center mt-3">
      <button class="btn btn-outline-main">Load More</button>
    </div>
  @endif
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
  });
</script>
</body>
</html>