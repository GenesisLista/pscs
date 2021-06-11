<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>PSCS - Home</title>
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

                    <div class="box-1">
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

            <div class="header-box-home">
                <div class="container">
                    <div class="col1">
                        <img src="{{ asset('web/images/page1_pic1.jpg') }}" alt="" class="img1_header_image">
                        <div class="header_txt_section_home">
                            <p class="txt1">Cosmetic<br>Garden</p>
                        </div>
                    </div>

                    <div class="col1">
                        <div class="header_txt_section_home bg2">
                            <p class="txt1">Discover<br>Cosmetic<br>Science</p>
                        </div>
                        <img src="{{ asset('web/images/header_section_pic1.png') }}" alt="" class="img1_header_image">
                    </div>

                    <div class="col1">
                        <img src="{{ asset('web/images/header_section_pic2.png') }}" alt="" class="img1_header_image">
                        <div class="header_txt_section_home bg3">
                            <p class="txt1">Cosmetic<br>Researches</p>
                        </div>
                    </div>

                    <div class="col1">
                        <div class="header_txt_section_home bg4">
                            <p class="txt1">Trends<br>and<br>Regulatory<br>Guidelines</p>
                        </div>
                        <img src="{{ asset('web/images/header_section_pic3.png') }}" alt="" class="img1_header_image">
                    </div>

                </div>
            </div>

            <!--=======content================================-->

            <div class="container">

                <div class="row">
                    <div class="grid_5">
                        <h2>Welcome message</h2>
                        <p>by Linda L. Yu - President of PSCS</p>

                        <div class="wrapper">
                            <img src="{{ asset('web/images/bod/linda_yu_welcome_message.png') }}" alt="" class="img4_welcome_message">
                            <p>"It is a great honor to lead PSCS as a president. With great vision in mind, our board of
                                directors accept the challenge to raise the bar of the Filipino cosmetic scientists
                                through educational seminars by linking to academe and international organizations."</p>
                            <a href="{{ url('board-of-directors') }}#welcome_message" class="more_btn bg5">Read More</a>
                        </div>
                    </div>

                    <div class="grid_6 preffix_1">
                        <h2>watch our latest uploads</h2>
                        <div class="row">
                            <div class="grid_3_latest_uploads video-responsive">
                                <iframe width="420" height="315"
                                    src="https://www.youtube.com/embed/87BwsKON_mg?autoplay=0&rel=0"></iframe>
                            </div>

                            <div class="grid_3_latest_uploads">
                                <ul class="listWithMarker">
                                    <li><a href="https://youtu.be/87BwsKON_mg?autoplay=0&rel=0" target="_blank">IFSCC
                                            Yokohama Event 2020</a></li>
                                    <li><a href="https://youtu.be/rPLnqCVVHNo?autoplay=0&rel=0" target="_blank">Cosmetic
                                            Garden</a></li>
                                    <li><a href="https://youtu.be/o1Xvn_oLvEQ?autoplay=0&rel=0" target="_blank">40 th
                                            Founding Anniversary Seminar</a> </li>
                                    <li><a href="https://youtu.be/lomD1iOEZO8?autoplay=0&rel=0" target="_blank">EMCEP
                                            Educational Seminar</a></li>
                                    <li><a href="https://youtu.be/B-kNBYTsvZU?autoplay=0&rel=0" target="_blank">Natural
                                            Beauty & PhytoCosmetics Webinar</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <div class="box-2">
                <div class="container">
                    <div class="row">
                        <div class="grid_3">
                            <h2 class="no_line">useful links</h2>
                            <ul class="listWithMarker">
                                <li><a href="{{ url('why-join-us') }}">Why join PSCS?</a></li>
                                <li><a href="{{ url('become-a-member') }}">How to become a member?</a></li>
                                <li><a href="{{ url('member-directory') }}">Members directory</a></li>
                                <li><a href="{{ url('board-of-directors') }}">Board of directors</a></li>
                                <li><a href="{{ url('history') }}">History</a></li>
                                <li><a href="https://www.youtube.com/watch?v=kYCTr9YxJIQ&feature=youtu.be&autoplay=0&rel=0"
                                        target="_blank">Education</a></li>
                                <li><a href="https://youtu.be/xeFyv2uZ0yc?autoplay=0&rel=0" target="_blank">Projects</a>
                                </li>
                                <li><a href="http://www.ifscc.org" target="_blank">IFSCC</a></li>
                                <li><a href="http://www.fda.gov.ph" target="_blank">Philippine FDA</a></li>
                                <li><a href="http://www.ceu.edu.ph" target="_blank">Centro Escolar University</a></li>
                                <li><a href="http://www.ust.edu.ph" target="_blank">University of Santo Tomas</a></li>
                                <li><a href="http://www.up.edu.ph" target="_blank">University of the Philippines</a>
                                </li>
                            </ul>
                        </div>

                        <div class="grid_9">
                            <div class="box-3">
                                <h2 class="v2 txt_cntr">PSCS 2020 Calendar of Events</h2>

                                <div class="hline2 v2">
                                    <div class="responsiveCal">
                                        <iframe
                                            src="https://calendar.google.com/calendar/b/2/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=Asia%2FManila&amp;src=c2VjcmV0YXJpYXQucHNjc0BnbWFpbC5jb20&amp;color=%23039BE5&amp;showTz=0&amp;showPrint=0&amp;showTitle=0&amp;showDate=1&amp;showTabs=0"
                                            style="border-width:0" width="800" height="600" frameborder="0"
                                            scrolling="no"></iframe>
                                    </div>

                                    <div class="clear"></div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">

                    <div class="grid_12">
                        <h2>How to Find Us</h2>
                        <div class="row">
                            <div class="grid_6">
                                <figure class="img_inner">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.4284199434987!2d121.028724!3d14.688347899999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b12b724dc263%3A0x19018f160893a32f!2sPhilippine%20Society%20for%20Cosmetic%20Science!5e0!3m2!1sen!2ssa!4v1587625790222!5m2!1sen!2ssa"
                                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                                        aria-hidden="false" tabindex="0"></iframe>
                                </figure>
                            </div>
                            <div class="grid_6">
                                <h3>PHILIPPINE SOCIETY FOR COSMETIC SCIENCE, INC.</h3>
                                <address>
                                    <dl>
                                        <dt>Lot 2 Arty II, Corner Road 1, Mindanao Ave, Quezon City, Philippines</dt>
                                        <dd><span>Mobile:</span> +63 917 801 4640</dd>
                                        <dd><span>E-mail:</span> <a
                                                href="mailto:&#115;&#101;&#99;&#114;&#101;&#116;&#97;&#114;&#105;&#97;&#116;&#46;&#112;&#115;&#99;&#115;&#64;&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;"
                                                class="link4">&#115;&#101;&#99;&#114;&#101;&#116;&#97;&#114;&#105;&#97;&#116;&#46;&#112;&#115;&#99;&#115;&#64;&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;</a>
                                        </dd>
                                    </dl>
                                </address>

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