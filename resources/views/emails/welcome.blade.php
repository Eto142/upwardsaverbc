@extends('mail.layout')
@section('title', 'Welcome to Upward Saver Bank Corporation')
@section('badge', 'New Account')
@section('icon', '🎉')
@section('header_title', 'Welcome to Upward Saver Bank Corporation!')
@section('body')
<p style="margin:0 0 22px;color:#374151;font-size:15px;line-height:1.7">
  Your account has been created successfully. Here are your account details — please keep them safe.
</p>
<table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:22px">
  <tr>
    <td style="background:#f9fafb;border-left:4px solid #e51c24;border-radius:0 10px 10px 0;padding:18px 20px">
      <p style="margin:0 0 8px;color:#374151;font-size:13px"><strong style="color:#111827">Email:</strong>&nbsp; {{ $data['email'] }}</p>
      <p style="margin:0 0 8px;color:#374151;font-size:13px"><strong style="color:#111827">Account Number:</strong>&nbsp; {{ $data['a_number'] }}</p>
      <p style="margin:0;color:#374151;font-size:13px"><strong style="color:#111827">Password:</strong>&nbsp; {{ $data['password'] }}</p>
    </td>
  </tr>
</table>
<table width="100%" cellpadding="0" cellspacing="0">
  <tr>
    <td style="background:#fff5f5;border:1px solid #fecaca;border-radius:10px;padding:14px 18px">
      <p style="margin:0;color:#b91c1c;font-size:13px;line-height:1.7">
        Please change your password after your first login and never share your credentials with anyone.
      </p>
    </td>
  </tr>
</table>
@endsection
