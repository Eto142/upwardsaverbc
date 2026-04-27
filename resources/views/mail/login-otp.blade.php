@extends('mail.layout')

@section('title', 'Login Notification — Upward Saver Bank Corporation')
@section('badge', 'Security Notice')
@section('icon', '🔐')
@section('header_title', 'New Login Detected')

@section('body')

<p style="margin:0 0 6px;color:#111827;font-size:16px;font-weight:600">Hello {{ $first_name }},</p>
<p style="margin:0 0 26px;color:#6b7280;font-size:14px;line-height:1.6">
  We noticed a successful sign-in to your Upward Saver Bank account. If this was you, no action is needed.
</p>

<!-- Warning box -->
<table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:20px">
  <tr>
    <td style="background:#fff5f5;border:1px solid #fecaca;border-radius:10px;padding:16px 20px">
      <p style="margin:0 0 8px;color:#b91c1c;font-size:13px;font-weight:600">⚠&nbsp; Wasn't you?</p>
      <ul style="margin:0;padding-left:16px;color:#6b7280;font-size:13px;line-height:1.8">
        <li>If you did not sign in, please change your password immediately.</li>
        <li>Contact our support team to secure your account.</li>
        <li>Upward Saver Bank staff will <strong>never</strong> ask for your password.</li>
      </ul>
    </td>
  </tr>
</table>

@endsection
