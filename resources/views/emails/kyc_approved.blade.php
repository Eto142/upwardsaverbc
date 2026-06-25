@extends('mail.layout')
@section('title', 'Account Verified – Upward Saver Bank Corporation')
@section('badge', 'Account Verified')
@section('icon', '✅')
@section('header_title', 'Your Account Has Been Verified!')
@section('body')
<p style="margin:0 0 18px;color:#374151;font-size:15px;line-height:1.7">
    Hi <strong>{{ $user->first_name }}</strong>, great news!
    Your identity has been verified and your account is now fully active.
</p>
<table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:22px">
  <tr>
    <td style="background:#f0fdf4;border-left:4px solid #16a34a;border-radius:0 10px 10px 0;padding:18px 20px">
      <p style="margin:0;color:#374151;font-size:13px;line-height:1.7">
        <strong style="color:#111827">Status:</strong>&nbsp; ✅ Verified &amp; Active<br>
        <strong style="color:#111827">Account Number:</strong>&nbsp; {{ $user->a_number }}<br>
        <strong style="color:#111827">Email:</strong>&nbsp; {{ $user->email }}
      </p>
    </td>
  </tr>
</table>
<p style="margin:0 0 22px;color:#374151;font-size:15px;line-height:1.7">
    You can now log in and enjoy all the features of your Upward Saver Bank account.
</p>
@endsection
