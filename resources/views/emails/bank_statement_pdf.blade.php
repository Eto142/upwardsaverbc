<table style="width:100%;border-collapse:collapse;font-size:13px;font-family:Arial,sans-serif">
  <thead>
    <tr>
      <th style="background:#a51c24;color:#ffffff;padding:10px 12px;text-align:left;border:none">Date</th>
      <th style="background:#a51c24;color:#ffffff;padding:10px 12px;text-align:left;border:none">Description</th>
      <th style="background:#a51c24;color:#ffffff;padding:10px 12px;text-align:right;border:none">Amount</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($transactions as $loop_index => $transaction)
    <tr style="background:{{ $loop_index % 2 === 0 ? '#ffffff' : '#f9fafb' }}">
      <td style="padding:9px 12px;border-bottom:1px solid #e5e7eb;color:#374151">{{ $transaction['date'] }}</td>
      <td style="padding:9px 12px;border-bottom:1px solid #e5e7eb;color:#374151">{{ $transaction['description'] }}</td>
      <td style="padding:9px 12px;border-bottom:1px solid #e5e7eb;text-align:right;font-weight:600;color:#111827">{{ $transaction['amount'] }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
