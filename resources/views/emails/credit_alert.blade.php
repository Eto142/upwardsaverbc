@extends('mail.layout')
@section('title', 'Credit Alert Ã¢â‚¬â€ Upward Saver Bank Corporation')
@section('badge', 'Credit Alert')
@section('icon', 'Ã°Å¸â€™Å¡')
@section('header_title', 'Credit Alert Ã¢â‚¬â€ Funds Received')
@section('body')

<p style="margin:0 0 6px;color:#111827;font-size:16px;font-weight:600">Greetings, {{ $user['full_name'] }}!</p>
<p style="margin:0 0 24px;color:#6b7280;font-size:14px;line-height:1.6">Your account has been credited. Please find the details below.</p>

<!-- Amount highlight -->
<table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:22px">
  <tr>
    <td align="center" style="background:linear-gradient(135deg,#a51c24,#e51c24);border-radius:12px;padding:22px 20px">
      <p style="margin:0 0 4px;color:rgba(255,255,255,0.75);font-size:11px;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;text-align:center">Amount Credited</p>
      <p style="margin:0;color:#ffffff;font-size:36px;font-weight:800;text-align:center">{{ $user['currency'] }}{{ $user['amount'] }}</p>
    </td>
  </tr>
</table>

<!-- Transaction details -->
<table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:22px">
  <tr>
    <td style="background:#f9fafb;border-left:4px solid #e51c24;border-radius:0 10px 10px 0;padding:18px 20px">
      <p style="margin:0 0 8px;color:#374151;font-size:13px"><strong style="color:#111827">Account Number:</strong>&nbsp; {{ $user['account_number'] }}</p>
      <p style="margin:0 0 8px;color:#374151;font-size:13px"><strong style="color:#111827">Account Name:</strong>&nbsp; {{ $user['account_name'] }}</p>
      <p style="margin:0 0 8px;color:#374151;font-size:13px"><strong style="color:#111827">Description:</strong>&nbsp; {{ $user['description'] }}</p>
      <p style="margin:0 0 8px;color:#374151;font-size:13px"><strong style="color:#111827">Total Amount:</strong>&nbsp; {{ $user['currency'] }}{{ $user['amount'] }}</p>
      <p style="margin:0 0 8px;color:#374151;font-size:13px"><strong style="color:#111827">Reference:</strong>&nbsp; {{ $user['ref'] }}</p>
      <p style="margin:0 0 8px;color:#374151;font-size:13px"><strong style="color:#111827">Date:</strong>&nbsp; {{ $user['date'] }}</p>
      <p style="margin:0;color:#374151;font-size:13px"><strong style="color:#111827">Available Balance:</strong>&nbsp; {{ $user['currency'] }}{{ $user['balance'] }}</p>
    </td>
  </tr>
</table>

@endsection
