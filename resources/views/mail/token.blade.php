@extends('mail.layout')

@section('title', 'Transaction OTP — Upward Saver Bank Corporation')
@section('badge', 'Security Code')
@section('icon', '🔑')
@section('header_title', 'Transaction Confirmation Code')

@section('body')

<p style="margin:0 0 6px;color:#111827;font-size:16px;font-weight:600">Hello,</p>
<p style="margin:0 0 26px;color:#6b7280;font-size:14px;line-height:1.6">
  Kindly use the one-time code below to verify your transaction. This code expires shortly.
</p>

<!-- Code Box -->
<table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:26px">
  <tr>
    <td align="center" style="background:linear-gradient(135deg,#a51c24,#e51c24);border-radius:12px;padding:28px 20px">
      <p style="margin:0 0 8px;color:rgba(255,255,255,0.7);font-size:11px;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;text-align:center">Your One-Time Code</p>
      <p style="margin:0;color:#ffffff;font-size:40px;font-weight:800;letter-spacing:10px;text-align:center;font-family:'Courier New',monospace">{{ $token }}</p>
    </td>
  </tr>
</table>

<table width="100%" cellpadding="0" cellspacing="0">
  <tr>
    <td style="background:#fff5f5;border:1px solid #fecaca;border-radius:10px;padding:14px 18px">
      <p style="margin:0;color:#b91c1c;font-size:13px;line-height:1.7">
        If you did not request this code, please ignore this email or contact support immediately.
      </p>
    </td>
  </tr>
</table>

@endsection
