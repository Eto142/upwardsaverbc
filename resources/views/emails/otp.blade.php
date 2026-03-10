@extends('mail.layout')
@section('title', 'Login Verification Code')
@section('badge', 'Security Notice')
@section('icon', '🔐')
@section('header_title', 'Login Verification Code')
@section('body')
<p style="margin:0 0 6px;color:#111827;font-size:16px;font-weight:600">Hello {{ $otp['first_name'] }},</p>
<p style="margin:0 0 26px;color:#6b7280;font-size:14px;line-height:1.6">Use the code below to complete login. Expires in <strong style="color:#e51c24">10 minutes</strong>.</p>
<table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:26px"><tr><td align="center" style="background:linear-gradient(135deg,#a51c24,#e51c24);border-radius:12px;padding:28px 20px"><p style="margin:0 0 8px;color:rgba(255,255,255,0.7);font-size:11px;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;text-align:center">Your One-Time Code</p><p style="margin:0;color:#ffffff;font-size:40px;font-weight:800;letter-spacing:14px;text-align:center;font-family:'Courier New',monospace">{{ $otp['otp'] }}</p></td></tr></table>
<table width="100%" cellpadding="0" cellspacing="0"><tr><td style="background:#fff5f5;border:1px solid #fecaca;border-radius:10px;padding:16px 20px"><p style="margin:0 0 8px;color:#b91c1c;font-size:13px;font-weight:600">Important</p><ul style="margin:0;padding-left:16px;color:#6b7280;font-size:13px;line-height:1.8"><li>Valid for 10 minutes only.</li><li>Never share this code with anyone.</li><li>If you did not request this, secure your account immediately.</li></ul></td></tr></table>
@endsection
