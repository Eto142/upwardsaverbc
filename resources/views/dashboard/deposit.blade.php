<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Fund Account | {{env('APP_NAME')}}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <style>
    *{box-sizing:border-box}
    body{margin:0;background:#f5f6fa;font-family:'Inter',system-ui,-apple-system,sans-serif;color:#1a1426;padding-bottom:80px}

    /* ── page wrapper ─────────────────────────────── */
    .page-wrap{max-width:1100px;margin:0 auto;padding:24px 20px 0}

    /* ── alerts ────────────────────────────────────── */
    .alert{border-radius:12px;border:none;font-size:.9rem;font-weight:500;padding:14px 18px}
    .alert-danger{background:#fff0f0;color:#c41e1e}
    .alert-success{background:#eafaf0;color:#1d7a3a}

    /* ── page header ──────────────────────────────── */
    .page-header{margin-bottom:28px}
    .page-header h1{font-size:1.65rem;font-weight:800;color:#1a1426;margin:0 0 4px}
    .page-header p{margin:0;color:#777;font-size:.92rem}

    /* ── balance banner ───────────────────────────── */
    .balance-banner{
      background:linear-gradient(135deg,#1a1426 0%,#e51c24 60%,#AC39D4 100%);
      border-radius:18px;padding:32px 28px;color:#fff;position:relative;overflow:hidden;
      margin-bottom:24px;
    }
    .balance-banner::before{
      content:'';position:absolute;width:260px;height:260px;border-radius:50%;
      background:rgba(255,255,255,.06);top:-80px;right:-60px;
    }
    .balance-banner::after{
      content:'';position:absolute;width:140px;height:140px;border-radius:50%;
      background:rgba(255,255,255,.04);bottom:-40px;left:30px;
    }
    .balance-banner *{position:relative;z-index:1}
    .bb-label{font-size:.8rem;text-transform:uppercase;letter-spacing:1.5px;opacity:.75;font-weight:600;margin-bottom:6px}
    .bb-amount{font-size:2.4rem;font-weight:800;letter-spacing:.5px;line-height:1.2}
    .bb-account{display:inline-flex;align-items:center;gap:6px;background:rgba(255,255,255,.15);
      border-radius:30px;padding:6px 14px;font-size:.82rem;font-weight:600;margin-top:14px;backdrop-filter:blur(4px)}
    .bb-account i{font-size:.9rem}

    /* ── info strip ───────────────────────────────── */
    .info-strip{
      display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:16px;margin-bottom:24px;
    }
    .info-card{
      background:#fff;border-radius:14px;padding:20px;
      border:1px solid #eee;transition:box-shadow .25s ease;
    }
    .info-card:hover{box-shadow:0 6px 18px rgba(0,0,0,.06)}
    .info-card .ic-label{font-size:.72rem;text-transform:uppercase;letter-spacing:1.2px;color:#999;font-weight:700;margin-bottom:8px}
    .info-card .ic-value{font-size:1.05rem;font-weight:700;color:#1a1426}

    /* ── section cards ────────────────────────────── */
    .section-card{
      background:#fff;border-radius:16px;border:1px solid #eee;
      overflow:hidden;margin-bottom:24px;
    }
    .section-card .sc-head{
      padding:20px 24px;border-bottom:1px solid #f0f0f0;
      display:flex;align-items:center;gap:12px;
    }
    .section-card .sc-head .sc-icon{
      width:42px;height:42px;border-radius:12px;display:flex;align-items:center;justify-content:center;
      font-size:1.1rem;color:#fff;flex-shrink:0;
    }
    .section-card .sc-head h3{font-size:1.05rem;font-weight:700;margin:0;color:#1a1426}
    .section-card .sc-head p{font-size:.82rem;color:#999;margin:0}
    .section-card .sc-body{padding:24px}

    /* ── deposit method card ──────────────────────── */
    .deposit-method{
      padding:22px;border:2px solid #f0f0f0;border-radius:14px;cursor:pointer;
      transition:all .25s ease;display:flex;align-items:center;gap:18px;
    }
    .deposit-method:hover{border-color:#e51c24;background:#fef7f7}
    .deposit-method .dm-icon{
      width:56px;height:56px;border-radius:14px;display:flex;align-items:center;justify-content:center;
      font-size:1.5rem;flex-shrink:0;
    }
    .deposit-method .dm-text h4{font-size:1rem;font-weight:700;margin:0 0 4px;color:#1a1426}
    .deposit-method .dm-text p{font-size:.84rem;color:#888;margin:0}
    .deposit-method .dm-arrow{margin-left:auto;color:#ccc;font-size:1.2rem;transition:transform .25s ease}
    .deposit-method:hover .dm-arrow{color:#e51c24;transform:translateX(4px)}

    /* ── quick actions ────────────────────────────── */
    .quick-actions{display:flex;flex-direction:column;gap:14px}
    .qa-card{
      border-radius:14px;padding:18px 20px;color:#fff;text-decoration:none;
      display:flex;align-items:center;gap:14px;transition:all .25s ease;position:relative;overflow:hidden;
    }
    .qa-card:hover{transform:translateY(-3px);box-shadow:0 10px 24px rgba(0,0,0,.15);color:#fff}
    .qa-card::before{
      content:'';position:absolute;top:0;right:0;width:80px;height:80px;border-radius:50%;
      background:rgba(255,255,255,.1);transform:translate(20px,-20px);
    }
    .qa-card .qa-icon{
      width:44px;height:44px;border-radius:12px;background:rgba(255,255,255,.2);
      display:flex;align-items:center;justify-content:center;font-size:1.2rem;flex-shrink:0;
    }
    .qa-card .qa-label{font-size:.95rem;font-weight:600;position:relative}
    .qa-card .qa-arr{margin-left:auto;opacity:.6;font-size:1rem;position:relative}

    .qa-transfer{background:linear-gradient(135deg,#e51c24,#AC39D4)}
    .qa-transactions{background:linear-gradient(135deg,#1dab56,#2BC155)}
    .qa-cards{background:linear-gradient(135deg,#1a1426,#3d2d5c)}

    /* ── modal ────────────────────────────────────── */
    .modal-content{border:none;border-radius:18px;overflow:hidden;box-shadow:0 20px 60px rgba(0,0,0,.2)}
    .modal-header{
      background:linear-gradient(135deg,#1a1426 0%,#e51c24 60%,#AC39D4 100%);
      padding:24px 28px;border:none;
    }
    .modal-header .modal-title{color:#fff;font-weight:700;font-size:1.15rem}
    .modal-header .btn-close{filter:brightness(0) invert(1);opacity:.7}
    .modal-header .btn-close:hover{opacity:1}
    .modal-body{padding:28px}
    .modal-body .form-label{font-size:.82rem;font-weight:700;color:#555;text-transform:uppercase;letter-spacing:.8px;margin-bottom:8px}
    .modal-body .form-control{
      border:2px solid #eee;border-radius:12px;padding:12px 16px;font-size:.95rem;font-weight:500;
      transition:all .2s ease;background:#fafafa;
    }
    .modal-body .form-control:focus{border-color:#e51c24;background:#fff;box-shadow:0 0 0 4px rgba(229,28,36,.1)}
    .modal-body .form-control::placeholder{color:#bbb}
    .btn-deposit{
      background:linear-gradient(135deg,#e51c24 0%,#AC39D4 100%);color:#fff;border:none;
      border-radius:12px;padding:14px;font-size:1rem;font-weight:700;width:100%;
      transition:all .25s ease;letter-spacing:.3px;
    }
    .btn-deposit:hover{box-shadow:0 8px 20px rgba(229,28,36,.35);transform:translateY(-2px);color:#fff}
    .btn-deposit:active{transform:translateY(0)}

    /* file upload area */
    .file-upload-area{
      border:2px dashed #ddd;border-radius:14px;padding:24px;text-align:center;cursor:pointer;
      transition:all .25s ease;background:#fafafa;
    }
    .file-upload-area:hover{border-color:#e51c24;background:#fef7f7}
    .file-upload-area.has-file{border-color:#2BC155;background:#f0faf4}
    .file-upload-area i{font-size:2rem;color:#ccc;margin-bottom:8px;display:block}
    .file-upload-area.has-file i{color:#2BC155}
    .file-upload-area span{font-size:.88rem;color:#999;font-weight:500}
    .file-upload-area.has-file span{color:#1d7a3a}
    .file-upload-area input{display:none}

    /* ── bottom nav ───────────────────────────────── */
    .bottom-nav{border-top:1px solid #e5e7eb}
    .bottom-nav .nav-link{color:#999;font-size:13px;font-weight:500}
    .bottom-nav .nav-link.active{color:#e51c24;font-weight:700}

    .small-text{font-size:.75rem;font-weight:700;text-transform:uppercase;letter-spacing:1px;color:#999}

    /* ── responsive ───────────────────────────────── */
    @media(max-width:991px){
      .info-strip{grid-template-columns:1fr 1fr}
    }
    @media(max-width:767px){
      .page-wrap{padding:16px 14px 0}
      .bb-amount{font-size:1.8rem}
      .balance-banner{padding:24px 20px}
      .info-strip{grid-template-columns:1fr}
      .side-col{margin-top:8px}
    }
    @media(max-width:576px){
      .bb-amount{font-size:1.5rem}
      .deposit-method{flex-direction:column;text-align:center;gap:12px}
      .deposit-method .dm-arrow{display:none}
    }
  </style>
</head>
<body>

<!-- Alerts -->
@if (session('error'))
  <div class="page-wrap" style="padding-bottom:0">
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <i class="bi bi-exclamation-circle me-2"></i><strong>Error!</strong> {{ session('error') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  </div>
@elseif (session('status'))
  <div class="page-wrap" style="padding-bottom:0">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <i class="bi bi-check-circle me-2"></i><strong>Success!</strong> {{ session('status') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  </div>
@endif

<div class="page-wrap">

  <!-- Page Header -->
  <div class="page-header">
    <h1>Fund Account</h1>
    <p>Deposit funds into your account securely</p>
  </div>

  <div class="row g-4">
    <!-- ─── Main Column ──────────────────────────── -->
    <div class="col-lg-8">

      <!-- Balance Banner -->
      <div class="balance-banner">
        <div class="bb-label">Available Balance</div>
        <div class="bb-amount">{{Auth::user()->currency}}{{number_format($balance, 2, '.', ',')}}</div>
        <div class="bb-account">
          <i class="bi bi-wallet2"></i>
          {{Auth::user()->a_number}}
        </div>
      </div>

      <!-- Deposit Methods (visible immediately) -->
      <div class="section-card">
        <div class="sc-head">
          <div class="sc-icon" style="background:linear-gradient(135deg,#e51c24,#AC39D4)">
            <i class="bi bi-plus-circle"></i>
          </div>
          <div>
            <h3>Deposit Methods</h3>
            <p>Choose how you want to fund your account</p>
          </div>
        </div>
        <div class="sc-body">
          <div class="deposit-method" data-bs-toggle="modal" data-bs-target="#fiat">
            <div class="dm-icon" style="background:#fff0f0;color:#e51c24">
              <i class="bi bi-phone"></i>
            </div>
            <div class="dm-text">
              <h4>Mobile Check Deposit</h4>
              <p>Upload a check image and deposit directly into your account</p>
            </div>
            <i class="bi bi-chevron-right dm-arrow"></i>
          </div>
        </div>
      </div>

      <!-- Account Info Strip -->
      <div class="info-strip">
        <div class="info-card">
          <div class="ic-label">Account Holder</div>
          <div class="ic-value">{{Auth::user()->first_name}} {{Auth::user()->last_name}}</div>
        </div>
        <div class="info-card">
          <div class="ic-label">Account Type</div>
          <div class="ic-value">{{Auth::user()->account_type}}</div>
        </div>
        <div class="info-card">
          <div class="ic-label">Account Number</div>
          <div class="ic-value" style="font-family:'Courier New',monospace;letter-spacing:1.5px">{{Auth::user()->a_number}}</div>
        </div>
      </div>

    </div>

    <!-- ─── Sidebar ──────────────────────────────── -->
    <div class="col-lg-4 side-col">
      <div class="quick-actions">
        <a href="{{route('bank')}}" class="qa-card qa-transfer">
          <div class="qa-icon"><i class="bi bi-arrow-left-right"></i></div>
          <span class="qa-label">Transfer Funds</span>
          <i class="bi bi-chevron-right qa-arr"></i>
        </a>
        <a href="{{route('transactions')}}" class="qa-card qa-transactions">
          <div class="qa-icon"><i class="bi bi-receipt"></i></div>
          <span class="qa-label">View Transactions</span>
          <i class="bi bi-chevron-right qa-arr"></i>
        </a>
      </div>
    </div>
  </div>
</div>

<!-- ─── Mobile Check Deposit Modal ────────────────── -->
<div class="modal fade" id="fiat" tabindex="-1" aria-labelledby="fiatLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="fiatLabel"><i class="bi bi-phone me-2"></i>Mobile Check Deposit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="text-center mb-4">
          <img src="check.jpg" alt="Check Deposit" class="img-fluid" style="max-height:130px;border-radius:12px;opacity:.9">
        </div>

        <form action="{{route('make.deposit')}}" method="POST" enctype="multipart/form-data" id="depositForm">
          @csrf
          <input type="hidden" name="email" value="{{ Auth::user()->email }}">

          <div class="mb-4">
            <label for="pin_amount" class="form-label">Deposit Amount</label>
            <div class="input-group">
              <span class="input-group-text" style="border:2px solid #eee;border-right:none;border-radius:12px 0 0 12px;background:#fafafa;font-weight:700;color:#1a1426">{{Auth::user()->currency}}</span>
              <input id="pin_amount" type="number" name="amount" class="form-control" style="border-left:none;border-radius:0 12px 12px 0" placeholder="0.00" required min="1" step="0.01">
            </div>
            <div class="invalid-feedback">Please enter a valid amount</div>
          </div>

          <div class="mb-4">
            <label class="form-label">Upload Check Image</label>
            <div class="file-upload-area" id="uploadArea">
              <i class="bi bi-cloud-arrow-up"></i>
              <span id="uploadLabel">Click to upload or drag check image here</span>
              <input type="file" id="checkImage" name="front_cheque" accept="image/*" required>
            </div>
            <div class="invalid-feedback">Please upload a check image</div>
          </div>

          <div class="mb-4">
            <label for="transaction_pin" class="form-label">Transaction PIN</label>
            <input id="transaction_pin" type="password" name="transaction_pin" maxlength="4" class="form-control" placeholder="Enter 4-digit PIN" required pattern="\d{4}" inputmode="numeric" style="letter-spacing:8px;text-align:center;font-size:1.2rem">
            <div class="invalid-feedback">Please enter a valid 4-digit PIN</div>
          </div>

          <button type="submit" class="btn-deposit" id="submitBtn">
            <span id="submitText">Deposit Now</span>
            <span id="loadingSpinner" class="spinner-border spinner-border-sm d-none ms-2" role="status" aria-hidden="true"></span>
          </button>
        </form>
      </div>
    </div>
  </div>
</div>

@include('dashboard.footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
  // File upload area
  var area = document.getElementById('uploadArea');
  var input = document.getElementById('checkImage');
  var label = document.getElementById('uploadLabel');
  if (area && input) {
    area.addEventListener('click', function(){ input.click(); });
    area.addEventListener('dragover', function(e){ e.preventDefault(); area.style.borderColor='#e51c24'; });
    area.addEventListener('dragleave', function(){ area.style.borderColor='#ddd'; });
    area.addEventListener('drop', function(e){
      e.preventDefault(); area.style.borderColor='#ddd';
      if(e.dataTransfer.files.length){ input.files = e.dataTransfer.files; showFile(input.files[0]); }
    });
    input.addEventListener('change', function(){ if(this.files[0]) showFile(this.files[0]); });
    function showFile(f){
      label.textContent = f.name;
      area.classList.add('has-file');
    }
  }

  // Form validation & submit
  var form = document.getElementById('depositForm');
  if (form) {
    form.addEventListener('submit', function(e) {
      if (!this.checkValidity()) {
        e.preventDefault(); e.stopPropagation();
      } else {
        document.getElementById('submitText').textContent = 'Processing...';
        document.getElementById('loadingSpinner').classList.remove('d-none');
        document.getElementById('submitBtn').style.opacity = '.7';
        document.getElementById('submitBtn').style.pointerEvents = 'none';
      }
      this.classList.add('was-validated');
    }, false);
  }
});
</script>
</body>
</html>