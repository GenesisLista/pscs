<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>PSCSP - Why join us</title>
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
                                        <li><a href="{{ url('/') }}">Home<strong></strong></a></li>
                                        <li class="current"><a href="javascript:void(0)"><span></span>About
                                                us<strong></strong></a>
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

                    <div class="box-1a content_box">
                        <div class="container">
                            <div class="row">
                                <div class="grid_12">
                                    <div class="pscs_logo"><img src="{{ asset('web/images/logo1.png') }}"
                                            alt="PSCS Home"></div>
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
                        <h2>Why join PSCS?</h2>
                        <div class="wrapper">
                            <img src="{{ asset('web/images/page2_pic1.jpg') }}" alt="" class="img4">
                            <p class="txt3_why_join">Philippine Society for Cosmetic Science Inc is the only
                                organization recognized by the prestigious International Federation of Societies of
                                Cosmetic Chemists (IFSCC) in the Philippines. IFSCC is a global association of 16,000
                                cosmetic chemists in 79 countries. We are also one of the founding members of Asian
                                Societies of Cosmetic Scientists. We uphold the vision and mission of our founders.</p>
                            <p class="txt3">PSCS has been the technical partner for Philippine FDA , academe ,
                                manufacturers and suppliers . Nurturing our cosmetic scientists throughout its 40 years
                                of existence and many more years to come by providing linkage to international events
                                and educations.</p>
                        </div>

                        <div class="wrapper marTop2">
                            <img src="{{ asset('web/images/page2_pic2.jpg') }}" alt="" class="img4">
                            <p class="txt3_why_join">Our members are based on individual membership and automatically
                                member of IFSCC.</p>
                            <p class="txt3">Our core value is providing a channel to raise our Filipino scientists for a
                                higher ground in such way they can contribute for a better and beautiful Philippines
                                toward the whole world. We believe that Filipino scientists can improve and support
                                cosmetic products in scientific way for the advancement of cosmetic science worldwide.
                            </p>
                        </div>

                    </div>

                </div>

            </div>

            <div class="box-2">
                <div class="container">
                    <div class="row">
                        <div class="grid_6">
                            <div class="wrapper">
                                <img src="{{ asset('web/images/pscs_mission.png') }}" alt="" class="img6 no_resize">
                                <div class="box">
                                    <h4 class="mission_vision">Our Mission</h4>
                                    <p class="mission_vision_text">We are a leading center for research and a venue for
                                        the dissemination of cosmetic scientific information for practitioners and
                                        professionals in the cosmetics science and its ancillary products. Through
                                        active engagements with the government, academe, and international cosmetics
                                        scientific entities, we shall maintain and promote a high level of technical,
                                        professional, ethical practices and standards in the cosmetic sciences.</p>
                                </div>
                            </div>
                        </div>

                        <div class="grid_6">
                            <div class="wrapper">
                                <img src="{{ asset('web/images/pscs_vision.png') }}" alt="" class="img6 no_resize">
                                <div class="box">
                                    <h4 class="mission_vision">Our Vison</h4>
                                    <p class="mission_vision_text">We are the recognized leading professional
                                        organization that promotes high ethical standards and provides scientific and
                                        technical advancement of practitioners and professionals engaged in the science
                                        of cosmetics and its ancillary products.</p>
                                </div>
                            </div>
                        </div>

                        <div class="wrapper">
                            <div class="indent1"></div>
                        </div>

                    </div>
                </div>
            </div>

            <!--=======footer=================================-->
            <footer>
                <div class="footer_priv">

                    <div class="container">
                        <p class="txt_priv">&copy; {{ date('Y') }} <span class="color2">&bull;</span>
                            <a href="{{ url('/') }}" class="link2">Philippine Society for Cosmetic Science</a>
                        </p>

                        <ul class="list_menu_footer">
                            <li><a href="{{ url('/') }}">Home<strong></strong></a></li>
                            <li class="current"><a href="{{ url('why-join-us') }}">About us<strong></strong></a></li>
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