
<nav class="navbar fixed-bottom bg-white bottom-nav">
  <div class="container d-flex justify-content-around text-center">
    <a class="nav-link active" href="{{ route('dashboard') }}">
      <i class="bi bi-house-door-fill"></i><br><small>Home</small>
    </a>
    <a class="nav-link" href="{{ route('card') }}">
      <i class="bi bi-credit-card-2-front"></i><br><small>Card</small>
    </a>
    <a class="nav-link" href="{{ route('bank') }}">
      <i class="bi bi-arrow-left-right"></i><br><small>Transfers</small>
    </a>
    <a class="nav-link" href="{{ route('transactions') }}">
      <i class="bi bi-clock-history"></i><br><small>History</small>
    </a>
    
    <!-- Logout -->
    <form method="POST" action="{{route('logOut')}}" class="d-inline">
      @csrf
      <button type="submit" class="nav-link btn btn-link p-0 m-0" style="color: inherit; text-decoration: none;">
        <i class="bi bi-box-arrow-right"></i><br><small>Logout</small>
      </button>
    </form>
  </div>
</nav>