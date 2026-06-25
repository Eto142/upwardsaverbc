<!DOCTYPE html>
<html lang="en">
<head>
    <title>Verify Your Identity - Upward Saver Bank Corporation</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('our-logo.png') }}" type="image/png">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body { background: #f4f6fb; font-family: 'Segoe UI', sans-serif; }
        .kyc-card {
            max-width: 560px; margin: 60px auto; background: #fff;
            border-radius: 16px; box-shadow: 0 4px 32px rgba(0,0,0,.08); overflow: hidden;
        }
        .kyc-header {
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
            padding: 36px 40px 28px; text-align: center;
        }
        .kyc-header img { height: 48px; margin-bottom: 14px; }
        .kyc-header h1 { color:#fff; font-size:1.4rem; font-weight:700; margin:0; }
        .kyc-header p  { color:#9ca3af; font-size:.9rem; margin:6px 0 0; }
        .kyc-body { padding: 36px 40px; }
        .step-badge {
            display:inline-flex; align-items:center; gap:8px;
            background:#eff6ff; color:#1d4ed8; border-radius:20px;
            padding:6px 14px; font-size:.8rem; font-weight:600; margin-bottom:24px;
        }
        .doc-option {
            border: 2px solid #e5e7eb; border-radius: 12px; padding: 16px 20px;
            cursor: pointer; transition: all .2s; display:flex; align-items:center; gap:14px;
        }
        .doc-option:has(input:checked) { border-color: #1d4ed8; background:#eff6ff; }
        .doc-option i { font-size:1.6rem; color:#6b7280; }
        .doc-option:has(input:checked) i { color:#1d4ed8; }
        .doc-option label { cursor:pointer; margin:0; font-weight:600; font-size:.95rem; }
        .doc-option small { color:#6b7280; font-size:.8rem; }
        .upload-area {
            border: 2px dashed #d1d5db; border-radius: 10px; padding: 24px;
            text-align: center; cursor: pointer; transition: all .2s; background: #fafafa;
        }
        .upload-area:hover { border-color:#1d4ed8; background:#eff6ff; }
        .upload-area i { font-size:2rem; color:#9ca3af; display:block; margin-bottom:8px; }
        .upload-area .preview-img { max-height:120px; border-radius:8px; margin-top:8px; display:none; }
        .upload-area input[type=file] { display:none; }
        .alert-info-custom {
            background:#fffbeb; border:1px solid #fde68a; border-radius:10px;
            padding:14px 18px; color:#92400e; font-size:.85rem;
        }
        .btn-submit {
            background: linear-gradient(135deg,#1d4ed8,#1e40af); color:#fff;
            border:none; border-radius:10px; padding:14px; font-size:1rem;
            font-weight:600; width:100%; transition: opacity .2s;
        }
        .btn-submit:hover { opacity:.9; color:#fff; }
        .skip-link { text-align:center; display:block; margin-top:16px; color:#9ca3af; font-size:.85rem; }
        .skip-link a { color:#6b7280; }
        .back-section { display:none; }
    </style>
</head>
<body>

<div class="kyc-card">
    <div class="kyc-header">
        <img src="{{ asset('our-logo.png') }}" alt="Logo">
        <h1>Identity Verification</h1>
        <p>Upload a valid government-issued ID to activate your account</p>
    </div>

    <div class="kyc-body">
        <div class="step-badge">
            <i class="bi bi-shield-check"></i> Step 2 of 2 &mdash; ID Verification
        </div>

        @if(session('error'))
            <div class="alert alert-danger rounded-3 mb-3">{{ session('error') }}</div>
        @endif
        @if($errors->any())
            <div class="alert alert-danger rounded-3 mb-3">
                <ul class="mb-0 ps-3">
                    @foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('kyc.upload.submit') }}" method="POST" enctype="multipart/form-data" id="kycForm">
            @csrf

            <p class="fw-semibold mb-3" style="color:#111">Select document type</p>

            <div class="d-flex flex-column gap-3 mb-4">
                <div class="doc-option">
                    <input type="radio" name="document_type" id="dt_passport" value="passport" required>
                    <i class="bi bi-journal-bookmark-fill"></i>
                    <div>
                        <label for="dt_passport">Passport</label><br>
                        <small>International passport (bio-data page)</small>
                    </div>
                </div>

                <div class="doc-option">
                    <input type="radio" name="document_type" id="dt_driver" value="driver_license">
                    <i class="bi bi-card-heading"></i>
                    <div>
                        <label for="dt_driver">Driver's License</label><br>
                        <small>Front and back of your driving licence</small>
                    </div>
                </div>
            </div>

            <!-- Front -->
            <div class="mb-3">
                <label class="form-label fw-semibold">Front of document <span class="text-danger">*</span></label>
                <div class="upload-area" id="frontArea" onclick="document.getElementById('document_front').click()">
                    <i class="bi bi-cloud-arrow-up"></i>
                    <span id="frontLabel">Click to upload (JPG, PNG or PDF · max 4 MB)</span>
                    <img id="frontPreview" class="preview-img" alt="preview">
                    <input type="file" id="document_front" name="document_front" accept=".jpg,.jpeg,.png,.pdf" required
                           onchange="previewFile(this,'frontPreview','frontLabel')">
                </div>
            </div>

            <!-- Back (for driver's licence) -->
            <div class="mb-4 back-section" id="backSection">
                <label class="form-label fw-semibold">Back of document <span class="text-muted">(optional)</span></label>
                <div class="upload-area" id="backArea" onclick="document.getElementById('document_back').click()">
                    <i class="bi bi-cloud-arrow-up"></i>
                    <span id="backLabel">Click to upload (JPG, PNG or PDF · max 4 MB)</span>
                    <img id="backPreview" class="preview-img" alt="preview">
                    <input type="file" id="document_back" name="document_back" accept=".jpg,.jpeg,.png,.pdf"
                           onchange="previewFile(this,'backPreview','backLabel')">
                </div>
            </div>

            <div class="alert-info-custom mb-4">
                <i class="bi bi-info-circle me-1"></i>
                Make sure the document is <strong>clear, uncut and unexpired</strong>.
                Your information is encrypted and kept private.
            </div>

            <button type="submit" class="btn-submit">
                <i class="bi bi-send me-2"></i>Submit for Review
            </button>
        </form>

        <a href="{{ route('dashboard') }}" class="skip-link">
            Skip for now — I'll upload later from my profile
        </a>
    </div>
</div>

<script>
// Show/hide back-of-document section for driver's licence
document.querySelectorAll('input[name="document_type"]').forEach(function(radio) {
    radio.addEventListener('change', function() {
        var backSec = document.getElementById('backSection');
        backSec.style.display = this.value === 'driver_license' ? 'block' : 'none';
    });
});

// Image preview helper
function previewFile(input, previewId, labelId) {
    var file = input.files[0];
    if (!file) return;
    document.getElementById(labelId).textContent = file.name;
    if (file.type.startsWith('image/')) {
        var reader = new FileReader();
        reader.onload = function(e) {
            var img = document.getElementById(previewId);
            img.src = e.target.result;
            img.style.display = 'block';
        };
        reader.readAsDataURL(file);
    }
}
</script>
</body>
</html>
