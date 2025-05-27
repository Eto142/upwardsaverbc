<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Upward Saver</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/css/dashboard.css" rel="stylesheet" />
  
</head>
<body>

<div class="container pt-4">
  <div class="d-flex justify-content-between align-items-center">
 <a href="{{ route('profile') }}" class="text-decoration-none text-dark d-flex align-items-center">
  <!-- Profile Picture Circle -->
  <div class="rounded-circle overflow-hidden me-3" style="width: 40px; height: 40px; position: relative;">
    @if(Auth::user()->display_picture)
      <img src="{{ asset('uploads/display/' . Auth::user()->display_picture) }}" 
           alt="Profile" 
           class="w-100 h-100 object-fit-cover"
           onclick="event.preventDefault(); triggerFileInput()"
           style="cursor: pointer;">
    @else
      <div class="bg-secondary w-100 h-100 d-flex align-items-center justify-content-center"
           onclick="event.preventDefault(); triggerFileInput()"
           style="cursor: pointer;">
        <span class="text-white">{{ strtoupper(substr(Auth::user()->first_name, 0, 1)) }}</span>
      </div>
    @endif
  </div>
  
  <!-- Greeting Text -->
  <div>
    <h6 class="mb-0 fw-semibold">Hello, {{ Auth::user()->first_name }}!</h6>
  </div>
</a>

<!-- Hidden Form for Profile Picture Upload -->
<form id="uploadForm" action="{{ route('personal.dp') }}" method="POST" enctype="multipart/form-data" style="display: none;">
  @csrf
  <input type="file" id="profilePictureInput" name="image" accept="image/*" onchange="uploadProfilePicture()">
</form>


    <div class="text-end">
      <span class="text-muted small d-block">
        <span id="accountNumber"> {{ Auth::user()->a_number }}</span>
        <i class="bi bi-copy ms-1 clickable" id="copyIcon" onclick="copyAccountNumber()" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy to clipboard"></i>
      </span>
    </div>
  </div>

  <div class="mt-2">
    <span class="badge bg-light text-dark small-text">{{ Auth::user()->account_type}}</span>
  </div>

  <div class="mt-2 d-flex align-items-center gap-1">
    <span class="text-muted small-text">Book Balance</span>
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
      <div class="shortcut-icon bg-shortcut-3"><i class="bi bi-bank2"></i></div>
      <small>Deposit</small>
    </div>
  </a>
  <a href="{{route('loan')}}" class="text-decoration-none text-dark">
    <div>
      <div class="shortcut-icon bg-shortcut-3"><i class="bi bi-credit-card"></i></div>
      <small>Loan</small>
    </div>
  </a>
    <a href="{{route('paybills')}}" class="text-decoration-none text-dark">
    <div>
      <div class="shortcut-icon bg-shortcut-3"><i class="bi bi-cash-stack"></i></div>
      <small>Pay Bill</small>
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
@forelse($trades as $trade)
  <div class="card border-0 shadow-sm bg-white mb-3 rounded-4 overflow-hidden">
    <div class="card-body p-4">
      <div class="d-flex justify-content-between align-items-start">
        <!-- Trade Details -->
        <div class="flex-grow-1 pe-3">
          <!-- Asset Header -->
          <div class="d-flex align-items-center mb-2">
            <span class="badge bg-primary bg-opacity-10 text-primary fw-semibold me-2 py-1 px-2 rounded-2">
              {{ strtoupper($trade->asset_symbol) }}
            </span>
            <h6 class="mb-0 fw-bold text-dark">{{ $trade->asset_name }}</h6>
          </div>
          
          <!-- Trade Metadata -->
          <div class="row g-2 small">
            <div class="col-6">
              <div class="text-muted">Type</div>
              <div class="fw-medium">{{ ucfirst($trade->type) }}</div>
            </div>
            <div class="col-6">
              <div class="text-muted">Order</div>
              <div class="fw-medium">{{ ucfirst($trade->order_type) }}</div>
            </div>
            <div class="col-6">
              <div class="text-muted">Amount</div>
              <div class="fw-medium">${{ number_format($trade->amount_usd, 2) }}</div>
            </div>
            <div class="col-6">
              <div class="text-muted">Quantity</div>
              <div class="fw-medium">{{ $trade->quantity }}</div>
            </div>
            @if($trade->limit_price)
            <div class="col-12">
              <div class="text-muted">Limit Price</div>
              <div class="fw-medium">${{ number_format($trade->limit_price, 2) }}</div>
            </div>
            @endif
          </div>
        </div>
        
        <!-- Icon -->
        <div class="text-primary bg-primary bg-opacity-10 p-3 rounded-3">
          <i class="bi bi-safe2-fill" style="font-size: 1.8rem;"></i>
        </div>
      </div>
    </div>
    
    <!-- Status/Progress Bar (optional) -->
    <div class="progress rounded-0" style="height: 4px;">
      <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
  </div>
@empty
  <div class="card border-0 bg-light mb-4">
    <div class="card-body text-center py-5">
      <i class="bi bi-safe2-fill text-muted opacity-50" style="font-size: 3rem;"></i>
      <h5 class="mt-3 mb-1 fw-semibold">No investments yet</h5>
      <p class="text-muted small mb-0">Your investment portfolio will appear here</p>
    </div>
  </div>
@endforelse

</div>

<script>
  function triggerFileInput() {
    document.getElementById('profilePictureInput').click();
  }

  function uploadProfilePicture() {
    document.getElementById('uploadForm').submit();
  }
</script>


@include('dashboard.footer')
</body>
</html>
