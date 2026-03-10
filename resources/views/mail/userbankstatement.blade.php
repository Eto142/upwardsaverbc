@extends('mail.layout')

@section('title', 'Your Bank Statement — Upward Saver Bank Corporation')
@section('badge', 'Bank Statement')
@section('icon', '📊')
@section('header_title', 'Your Bank Statement')

@section('body')

<!-- Account info -->
<table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:22px">
  <tr>
    <td style="background:#f9fafb;border-radius:10px;padding:16px 20px">
      <p style="margin:0 0 6px;color:#111827;font-size:14px;font-weight:600">Account Holder</p>
      <p style="margin:0 0 12px;color:#6b7280;font-size:14px">{{ $data['first_name'] }} {{ $data['last_name'] }}</p>
      <p style="margin:0 0 4px;color:#111827;font-size:13px;font-weight:600">Statement Period</p>
      <p style="margin:0;color:#6b7280;font-size:13px">{{ $data['start_date'] }} &mdash; {{ $data['end_date'] }}</p>
    </td>
  </tr>
</table>

<!-- Transactions table -->
<p style="margin:0 0 12px;color:#111827;font-size:14px;font-weight:700">Transaction History</p>
<table width="100%" cellpadding="0" cellspacing="0" style="border-collapse:collapse">
  <tr>
    <th style="background:#a51c24;color:#fff;font-size:12px;font-weight:700;padding:10px 12px;text-align:left;border-radius:8px 0 0 0">Date</th>
    <th style="background:#a51c24;color:#fff;font-size:12px;font-weight:700;padding:10px 12px;text-align:left">Description</th>
    <th style="background:#a51c24;color:#fff;font-size:12px;font-weight:700;padding:10px 12px;text-align:right">Amount</th>
    <th style="background:#a51c24;color:#fff;font-size:12px;font-weight:700;padding:10px 12px;text-align:center;border-radius:0 8px 0 0">Status</th>
  </tr>
  @foreach($data['transactions'] as $transaction)
  <tr style="background:{{ $loop->even ? '#f9fafb' : '#ffffff' }}">
    <td style="padding:10px 12px;font-size:13px;color:#374151;border-bottom:1px solid #e5e7eb">
      {{ \Carbon\Carbon::parse($transaction->created_at)->toFormattedDateString() }}
    </td>
    <td style="padding:10px 12px;font-size:13px;color:#374151;border-bottom:1px solid #e5e7eb">
      {{ $transaction->transaction_description }}
    </td>
    <td style="padding:10px 12px;font-size:13px;text-align:right;border-bottom:1px solid #e5e7eb;font-weight:600;color:{{ $transaction->transaction == 'Loan' ? '#15803d' : '#111827' }}">
      @if($transaction->transaction == 'Loan')
        +{{ number_format($transaction->transaction_amount, 2) }}
      @else
        -{{ number_format($transaction->transaction_amount, 2) }}
      @endif
    </td>
    <td style="padding:10px 12px;font-size:12px;text-align:center;border-bottom:1px solid #e5e7eb">
      @if($transaction->transaction_status == '1')
        <span style="background:#dcfce7;color:#15803d;border-radius:50px;padding:2px 10px;font-weight:700">Success</span>
      @elseif($transaction->transaction_status == '0')
        <span style="background:#dbeafe;color:#1d4ed8;border-radius:50px;padding:2px 10px;font-weight:700">Pending</span>
      @else
        <span style="background:#fef2f2;color:#b91c1c;border-radius:50px;padding:2px 10px;font-weight:700">Failed</span>
      @endif
    </td>
  </tr>
  @endforeach
</table>

<p style="margin:16px 0 0;color:#9ca3af;font-size:12px;text-align:right">
  Generated on {{ \Carbon\Carbon::now()->toFormattedDateString() }}
</p>

@endsection
