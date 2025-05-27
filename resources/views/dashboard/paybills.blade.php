<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Pay Bills - Upward Saver</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
  <style>
 
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

    .bill-tile {
      background-color: #f9f9f9;
      border-radius: 20px;
      padding: 20px;
      text-align: center;
      transition: all 0.2s ease-in-out;
    }

    .bill-tile:hover {
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      transform: translateY(-3px);
    }

    .bill-icon {
      font-size: 30px;
      margin-bottom: 10px;
      color: #b93b2d;
    }

    .section-title {
      font-size: 22px;
      font-weight: 600;
      margin-top: 20px;
      margin-bottom: 10px;
      color: #333;
    }
  </style>
</head>
<body>

  <div class="container mt-4">
    <h2 class="section-title">Pay Bills</h2>
    <p>Select a biller below to proceed</p>

    <div class="row g-3 mt-3">
      <!-- Electricity -->
      <div class="col-4">
        <div class="bill-tile">
          <div class="bill-icon"><i class="bi bi-lightning-charge"></i></div>
          <div>Electricity</div>
        </div>
      </div>

      <!-- Water -->
      <div class="col-4">
        <div class="bill-tile">
          <div class="bill-icon"><i class="bi bi-droplet-half"></i></div>
          <div>Water</div>
        </div>
      </div>

      <!-- Internet -->
      <div class="col-4">
        <div class="bill-tile">
          <div class="bill-icon"><i class="bi bi-wifi"></i></div>
          <div>Internet</div>
        </div>
      </div>

      <!-- Mobile Top-Up -->
      <div class="col-4">
        <div class="bill-tile">
          <div class="bill-icon"><i class="bi bi-phone"></i></div>
          <div>Mobile Top-Up</div>
        </div>
      </div>

      <!-- Cable TV -->
      <div class="col-4">
        <div class="bill-tile">
          <div class="bill-icon"><i class="bi bi-tv"></i></div>
          <div>Cable TV</div>
        </div>
      </div>

      <!-- Gas -->
      <div class="col-4">
        <div class="bill-tile">
          <div class="bill-icon"><i class="bi bi-fire"></i></div>
          <div>Gas</div>
        </div>
      </div>
    </div>

    <!-- Add a quick action button -->
    <div class="mt-5 text-center">
      <button class="btn btn-main px-4 py-2">View Payment History</button>
    </div>
  </div>

</body>
</html>
@include('dashboard.footer')