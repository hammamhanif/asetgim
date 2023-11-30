<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0124)https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/html/stylish/email-templete-basic.html -->
<html dir="ltr" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, FlexileDash bootstrap dashboard admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, material design, FlexileDash bootstrap 5 dashboard template" />
    <meta name="description" content="FlexileDash bootstrap dashboard is powerful and clean admin dashboard template" />
    <meta name="robots" content="noindex,nofollow" />
    <title>FlexileDash Bootstrap Dashboard - by Wrappixel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/flexy-bootstrap-admin-template/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16"
        href="https://demos.wrappixel.com/premium-admin-templates/bootstrap/flexy-bootstrap/package/assets/images/favicon.png" />
</head>

<body style="margin: 0px; background: #f8f8f8">
    <div width="100%"
        style="
        background: #f8f8f8;
        padding: 0px 0px;
        font-family: arial;
        line-height: 28px;
        height: 100%;
        width: 100%;
        color: #514d6a;
      ">
        <div
            style="
          max-width: 700px;
          padding: 50px 0;
          margin: 0px auto;
          font-size: 14px;
        ">
            <table border="0" cellpadding="0" cellspacing="0" style="width: 100%; margin-bottom: 20px">
                <tbody>
                    <tr>
                        <td style="vertical-align: top; padding-bottom: 30px" align="center">
                            <a href="{{ url('/') }}" target="_blank"><img
                                    src="{{ asset('dist/icon/preload.png') }}" alt="Logo Gana"
                                    style="border: none; max-width:60px" /><br />
                                <img src="{{ asset('dist/icon/preload.png') }}" alt="Logo Gana"
                                    style="border: none; max-height:40px" /></a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div style="padding: 40px; background: #fff">
                <table border="0" cellpadding="0" cellspacing="0" style="width: 100%">
                    <tbody>
                        <tr>
                            <td>
                                <b>Hai!</b>
                                <p>
                                    Kami telah menerima permintaan reset kata sandi untuk akun kamu.
                                    Jika kamu tidak meminta reset kata sandi, kamu dapat mengabaikan email ini. Namun,
                                    jika kamu merasa ada aktivitas mencurigakan pada akun kamu, silakan hubungi kami
                                    segera.
                                    Silakan klik tautan di bawah ini untuk mengatur kata sandi baru:
                                </p>
                                <center>
                                    <a href="{{ route('password.reset', ['token' => $token]) }}"
                                        style="display: inline-block; padding: 11px 30px; margin: 20px 0px 30px; font-size: 15px; color: #fff; background: #157cca; border-radius: 60px; text-decoration: none;">
                                        Reset kata sandi
                                    </a>
                                </center>
                                <p>
                                    Jika kamu tidak dapat menekan tombol diatas, kamu dapat
                                    menggunakan tautan berikut : {{ route('password.reset', ['token' => $token]) }}
                                </p>
                                <b>- Terima Kasih (Gana)</b>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div
                style="
            text-align: center;
            font-size: 12px;
            color: #b2b2b5;
            margin-top: 20px;
          ">
                <p>
                    dikirim oleh Gana Developer
                    <br />
                </p>
            </div>
        </div>
    </div>
</body>

</html>
