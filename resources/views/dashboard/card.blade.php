<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Upward Saver - Card</title>
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
    
    /* Card specific styles */
    .card-preview {
      background: linear-gradient(135deg, #305C89 0%, #1a3a5a 100%);
      border-radius: 16px;
      padding: 20px;
      color: white;
      margin-bottom: 20px;
      position: relative;
      overflow: hidden;
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    
    .card-preview::before {
      content: "";
      position: absolute;
      top: -50px;
      right: -50px;
      width: 200px;
      height: 200px;
      background: rgba(255,255,255,0.1);
      border-radius: 50%;
    }
    
    .card-preview::after {
      content: "";
      position: absolute;
      bottom: -80px;
      right: -30px;
      width: 200px;
      height: 200px;
      background: rgba(255,255,255,0.05);
      border-radius: 50%;
    }
    
    .card-logo {
      width: 50px;
      margin-bottom: 20px;
    }
    
    .card-number {
      font-size: 18px;
      letter-spacing: 2px;
      margin: 20px 0;
      font-family: monospace;
    }
    
    .card-details {
      display: flex;
      justify-content: space-between;
      margin-top: 30px;
    }
    
    .card-name {
      font-size: 16px;
      text-transform: uppercase;
    }
    
    .card-expiry {
      font-size: 14px;
    }
    
    .card-status {
      display: inline-block;
      padding: 5px 10px;
      border-radius: 20px;
      font-size: 12px;
      font-weight: 500;
      margin-bottom: 15px;
    }
    
    .status-pending {
      background-color: #FFF3E0;
      color: #E65100;
    }
    
    .status-active {
      background-color: #E8F5E9;
      color: #2E7D32;
    }
    
    .card-feature {
      background-color: #f6f6f6;
      padding: 15px;
      border-radius: 12px;
      margin-bottom: 15px;
    }
    
    .card-feature-icon {
      font-size: 24px;
      margin-right: 15px;
      color: #b93b2d;
    }
  </style>
</head>
<body>

<div class="container pt-4">
  <div class="d-flex justify-content-between align-items-center">
    <div>
      <h6 class="mb-0 fw-semibold">My Card</h6>
    </div>
    <div class="text-end">
      <span class="text-muted small d-block">
        <span id="accountNumber">{{ Auth::user()->a_number }}</span>
        <i class="bi bi-copy ms-1 clickable" id="copyIcon" onclick="copyAccountNumber()" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy to clipboard"></i>
      </span>
    </div>
  </div>

  @forelse($details as $detail)
    @if($detail->status == 0)
      <!-- Card under review -->
      <div class="card-preview mt-3 text-center">
        <div class="card-status status-pending">UNDER REVIEW</div>
        <img src="mastercard.png" alt="Card Logo" class="card-logo">
        <p>Your card is currently being reviewed</p>
        <p class="small-text">We'll notify you when it's ready</p>
      </div>
    @else
      <!-- Active card -->
      <div class="card-preview mt-3">
        <div class="card-status status-active">ACTIVE</div>
        <img src="mastercard.png" alt="Card Logo" class="card-logo">
        <div class="card-number">
          {{ implode(' ', str_split($detail->card_number, 4)) }}
        </div>
        <div class="card-details">
          <div class="card-name">
            {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
          </div>
          <div class="card-expiry">
            Exp: {{ \Carbon\Carbon::parse($detail->card_expiry)->format('m/y') }}
          </div>
        </div>
      </div>
      
      <!-- Card actions -->
      <div class="d-flex gap-2 mt-3">
        <button class="btn btn-main flex-fill"><i class="bi bi-eye"></i> Show CVV</button>
        <button class="btn btn-outline-danger flex-fill"><i class="bi bi-trash"></i> Delete</button>

      </div>
      
    @endif
  @empty
    <!-- No card available -->
    <div class="card-preview mt-3 text-center">
      <img src="mastercard.png" alt="Card Logo" class="card-logo">
      <h6 class="mt-2">No Card Available</h6>
      <p class="small-text">You don't have a card yet</p>
      <a href="{{route('request.card', Auth::user()->id)}}" class="btn btn-main mt-3">Request Card</a>
    </div>
  @endforelse

   <!-- Card delivery request -->
  @if(!$details->isEmpty() && $detail->status != 0)
    <div class="text-center mt-4">
      <button type="button" class="btn btn-outline-main" data-bs-toggle="modal" data-bs-target="#deliveryModal">
        <i class="bi bi-truck"></i> Request Bank Card Delivery
      </button>
    </div>
  @endif

  <!-- Card features -->
  <h6 class="mt-4">Card Features</h6>
  <div class="card-feature d-flex align-items-center">
    <i class="bi bi-lightning card-feature-icon"></i>
    <div>
      <h6 class="mb-1">Instant Access</h6>
      <p class="small-text mb-0">Apply and activate instantly</p>
    </div>
  </div>
  
  <div class="card-feature d-flex align-items-center">
    <i class="bi bi-shield-check card-feature-icon"></i>
    <div>
      <h6 class="mb-1">Safety</h6>
      <p class="small-text mb-0">No physical handing. No risk of loss</p>
    </div>
  </div>

 

  <!-- Personal information -->
  <h6 class="mt-4">Personal Information</h6>
  <div class="transaction-box">
    <div class="d-flex justify-content-between mb-2">
      <span class="text-muted small-text">First Name</span>
      <span>{{Auth::user()->first_name}}</span>
    </div>
    <div class="d-flex justify-content-between mb-2">
      <span class="text-muted small-text">Last Name</span>
      <span>{{Auth::user()->last_name}}</span>
    </div>
    <div class="d-flex justify-content-between mb-2">
      <span class="text-muted small-text">Date of Birth</span>
      <span>{{Auth::user()->dob}}</span>
    </div>
    <div class="d-flex justify-content-between">
      <span class="text-muted small-text">Gender</span>
      <span>{{Auth::user()->gender}}</span>
    </div>
  </div>
</div>

<!-- Delivery Request Modal -->
<div class="modal fade" id="deliveryModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Card Delivery Request</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="requestForm" action="{{route('requestcard.delivery')}}" method="POST">
          @csrf
          <div class="mb-3">
            <label for="fullName" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="fullName" name="fname" required>
          </div>
          <div class="mb-3">
            <label for="houseAddress" class="form-label">House Address</label>
            <input type="text" class="form-control" id="houseAddress" name="address" required>
          </div>
          <div class="mb-3">
            <label for="phoneNumber" class="form-label">Phone Number</label>
            <input type="tel" class="form-control" id="phoneNumber" name="phone" required>
          </div>
          <div class="mb-3">
            <label for="emailAddress" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="emailAddress" name="emailAddress" required>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-main" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" form="requestForm" class="btn btn-main">Submit Request</button>
      </div>
    </div>
  </div>
</div>

<!-- Bottom Navigation -->
<nav class="navbar fixed-bottom bg-white bottom-nav">
  <div class="container d-flex justify-content-around text-center">
    <a class="nav-link" href="{{route('dashboard')}}"><i class="bi bi-house-door"></i><br><small>Home</small></a>
    <a class="nav-link" href="{{route('card')}}"><i class="bi bi-credit-card-2-front-fill active"></i><br><small>Card</small></a>
    <a class="nav-link" href="{{route('bank')}}"><i class="bi bi-arrow-left-right"></i><br><small>Transfers</small></a>
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
  });
</script>
</body>
</html>