<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Upward Saver - Profile</title>
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

    .profile-section {
      background-color: #f6f6f6;
      padding: 15px;
      border-radius: 12px;
      margin-bottom: 15px;
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
      color: #666;
    }

    .clickable {
      cursor: pointer;
    }
    
    /* Profile specific styles */
    .profile-header {
      text-align: center;
      padding: 20px 0;
    }
    
    .profile-avatar {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      object-fit: cover;
      border: 3px solid white;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      margin: 0 auto 15px;
    }
    
    .profile-name {
      font-size: 20px;
      font-weight: 600;
      margin-bottom: 5px;
    }
    
    .profile-account {
      color: #666;
      font-size: 14px;
    }
    
    .profile-item {
      display: flex;
      justify-content: space-between;
      padding: 12px 0;
      border-bottom: 1px solid #eee;
    }
    
    .profile-item:last-child {
      border-bottom: none;
    }
    
    .profile-item-label {
      color: #666;
    }
    
    .profile-item-value {
      font-weight: 500;
    }
    
    .nav-tabs .nav-link {
      border: none;
      color: #666;
      font-weight: 500;
    }
    
    .nav-tabs .nav-link.active {
      color: #b93b2d;
      border-bottom: 2px solid #b93b2d;
    }
    
    .tab-content {
      padding: 20px 0;
    }
    
    .kyc-modal .modal-content {
      border-radius: 12px;
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

  <!-- Profile Header -->
  <div class="profile-header">
    <img src="{{ asset('uploads/display/' . (Auth::user()->display_picture ? Auth::user()->display_picture : 'avatar.jpg')) }}" 
         class="profile-avatar" alt="Profile picture">
    <div class="profile-name">{{Auth::user()->first_name}} {{Auth::user()->last_name}}</div>
    <div class="profile-account">Savings Account · Tier 3</div>
  </div>

  <!-- Profile Navigation -->
  <ul class="nav nav-tabs" id="profileTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="account-tab" data-bs-toggle="tab" data-bs-target="#account" type="button" role="tab">Account</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="security-tab" data-bs-toggle="tab" data-bs-target="#security" type="button" role="tab">Security</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings" type="button" role="tab">Settings</button>
    </li>
  </ul>

  <!-- Tab Content -->
  <div class="tab-content" id="profileTabContent">
    <!-- Account Tab -->
    <div class="tab-pane fade show active" id="account" role="tabpanel">
      <div class="profile-section">
        <h6 class="fw-semibold mb-3">Personal Information</h6>
        
        <div class="profile-item">
          <span class="profile-item-label">Full Name</span>
          <span class="profile-item-value">{{Auth::user()->first_name}} {{Auth::user()->last_name}}</span>
        </div>
        
        <div class="profile-item">
          <span class="profile-item-label">Email</span>
          <span class="profile-item-value">{{Auth::user()->email}}</span>
        </div>
        
        <div class="profile-item">
          <span class="profile-item-label">Phone</span>
          <span class="profile-item-value">{{Auth::user()->phone_number}}</span>
        </div>
        
        <div class="profile-item">
          <span class="profile-item-label">Date of Birth</span>
          <span class="profile-item-value">{{Auth::user()->dob}}</span>
        </div>
        
        <div class="profile-item">
          <span class="profile-item-label">Address</span>
          <span class="profile-item-value">{{Auth::user()->address}}</span>
        </div>
      </div>
      
      <div class="profile-section">
        <h6 class="fw-semibold mb-3">Account Details</h6>
        
        <div class="profile-item">
          <span class="profile-item-label">Account Number</span>
          <span class="profile-item-value">{{Auth::user()->a_number}}</span>
        </div>
        
        <div class="profile-item">
          <span class="profile-item-label">Account Type</span>
          <span class="profile-item-value">{{Auth::user()->account_type}}</span>
        </div>
        
        <div class="profile-item">
          <span class="profile-item-label">Nationality</span>
          <span class="profile-item-value">{{Auth::user()->country}}</span>
        </div>
      </div>
      
      <button class="btn btn-outline-main w-100" data-bs-toggle="modal" data-bs-target="#kycModal">
        <i class="bi bi-shield-check"></i> Complete KYC Verification
      </button>
    </div>
    
    <!-- Security Tab -->
    <div class="tab-pane fade" id="security" role="tabpanel">
      <div class="profile-section">
        <h6 class="fw-semibold mb-3">Authentication</h6>
        
        <div class="profile-item">
          <span class="profile-item-label">Confirmation Method</span>
          <span class="profile-item-value">Transaction PIN</span>
        </div>
        
        <div class="profile-item clickable">
          <span class="profile-item-label">Change Transaction PIN</span>
          <span class="profile-item-value"><i class="bi bi-chevron-right"></i></span>
        </div>
        
        <div class="profile-item clickable">
          <span class="profile-item-label">Change Password</span>
          <span class="profile-item-value"><i class="bi bi-chevron-right"></i></span>
        </div>
        
        <div class="profile-item clickable">
          <span class="profile-item-label">Reset Secret Question</span>
          <span class="profile-item-value"><i class="bi bi-chevron-right"></i></span>
        </div>
      </div>
      
      <div class="profile-section">
        <h6 class="fw-semibold mb-3">Biometric Authentication</h6>
        
        <div class="form-check form-switch mb-2">
          <input class="form-check-input" type="checkbox" id="faceIdPassword">
          <label class="form-check-label" for="faceIdPassword">Use Face ID for Password</label>
        </div>
        
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" id="faceIdPin">
          <label class="form-check-label" for="faceIdPin">Use Face ID for Transaction PIN</label>
        </div>
      </div>
    </div>
    
    <!-- Settings Tab -->
    <div class="tab-pane fade" id="settings" role="tabpanel">
      <div class="profile-section">
        <h6 class="fw-semibold mb-3">Account Settings</h6>
        
        <form id="updateAvatar" action="{{route('personal.dp')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label class="form-label">Change Profile Picture</label>
            <input type="file" name="image" class="form-control" accept="image/*" required>
            <div class="form-text">Max file size is 5MB</div>
          </div>
          <button type="submit" class="btn btn-main w-100">Update Picture</button>
        </form>
      </div>
      
      <div class="profile-section">
        <h6 class="fw-semibold mb-3">Personal Details</h6>
        
        <form id="userInfo" action="{{route('personal.details')}}" method="POST">
          @csrf
          <div class="row mb-3">
            <div class="col-md-6">
              <label class="form-label">First Name</label>
              <input type="text" name="first_name" class="form-control" value="{{Auth::user()->first_name}}">
            </div>
            <div class="col-md-6">
              <label class="form-label">Last Name</label>
              <input type="text" name="last_name" class="form-control" value="{{Auth::user()->last_name}}">
            </div>
          </div>
          
          <div class="mb-3">
            <label class="form-label">Address</label>
            <textarea name="user_address" class="form-control">{{Auth::user()->address}}</textarea>
          </div>
          
          <div class="row mb-3">
            <div class="col-md-6">
              <label class="form-label">Phone</label>
              <input type="text" name="user_phone" class="form-control" value="{{Auth::user()->phone_number}}">
            </div>
            <div class="col-md-6">
              <label class="form-label">Date of Birth</label>
              <input type="date" name="dob" class="form-control" value="{{Auth::user()->dob}}">
            </div>
          </div>
          
          <button type="submit" class="btn btn-main w-100">Save Changes</button>
        </form>
      </div>
      
      <div class="profile-section">
        <h6 class="fw-semibold mb-3">Password</h6>
        
        <form id="userPassword" action="{{ route('update-password') }}" method="POST">
          @csrf
          <div class="mb-3">
            <label class="form-label">Current Password</label>
            <input type="password" name="old_password" class="form-control">
            @error('old_password') <div class="text-danger small">{{ $message }}</div> @enderror
          </div>
          
          <div class="mb-3">
            <label class="form-label">New Password</label>
            <input type="password" name="new_password" class="form-control">
            @error('new_password') <div class="text-danger small">{{ $message }}</div> @enderror
          </div>
          
          <div class="mb-3">
            <label class="form-label">Confirm Password</label>
            <input type="password" name="new_password_confirmation" class="form-control">
          </div>
          
          <button type="submit" class="btn btn-main w-100">Change Password</button>
        </form>
      </div>
    </div>
  </div>
  
  <!-- Support Links -->
  <div class="profile-section">
    <div class="profile-item clickable">
      <span class="profile-item-label">Support</span>
      <span class="profile-item-value"><i class="bi bi-chevron-right"></i></span>
    </div>
    
    <div class="profile-item clickable">
      <span class="profile-item-label">Rate the App</span>
      <span class="profile-item-value"><i class="bi bi-chevron-right"></i></span>
    </div>
    
    <div class="profile-item clickable">
      <span class="profile-item-label">Version</span>
      <span class="profile-item-value">6.2.1</span>
    </div>
    
    <a href="{{ route('logout') }}" class="btn btn-outline-danger w-100 mt-3">
      <i class="bi bi-box-arrow-right"></i> Log Out
    </a>
  </div>
</div>

<!-- KYC Modal -->
<div class="modal fade kyc-modal" id="kycModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">KYC Verification</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('upload.kyc')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label class="form-label">Driver's License</label>
            <input type="file" class="form-control" name="driver_license" required>
          </div>
          
          <div class="mb-3">
            <label class="form-label">Passport</label>
            <input type="file" class="form-control" name="pass" required>
          </div>
          
          <div class="mb-3">
            <label class="form-label">Residence ID Card</label>
            <input type="file" class="form-control" name="card" required>
          </div>
          
          <button type="submit" class="btn btn-main w-100">Submit Documents</button>
        </form>
      </div>
    </div>
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