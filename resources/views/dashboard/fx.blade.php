<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Bank App UI - FX Trading</title>
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

    /* FX Specific Styles */
    .fx-header {
      background-color: #f8f9fa;
      border-radius: 16px;
      padding: 20px;
      margin-bottom: 20px;
    }
    
    .balance-display {
      font-size: 24px;
      font-weight: 600;
      color: #2c3e50;
    }
    
    .asset-card {
      background-color: #f6f6f6;
      border-radius: 16px;
      padding: 15px;
      margin-bottom: 15px;
      transition: transform 0.2s;
    }
    
    .asset-card:hover {
      transform: translateY(-3px);
    }
    
    .asset-icon {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-right: 15px;
      font-size: 18px;
    }
    
    .stock-icon {
      background-color: #e3f2fd;
      color: #1565c0;
    }
    
    .crypto-icon {
      background-color: #fbe9e7;
      color: #b93b2d;
    }
    
    .asset-name {
      font-weight: 600;
      margin-bottom: 2px;
    }
    
    .asset-symbol {
      color: #666;
      font-size: 13px;
    }
    
    .asset-price {
      font-weight: 600;
    }
    
    .price-change-up {
      color: #2E7D32;
    }
    
    .price-change-down {
      color: #C62828;
    }
    
    .nav-tabs .nav-link {
      border: none;
      color: #666;
      font-weight: 500;
      padding: 10px 15px;
    }
    
    .nav-tabs .nav-link.active {
      color: #b93b2d;
      border-bottom: 2px solid #b93b2d;
    }
    
    .search-box {
      position: relative;
      margin-bottom: 20px;
    }
    
    .search-box i {
      position: absolute;
      left: 15px;
      top: 12px;
      color: #888;
    }
    
    .search-box input {
      padding-left: 40px;
      border-radius: 20px;
    }
    
    .order-form {
      background-color: #f6f6f6;
      border-radius: 16px;
      padding: 20px;
    }
    
    .form-control {
      border-radius: 12px;
      padding: 12px 15px;
    }
  </style>
</head>
<body>

<div class="container pt-4">
  <!-- Header -->
  <div class="fx-header">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h5 class="mb-0 fw-semibold">FX Trading</h5>
      <span class="text-muted small">
        <span id="accountNumber">{{ Auth::user()->a_number }}</span>
        <i class="bi bi-copy ms-1 clickable" id="copyIcon" onclick="copyAccountNumber()" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy to clipboard"></i>
      </span>
    </div>
    
    <div class="d-flex justify-content-between align-items-center">
      <div>
        <div class="small-text">Available Balance</div>
        <div class="balance-display">{{Auth::user()->currency}}{{number_format($balance, 2, '.', ',')}}</div>
      </div>
      <button class="btn btn-outline-main">Add Funds</button>
    </div>
  </div>

  <!-- Navigation Tabs -->
  <ul class="nav nav-tabs mb-4" id="fxTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="stocks-tab" data-bs-toggle="tab" data-bs-target="#stocks" type="button" role="tab">Stocks</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="crypto-tab" data-bs-toggle="tab" data-bs-target="#crypto" type="button" role="tab">Crypto</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="forex-tab" data-bs-toggle="tab" data-bs-target="#forex" type="button" role="tab">Forex</button>
    </li>
  </ul>

  <!-- Search Box -->
  <div class="search-box">
    <i class="bi bi-search"></i>
    <input type="text" class="form-control" placeholder="Search assets...">
  </div>

  <!-- Tab Content -->
  <div class="tab-content" id="fxTabContent">
    <!-- Stocks Tab -->
    <div class="tab-pane fade show active" id="stocks" role="tabpanel">
      <h6 class="fw-semibold mb-3">Popular Stocks</h6>
      
      <div class="asset-card clickable" data-bs-toggle="modal" data-bs-target="#tradeModal" data-asset="AAPL">
        <div class="d-flex align-items-center">
          <div class="asset-icon stock-icon">
            <i class="bi bi-bar-chart-line"></i>
          </div>
          <div class="flex-grow-1">
            <div class="asset-name">Apple Inc.</div>
            <div class="asset-symbol">AAPL</div>
          </div>
          <div class="text-end">
            <div class="asset-price">$189.98</div>
            <div class="price-change-up">+2.34%</div>
          </div>
        </div>
      </div>
      
      <div class="asset-card clickable" data-bs-toggle="modal" data-bs-target="#tradeModal" data-asset="TSLA">
        <div class="d-flex align-items-center">
          <div class="asset-icon stock-icon">
            <i class="bi bi-lightning-charge"></i>
          </div>
          <div class="flex-grow-1">
            <div class="asset-name">Tesla Inc.</div>
            <div class="asset-symbol">TSLA</div>
          </div>
          <div class="text-end">
            <div class="asset-price">$248.42</div>
            <div class="price-change-down">-1.25%</div>
          </div>
        </div>
      </div>
      
      <div class="asset-card clickable" data-bs-toggle="modal" data-bs-target="#tradeModal" data-asset="AMZN">
        <div class="d-flex align-items-center">
          <div class="asset-icon stock-icon">
            <i class="bi bi-cart"></i>
          </div>
          <div class="flex-grow-1">
            <div class="asset-name">Amazon.com</div>
            <div class="asset-symbol">AMZN</div>
          </div>
          <div class="text-end">
            <div class="asset-price">$178.75</div>
            <div class="price-change-up">+0.87%</div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Crypto Tab -->
    <div class="tab-pane fade" id="crypto" role="tabpanel">
      <h6 class="fw-semibold mb-3">Popular Cryptos</h6>
      
      <div class="asset-card clickable" data-bs-toggle="modal" data-bs-target="#tradeModal" data-asset="BTC">
        <div class="d-flex align-items-center">
          <div class="asset-icon crypto-icon">
            <i class="bi bi-currency-bitcoin"></i>
          </div>
          <div class="flex-grow-1">
            <div class="asset-name">Bitcoin</div>
            <div class="asset-symbol">BTC</div>
          </div>
          <div class="text-end">
            <div class="asset-price">$67,245.32</div>
            <div class="price-change-up">+3.42%</div>
          </div>
        </div>
      </div>
      
      <div class="asset-card clickable" data-bs-toggle="modal" data-bs-target="#tradeModal" data-asset="ETH">
        <div class="d-flex align-items-center">
          <div class="asset-icon crypto-icon">
            <i class="bi bi-currency-ethereum"></i>
          </div>
          <div class="flex-grow-1">
            <div class="asset-name">Ethereum</div>
            <div class="asset-symbol">ETH</div>
          </div>
          <div class="text-end">
            <div class="asset-price">$3,512.76</div>
            <div class="price-change-up">+1.87%</div>
          </div>
        </div>
      </div>
      
      <div class="asset-card clickable" data-bs-toggle="modal" data-bs-target="#tradeModal" data-asset="SOL">
        <div class="d-flex align-items-center">
          <div class="asset-icon crypto-icon">
            <i class="bi bi-currency-exchange"></i>
          </div>
          <div class="flex-grow-1">
            <div class="asset-name">Solana</div>
            <div class="asset-symbol">SOL</div>
          </div>
          <div class="text-end">
            <div class="asset-price">$187.34</div>
            <div class="price-change-down">-0.65%</div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Forex Tab -->
    <div class="tab-pane fade" id="forex" role="tabpanel">
      <h6 class="fw-semibold mb-3">Major Currency Pairs</h6>
      
      <div class="asset-card clickable" data-bs-toggle="modal" data-bs-target="#tradeModal" data-asset="EUR/USD">
        <div class="d-flex align-items-center">
          <div class="asset-icon stock-icon">
            <i class="bi bi-globe"></i>
          </div>
          <div class="flex-grow-1">
            <div class="asset-name">Euro / US Dollar</div>
            <div class="asset-symbol">EUR/USD</div>
          </div>
          <div class="text-end">
            <div class="asset-price">1.0854</div>
            <div class="price-change-up">+0.12%</div>
          </div>
        </div>
      </div>
      
      <div class="asset-card clickable" data-bs-toggle="modal" data-bs-target="#tradeModal" data-asset="GBP/USD">
        <div class="d-flex align-items-center">
          <div class="asset-icon stock-icon">
            <i class="bi bi-globe"></i>
          </div>
          <div class="flex-grow-1">
            <div class="asset-name">British Pound / US Dollar</div>
            <div class="asset-symbol">GBP/USD</div>
          </div>
          <div class="text-end">
            <div class="asset-price">1.2678</div>
            <div class="price-change-down">-0.08%</div>
          </div>
        </div>
      </div>
      
      <div class="asset-card clickable" data-bs-toggle="modal" data-bs-target="#tradeModal" data-asset="USD/JPY">
        <div class="d-flex align-items-center">
          <div class="asset-icon stock-icon">
            <i class="bi bi-globe"></i>
          </div>
          <div class="flex-grow-1">
            <div class="asset-name">US Dollar / Japanese Yen</div>
            <div class="asset-symbol">USD/JPY</div>
          </div>
          <div class="text-end">
            <div class="asset-price">156.32</div>
            <div class="price-change-up">+0.24%</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Trade Modal -->
<div class="modal fade" id="tradeModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tradeModalTitle">Trade Asset</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="order-form">
          <div class="d-flex justify-content-between mb-3">
            <button class="btn btn-outline-main active" id="buyBtn">Buy</button>
            <button class="btn btn-outline-main" id="sellBtn">Sell</button>
          </div>
          
          <div class="mb-3">
            <label class="form-label">Amount (USD)</label>
            <input type="number" class="form-control" id="tradeAmount" placeholder="0.00">
          </div>
          
          <div class="mb-3">
            <label class="form-label">Quantity</label>
            <input type="number" class="form-control" id="tradeQuantity" placeholder="0">
          </div>
          
          <div class="mb-3">
            <label class="form-label">Order Type</label>
            <select class="form-select" id="orderType">
              <option value="market">Market Order</option>
              <option value="limit">Limit Order</option>
              <option value="stop">Stop Order</option>
            </select>
          </div>
          
          <div class="mb-3" id="limitPriceContainer" style="display: none;">
            <label class="form-label">Limit Price</label>
            <input type="number" class="form-control" id="limitPrice" placeholder="0.00">
          </div>
          
          <button class="btn btn-main w-100" id="placeOrderBtn">Place Order</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bottom Navigation -->
<nav class="navbar fixed-bottom bg-white bottom-nav">
  <div class="container d-flex justify-content-around text-center">
    <a class="nav-link" href="{{route('dashboard')}}"><i class="bi bi-house-door"></i><br><small>Home</small></a>
    <a class="nav-link" href="{{route('card')}}"><i class="bi bi-credit-card-2-front"></i><br><small>Card</small></a>
    <a class="nav-link active" href="#"><i class="bi bi-graph-up"></i><br><small>FX Trading</small></a>
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

  // Trade modal functionality
  document.addEventListener("DOMContentLoaded", function() {
    const tradeModal = document.getElementById('tradeModal');
    if (tradeModal) {
      tradeModal.addEventListener('show.bs.modal', function(event) {
        const button = event.relatedTarget;
        const asset = button.getAttribute('data-asset');
        const modalTitle = tradeModal.querySelector('.modal-title');
        modalTitle.textContent = `Trade ${asset}`;
      });
    }
    
    // Toggle buy/sell buttons
    const buyBtn = document.getElementById('buyBtn');
    const sellBtn = document.getElementById('sellBtn');
    
    buyBtn.addEventListener('click', function() {
      buyBtn.classList.add('active');
      sellBtn.classList.remove('active');
    });
    
    sellBtn.addEventListener('click', function() {
      sellBtn.classList.add('active');
      buyBtn.classList.remove('active');
    });
    
    // Show/hide limit price based on order type
    const orderType = document.getElementById('orderType');
    const limitPriceContainer = document.getElementById('limitPriceContainer');
    
    orderType.addEventListener('change', function() {
      if (this.value === 'limit') {
        limitPriceContainer.style.display = 'block';
      } else {
        limitPriceContainer.style.display = 'none';
      }
    });
    
    // Enable Bootstrap tooltip
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function(tooltipTriggerEl) {
      new bootstrap.Tooltip(tooltipTriggerEl);
    });
  });
</script>
</body>
</html>