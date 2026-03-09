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
      <div class="transaction-box d-flex justify-content-between align-items-center"
           role="button"
           data-bs-toggle="modal"
           data-bs-target="#txnDetailModal"
           data-txn-id="{{ $details->transaction_id ?? 'N/A' }}"
           data-txn-ref="{{ $details->transaction_ref ?? 'N/A' }}"
           data-txn-category="{{ $details->transaction }}"
           data-txn-type="{{ $details->transaction_type ?? 'N/A' }}"
           data-txn-description="{{ $details->transaction_description }}"
           data-txn-amount="{{ Auth::user()->currency }}{{ number_format($details->transaction_amount, 2) }}"
           data-txn-sign="{{ in_array($details->transaction, ['Bank Transfer', 'Paypal Withdrawal', 'Skrill Withdrawal', 'Crypto Withdrawal']) ? '-' : '+' }}"
           data-txn-status="{{ $details->transaction == 'Card' && $details->transaction_status == '1' ? 'Approved' : ($details->transaction_status == '1' ? 'Successful' : ($details->transaction_status == '0' ? 'Pending' : 'Failed')) }}"
           data-txn-status-class="{{ $details->transaction == 'Card' && $details->transaction_status == '1' ? 'transaction-approved' : ($details->transaction_status == '1' ? 'transaction-success' : ($details->transaction_status == '0' ? 'transaction-pending' : 'transaction-failed')) }}"
           data-txn-date="{{ $details->created_at->format('M d, Y · h:i A') }}">
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

<!-- Transaction Detail Modal -->
<div class="modal fade" id="txnDetailModal" tabindex="-1" aria-labelledby="txnDetailModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content txn-modal-content">
      <div class="txn-modal-header">
        <div class="txn-modal-icon-wrap" id="modalIconWrap">
          <i class="bi bi-arrow-right" id="modalIcon"></i>
        </div>
        <div class="txn-modal-amount" id="modalAmount"></div>
        <span class="badge" id="modalStatusBadge"></span>
        <button type="button" class="btn-close btn-close-white txn-modal-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="txn-modal-body">
        <div class="txn-detail-row">
          <span class="txn-detail-label"><i class="bi bi-tag"></i> Category</span>
          <span class="txn-detail-value" id="modalCategory"></span>
        </div>
        <div class="txn-detail-row">
          <span class="txn-detail-label"><i class="bi bi-arrow-left-right"></i> Type</span>
          <span class="txn-detail-value" id="modalType"></span>
        </div>
        <div class="txn-detail-row">
          <span class="txn-detail-label"><i class="bi bi-file-text"></i> Description</span>
          <span class="txn-detail-value txn-detail-desc" id="modalDescription"></span>
        </div>
        <div class="txn-detail-row">
          <span class="txn-detail-label"><i class="bi bi-hash"></i> Transaction ID</span>
          <span class="txn-detail-value" id="modalTxnId"></span>
        </div>
        <div class="txn-detail-row">
          <span class="txn-detail-label"><i class="bi bi-bookmark"></i> Reference</span>
          <span class="txn-detail-value" id="modalRef"></span>
        </div>
        <div class="txn-detail-row">
          <span class="txn-detail-label"><i class="bi bi-check-circle"></i> Status</span>
          <span class="txn-detail-value" id="modalStatusRow"></span>
        </div>
        <div class="txn-detail-row">
          <span class="txn-detail-label"><i class="bi bi-calendar3"></i> Date</span>
          <span class="txn-detail-value" id="modalDate"></span>
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
  // Populate modal with transaction details
  const txnModal = document.getElementById('txnDetailModal');
  if (txnModal) {
    txnModal.addEventListener('show.bs.modal', function (event) {
      const row = event.relatedTarget;

      // Icon mapping
      const iconMap = {
        'Bank Transfer': 'bi-arrow-right',
        'Loan': 'bi-cash-stack',
        'Card': 'bi-credit-card',
        'Crypto Withdrawal': 'bi-currency-bitcoin',
        'Paypal Withdrawal': 'bi-paypal',
        'Skrill Withdrawal': 'bi-wallet2'
      };

      const category = row.getAttribute('data-txn-category');
      const sign = row.getAttribute('data-txn-sign');
      const amount = row.getAttribute('data-txn-amount');
      const status = row.getAttribute('data-txn-status');
      const statusClass = row.getAttribute('data-txn-status-class');

      // Set icon
      const modalIcon = document.getElementById('modalIcon');
      modalIcon.className = 'bi ' + (iconMap[category] || 'bi-receipt');

      // Set amount with sign
      document.getElementById('modalAmount').textContent = sign + amount;

      // Set status badge
      const badge = document.getElementById('modalStatusBadge');
      badge.textContent = status;
      badge.className = 'badge ' + statusClass;

      // Set detail rows
      document.getElementById('modalCategory').textContent = category || 'N/A';
      document.getElementById('modalType').textContent = row.getAttribute('data-txn-type');
      document.getElementById('modalDescription').textContent = row.getAttribute('data-txn-description');
      document.getElementById('modalTxnId').textContent = row.getAttribute('data-txn-id');
      document.getElementById('modalRef').textContent = row.getAttribute('data-txn-ref');

      // Set status row with colored badge
      const statusRow = document.getElementById('modalStatusRow');
      statusRow.innerHTML = '<span class="badge ' + statusClass + '">' + status + '</span>';
      document.getElementById('modalDate').textContent = row.getAttribute('data-txn-date');
    });
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
</body>
</html>