<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Bank App UI - Loan Documents</title>
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

    .document-upload {
      background-color: #f6f6f6;
      padding: 20px;
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
    }

    .clickable {
      cursor: pointer;
    }
    
    /* Document upload specific styles */
    .upload-header {
      text-align: center;
      margin-bottom: 30px;
    }
    
    .upload-icon {
      font-size: 24px;
      margin-right: 10px;
      color: #b93b2d;
    }
    
    .form-container {
      max-width: 600px;
      margin: 0 auto;
    }
    
    .custom-file-input {
      opacity: 0;
      position: absolute;
      z-index: -1;
    }
    
    .custom-file-label {
      display: flex;
      align-items: center;
      padding: 12px 15px;
      background-color: white;
      border: 1px solid #ddd;
      border-radius: 12px;
      cursor: pointer;
    }
    
    .custom-file-label::after {
      content: "Browse";
      background-color: #f6f6f6;
      padding: 0 15px;
      border-radius: 0 10px 10px 0;
      margin-left: auto;
    }
    
    .form-group {
      margin-bottom: 20px;
    }
    
    .form-control {
      border-radius: 12px;
      padding: 12px 15px;
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

  <div class="form-container">
    <div class="upload-header">
      <h4 class="fw-semibold">Upload Loan Documents</h4>
      <p class="text-muted">Complete your loan application by uploading the required documents</p>
    </div>

    <form action="{{route('continue.loan')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <input type="hidden" name="amount" value="{{ $data['amount'] }}">
      <input type="hidden" name="reason" value="{{ $data['reason'] }}">
      <input type="hidden" name="email" value="{{ Auth::user()->email }}">

      <!-- Driver's License -->
      <div class="document-upload">
        <div class="form-group">
          <label class="fw-semibold mb-2">
            <i class="bi bi-card-image upload-icon"></i> Driver's License
          </label>
          <div class="input-group">
            <input type="file" id="license" name="license" class="custom-file-input" accept="image/*" required>
            <label class="custom-file-label w-100" for="license">Choose file</label>
          </div>
          <small class="text-muted">Upload front and back of your driver's license</small>
        </div>
      </div>

      <!-- Photo ID -->
      <div class="document-upload">
        <div class="form-group">
          <label class="fw-semibold mb-2">
            <i class="bi bi-person-badge upload-icon"></i> Photo ID
          </label>
          <div class="input-group">
            <input type="file" id="photoID" name="photoID" class="custom-file-input" accept="image/*" required>
            <label class="custom-file-label w-100" for="photoID">Choose file</label>
          </div>
          <small class="text-muted">Upload a clear photo of your government-issued ID</small>
        </div>
      </div>

      <!-- Selfie -->
      <div class="document-upload">
        <div class="form-group">
          <label class="fw-semibold mb-2">
            <i class="bi bi-camera upload-icon"></i> Selfie with ID
          </label>
          <div class="input-group">
            <input type="file" id="selfie" name="selfie" class="custom-file-input" accept="image/*" required>
            <label class="custom-file-label w-100" for="selfie">Choose file</label>
          </div>
          <small class="text-muted">Take a selfie while holding your ID</small>
        </div>
      </div>

      @if (Auth::check() && Auth::user()->country === 'United States')
        <!-- SSN -->
        <div class="document-upload">
          <div class="form-group">
            <label class="fw-semibold mb-2">
              <i class="bi bi-shield-lock upload-icon"></i> SSN
            </label>
            <input type="text" id="ssn" name="ssn" class="form-control" placeholder="Enter SSN">
          </div>
        </div>

        <!-- Credit Score -->
        <div class="document-upload">
          <div class="form-group">
            <label class="fw-semibold mb-2">
              <i class="bi bi-graph-up upload-icon"></i> Credit Score
            </label>
            <input type="number" id="credit_score" name="credit_score" class="form-control" placeholder="Enter Credit Score">
          </div>
        </div>
      @endif

      <button type="submit" class="btn btn-main w-100 mt-3">
        <i class="bi bi-cloud-arrow-up"></i> Submit Documents
      </button>
    </form>
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
  // Update file input labels
  document.querySelectorAll('.custom-file-input').forEach(input => {
    input.addEventListener('change', function(e) {
      const fileName = e.target.files[0] ? e.target.files[0].name : 'Choose file';
      const label = e.target.nextElementSibling;
      label.querySelector('span').textContent = fileName;
    });
  });

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