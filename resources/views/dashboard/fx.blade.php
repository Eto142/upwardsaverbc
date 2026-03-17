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
     <a href="{{ route('deposit') }}" class="btn btn-outline-main">Add Funds</a>

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

  @if(session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
@endif

@if(session('error'))
  <div class="alert alert-danger">
    {{ session('error') }}
  </div>
@endif

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

      <div class="asset-card clickable" data-bs-toggle="modal" data-bs-target="#tradeModal" data-asset="MSFT">
        <div class="d-flex align-items-center">
          <div class="asset-icon stock-icon"><i class="bi bi-windows"></i></div>
          <div class="flex-grow-1">
            <div class="asset-name">Microsoft Corp.</div>
            <div class="asset-symbol">MSFT</div>
          </div>
          <div class="text-end">
            <div class="asset-price">$415.32</div>
            <div class="price-change-up">+1.12%</div>
          </div>
        </div>
      </div>

      <div class="asset-card clickable" data-bs-toggle="modal" data-bs-target="#tradeModal" data-asset="GOOGL">
        <div class="d-flex align-items-center">
          <div class="asset-icon stock-icon"><i class="bi bi-google"></i></div>
          <div class="flex-grow-1">
            <div class="asset-name">Alphabet Inc.</div>
            <div class="asset-symbol">GOOGL</div>
          </div>
          <div class="text-end">
            <div class="asset-price">$172.45</div>
            <div class="price-change-down">-0.43%</div>
          </div>
        </div>
      </div>

      <div class="asset-card clickable" data-bs-toggle="modal" data-bs-target="#tradeModal" data-asset="NVDA">
        <div class="d-flex align-items-center">
          <div class="asset-icon stock-icon"><i class="bi bi-cpu"></i></div>
          <div class="flex-grow-1">
            <div class="asset-name">NVIDIA Corp.</div>
            <div class="asset-symbol">NVDA</div>
          </div>
          <div class="text-end">
            <div class="asset-price">$875.40</div>
            <div class="price-change-up">+3.21%</div>
          </div>
        </div>
      </div>

      <div class="asset-card clickable" data-bs-toggle="modal" data-bs-target="#tradeModal" data-asset="META">
        <div class="d-flex align-items-center">
          <div class="asset-icon stock-icon"><i class="bi bi-person-badge"></i></div>
          <div class="flex-grow-1">
            <div class="asset-name">Meta Platforms</div>
            <div class="asset-symbol">META</div>
          </div>
          <div class="text-end">
            <div class="asset-price">$502.18</div>
            <div class="price-change-up">+0.95%</div>
          </div>
        </div>
      </div>

      <div class="asset-card clickable" data-bs-toggle="modal" data-bs-target="#tradeModal" data-asset="JPM">
        <div class="d-flex align-items-center">
          <div class="asset-icon stock-icon"><i class="bi bi-bank"></i></div>
          <div class="flex-grow-1">
            <div class="asset-name">JPMorgan Chase</div>
            <div class="asset-symbol">JPM</div>
          </div>
          <div class="text-end">
            <div class="asset-price">$196.74</div>
            <div class="price-change-down">-0.18%</div>
          </div>
        </div>
      </div>

      <div class="asset-card clickable" data-bs-toggle="modal" data-bs-target="#tradeModal" data-asset="NFLX">
        <div class="d-flex align-items-center">
          <div class="asset-icon stock-icon"><i class="bi bi-play-circle"></i></div>
          <div class="flex-grow-1">
            <div class="asset-name">Netflix Inc.</div>
            <div class="asset-symbol">NFLX</div>
          </div>
          <div class="text-end">
            <div class="asset-price">$634.90</div>
            <div class="price-change-up">+1.44%</div>
          </div>
        </div>
      </div>

      <div class="asset-card clickable" data-bs-toggle="modal" data-bs-target="#tradeModal" data-asset="V">
        <div class="d-flex align-items-center">
          <div class="asset-icon stock-icon"><i class="bi bi-credit-card"></i></div>
          <div class="flex-grow-1">
            <div class="asset-name">Visa Inc.</div>
            <div class="asset-symbol">V</div>
          </div>
          <div class="text-end">
            <div class="asset-price">$278.63</div>
            <div class="price-change-up">+0.54%</div>
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

      <div class="asset-card clickable" data-bs-toggle="modal" data-bs-target="#tradeModal" data-asset="BNB">
        <div class="d-flex align-items-center">
          <div class="asset-icon crypto-icon"><i class="bi bi-coin"></i></div>
          <div class="flex-grow-1">
            <div class="asset-name">BNB</div>
            <div class="asset-symbol">BNB</div>
          </div>
          <div class="text-end">
            <div class="asset-price">$598.20</div>
            <div class="price-change-up">+1.03%</div>
          </div>
        </div>
      </div>

      <div class="asset-card clickable" data-bs-toggle="modal" data-bs-target="#tradeModal" data-asset="XRP">
        <div class="d-flex align-items-center">
          <div class="asset-icon crypto-icon"><i class="bi bi-arrow-left-right"></i></div>
          <div class="flex-grow-1">
            <div class="asset-name">XRP</div>
            <div class="asset-symbol">XRP</div>
          </div>
          <div class="text-end">
            <div class="asset-price">$0.6134</div>
            <div class="price-change-up">+2.15%</div>
          </div>
        </div>
      </div>

      <div class="asset-card clickable" data-bs-toggle="modal" data-bs-target="#tradeModal" data-asset="ADA">
        <div class="d-flex align-items-center">
          <div class="asset-icon crypto-icon"><i class="bi bi-currency-exchange"></i></div>
          <div class="flex-grow-1">
            <div class="asset-name">Cardano</div>
            <div class="asset-symbol">ADA</div>
          </div>
          <div class="text-end">
            <div class="asset-price">$0.4872</div>
            <div class="price-change-down">-0.31%</div>
          </div>
        </div>
      </div>

      <div class="asset-card clickable" data-bs-toggle="modal" data-bs-target="#tradeModal" data-asset="DOGE">
        <div class="d-flex align-items-center">
          <div class="asset-icon crypto-icon"><i class="bi bi-emoji-smile"></i></div>
          <div class="flex-grow-1">
            <div class="asset-name">Dogecoin</div>
            <div class="asset-symbol">DOGE</div>
          </div>
          <div class="text-end">
            <div class="asset-price">$0.1623</div>
            <div class="price-change-up">+5.42%</div>
          </div>
        </div>
      </div>

      <div class="asset-card clickable" data-bs-toggle="modal" data-bs-target="#tradeModal" data-asset="AVAX">
        <div class="d-flex align-items-center">
          <div class="asset-icon crypto-icon"><i class="bi bi-lightning-charge"></i></div>
          <div class="flex-grow-1">
            <div class="asset-name">Avalanche</div>
            <div class="asset-symbol">AVAX</div>
          </div>
          <div class="text-end">
            <div class="asset-price">$38.90</div>
            <div class="price-change-up">+1.78%</div>
          </div>
        </div>
      </div>

      <div class="asset-card clickable" data-bs-toggle="modal" data-bs-target="#tradeModal" data-asset="LINK">
        <div class="d-flex align-items-center">
          <div class="asset-icon crypto-icon"><i class="bi bi-link-45deg"></i></div>
          <div class="flex-grow-1">
            <div class="asset-name">Chainlink</div>
            <div class="asset-symbol">LINK</div>
          </div>
          <div class="text-end">
            <div class="asset-price">$17.54</div>
            <div class="price-change-down">-0.92%</div>
          </div>
        </div>
      </div>

      <div class="asset-card clickable" data-bs-toggle="modal" data-bs-target="#tradeModal" data-asset="LTC">
        <div class="d-flex align-items-center">
          <div class="asset-icon crypto-icon"><i class="bi bi-currency-bitcoin"></i></div>
          <div class="flex-grow-1">
            <div class="asset-name">Litecoin</div>
            <div class="asset-symbol">LTC</div>
          </div>
          <div class="text-end">
            <div class="asset-price">$84.20</div>
            <div class="price-change-up">+0.67%</div>
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

      <div class="asset-card clickable" data-bs-toggle="modal" data-bs-target="#tradeModal" data-asset="USD/CHF">
        <div class="d-flex align-items-center">
          <div class="asset-icon stock-icon"><i class="bi bi-globe"></i></div>
          <div class="flex-grow-1">
            <div class="asset-name">US Dollar / Swiss Franc</div>
            <div class="asset-symbol">USD/CHF</div>
          </div>
          <div class="text-end">
            <div class="asset-price">0.8921</div>
            <div class="price-change-down">-0.09%</div>
          </div>
        </div>
      </div>

      <div class="asset-card clickable" data-bs-toggle="modal" data-bs-target="#tradeModal" data-asset="AUD/USD">
        <div class="d-flex align-items-center">
          <div class="asset-icon stock-icon"><i class="bi bi-globe"></i></div>
          <div class="flex-grow-1">
            <div class="asset-name">Australian Dollar / US Dollar</div>
            <div class="asset-symbol">AUD/USD</div>
          </div>
          <div class="text-end">
            <div class="asset-price">0.6543</div>
            <div class="price-change-up">+0.18%</div>
          </div>
        </div>
      </div>

      <div class="asset-card clickable" data-bs-toggle="modal" data-bs-target="#tradeModal" data-asset="USD/CAD">
        <div class="d-flex align-items-center">
          <div class="asset-icon stock-icon"><i class="bi bi-globe"></i></div>
          <div class="flex-grow-1">
            <div class="asset-name">US Dollar / Canadian Dollar</div>
            <div class="asset-symbol">USD/CAD</div>
          </div>
          <div class="text-end">
            <div class="asset-price">1.3612</div>
            <div class="price-change-up">+0.07%</div>
          </div>
        </div>
      </div>

      <div class="asset-card clickable" data-bs-toggle="modal" data-bs-target="#tradeModal" data-asset="NZD/USD">
        <div class="d-flex align-items-center">
          <div class="asset-icon stock-icon"><i class="bi bi-globe"></i></div>
          <div class="flex-grow-1">
            <div class="asset-name">New Zealand Dollar / US Dollar</div>
            <div class="asset-symbol">NZD/USD</div>
          </div>
          <div class="text-end">
            <div class="asset-price">0.5987</div>
            <div class="price-change-down">-0.22%</div>
          </div>
        </div>
      </div>

      <div class="asset-card clickable" data-bs-toggle="modal" data-bs-target="#tradeModal" data-asset="EUR/GBP">
        <div class="d-flex align-items-center">
          <div class="asset-icon stock-icon"><i class="bi bi-globe"></i></div>
          <div class="flex-grow-1">
            <div class="asset-name">Euro / British Pound</div>
            <div class="asset-symbol">EUR/GBP</div>
          </div>
          <div class="text-end">
            <div class="asset-price">0.8534</div>
            <div class="price-change-up">+0.05%</div>
          </div>
        </div>
      </div>

      <div class="asset-card clickable" data-bs-toggle="modal" data-bs-target="#tradeModal" data-asset="EUR/JPY">
        <div class="d-flex align-items-center">
          <div class="asset-icon stock-icon"><i class="bi bi-globe"></i></div>
          <div class="flex-grow-1">
            <div class="asset-name">Euro / Japanese Yen</div>
            <div class="asset-symbol">EUR/JPY</div>
          </div>
          <div class="text-end">
            <div class="asset-price">169.74</div>
            <div class="price-change-up">+0.33%</div>
          </div>
        </div>
      </div>

      <div class="asset-card clickable" data-bs-toggle="modal" data-bs-target="#tradeModal" data-asset="GBP/JPY">
        <div class="d-flex align-items-center">
          <div class="asset-icon stock-icon"><i class="bi bi-globe"></i></div>
          <div class="flex-grow-1">
            <div class="asset-name">British Pound / Japanese Yen</div>
            <div class="asset-symbol">GBP/JPY</div>
          </div>
          <div class="text-end">
            <div class="asset-price">198.41</div>
            <div class="price-change-up">+0.26%</div>
          </div>
        </div>
      </div>

      <div class="asset-card clickable" data-bs-toggle="modal" data-bs-target="#tradeModal" data-asset="XAU/USD">
        <div class="d-flex align-items-center">
          <div class="asset-icon stock-icon"><i class="bi bi-gem"></i></div>
          <div class="flex-grow-1">
            <div class="asset-name">Gold / US Dollar</div>
            <div class="asset-symbol">XAU/USD</div>
          </div>
          <div class="text-end">
            <div class="asset-price">2,318.50</div>
            <div class="price-change-up">+0.61%</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- TradingView Chart -->
<div class="container-fluid px-3 mt-4 mb-3">
  <h6 class="fw-semibold mb-2">Live Market Chart</h6>
  <div class="tradingview-widget-container" style="border-radius:16px; overflow:hidden;">
    <div id="tradingview_chart"></div>
    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
    <script type="text/javascript">
      new TradingView.widget({
        "width": "100%",
        "height": 420,
        "symbol": "NASDAQ:AAPL",
        "interval": "D",
        "timezone": "Etc/UTC",
        "theme": "light",
        "style": "1",
        "locale": "en",
        "allow_symbol_change": true,
        "container_id": "tradingview_chart"
      });
    </script>
  </div>
</div>

<!-- Trade Modal -->
<!-- Trade Modal -->
<div class="modal fade" id="tradeModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <form method="POST" action="{{ route('trades.store') }}">
        @csrf
        <div class="modal-header">
          <h5 class="modal-title" id="tradeModalTitle">Trade Asset</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="order-form">
            <input type="hidden" name="asset_symbol" id="assetSymbolInput">
            <input type="hidden" name="asset_name" id="assetNameInput">
            <input type="hidden" name="type" id="tradeTypeInput" value="buy">

            <div class="d-flex justify-content-between mb-3">
              <button type="button" class="btn btn-outline-main active" id="buyBtn">Buy</button>
              <button type="button" class="btn btn-outline-main" id="sellBtn">Sell</button>
            </div>

            <div class="mb-3">
              <label class="form-label">Amount (USD)</label>
              <input type="number" name="amount_usd" class="form-control" id="tradeAmount" placeholder="0.00" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Quantity</label>
              <input type="number" name="quantity" class="form-control" id="tradeQuantity" placeholder="0" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Order Type</label>
              <select class="form-select" name="order_type" id="orderType" required>
                <option value="market">Market Order</option>
                <option value="limit">Limit Order</option>
                <option value="stop">Stop Order</option>
              </select>
            </div>

            <div class="mb-3" id="limitPriceContainer" style="display: none;">
              <label class="form-label">Limit Price</label>
              <input type="number" name="limit_price" class="form-control" id="limitPrice" placeholder="0.00">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-main w-100" type="submit">Place Order</button>
        </div>
      </form>
    </div>
  </div>
</div>

</div>

<!-- Bottom Navigation -->
@include('dashboard.footer')

<!-- Scripts -->

<script>
document.addEventListener('DOMContentLoaded', function () {
  // Set Buy/Sell type
  const buyBtn = document.getElementById('buyBtn');
  const sellBtn = document.getElementById('sellBtn');
  const typeInput = document.getElementById('tradeTypeInput');

  buyBtn.addEventListener('click', () => {
    buyBtn.classList.add('active');
    sellBtn.classList.remove('active');
    typeInput.value = 'buy';
  });

  sellBtn.addEventListener('click', () => {
    sellBtn.classList.add('active');
    buyBtn.classList.remove('active');
    typeInput.value = 'sell';
  });

  // Show/hide limit price field
  const orderType = document.getElementById('orderType');
  const limitContainer = document.getElementById('limitPriceContainer');

  orderType.addEventListener('change', function () {
    if (this.value === 'limit') {
      limitContainer.style.display = 'block';
    } else {
      limitContainer.style.display = 'none';
    }
  });

  // Set asset symbol/name from card click
  const assetCards = document.querySelectorAll('.asset-card');
  assetCards.forEach(card => {
    card.addEventListener('click', function () {
      document.getElementById('assetSymbolInput').value = card.getAttribute('data-asset');
      document.getElementById('assetNameInput').value = card.querySelector('.asset-name').innerText;
    });
  });
});
</script>



<script>

  document.addEventListener('DOMContentLoaded', () => {
  let selectedAsset = null;

  // Detect which asset was clicked
  document.querySelectorAll('.asset-card').forEach(card => {
    card.addEventListener('click', () => {
      selectedAsset = {
        symbol: card.getAttribute('data-asset'),
        name: card.querySelector('.asset-name').innerText,
      };
    });
  });

  // Toggle order type
  const orderTypeEl = document.getElementById('orderType');
  const limitContainer = document.getElementById('limitPriceContainer');

  orderTypeEl.addEventListener('change', () => {
    if (orderTypeEl.value === 'limit') {
      limitContainer.style.display = 'block';
    } else {
      limitContainer.style.display = 'none';
    }
  });

  // Buy/Sell toggle
  let tradeType = 'buy';
  document.getElementById('buyBtn').addEventListener('click', () => {
    tradeType = 'buy';
    document.getElementById('buyBtn').classList.add('active');
    document.getElementById('sellBtn').classList.remove('active');
  });

  document.getElementById('sellBtn').addEventListener('click', () => {
    tradeType = 'sell';
    document.getElementById('sellBtn').classList.add('active');
    document.getElementById('buyBtn').classList.remove('active');
  });

  // Submit trade
  document.getElementById('placeOrderBtn').addEventListener('click', () => {
    const amount = document.getElementById('tradeAmount').value;
    const quantity = document.getElementById('tradeQuantity').value;
    const orderType = document.getElementById('orderType').value;
    const limitPrice = document.getElementById('limitPrice').value;

    fetch('/api/trade', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
      },
      body: JSON.stringify({
        asset_symbol: selectedAsset?.symbol,
        asset_name: selectedAsset?.name,
        type: tradeType,
        order_type: orderType,
        amount_usd: amount,
        quantity: quantity,
        limit_price: orderType === 'limit' ? limitPrice : null,
      })
    })
    .then(res => res.json())
    .then(data => {
      if (data.success) {
        alert('Trade placed!');
        document.getElementById('tradeModal').classList.remove('show');
      } else {
        alert('Error placing trade.');
      }
    });
  });
});
</script>
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

<!-- Your Existing HTML Above -->
<!-- Add this just before </body> -->

<script>
// === STOCKS: Using Financial Modeling Prep (public demo key) ===
const stockSymbols = ['AAPL', 'TSLA', 'AMZN'];
fetch(`https://financialmodelingprep.com/api/v3/quote/${stockSymbols.join(',')}?apikey=demo`)
  .then(res => res.json())
  .then(data => {
    data.forEach(stock => {
      const card = document.querySelector(`[data-asset="${stock.symbol}"]`);
      if (card) {
        const priceEl = card.querySelector('.asset-price');
        const changeEl = card.querySelector('.price-change-up, .price-change-down');

        const price = parseFloat(stock.price).toFixed(2);
        const change = parseFloat(stock.changesPercentage).toFixed(2);

        priceEl.textContent = `$${price}`;
        changeEl.textContent = `${change}%`;

        changeEl.className = change >= 0 ? 'price-change-up' : 'price-change-down';
      }
    });
  });

// === CRYPTO: Using CoinGecko API ===
const cryptoMap = {
  'BTC': 'bitcoin',
  'ETH': 'ethereum',
  'SOL': 'solana'
};

fetch(`https://api.coingecko.com/api/v3/simple/price?ids=bitcoin,ethereum,solana&vs_currencies=usd&include_24hr_change=true`)
  .then(res => res.json())
  .then(data => {
    for (const [symbol, id] of Object.entries(cryptoMap)) {
      const card = document.querySelector(`[data-asset="${symbol}"]`);
      if (card && data[id]) {
        const price = data[id].usd.toFixed(2);
        const change = data[id].usd_24h_change.toFixed(2);
        const priceEl = card.querySelector('.asset-price');
        const changeEl = card.querySelector('.price-change-up, .price-change-down');

        priceEl.textContent = `$${price}`;
        changeEl.textContent = `${change}%`;

        changeEl.className = change >= 0 ? 'price-change-up' : 'price-change-down';
      }
    }
  });

// === FOREX: Using Frankfurter API (no key needed) ===
const forexPairs = {
  'EUR/USD': ['EUR', 'USD'],
  'GBP/USD': ['GBP', 'USD'],
  'USD/JPY': ['USD', 'JPY']
};

Object.entries(forexPairs).forEach(([symbol, [from, to]]) => {
  fetch(`https://api.frankfurter.app/latest?from=${from}&to=${to}`)
    .then(res => res.json())
    .then(data => {
      const rate = data.rates[to];
      const card = document.querySelector(`[data-asset="${symbol}"]`);
      if (card) {
        const priceEl = card.querySelector('.asset-price');
        const changeEl = card.querySelector('.price-change-up, .price-change-down');
        priceEl.textContent = `${rate.toFixed(4)}`;

        // Frankfurter doesn't provide % change, so clear or hide it
        if (changeEl) changeEl.textContent = '';
      }
    });
});
</script>
<script>
function updatePrices() {
  // Paste all fetch code here (the full script above)
}
updatePrices();
setInterval(updatePrices, 60000); // every 60s
</script>

</body>
</html>