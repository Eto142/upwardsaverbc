@extends('mail.layout')
@section('title', 'Bank Statement — Upward Saver Bank Corporation')
@section('badge', 'Bank Statement')
@section('icon', '📄')
@section('header_title', 'Your Bank Statement')
@section('body')

<p style="margin:0 0 6px;color:#111827;font-size:16px;font-weight:600">Hello {{ $user->first_name }},</p>
<p style="margin:0 0 22px;color:#6b7280;font-size:14px;line-height:1.6">Here is your recent bank statement for your records.</p>

<table width="100%" cellpadding="0" cellspacing="0" style="border-collapse:collapse;font-size:13px">
  <thead>
    <tr>
      <th style="background:linear-gradient(135deg,#a51c24,#e51c24);color:#fff;padding:10px 12px;text-align:left;border-radius:6px 0 0 0">Date</th>
      <th style="background:linear-gradient(135deg,#a51c24,#e51c24);color:#fff;padding:10px 12px;text-align:left">Description</th>
      <th style="background:linear-gradient(135deg,#a51c24,#e51c24);color:#fff;padding:10px 12px;text-align:center">Type</th>
      <th style="background:linear-gradient(135deg,#a51c24,#e51c24);color:#fff;padding:10px 12px;text-align:right">Amount ({{ $user->currency }})</th>
      <th style="background:linear-gradient(135deg,#a51c24,#e51c24);color:#fff;padding:10px 12px;text-align:center;border-radius:0 6px 0 0">Status</th>
    </tr>
  </thead>
  <tbody>
    @foreach($transactions as $details)
    <tr style="background:{{ $loop->even ? '#f9fafb' : '#ffffff' }}">
      <td style="padding:10px 12px;border-bottom:1px solid #f3f4f6;color:#374151">{{ \Carbon\Carbon::parse($details['created_at'])->toFormattedDateString() }}</td>
      <td style="padding:10px 12px;border-bottom:1px solid #f3f4f6;color:#374151">{{ $details['transaction_description'] }}</td>
      <td style="padding:10px 12px;border-bottom:1px solid #f3f4f6;color:#374151;text-align:center">{{ $details['transaction'] }}</td>
      <td style="padding:10px 12px;border-bottom:1px solid #f3f4f6;text-align:right;font-weight:700;color:{{ $details['transaction'] == 'Loan' ? '#15803d' : '#b91c1c' }}">
        {{ $details['transaction'] == 'Loan' ? '+' : '-' }}{{ number_format($details['transaction_amount'], 2) }}
      </td>
      <td style="padding:10px 12px;border-bottom:1px solid #f3f4f6;text-align:center">
        @if($details['transaction_status'] == 1)
          <span style="background:#dcfce7;color:#15803d;border-radius:50px;padding:2px 10px;font-size:11px;font-weight:700">Successful</span>
        @elseif($details['transaction_status'] == 0)
          <span style="background:#fef9c3;color:#92400e;border-radius:50px;padding:2px 10px;font-size:11px;font-weight:700">Pending</span>
        @else
          <span style="background:#fef2f2;color:#b91c1c;border-radius:50px;padding:2px 10px;font-size:11px;font-weight:700">Failed</span>
        @endif
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
