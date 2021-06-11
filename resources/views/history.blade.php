<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>PSCS - History</title>
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

                    <div class="box-1c content_box">
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
                        <h2 class="v3">PSCS History</h2>
                        <div class="row">
                            <div class="grid_12">
                                <p class="history txt6">“As we look back years ago, we cannot help but reflect and dwell
                                    on what we might have missed, were it not for the dreams and vision that once
                                    captured the imagination of a self-effacing lady, deeply involved in what was a
                                    fledging cosmetic industry then…” – Ms. R. D. Nolasco</p>
                                <p>Nov. 12, 1979, Ms. Patty Prieto Espiritu, the Company Representative of Muller &
                                    Phipps, led the groundwork for the founding of Philippine Society for Cosmetic
                                    Science, Inc. when she called for an organizational meeting and assembled a core
                                    group of twenty two (22) inspired technical people. </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="grid_6">
                                <p>"22 people who formed nucleus of the society":</p>
                                <ul class="listWithMarker v2">
                                    <li>Edilberto A. Abinales, Jr. - Mennen Phil. Inc.</li>
                                    <li>Ester A. Agbayani - Filcos Mfg. Corp.</li>
                                    <li>Lirio Altura - Metro Lab. Inc.</li>
                                    <li>Nelia Andrada - Filcos Mfg. Corp.</li>
                                    <li>Eliseo M. Bananal - I.F.F Phil., Inc</li>
                                    <li>Antonio B. Bejar - Armour-Dial Phil.</li>
                                    <li>Efren G. Bunquin - Johnson & Johnson Inc.</li>
                                    <li>Ernesto Calalang - Filcos Mfg. Corp.</li>
                                    <li>Penafrancia Prieto Espiritu - Mueller & Phipps Mfg. Corp.</li>
                                    <li>Renato P. Goco - The Dowd Corp.</li>
                                    <li>Max Guzman - Phil. Refining Corp.</li>
                                    <li>Froilan P. Lara - Mueller & Phipps Mfg. Corp.</li>
                                    <li>Yolanda Y. Lim - Columbia Laboratories</li>
                                    <li>Rose L. Manacsa - Mead-Johnson Phil., Inc.</li>
                                    <li>Benjamin Y. Mandanas - Colgate – Palmolive Phil., Inc.</li>
                                    <li>Arthur Monuz - Bristol Lab. Phil., Inc.</li>
                                    <li>Henry Ng - Formey Plastics, Inc.</li>
                                    <li>Lilia Pangyarihan - Aura Laboratories</li>
                                    <li>Alicia O. Quimson - Winthrop Stearns</li>
                                    <li>Edith M. Tapnio - Pharma Industries, Inc.</li>
                                    <li>Teresita N. Tumangan - Winthrop Stearns</li>
                                    <li>Lorenza B. Villaluz - Mueller & Phipps Mfg. Inc.</li>
                                </ul>
                            </div>
                            <div class="grid_6">
                                <img src="{{ asset('web/images/history/aromatherapy.jpg') }}" alt="" class="img7">
                                <img src="{{ asset('web/images/history/essential-oils.jpg') }}" alt="" class="img7">
                            </div>
                        </div>

                        <div class="row">
                            <div class="grid_12">
                                <p>A year later, Ms. Patty Prieto Espiritu foresaw the advantages for PSCS to have
                                    international affiliation. She applied and was granted affiliation with the
                                    International Federation of Societies of Cosmetic Chemists. In September 1980, PSCS
                                    became the 22nd society to be affiliated with IFSCC.</p>
                                <p>It was during the term of Ceres Lao, in 1991, the birth of Asean Societies of
                                    Cosmetic Scientists (ASCS) founded by five (5) countries. Founding countries were:
                                    Indonesia, Japan, Malaysia, Thailand and Philippines.</p>
                                <p>In its formative years, the society, as any young organizations had encountered
                                    challenges. But because of the efforts and love of our men and women who have led
                                    the society, inspired by its mission and vision, PSCS continued to climb the ladder
                                    of great milestones.</p>
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