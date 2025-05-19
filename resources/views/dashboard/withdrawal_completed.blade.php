<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
<style>
  body {
    text-align: center;
    padding: 40px 0;
    background: #f8f9fa;
    font-family: "Nunito Sans", sans-serif;
  }
  .card {
    background: #fff;
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    display: inline-block;
    margin: 0 auto;
    max-width: 90%;
    box-sizing: border-box;
  }
  h1 {
    color: #28a745;
    font-weight: 900;
    font-size: 36px;
    margin-bottom: 20px;
  }
  p {
    color: #6c757d;
    font-size: 18px;
    margin: 0;
    margin-bottom: 10px;
  }
  .checkmark {
    width: 64px;
    height: 64px;
    margin: 0 auto 30px;
  }
  .checkmark-circle {
    stroke: #28a745;
    stroke-width: 5;
    fill: none;
    stroke-dasharray: 166;
    stroke-dashoffset: 166;
    animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards;
  }
  .checkmark-check {
    transform-origin: 50% 50%;
    stroke: #28a745;
    stroke-width: 5;
    fill: none;
    stroke-dasharray: 48;
    stroke-dashoffset: 48;
    animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) 0.3s forwards;
  }
  @keyframes stroke {
    to {
      stroke-dashoffset: 0;
    }
  }
  @media only screen and (min-width: 768px) {
    .card {
      max-width: 500px;
    }
  }
</style>
</head>
<body>
  <div class="card">
    <h1>Withdrawal Completed</h1>
    <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
      <circle class="checkmark-circle" cx="26" cy="26" r="25" fill="none"/>
      <path class="checkmark-check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
    </svg>
    <p><strong>Success!</strong></p>
    <p>Redirecting to your transactions shortly.</p>
  </div>

  <script>
    setTimeout(function() {
      window.location.href = '../transactions';
    }, 3000);
  </script>
</body>
</html>
