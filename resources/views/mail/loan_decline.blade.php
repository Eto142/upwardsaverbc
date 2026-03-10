@extends('mail.layout')

@section('title', 'Loan Application Update — Upward Saver Bank Corporation')
@section('badge', 'Loan Update')
@section('icon', '💰')
@section('header_title', 'Loan Application Update')

@section('body')

<!-- Status badge -->
<table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:22px">
  <tr>
    <td align="center">
      <span style="display:inline-block;background:#fef2f2;color:#b91c1c;border:1px solid #fecaca;border-radius:50px;padding:5px 16px;font-size:12px;font-weight:700;letter-spacing:.5px">⚠️ &nbsp;REQUIRES ATTENTION</span>
    </td>
  </tr>
</table>

<p style="margin:0 0 20px;color:#374151;font-size:15px;line-height:1.7">{{ $data }}</p>

<table width="100%" cellpadding="0" cellspacing="0">
  <tr>
    <td style="background:#f9fafb;border-left:4px solid #e51c24;border-radius:0 8px 8px 0;padding:14px 18px">
      <p style="margin:0;color:#6b7280;font-size:13px;line-height:1.7">
        For further assistance or to appeal this decision, please contact our support team.
      </p>
    </td>
  </tr>
</table>

@endsection
