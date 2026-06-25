@extends('mail.layout')
@section('title', 'ID Verification Unsuccessful – Upward Saver Bank Corporation')
@section('badge', 'Verification Failed')
@section('icon', '❌')
@section('header_title', 'ID Verification Unsuccessful')
@section('body')
<p style="margin:0 0 18px;color:#374151;font-size:15px;line-height:1.7">
    Hi <strong>{{ $user->first_name }}</strong>, unfortunately we were unable to verify
    your identity using the documents you submitted.
</p>
<table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:22px">
  <tr>
    <td style="background:#fff5f5;border-left:4px solid #dc2626;border-radius:0 10px 10px 0;padding:18px 20px">
      <p style="margin:0;color:#374151;font-size:13px;line-height:1.7">
        <strong style="color:#111827">Common reasons for rejection:</strong><br>
        &bull; Document image was blurry or partially cut off<br>
        &bull; Document has expired<br>
        &bull; Name on document does not match account details
      </p>
    </td>
  </tr>
</table>
<p style="margin:0 0 22px;color:#374151;font-size:15px;line-height:1.7">
    Please log in and re-upload a clear, valid, unexpired ID document from your profile page.
    If you believe this is an error, please contact our support team.
</p>
@endsection
