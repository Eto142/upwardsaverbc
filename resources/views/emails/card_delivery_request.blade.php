@extends('mail.layout')
@section('title', 'Card Delivery Request — Upward Saver Bank Corporation')
@section('badge', 'Card Delivery')
@section('icon', '📦')
@section('header_title', 'Card Delivery Request')
@section('body')

<p style="margin:0 0 18px;color:#6b7280;font-size:14px;line-height:1.6">A card delivery request has been submitted. Please find the details below.</p>

<table width="100%" cellpadding="0" cellspacing="0">
  <tr>
    <td style="background:#f9fafb;border-left:4px solid #e51c24;border-radius:0 10px 10px 0;padding:18px 20px">
      <p style="margin:0 0 8px;color:#374151;font-size:13px"><strong style="color:#111827">Transaction ID:</strong>&nbsp; {{ $details['transaction_id'] }}</p>
      <p style="margin:0 0 8px;color:#374151;font-size:13px"><strong style="color:#111827">Full Name:</strong>&nbsp; {{ $details['fname'] }}</p>
      <p style="margin:0 0 8px;color:#374151;font-size:13px"><strong style="color:#111827">Address:</strong>&nbsp; {{ $details['address'] }}</p>
      <p style="margin:0 0 8px;color:#374151;font-size:13px"><strong style="color:#111827">Phone:</strong>&nbsp; {{ $details['phone'] }}</p>
      <p style="margin:0;color:#374151;font-size:13px"><strong style="color:#111827">Email:</strong>&nbsp; {{ $details['emailAddress'] }}</p>
    </td>
  </tr>
</table>

@endsection
