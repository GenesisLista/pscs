<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>PSCS - News and Events</title>
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
                                        <li class="current"><a href="{{ url('news-and-events') }}">News &amp; events<strong></strong></a></li>
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

            <!--=======content================================-->

            <div class="container">

                <div class="row">
                    <div class="grid_12">
                        <h2 class="v3">featured news</h2>
                        <div class="row">
                            <div class="grid_3">
                                <p class="txt7">15</p>
                                <p class="txt8">December</p>
                                <p class="txt6">PSCS GMM E-vent on December 15, 2 pm via zoom</p>
                                <p>We are inviting you to PSCS GMM E-vent on December 15, 2 pm via zoom.</p>
                                <p>Upon registration, we will send you the zoom link.</p>
                                <p>Grab this chance to renew/apply for membership for only 800 plus perks of joining our marketplace if you are selling something for extra income this holiday season.</p>
                                <p>See you there!</p>
                            </div>

                            <div class="grid_3">
                                <p class="txt7">19</p>
                                <p class="txt8">November</p>
                                <p class="txt6">PSCS is going to celebrate the 41st anniversary this coming November 19,
                                    2020.</p>
                                <p>PSCS is also collaborating with PhilBeauty 's virtual exhibition, Beauty Space
                                    happening on Nov. 18-19, 2020.</p>

                            </div>

                            <div class="grid_3">
                                <p class="txt7">21-30</p>
                                <p class="txt8">October</p>
                                <p class="txt6">IFSCC Yokohama event</p>
                                <p>With the present Covid-19 situation, the IFSCC Yokohama event is moving forward with
                                    the VIRTUAL CONGRESS on October 21-30, 2020.</p>
                                <p>Interested IFSCC Members can get 10 day full access at the comforts of your home or
                                    office. No visa required, no hotel fees.</p>
                            </div>

                            <div class="grid_3">
                                <p class="txt7">29</p>
                                <p class="txt8">September</p>
                                <p class="txt6">DKSH & Malvern Panalytical Webinar</p>
                                <p>Titanium dioxide is an expensive pigment. Philippine Society for Cosmetic Science,
                                    DKSH & Malvern Panalytical invite you to our webinar https://okt.to/bdOAvz on how to
                                    optimize its whiteness, brightness & durability.</p>
                                <a href="https://okt.to/QjFWOC" target="_blank" class="more_btn bg5">more</a>
                            </div>

                        </div>

                    </div>

                </div>
            </div>

            <div class="box-2">
                <div class="container">
                    <div class="row">

                        <div class="grid_12">
                            <div class="row">
                                <div class="grid_3">
                                    <p class="txt7">11</p>
                                    <p class="txt8">September</p>
                                    <p class="txt6">Crodarom Webinar: Phytessence Hazel Leaf for Philippines</p>
                                    <p>This coming September 11, 2020, from 3:30 to 4:30pm, BNC Ingredients is pleased
                                        to
                                        announce the launch of Crodarom France's newest plant leaf extract, Phytessence
                                        Hazel Leaf, for scalp care.</p>
                                    <a href="https://event.on24.com/eventRegistration/EventLobbyServlet?target=reg20.jsp&fbclid=IwAR1oPZmFtQVX-jU0UanHPXUWCsJacvaMtPeRspwU-OwrCmFBguzfQ3VSmI0&eventid=2593502&sessionid=1&key=0184A36B483A9C9FDA1D0BBCA91692FD&regTag=&sourcepage=register"
                                        target="_blank" class="more_btn bg5">More</a>
                                </div>

                                <!-- <div class="grid_3">
                                    <p class="txt7">24</p>
                                    <p class="txt8">march</p>
                                    <p class="txt6">Duis vitae placerat metus, vitae luctus mauris</p>
                                    <p>Katrsas lasuytasa mauysta Lundg kertaseares lmasetugiat malesui tyuadede
                                        ferterase
                                        nlasce.</p>
                                    <a href="#" class="more_btn bg5">more</a>
                                </div>

                                <div class="grid_3">
                                    <p class="txt7">26</p>
                                    <p class="txt8">march</p>
                                    <p class="txt6">vitae luctus mauris Sed nisi ne que, condimentum in</p>
                                    <p>Mertyrda odesa satrolrta Leugiat malesui nundg res lmasetnas raerase nlasadede
                                        fertas
                                    </p>
                                    <a href="#" class="more_btn bg5">more</a>
                                </div>

                                <div class="grid_3">
                                    <p class="txt7">28</p>
                                    <p class="txt8">march</p>
                                    <p class="txt6">kerptmse qui nesciu ideStuASERer estqui dolorem</p>
                                    <p>Katrsas lasuytasa mauysta Lundg kertaseares lmasetugiat malesui tyuadede
                                        ferterase
                                        nlasce.</p>
                                    <a href="#" class="more_btn bg5">more</a>
                                </div> -->

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
                            <a href="{{ url('/') }}" class="link2">Philippine Society for Cosmetic Science</a></p>

                        <ul class="list_menu_footer">
                            <li><a href="{{ url('/') }}">Home<strong></strong></a></li>
                            <li><a href="{{ url('why-join-us') }}">About us<strong></strong></a></li>
                            <li><a href="https://youtu.be/rPLnqCVVHNo?autoplay=0&rel=0" target="_blank">Projects<strong></strong></a></li>
                            <li class="current"><a href="{{ url('news-and-events') }}">News &amp; events<strong></strong></a></li>
                        </ul>
                    </div>

                </div>
            </footer>
            <!--=======footer=================================-->
        </div>
    </div>
    
</body>

</html>