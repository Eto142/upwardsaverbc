@extends('mail.layout')

@section('title', 'Account Verification — Upward Saver Bank Corporation')
@section('badge', 'New Account')
@section('icon', '✅')
@section('header_title', 'Verify Your Account')

@section('body')

<p style="margin:0 0 6px;color:#111827;font-size:16px;font-weight:600">Hello,</p>
<p style="margin:0 0 26px;color:#6b7280;font-size:14px;line-height:1.6">
  Thank you for registering with Upward Saver Bank Corporation. Your registration is successful and
  you are just one step away from verifying your account.
</p>

<!-- Code Box -->
<table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:26px">
  <tr>
    <td align="center" style="background:linear-gradient(135deg,#a51c24,#e51c24);border-radius:12px;padding:28px 20px">
      <p style="margin:0 0 8px;color:rgba(255,255,255,0.7);font-size:11px;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;text-align:center">Your Activation Code</p>
      <p style="margin:0;color:#ffffff;font-size:40px;font-weight:800;letter-spacing:10px;text-align:center;font-family:'Courier New',monospace">{{ $validToken }}</p>
    </td>
  </tr>
</table>

<!-- Security Tips -->
<table width="100%" cellpadding="0" cellspacing="0">
  <tr>
    <td style="background:#f9fafb;border-radius:10px;padding:16px 20px">
      <p style="margin:0 0 8px;color:#374151;font-size:13px;font-weight:600">Security Tips</p>
      <ul style="margin:0;padding-left:16px;color:#6b7280;font-size:13px;line-height:1.8">
        <li>Never share your login details with anyone.</li>
        <li>This message is automated — do not reply.</li>
      </ul>
    </td>
  </tr>
</table>

@endsection
