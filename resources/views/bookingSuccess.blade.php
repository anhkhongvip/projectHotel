@extends('layouts.frontend')
@section('content')
<body
    style="
      margin: 0;
      padding-top: 0;
      padding-right: 0;
      padding-bottom: 0;
      padding-left: 0;
      min-width: 100%;
      background: url(./images/pattern.jpg);
    "
>
<!--[if (gte mso 9)|(IE)]>
<style type="text/css">
body {
    background-color: #f6f9fc !important;
}
body,
table,
td,
p,
a {
    font-family: sans-serif, Arial, Helvetica !important;
}
</style>
<![endif]-->

<div class="section big-55-height over-hide z-bigger">

    <div class="parallax parallax-top" style="background-image: url('img/gallery/10.jpg')"></div>
    <div class="dark-over-pages"></div>

    <div class="hero-center-section pages">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 parallax-fade-top">
                    <div class="hero-text">Booking</div>
                </div>
            </div>
        </div>
    </div>
</div>

<center style="width: 100%; table-layout: fixed; padding-bottom: 40px">
    <div>
        <!-- Preheader (remove comment) -->
        <div
            style="
            font-size: 0px;
            color: #fafdfe;
            line-height: 1px;
            mso-line-height-rule: exactly;
            display: none;
            max-width: 0px;
            max-height: 0px;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
          "
        >
            <!-- Add Preheader Text Here (85-100 characters in length) -->
        </div>
        <!-- End Preheader (remove comment) -->

        {{--        <!--[if (gte mso 9)|(IE)]>--}}
        {{--        <table width="680" align="center" style="border-spacing:0;color:#3d3d3d;" role="presentation">--}}
        {{--        <tr>--}}
        {{--            <td style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;">--}}
        {{--        <![endif]-->--}}

        <table
            cellpadding="0"
            cellspacing="0"
            role="presentation"
            align="center"
            style="
            border-spacing: 0;
            color: #3d3d3d;
            font-family: 'Roboto', sans-serif, Arial, Helvetica;
            background-color: #ffffff;
            margin: 0;
            padding-top: 0;
            padding-right: 0;
            padding-bottom: 0;
            padding-left: 0;
            width: 100%;
            max-width: 680px;
          "
            background="#ffffff"
            role="presentation"
        >
        {{--            <!-- START LOGO -->--}}
        {{--            <tr>--}}
        {{--                <td--}}
        {{--                    style="--}}
        {{--                padding-top: 0;--}}
        {{--                padding-right: 0;--}}
        {{--                padding-bottom: 0;--}}
        {{--                padding-left: 0;--}}
        {{--              "--}}
        {{--                >--}}
        {{--                    <table--}}
        {{--                        width="100%"--}}
        {{--                        style="border-spacing: 0"--}}
        {{--                        cellpadding="0"--}}
        {{--                        cellspacing="0"--}}
        {{--                        role="presentation"--}}
        {{--                    >--}}
        {{--                        <tr>--}}
        {{--                            <td--}}
        {{--                                style="--}}
        {{--                      padding-top: 60px;--}}
        {{--                      padding-bottom: 10px;--}}
        {{--                      width: 100%;--}}
        {{--                      width: 680px;--}}
        {{--                      text-align: center;--}}
        {{--                    "--}}
        {{--                            >--}}
        {{--                                <a href="#" target="_blank">--}}
        {{--                                    <img--}}
        {{--                                        src="{{asset('img/logo1.png')}}"--}}
        {{--                                        alt="Udos - Thank you Emailer"--}}
        {{--                                        width="94"--}}
        {{--                                        style="border-width: 0"--}}
        {{--                                        border="0"--}}
        {{--                                    />--}}
        {{--                                </a>--}}
        {{--                            </td>--}}
        {{--                        </tr>--}}
        {{--                    </table>--}}
        {{--                </td>--}}
        {{--            </tr>--}}
        {{--            <!-- END LOGO -->--}}

        <!-- START BANNER -->
            <tr>
                <td
                    class="banner"
                    width="680"
                    style="background-position: center top; padding: 0 25px"
                >
                    <table
                        class="darkmode-transparent"
                        cellpadding="0"
                        cellspacing="0"
                        role="presentation"
                    >
                        <tr>
                            <td
                                width="680"
                                align="center"
                                valign="top"
                                style="padding-top: 25px; text-align: center"
                            >

                                <p
                                    style="
                        padding: 35px 24px 2px;
                        text-align: left;
                        font-size: 35px;
                        font-weight: 300;
                        text-align: center;
                      ">
                                    Thank you <br />
                                    Your order successfully
                                    been placed
                                </p>
                                <table
                                    cellpadding="0"
                                    cellspacing="0"
                                    role="presentation"
                                    style="display: inline-block; max-width: 457px"
                                >
                                    <tbody>
                                    <tr>
                                        <td>
                                            <img
                                                src="img/email.png"
                                                style="width: 100%"
                                                alt=""
                                            />
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <br>
                                <a href="https://accounts.google.com/signin/v2/identifier?service=accountsettings&continue=https%3A%2F%2Fmyaccount.google.com%2F%3Futm_source%3Dsign_in_no_continue&ec=GAlAwAE&flowName=GlifWebSignIn&flowEntry=AddSession"
                                    style="
                        padding: 35px 24px 2px;
                        text-align: left;
                        font-size: 20px;
                        font-weight: 300;
                        text-align: center;
                      ">
                                    Check your email for more information
                                </a>
                                {{--                                <p--}}
                                {{--                                    style="--}}
                                {{--                        font-size: 18px;--}}
                                {{--                        font-weight: 100;--}}
                                {{--                        line-height: 1.75;--}}
                                {{--                        padding: 17px 60px 32px;--}}
                                {{--                      "--}}
                                {{--                                >--}}
                                {{--                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.--}}
                                {{--                                    <br />--}}
                                {{--                                    Donec sollicitudin elementum augue, eget pellentesque--}}
                                {{--                                    <br />--}}
                                {{--                                    elit ultrices vel. Prasent arcu turpis,.--}}
                                {{--                                </p>--}}

                                {{--                                <a--}}
                                {{--                                    style="--}}
                                {{--                        background-color: #ff6012;--}}
                                {{--                        border: none;--}}
                                {{--                        border-radius: 40px;--}}
                                {{--                        color: #fff;--}}
                                {{--                        font-size: 20px;--}}
                                {{--                        font-weight: 600;--}}
                                {{--                        padding: 14px 33px;--}}
                                {{--                        text-decoration: none;--}}
                                {{--                      "--}}
                                {{--                                    href="#"--}}
                                {{--                                    target="_blank"--}}
                                {{--                                >--}}
                                {{--                                    View Order Status--}}
                                {{--                                </a>--}}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <!-- END BANNER -->

            {{--            <tr>--}}
            {{--                <td--}}
            {{--                    style="--}}
            {{--                overflow-wrap: break-word;--}}
            {{--                word-break: break-word;--}}
            {{--                padding: 74px 33px 16px;--}}
            {{--                font-family: 'Roboto', sans-serif;--}}
            {{--                font-size: 20px;--}}
            {{--                font-weight: 600;--}}
            {{--              "--}}
            {{--                    align="right"--}}
            {{--                >--}}
            {{--                    Order #98945944--}}
            {{--                </td>--}}
            {{--            </tr>--}}

{{--            <tr>--}}
{{--                <td>--}}
{{--                    <table--}}
{{--                        style="font-family: 'Roboto', sans-serif; padding: 0px 25px 0"--}}
{{--                        role="presentation"--}}
{{--                        cellpadding="0"--}}
{{--                        cellspacing="0"--}}
{{--                        width="100%"--}}
{{--                        border="0"--}}
{{--                    >--}}
{{--                        <tbody>--}}
{{--                        <tr>--}}
{{--                            <td--}}
{{--                                style="--}}
{{--                        background-color: #fff;--}}
{{--                        overflow-wrap: break-word;--}}
{{--                        word-break: break-word;--}}
{{--                        padding: 0px 5px 29px;--}}
{{--                        font-family: 'Roboto', sans-serif;--}}
{{--                        text-align: left;--}}
{{--                      "--}}
{{--                                align="left"--}}
{{--                            >--}}
{{--                                <table--}}
{{--                                    style="--}}
{{--                          border: 1px solid #e3e3e7;--}}
{{--                          border-radius: 10px;--}}
{{--                          padding: 20px 22px 18px;--}}
{{--                          width: 100%;--}}
{{--                          vertical-align: top;--}}
{{--                        "--}}
{{--                                    cellpadding="0"--}}
{{--                                    cellspacing="0"--}}
{{--                                    role="presentation"--}}
{{--                                    align="top"--}}
{{--                                >--}}
{{--                                    <tbody>--}}
{{--                                    <tr>--}}
{{--                                        <td style="vertical-align: top">--}}
{{--                                            <table--}}
{{--                                                style="--}}
{{--                                  width: 176px;--}}
{{--                                  display: inline-block;--}}
{{--                                  vertical-align: top;--}}
{{--                                "--}}
{{--                                                cellpadding="0"--}}
{{--                                                cellspacing="0"--}}
{{--                                                role="presentation"--}}
{{--                                            >--}}
{{--                                                <tbody>--}}
{{--                                                <tr style="">--}}
{{--                                                    <td>--}}
{{--                                                        <img--}}
{{--                                                            src="{{asset($details['room_image'])}}"--}}
{{--                                                            alt=""--}}
{{--                                                        />--}}
{{--                                                    </td>--}}
{{--                                                </tr>--}}
{{--                                                </tbody>--}}
{{--                                            </table>--}}

{{--                                            <table--}}
{{--                                                style="--}}
{{--                                  vertical-align: top;--}}
{{--                                  display: inline-block;--}}
{{--                                "--}}
{{--                                                cellpadding="0"--}}
{{--                                                cellspacing="0"--}}
{{--                                                role="presentation"--}}
{{--                                            >--}}
{{--                                                <tbody>--}}
{{--                                                <tr>--}}
{{--                                                    <td--}}
{{--                                                        style="--}}
{{--                                        padding-top: 10px;--}}
{{--                                        padding-bottom: 10px;--}}
{{--                                        padding-right: 27px;--}}
{{--                                        vertical-align: top;--}}
{{--                                      "--}}
{{--                                                    >--}}
{{--                                                        <p--}}
{{--                                                            style="--}}
{{--                                          font-weight: 600;--}}
{{--                                          font-size: 16px;--}}
{{--                                        "--}}
{{--                                                        >--}}
{{--                                                            {{ $details['room_name'] }}--}}
{{--                                                        </p>--}}
{{--                                                        <p--}}
{{--                                                            style="--}}
{{--                                          margin-top: 13px;--}}
{{--                                          font-weight: 100;--}}
{{--                                          font-size: 14px;--}}
{{--                                          padding-left: 1px;--}}
{{--                                          line-height: 1.4;--}}
{{--                                        "--}}
{{--                                                        >--}}
{{--                                                            {{$details['excerpt']}}--}}
{{--                                                        </p>--}}
{{--                                                    </td>--}}
{{--                                                </tr>--}}
{{--                                                </tbody>--}}
{{--                                            </table>--}}

{{--                                            <table--}}
{{--                                                style="--}}
{{--                                  width: 45px;--}}
{{--                                  vertical-align: top;--}}
{{--                                  display: inline-block;--}}
{{--                                  float: right;--}}
{{--                                "--}}
{{--                                                cellpadding="0"--}}
{{--                                                cellspacing="0"--}}
{{--                                                role="presentation"--}}
{{--                                            >--}}
{{--                                                <tbody>--}}
{{--                                                <tr>--}}
{{--                                                    <td--}}
{{--                                                        style="--}}
{{--                                        text-align: right;--}}
{{--                                        padding-top: 12px;--}}
{{--                                        vertical-align: top;--}}
{{--                                      "--}}
{{--                                                    >--}}
{{--                                                        <p style="font-weight: 600">${{$details['price']}}</p>--}}
{{--                                                    </td>--}}
{{--                                                </tr>--}}
{{--                                                </tbody>--}}
{{--                                            </table>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    </tbody>--}}
{{--                                </table>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </td>--}}
{{--            </tr>--}}

            {{--            <tr>--}}
            {{--                <td>--}}
            {{--                    <table--}}
            {{--                        style="font-family: 'Roboto', sans-serif; padding: 0px 25px 0"--}}
            {{--                        role="presentation"--}}
            {{--                        cellpadding="0"--}}
            {{--                        cellspacing="0"--}}
            {{--                        width="100%"--}}
            {{--                        border="0"--}}
            {{--                    >--}}
            {{--                        <tbody>--}}
            {{--                        <tr>--}}
            {{--                            <td--}}
            {{--                                style="--}}
            {{--                        background-color: #fff;--}}
            {{--                        overflow-wrap: break-word;--}}
            {{--                        word-break: break-word;--}}
            {{--                        padding: 0px 5px 35px;--}}
            {{--                        font-family: 'Roboto', sans-serif;--}}
            {{--                        text-align: left;--}}
            {{--                      "--}}
            {{--                                align="left"--}}
            {{--                            >--}}
            {{--                                <table--}}
            {{--                                    style="--}}
            {{--                          border: 1px solid #e3e3e7;--}}
            {{--                          border-radius: 10px;--}}
            {{--                          padding: 20px 22px 18px;--}}
            {{--                          width: 100%;--}}
            {{--                          vertical-align: top;--}}
            {{--                        "--}}
            {{--                                    cellpadding="0"--}}
            {{--                                    cellspacing="0"--}}
            {{--                                    role="presentation"--}}
            {{--                                    align="top"--}}
            {{--                                >--}}
            {{--                                    <tbody>--}}
            {{--                                    <tr>--}}
            {{--                                        <td style="vertical-align: top">--}}
            {{--                                            <table--}}
            {{--                                                style="--}}
            {{--                                  width: 176px;--}}
            {{--                                  display: inline-block;--}}
            {{--                                  vertical-align: top;--}}
            {{--                                "--}}
            {{--                                                cellpadding="0"--}}
            {{--                                                cellspacing="0"--}}
            {{--                                                role="presentation"--}}
            {{--                                            >--}}
            {{--                                                <tbody>--}}
            {{--                                                <tr style="">--}}
            {{--                                                    <td>--}}
            {{--                                                        <img--}}
            {{--                                                            src="./images/product-2.png"--}}
            {{--                                                            alt=""--}}
            {{--                                                        />--}}
            {{--                                                    </td>--}}
            {{--                                                </tr>--}}
            {{--                                                </tbody>--}}
            {{--                                            </table>--}}

            {{--                                            <table--}}
            {{--                                                style="--}}
            {{--                                  vertical-align: top;--}}
            {{--                                  display: inline-block;--}}

            {{--                                "--}}
            {{--                                                cellpadding="0"--}}
            {{--                                                cellspacing="0"--}}
            {{--                                                role="presentation"--}}
            {{--                                            >--}}
            {{--                                                <tbody>--}}
            {{--                                                <tr>--}}
            {{--                                                    <td--}}
            {{--                                                        style="--}}
            {{--                                        padding-top: 10px;--}}
            {{--                                        padding-bottom: 10px;--}}
            {{--                                        padding-right: 27px;--}}
            {{--                                        vertical-align: top;--}}
            {{--                                      "--}}
            {{--                                                    >--}}
            {{--                                                        <p--}}
            {{--                                                            style="--}}
            {{--                                          font-weight: 600;--}}
            {{--                                          font-size: 16px;--}}
            {{--                                        "--}}
            {{--                                                        >--}}
            {{--                                                            Watch--}}
            {{--                                                        </p>--}}
            {{--                                                        <p--}}
            {{--                                                            style="--}}
            {{--                                          margin-top: 13px;--}}
            {{--                                          font-weight: 100;--}}
            {{--                                          font-size: 14px;--}}
            {{--                                          padding-left: 1px;--}}
            {{--                                          line-height: 1.4;--}}
            {{--                                        "--}}
            {{--                                                        >--}}
            {{--                                                            consectetur adipiscing elit.--}}
            {{--                                                            <br />--}}
            {{--                                                            Donec sollicitudin <br />--}}
            {{--                                                            elementum augue, eget--}}
            {{--                                                        </p>--}}
            {{--                                                    </td>--}}
            {{--                                                </tr>--}}
            {{--                                                </tbody>--}}
            {{--                                            </table>--}}

            {{--                                            <table--}}
            {{--                                                style="--}}
            {{--                                  width: 45px;--}}
            {{--                                  vertical-align: top;--}}
            {{--                                  display: inline-block;--}}
            {{--                                  float: right;--}}
            {{--                                "--}}
            {{--                                                cellpadding="0"--}}
            {{--                                                cellspacing="0"--}}
            {{--                                                role="presentation"--}}
            {{--                                            >--}}
            {{--                                                <tbody>--}}
            {{--                                                <tr>--}}
            {{--                                                    <td--}}
            {{--                                                        style="--}}
            {{--                                        text-align: right;--}}
            {{--                                        padding-top: 12px;--}}
            {{--                                        vertical-align: top;--}}
            {{--                                      "--}}
            {{--                                                    >--}}
            {{--                                                        <p style="font-weight: 600">$49</p>--}}
            {{--                                                    </td>--}}
            {{--                                                </tr>--}}
            {{--                                                </tbody>--}}
            {{--                                            </table>--}}
            {{--                                        </td>--}}
            {{--                                    </tr>--}}
            {{--                                    </tbody>--}}
            {{--                                </table>--}}
            {{--                            </td>--}}
            {{--                        </tr>--}}
            {{--                        </tbody>--}}
            {{--                    </table>--}}
            {{--                </td>--}}
            {{--            </tr>--}}

{{--            <tr>--}}
{{--                <td>--}}
{{--                    <table--}}
{{--                        style="--}}
{{--                  font-family: 'Roboto', sans-serif;--}}
{{--                  background-color: #fff; padding: 0px 25px 0;--}}
{{--                "--}}
{{--                        role="presentation"--}}
{{--                        cellpadding="0"--}}
{{--                        cellspacing="0"--}}
{{--                        width="100%"--}}
{{--                        border="0"--}}
{{--                    >--}}
{{--                        <tbody>--}}
{{--                        <tr>--}}
{{--                            <td--}}
{{--                                style="--}}
{{--                        overflow-wrap: break-word;--}}
{{--                        word-break: break-word;--}}
{{--                        padding: 22px 5px 13px;--}}
{{--                        font-family: 'Roboto', sans-serif;--}}
{{--                        font-size: 20px;--}}
{{--                        font-weight: 600;--}}
{{--                        text-align: left;--}}
{{--                      "--}}
{{--                                align="left"--}}
{{--                            >--}}
{{--                                Order Summary--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td--}}
{{--                                style="--}}
{{--                        overflow-wrap: break-word;--}}
{{--                        word-break: break-word;--}}
{{--                        padding: 0px 4px 16px;--}}
{{--                        font-family: 'Roboto', sans-serif;--}}
{{--                        text-align: left;--}}
{{--                      "--}}
{{--                            >--}}
{{--                                <table--}}
{{--                                    style="width: 100%"--}}
{{--                                    cellpadding="0"--}}
{{--                                    cellspacing="0"--}}
{{--                                    role="presentation"--}}
{{--                                >--}}
{{--                                    <tbody>--}}
{{--                                    <tr>--}}
{{--                                        <td--}}
{{--                                            style="--}}
{{--                                width: 50%;--}}
{{--                                border-bottom: 1px solid #e3e3e7;--}}
{{--                                padding: 10px 0 10px;--}}
{{--                              "--}}
{{--                                        >--}}
{{--                                            Check-in Date--}}
{{--                                        </td>--}}
{{--                                        <td--}}
{{--                                            style="--}}
{{--                                width: 50%;--}}
{{--                                text-align: right;--}}
{{--                                border-bottom: 1px solid #e3e3e7;--}}
{{--                                padding: 10px 0 10px;--}}
{{--                              "--}}
{{--                                        >--}}
{{--                                            {{$details['check_in_date']}}--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td--}}
{{--                                            style="--}}
{{--                                width: 50%;--}}
{{--                                border-bottom: 1px solid #e3e3e7;--}}
{{--                                padding: 10px 0 10px;--}}
{{--                              "--}}
{{--                                        >--}}
{{--                                            Check-out Date--}}
{{--                                        </td>--}}
{{--                                        <td--}}
{{--                                            style="--}}
{{--                                width: 50%;--}}
{{--                                text-align: right;--}}
{{--                                border-bottom: 1px solid #e3e3e7;--}}
{{--                                padding: 10px 0 10px;--}}
{{--                              "--}}
{{--                                        >--}}
{{--                                            {{$details['check_out_date']}}--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td--}}
{{--                                            style="--}}
{{--                                width: 50%;--}}
{{--                                border-bottom: 1px solid #e3e3e7;--}}
{{--                                padding: 20px 0 10px;--}}
{{--                              "--}}
{{--                                        >--}}
{{--                                            Room's Price--}}
{{--                                        </td>--}}
{{--                                        <td--}}
{{--                                            style="--}}
{{--                                width: 50%;--}}
{{--                                text-align: right;--}}
{{--                                border-bottom: 1px solid #e3e3e7;--}}
{{--                                padding: 20px 0 10px;--}}
{{--                              "--}}
{{--                                        >--}}
{{--                                            ${{$details['price']}}--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
                                    {{--                                    <tr>--}}
                                    {{--                                        <td--}}
                                    {{--                                            style="--}}
                                    {{--                                width: 50%;--}}
                                    {{--                                border-bottom: 1px solid #e3e3e7;--}}
                                    {{--                                padding: 20px 0 10px;--}}
                                    {{--                              "--}}
                                    {{--                                        >--}}
                                    {{--                                            Shipping--}}
                                    {{--                                        </td>--}}
                                    {{--                                        <td--}}
                                    {{--                                            style="--}}
                                    {{--                                width: 50%;--}}
                                    {{--                                text-align: right;--}}
                                    {{--                                border-bottom: 1px solid #e3e3e7;--}}
                                    {{--                                padding: 20px 0 10px;--}}
                                    {{--                              "--}}
                                    {{--                                        >--}}
                                    {{--                                            $0--}}
                                    {{--                                        </td>--}}
                                    {{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td style="width: 50%; padding: 20px 0 10px"></td>--}}
{{--                                        <td--}}
{{--                                            style="--}}
{{--                                width: 50%;--}}
{{--                                text-align: right;--}}
{{--                                padding: 19px 0 10px;--}}
{{--                                font-weight: bold;--}}
{{--                              "--}}
{{--                                        >--}}
{{--                                            Total ${{$details['total']}}--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                    </tbody>--}}
{{--                                </table>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </td>--}}
            </tr>

            {{--            <tr>--}}
            {{--                <td>--}}
            {{--                    <table--}}
            {{--                        style="--}}
            {{--                  font-family: 'Roboto', sans-serif;--}}
            {{--                  background-color: #fff;--}}
            {{--                "--}}
            {{--                        role="presentation"--}}
            {{--                        cellpadding="0"--}}
            {{--                        cellspacing="0"--}}
            {{--                        width="100%"--}}
            {{--                        border="0"--}}
            {{--                    >--}}
            {{--                        <tbody>--}}
            {{--                        <tr>--}}
            {{--                            <td--}}
            {{--                                style="--}}
            {{--                        overflow-wrap: break-word;--}}
            {{--                        word-break: break-word;--}}
            {{--                        padding: 36px 0px 64px;--}}
            {{--                        font-family: 'Roboto', sans-serif;--}}
            {{--                        font-size: 20px;--}}
            {{--                        font-weight: 600;--}}
            {{--                        text-align: left;--}}
            {{--                      "--}}
            {{--                                align="left"--}}
            {{--                            >--}}
            {{--                                <center>--}}
            {{--                                    <table--}}
            {{--                                        style="--}}
            {{--                            overflow-wrap: break-word;--}}
            {{--                            background-color: #f7f7f7;--}}
            {{--                            border-radius: 10px;--}}
            {{--                            word-break: break-word;--}}
            {{--                            padding: 30px 30px 15px;--}}
            {{--                            font-family: 'Roboto', sans-serif;--}}
            {{--                            text-align: center;--}}
            {{--                            width: 340px;--}}
            {{--                            margin: auto;--}}
            {{--                          "--}}
            {{--                                        cellpadding="0"--}}
            {{--                                        cellspacing="0"--}}
            {{--                                        role="presentation"--}}
            {{--                                    >--}}
            {{--                                        <tbody>--}}
            {{--                                        <tr>--}}
            {{--                                            <td>--}}
            {{--                                                <p--}}
            {{--                                                    style="--}}
            {{--                                    overflow-wrap: break-word;--}}
            {{--                                    font-family: 'Roboto', sans-serif;--}}
            {{--                                    font-size: 20px;--}}
            {{--                                    font-weight: 600;--}}
            {{--                                    text-align: center;--}}
            {{--                                  "--}}
            {{--                                                >--}}
            {{--                                                    Your Order is Being Shipped--}}
            {{--                                                </p>--}}

            {{--                                                <p--}}
            {{--                                                    style="--}}
            {{--                                    overflow-wrap: break-word;--}}
            {{--                                    word-break: break-word;--}}
            {{--                                    padding: 15px 40px 13px;--}}
            {{--                                    font-family: 'Roboto', sans-serif;--}}
            {{--                                    font-size: 14px;--}}
            {{--                                    font-weight: 100;--}}
            {{--                                    text-align: center;--}}
            {{--                                    line-height: 1.4;--}}
            {{--                                  "--}}
            {{--                                                >--}}
            {{--                                                    1234, 7th Street Name, Red Light Tower, New--}}
            {{--                                                    Your, NY--}}
            {{--                                                </p>--}}
            {{--                                            </td>--}}
            {{--                                        </tr>--}}
            {{--                                        </tbody>--}}
            {{--                                    </table>--}}
            {{--                                </center>--}}
            {{--                            </td>--}}
            {{--                        </tr>--}}
            {{--                        </tbody>--}}
            {{--                    </table>--}}
            {{--                </td>--}}
            {{--            </tr>--}}

            {{--            <tr>--}}
            {{--                <td>--}}
            {{--                    <table--}}
            {{--                        style="--}}
            {{--                  font-family: 'Roboto', sans-serif;--}}
            {{--                  background-color: #fff;--}}
            {{--                "--}}
            {{--                        role="presentation"--}}
            {{--                        cellpadding="0"--}}
            {{--                        cellspacing="0"--}}
            {{--                        width="100%"--}}
            {{--                        border="0"--}}
            {{--                    >--}}
            {{--                        <tbody>--}}
            {{--                        <tr>--}}
            {{--                            <td style="padding: 0 65px">--}}
            {{--                                <table--}}
            {{--                                    cellpadding="0"--}}
            {{--                                    cellspacing="0"--}}
            {{--                                    role="presentation"--}}
            {{--                                >--}}
            {{--                                    <tbody>--}}
            {{--                                    <tr>--}}
            {{--                                        <td style="width: 33.33%; padding-top: 41px">--}}
            {{--                                            <div style="border-top: 1px solid #e3e3e7"></div>--}}
            {{--                                        </td>--}}
            {{--                                        <td--}}
            {{--                                            style="--}}
            {{--                                width: 33.33%;--}}
            {{--                                overflow-wrap: break-word;--}}
            {{--                                word-break: break-word;--}}
            {{--                                padding: 27px 0px 33px;--}}
            {{--                                font-family: 'Roboto', sans-serif;--}}
            {{--                                font-size: 20px;--}}
            {{--                                font-weight: 600;--}}
            {{--                                text-align: center;--}}
            {{--                              "--}}
            {{--                                            align="left"--}}
            {{--                                        >--}}
            {{--                                            You might like these--}}
            {{--                                        </td>--}}
            {{--                                        <td style="width: 33.33%; padding-top: 41px">--}}
            {{--                                            <div style="border-top: 1px solid #e3e3e7"></div>--}}
            {{--                                        </td>--}}
            {{--                                    </tr>--}}
            {{--                                    </tbody>--}}
            {{--                                </table>--}}
            {{--                            </td>--}}
            {{--                        </tr>--}}

            {{--                        <tr>--}}
            {{--                            <td style="padding: 0 20px">--}}
            {{--                                <table--}}
            {{--                                    style="width: 100%"--}}
            {{--                                    cellpadding="0"--}}
            {{--                                    cellspacing="0"--}}
            {{--                                    role="presentation"--}}
            {{--                                >--}}
            {{--                                    <tbody>--}}
            {{--                                    <tr>--}}
            {{--                                        <td style="text-align: center">--}}
            {{--                                            <table--}}
            {{--                                                style="display: inline-block; padding: 5px 9px"--}}
            {{--                                                cellpadding="0"--}}
            {{--                                                cellspacing="0"--}}
            {{--                                                role="presentation"--}}
            {{--                                            >--}}
            {{--                                                <tbody>--}}
            {{--                                                <tr>--}}
            {{--                                                    <td--}}
            {{--                                                        style="width: 33.33%; text-align: center"--}}
            {{--                                                    >--}}
            {{--                                                        <img--}}
            {{--                                                            src="./images/suggestion-1.png"--}}
            {{--                                                            alt=""--}}
            {{--                                                        />--}}
            {{--                                                    </td>--}}
            {{--                                                </tr>--}}
            {{--                                                </tbody>--}}
            {{--                                            </table>--}}

            {{--                                            <table--}}
            {{--                                                style="display: inline-block; padding: 5px 9px"--}}
            {{--                                                cellpadding="0"--}}
            {{--                                                cellspacing="0"--}}
            {{--                                                role="presentation"--}}
            {{--                                            >--}}
            {{--                                                <tbody>--}}
            {{--                                                <tr>--}}
            {{--                                                    <td--}}
            {{--                                                        style="width: 33.33%; text-align: center"--}}
            {{--                                                    >--}}
            {{--                                                        <img--}}
            {{--                                                            src="./images/suggestion-2.png"--}}
            {{--                                                            alt=""--}}
            {{--                                                        />--}}
            {{--                                                    </td>--}}
            {{--                                                </tr>--}}
            {{--                                                </tbody>--}}
            {{--                                            </table>--}}

            {{--                                            <table--}}
            {{--                                                style="display: inline-block; padding: 5px 9px"--}}
            {{--                                                cellpadding="0"--}}
            {{--                                                cellspacing="0"--}}
            {{--                                                role="presentation"--}}
            {{--                                            >--}}
            {{--                                                <tbody>--}}
            {{--                                                <tr>--}}
            {{--                                                    <td--}}
            {{--                                                        style="width: 33.33%; text-align: center"--}}
            {{--                                                    >--}}
            {{--                                                        <img--}}
            {{--                                                            src="./images/suggestion-3.png"--}}
            {{--                                                            alt=""--}}
            {{--                                                        />--}}
            {{--                                                    </td>--}}
            {{--                                                </tr>--}}
            {{--                                                </tbody>--}}
            {{--                                            </table>--}}
            {{--                                        </td>--}}
            {{--                                    </tr>--}}
            {{--                                    </tbody>--}}
            {{--                                </table>--}}
            {{--                            </td>--}}
            {{--                        </tr>--}}

            {{--                        <tr>--}}
            {{--                            <td style="padding: 35px 0px 10px">--}}
            {{--                                <center>--}}
            {{--                                    <table--}}
            {{--                                        style="display: inline-block; width: 290px"--}}
            {{--                                        cellpadding="0"--}}
            {{--                                        cellspacing="0"--}}
            {{--                                        role="presentation"--}}
            {{--                                    >--}}
            {{--                                        <tbody>--}}
            {{--                                        <tr>--}}
            {{--                                            <td>--}}
            {{--                                                <p--}}
            {{--                                                    style="--}}
            {{--                                    overflow-wrap: break-word;--}}
            {{--                                    word-break: break-word;--}}
            {{--                                    padding: 15px 11px 5px;--}}
            {{--                                    font-family: 'Roboto', sans-serif;--}}
            {{--                                    font-size: 16px;--}}
            {{--                                    font-weight: 600;--}}
            {{--                                    text-align: center;--}}
            {{--                                    line-height: 1.4;--}}
            {{--                                  "--}}
            {{--                                                >--}}
            {{--                                                    Do you have question about order ?--}}
            {{--                                                </p>--}}
            {{--                                                <p--}}
            {{--                                                    style="--}}
            {{--                                    overflow-wrap: break-word;--}}
            {{--                                    word-break: break-word;--}}
            {{--                                    padding: 6px 11px 13px;--}}
            {{--                                    font-family: 'Roboto', sans-serif;--}}
            {{--                                    font-size: 14px;--}}
            {{--                                    font-weight: 100;--}}
            {{--                                    text-align: center;--}}
            {{--                                    line-height: 1.45;--}}
            {{--                                    color: #66667e;--}}
            {{--                                  "--}}
            {{--                                                >--}}
            {{--                                                    Call our customer care number 1234567766--}}
            {{--                                                    <br />--}}
            {{--                                                    <span style="font-size: 13px">--}}
            {{--                                    Monday - Friday 8:00 AM to 9:00 PM or <br />--}}
            {{--                                  </span>--}}
            {{--                                                    email us udos@yourwebsite.com--}}
            {{--                                                </p>--}}
            {{--                                            </td>--}}
            {{--                                        </tr>--}}
            {{--                                        </tbody>--}}
            {{--                                    </table>--}}
            {{--                                </center>--}}
            {{--                            </td>--}}
            {{--                        </tr>--}}
            {{--                        </tbody>--}}
            {{--                    </table>--}}
            {{--                </td>--}}
            {{--            </tr>--}}

            {{--            <tr>--}}
            {{--                <td>--}}
            {{--                    <!-- ------------  Footer - START------- -->--}}

            {{--                    <table--}}
            {{--                        style="--}}
            {{--                  font-family: 'Roboto', sans-serif;--}}
            {{--                  background-color: #fff;--}}
            {{--                  text-align: center;--}}
            {{--                "--}}
            {{--                        role="presentation"--}}
            {{--                        cellpadding="0"--}}
            {{--                        cellspacing="0"--}}
            {{--                        width="100%"--}}
            {{--                        border="0"--}}
            {{--                    >--}}
            {{--                        <tbody>--}}
            {{--                        <tr>--}}
            {{--                            <td style="padding: 0">--}}
            {{--                                <table--}}
            {{--                                    role="presentation"--}}
            {{--                                    cellpadding="0"--}}
            {{--                                    cellspacing="0"--}}
            {{--                                    style="width: 224px; margin: 7px auto 0"--}}
            {{--                                >--}}
            {{--                                    <tbody>--}}
            {{--                                    <tr>--}}
            {{--                                        <td>--}}
            {{--                                            <a href="#" target="_blank">--}}
            {{--                                                <img src="./images/social-fb.png" alt="" />--}}
            {{--                                            </a>--}}
            {{--                                        </td>--}}
            {{--                                        <td>--}}
            {{--                                            <a href="#" target="_blank">--}}
            {{--                                                <img src="./images/social-tw.png" alt="" />--}}
            {{--                                            </a>--}}
            {{--                                        </td>--}}
            {{--                                        <td>--}}
            {{--                                            <a href="#" target="_blank">--}}
            {{--                                                <img src="./images/social-li.png" alt="" />--}}
            {{--                                            </a>--}}
            {{--                                        </td>--}}
            {{--                                        <td>--}}
            {{--                                            <a href="#" target="_blank">--}}
            {{--                                                <img src="./images/social-ig.png" alt="" />--}}
            {{--                                            </a>--}}
            {{--                                        </td>--}}
            {{--                                        <td>--}}
            {{--                                            <a href="#" target="_blank">--}}
            {{--                                                <img src="./images/social-yt.png" alt="" />--}}
            {{--                                            </a>--}}
            {{--                                        </td>--}}
            {{--                                    </tr>--}}
            {{--                                    </tbody>--}}
            {{--                                </table>--}}
            {{--                                <p--}}
            {{--                                    style="--}}
            {{--                          padding-top: 29px;--}}
            {{--                          font-size: 12px;--}}
            {{--                          line-height: 19px;--}}
            {{--                          color: #66667e;--}}
            {{--                          font-weight: 300;--}}
            {{--                        "--}}
            {{--                                >--}}
            {{--                                    &copy; 2021 Udos. All rights reserved. <br />--}}
            {{--                                    7th Street Name, RedLight Tower, New York, NY--}}
            {{--                                </p>--}}
            {{--                                <table--}}
            {{--                                    role="presentation"--}}
            {{--                                    cellpadding="0"--}}
            {{--                                    cellspacing="0"--}}
            {{--                                    style="--}}
            {{--                          width: 80%;--}}
            {{--                          text-align: center;--}}
            {{--                          padding-top: 20px;--}}
            {{--                          padding-bottom: 40px;--}}
            {{--                          margin: auto;--}}
            {{--                          font-size: 14px;--}}
            {{--                          color: #66667e;--}}
            {{--                          font-weight: 300;--}}
            {{--                        "--}}
            {{--                                >--}}
            {{--                                    <tbody>--}}
            {{--                                    <tr>--}}
            {{--                                        <td>--}}
            {{--                                            <a href="#" style="color: #66667e">Unsubscribe</a>--}}
            {{--                                        </td>--}}
            {{--                                        <td>--}}
            {{--                                            <a href="#" style="color: #66667e">Contact Us</a>--}}
            {{--                                        </td>--}}
            {{--                                        <td>--}}
            {{--                                            <a href="#" style="color: #66667e"--}}
            {{--                                            >View in Browser</a--}}
            {{--                                            >--}}
            {{--                                        </td>--}}
            {{--                                    </tr>--}}
            {{--                                    </tbody>--}}
            {{--                                </table>--}}
            {{--                            </td>--}}
            {{--                        </tr>--}}
            {{--                        </tbody>--}}
            {{--                    </table>--}}
            {{--                </td>--}}
            {{--            </tr>--}}
        </table>

        {{--        <!--[if (gte mso 9)|(IE)]>--}}
        {{--        </td>--}}
        {{--        </tr>--}}
        {{--        </table>--}}
        {{--        <![endif]-->--}}
    </div>
</center>
</body>
@endsection


