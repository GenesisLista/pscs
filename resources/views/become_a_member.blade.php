<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>PSCS - Become a member</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{ asset('web/images/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('web/css/style.css') }}">
    <script src="{{ asset('web/js/jquery.js') }}"></script>
    <script src="{{ asset('web/js/jquery-migrate-1.2.1.js') }}"></script>
    <script src="{{ asset('web/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('web/js/scroll_to_top.js') }}"></script>
    <script src="{{ asset('web/js/script.js') }}"></script>
    <script src="{{ asset('web/js/jquery.equalheights.js') }}"></script>
    <script src="{{ asset('web/js/superfish.js') }}"></script>
    <script src="{{ asset('web/js/jquery.mobilemenu.js') }}"></script>
    <script src="{{ asset('web/js/touchTouch.jquery.js') }}"></script>
    <script src="{{ asset('web/js/jquery.tools.min.js') }}"></script>
    <script src="{{ asset('web/js/tmStickUp.js') }}"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-174150865-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-174150865-1');
    </script>

    <!-- font-awesome font -->
    <link rel="stylesheet" href="{{ asset('web/fonts/font-awesome.css') }}" type="text/css" media="screen">
    <!-- fontello font -->

    <!--[if lt IE 8]>
		 <div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
				<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
			</a>
		</div>
	 <![endif]-->
    <!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
		<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
	 <![endif]-->
</head>

<body>
    <!--button back top-->
    <div id="back-top"><i class="fa fa-arrow-up"></i></div>
    <div class="main">
        <div class="div-content">

            <!--==============================header=================================-->
            <div id="stuck_container">

                <header>
                    <div class="container">
                        <div class="row">
                            <div class="grid_12">
                                <nav>
                                    <ul class="sf-menu header_menu">
                                        <li class="current"><a href="{{ url('/') }}">Home<strong></strong></a></li>
                                        <li><a href="javascript:void(0)"><span></span>About us<strong></strong></a>
                                            <ul class='submenu'>
                                                <li><a href="{{ url('why-join-us') }}">Why join PSCS</a></li>
                                                <li><a href="{{ url('member-directory') }}">Member Directory</a></li>
                                                <li><a href="{{ url('history') }}">History</a></li>
                                                <li><a href="{{ url('board-of-directors') }}">Board of Directors</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0)">Projects<strong></strong></a>
                                            <ul class='submenu'>
                                                <li><a href="https://youtu.be/rPLnqCVVHNo?autoplay=0&rel=0" target="_blank">Cosmetic Garden</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ url('news-and-events') }}">News &amp; events<strong></strong></a></li>
                                    </ul>
                                </nav>

                                <ul class="soc_icons">
                                    <li><a href="https://www.facebook.com/groups/213264668770406/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://www.youtube.com/channel/UCixDzVfrzY7hhyfSFAbrrag/" target="_blank"><i class="fa fa-youtube"></i></a></li>
                                    <li><a href="{{ route('login') }}"><i class="fa fa-sign-in"></i></a></li>
                                </ul>

                                <div class="clear"></div>

                            </div>
                        </div>
                    </div>

                    <div class="box-1 content_box">
                        <div class="container">
                            <div class="row">
                                <div class="grid_12">
                                    <div class="pscs_logo"><img src="{{ asset('web/images/logo1.png') }}" alt="PSCS Home"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </header>
            </div>

            <!--=======content================================-->

            <div class="container">

                <div class="row">
                    <div class="grid_12">
                        <h2 class="v3">Become a member</h2>
                        <div class="row">

                            <div class="grid_12">
                                <p class="history txt6_become_member">Step 1. Fill up our <a
                                        href="http://pscs.org.ph/member_mngt/memberships"
                                        target="_blank" class="link4">membership form</a></p>
                                <p class="txt6_become_member">Step 2. Your membership application will be reviewed by
                                    PSCS Board of Directors.</p>
                                <p class="txt6_become_member">Step 3. Once approved, PSCS Secretariat will email your
                                    statement of account. </p>
                                <p class="txt6_become_member">Step 4. Settle your membership fee via bank deposit to
                                    this account: </p>
                                <p class="txt6_become_member">CHINABANK Checking Account 1162075516 <br> Philippine
                                    Society for Cosmetic Science, Inc.</p>
                                <p class="txt6_become_member">or via GCash - 09178014640 <br> (name will appear as
                                    Angelica C.)</p>
                                <p class="txt6_become_member">Step 5. Email the proof of payment to <a
                                        href="mailto:&#115;&#101;&#99;&#114;&#101;&#116;&#97;&#114;&#105;&#97;&#116;&#46;&#112;&#115;&#99;&#115;&#64;&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;"
                                        class="link4">&#115;&#101;&#99;&#114;&#101;&#116;&#97;&#114;&#105;&#97;&#116;&#46;&#112;&#115;&#99;&#115;&#64;&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;</a>
                                    along with your 2x2 photo.</p>
                                <p class="txt6_become_member">Step 6. You will receive a welcome email from PSCS
                                    Membership Director and will notify you the schedule of member induction.</p>
                            </div>

                        </div>


                    </div>

                </div>

            </div>

            <!--=======footer=================================-->
            <footer>
                <div class="footer_priv">

                    <div class="container">
                        <p class="txt_priv">&copy; {{ date('Y') }} <span class="color2">&bull;</span>
                            <a href="{{ url('/') }}" class="link2">Philippine Society for Cosmetic Science</a></p>

                        <ul class="list_menu_footer">
                            <li class="current"><a href="{{ url('/') }}">Home<strong></strong></a></li>
                            <li><a href="{{ url('why-join-us') }}">About us<strong></strong></a></li>
                            <li><a href="https://youtu.be/rPLnqCVVHNo?autoplay=0&rel=0" target="_blank">Projects<strong></strong></a></li>
                            <li><a href="{{ url('news-and-events') }}">News &amp; events<strong></strong></a></li>
                        </ul>
                    </div>

                </div>
            </footer>
            <!--=======footer=================================-->
        </div>
    </div>
    
</body>

</html>