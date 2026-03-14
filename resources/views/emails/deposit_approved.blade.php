@extends('mail.layout')
@section('title', 'Deposit Approved — Upward Saver Bank Corporation')
@section('badge', 'Deposit Update')
@section('icon', '🏦')
@section('header_title', 'Check Deposit')
@section('body')

<p style="margin:0 0 20px;color:#374151;font-size:15px;line-height:1.7">Your check deposit has been approved successfully. The funds will be reflected in your account shortly.</p>

<table width="100%" cellpadding="0" cellspacing="0">
  <tr>
    <td style="background:#f9fafb;border-left:4px solid #e51c24;border-radius:0 8px 8px 0;padding:14px 18px">
      <p style="margin:0;color:#6b7280;font-size:13px;line-height:1.7">If you have questions about this deposit, please contact our support team.</p>
    </td>
  </tr>
</table>

@endsection