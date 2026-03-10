<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>@yield('title', 'Upward Saver Bank Corporation')</title>
</head>
<body style="margin:0;padding:0;background:#f3f4f6;font-family:Arial,Helvetica,sans-serif">

<table width="100%" cellpadding="0" cellspacing="0" style="background:#f3f4f6;padding:40px 0">
  <tr>
    <td align="center">
      <table width="590" cellpadding="0" cellspacing="0" style="max-width:590px;width:100%">

        <!-- Header -->
        <tr>
          <td style="background:linear-gradient(135deg,#a51c24 0%,#e51c24 100%);border-radius:14px 14px 0 0;padding:32px 40px;text-align:center">
            <!-- Badge -->
            <div style="display:inline-block;background:rgba(255,255,255,0.18);border:1.5px solid rgba(255,255,255,0.35);border-radius:50px;padding:5px 16px;margin-bottom:16px">
              <span style="color:#fff;font-size:11px;font-weight:700;letter-spacing:1px;text-transform:uppercase">@yield('badge', 'Upward Saver Bank')</span>
            </div>
            <!-- Icon -->
            <table cellpadding="0" cellspacing="0" border="0" style="margin:0 auto 14px">
              <tr>
                <td width="64" height="64" style="background:rgba(255,255,255,0.2);border-radius:50%;text-align:center;vertical-align:middle;font-size:28px;line-height:64px">@yield('icon', '🏦')</td>
              </tr>
            </table>
            <!-- Title -->
            <h1 style="margin:0;color:#ffffff;font-size:22px;font-weight:700;letter-spacing:-0.3px">@yield('header_title', 'Upward Saver Bank Corporation')</h1>
            <p style="margin:8px 0 0;color:rgba(255,255,255,0.7);font-size:13px">Upward Saver Bank Corporation</p>
          </td>
        </tr>

        <!-- Body -->
        <tr>
          <td style="background:#ffffff;padding:36px 40px">
            @yield('body')
            <!-- Auto footer note -->
            <p style="margin:28px 0 0;color:#9ca3af;font-size:12px;line-height:1.6;text-align:center">
              This is an automated message from Upward Saver Bank Corporation.<br>
              Please do not reply to this email.
            </p>
          </td>
        </tr>

        <!-- Footer -->
        <tr>
          <td style="background:#a51c24;border-radius:0 0 14px 14px;padding:20px 40px;text-align:center">
            <p style="margin:0 0 4px;color:rgba(255,255,255,0.75);font-size:12px">
              &copy; {{ date('Y') }} Upward Saver Bank Corporation. All rights reserved.
            </p>
            <p style="margin:0;color:rgba(255,255,255,0.5);font-size:11px">Secure &middot; Private &middot; Trusted</p>
          </td>
        </tr>

      </table>
    </td>
  </tr>
</table>

</body>
</html>
