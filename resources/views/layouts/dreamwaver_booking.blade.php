<!DOCTYPE html>
<html style="font-size: 16px;">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Booking Form</title>
    <link rel="stylesheet" href="./css/dreamwaver_booking1.css" media="screen">
    <link rel="stylesheet" href="./css/dreamwaver_booking.css" media="screen">

    <script class="u-script" type="text/javascript" src="dreamwaver_booking.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.1.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">


    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"url": "index.html"
}</script>
    <meta property="og:title" content="Page 2">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
</head>
<body class="u-body u-overlap u-overlap-transparent"><header class="u-align-left u-clearfix u-header u-header" id="sec-72b5"><div class="u-clearfix u-sheet u-sheet-1"></div></header>
<section class="u-align-center u-clearfix u-image u-section-1" id="sec-79f8">
    <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-grey-90 u-opacity u-opacity-85 u-radius-18 u-shape u-shape-round u-shape-1"></div>
        <h3 class="u-text u-text-custom-color-1 u-text-default u-text-1">Fill up the Booking Details!</h3>
        <div class="u-align-center u-expanded-width-sm u-expanded-width-xs u-form u-form-1">
            <form action="dreamwaver_booking" method="POST" class="u-clearfix u-form-spacing-15 u-form-vertical u-inner-form" style="padding: 15px;" source="custom" name="form">
               @csrf
                <div class="u-form-group u-form-name u-form-group-1">
                    <label for="name-39f5" class="u-label u-text-palette-2-base u-label-1">Enter Name</label>
                    <input type="text" placeholder="Enter your name" id="name-39f5" name="name" class="u-border-1 u-border-white u-input u-input-rectangle u-radius-8 u-text-white" required="">
                </div>
                <div class="u-form-email u-form-group u-form-group-2">
                    <label for="email-075b" class="u-label u-text-palette-2-base u-label-2">Enter Email Address</label>
                    <input type="email" placeholder="Enter a valid email address" id="email-075b" name="email" class="u-border-1 u-border-white u-input u-input-rectangle u-radius-8 u-text-white" required="">
                </div>
                <div class="u-form-group u-form-phone u-form-group-3">
                    <label for="phone-f523" class="u-label u-text-palette-2-base u-label-3">Enter Phone.NO</label>
                    <input type="text" pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})"  placeholder="Enter your phone (e.g. +14155552675)" id="phone-f523" name="phone" class="u-border-1 u-border-white u-input u-input-rectangle u-radius-8 u-text-white" required="">
                </div>
                <div class="u-form-date u-form-group u-form-group-4">
                    <label for="date-2eda" class="u-label u-text-palette-2-base u-label-4">Event Date</label>
                    <input type="date" placeholder="MM/DD/YYYY" id="date-2eda" name="date" class="u-border-1 u-border-white u-input u-input-rectangle u-radius-8 u-text-white" required="">
                </div>
                <div class="u-form-group u-form-group-5">
                    <label for="text-7559" class="u-label u-text-palette-2-base u-label-5">Event Time</label>
                    <input type="text" placeholder="Event time" id="text-7559" name="time" class="u-border-1 u-border-white u-input u-input-rectangle u-radius-8 u-text-white">
                </div>
                <div class="u-align-center u-form-group u-form-submit">
{{--                    <a  class="u-active-white u-border-0 u-btn u-btn-round u-btn-submit u-button-style u-custom-color-2 u-hover-palette-1-light-2 u-radius-19 u-btn-1"   >SUBMIT<br>--}}
{{--                    </a>--}}
{{--                    <input type="submit" value="submit" class="u-form-control-hidden">--}}
                    <button type="submit" class="u-active-white u-border-0 u-btn u-btn-round u-btn-submit u-button-style u-custom-color-2 u-hover-palette-1-light-2 u-radius-19 u-btn-1">Confirm</button>
                </div>
{{--                <div class="u-form-send-message u-form-send-success">Thank you! Your message has been sent.</div>--}}
{{--                <div class="u-form-send-error u-form-send-message">Unable to send your message. Please fix errors then try again.</div>--}}
{{--                <input type="hidden" value="" name="recaptchaResponse">--}}
            </form>
        </div>
{{--        <a href="https://nicepage.com/templates" class="u-border-0 u-btn u-btn-round u-button-style u-hover-palette-4-light-3 u-palette-3-dark-1 u-radius-22 u-btn-2">RESET</a>--}}
    </div>
</section>




</body>
</html>
