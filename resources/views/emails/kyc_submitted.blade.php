@extends('mail.layout')
@section('title', 'Documents Received – Upward Saver Bank Corporation')
@section('badge', 'Identity Verification')
@section('icon', '🛡️')
@section('header_title', 'Documents Received – Under Review')
@section('body')
<p style="margin:0 0 18px;color:#374151;font-size:15px;line-height:1.7">
    Hi <strong>{{ $user->first_name }}</strong>, thank you for submitting your identification documents.
</p>
<p style="margin:0 0 22px;color:#374151;font-size:15px;line-height:1.7">
    Our compliance team will review your documents and verify your account.
    This usually takes <strong>1–2 business days</strong>.
    You will receive another email once your account has been approved.
</p>
<table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:22px">
  <tr>
    <td style="background:#f0fdf4;border-left:4px solid #16a34a;border-radius:0 10px 10px 0;padding:18px 20px">
      <p style="margin:0;color:#374151;font-size:13px;line-height:1.7">
        <strong style="color:#111827">Status:</strong>&nbsp; Under Review 🔍<br>
        <strong style="color:#111827">Account Number:</strong>&nbsp; {{ $user->a_number }}<br>
        <strong style="color:#111827">Email:</strong>&nbsp; {{ $user->email }}
      </p>
    </td>
  </tr>
</table>
<table width="100%" cellpadding="0" cellspacing="0">
  <tr>
    <td style="background:#fff5f5;border:1px solid #fecaca;border-radius:10px;padding:14px 18px">
      <p style="margin:0;color:#b91c1c;font-size:13px;line-height:1.7">
        If you did not create this account, please contact our support team immediately.
      </p>
    </td>
  </tr>
</table>
@endsection
