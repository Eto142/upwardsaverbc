@extends('mail.layout')

@section('title', '{{ $data["subject"] }} — Upward Saver Bank Corporation')
@section('badge', 'Account Notification')
@section('icon', '🔔')
@section('header_title', '{{ $data["subject"] }}')

@section('body')

<p style="margin:0 0 20px;color:#374151;font-size:15px;line-height:1.7">{{ $data['message'] }}</p>

@endsection
