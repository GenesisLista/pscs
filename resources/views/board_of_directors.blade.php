<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>PSCS - Board of directors</title>
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
                                        <li class="current"><a href="javascript:void(0)"><span></span>About us<strong></strong></a>
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

                    <div class="box-1d content_box">
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
                        <h2 class="v3">Board of directors</h2>

                        <div class="row">
                            <div class="grid_4">

                                <div class="wrapper">
                                    <img src="{{ asset('web/images/bod/pscs_bod_linda_yu.png') }}" alt="Linda Yu" class="img5_bod">
                                    <h3>Linda Yu</h3>
                                    <p class="bod_txt6">President</p>
                                </div>

                                <div class="wrapper marTop2">
                                    <img src="{{ asset('web/images/bod/pscs_bod_sison_del_ayre.png') }}" alt="Sison Del Ayre"
                                        class="img5_bod">
                                    <h3>Sison del Ayre</h3>
                                    <p class="bod_txt6">VP Internal Affairs</p>

                                </div>

                                <div class="wrapper marTop2">
                                    <img src="{{ asset('web/images/bod/pscs_bod_precious_joy_abeleda.png') }}" alt="" class="img5_bod">
                                    <h3>Precious Joy Abeleda</h3>
                                    <p class="bod_txt6">VP External Affairs</p>

                                </div>

                                <div class="wrapper marTop2">
                                    <img src="{{ asset('web/images/bod/pscs_bod_angelica_chiongco.png') }}" alt="Angelica Chiongco"
                                        class="img5_bod">
                                    <h3>Angelica Chongco</h3>
                                    <p class="bod_txt6">Secretary</p>
                                </div>

                            </div>

                            <div class="grid_4">

                                <div class="wrapper">
                                    <img src="{{ asset('web/images/bod/pscs_bod_nolifel_tabia.png') }}" alt="Nolifel Tabia"
                                        class="img5_bod">
                                    <h3>Nolifel Tabia</h3>
                                    <p class="bod_txt6">Treasurer</p>

                                </div>

                                <div class="wrapper marTop2">
                                    <img src="{{ asset('web/images/bod/pscs_bod_marife_bo.png') }}" alt="Marife Bo" class="img5_bod">
                                    <h3>Mariefe Boo</h3>
                                    <p class="bod_txt6">Auditor</p>

                                </div>

                                <div class="wrapper marTop2">
                                    <img src="{{ asset('web/images/bod/pscs_bod_joy_balejonda.png') }}" alt="Joy Balejonda"
                                        class="img5_bod">
                                    <h3>Joy Balejonda</h3>
                                    <p class="bod_txt6">Public Relations Officer</p>

                                </div>

                                <div class="wrapper marTop2">
                                    <img src="{{ asset('web/images/bod/pscs_bod_luzviminda_zamora.png') }}" alt="Luzviminda Zamora"
                                        class="img5_bod">
                                    <h3>Luzviminda Zamora</h3>
                                    <p class="bod_txt6">Membership Director</p>

                                </div>

                            </div>

                            <div class="grid_4">

                                <div class="wrapper">
                                    <img src="{{ asset('web/images/bod/pscs_bod_angel_fermanes.png') }}" alt="Angel Fermanes"
                                        class="img5_bod">
                                    <h3>Angel Fermanes</h3>
                                    <p class="bod_txt6">Ways and Means Director</p>

                                </div>

                                <div class="wrapper marTop2">
                                    <img src="{{ asset('web/images/bod/pscs_bod_cecile_ginete.png') }}" alt="Cecile Ginete"
                                        class="img5_bod">
                                    <h3>Cecile Ginete</h3>
                                    <p class="bod_txt6">Technical Director</p>
                                </div>

                                <div class="wrapper marTop2">
                                    <img src="{{ asset('web/images/bod/pscs_bod_perla_valenton.png') }}" alt="Perla Valenton"
                                        class="img5_bod">
                                    <h3>Pearl Valenton</h3>
                                    <p class="bod_txt6">Program Director</p>
                                </div>

                                <div class="wrapper marTop2">
                                    <img src="{{ asset('web/images/bod/pscs_bod_michelle_palaca.png') }}" alt="Michelle Palaca"
                                        class="img5_bod">
                                    <h3>Michelle Palaca</h3>
                                    <p class="bod_txt6">Ex Officio</p>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="box-2">
                <div class="container">
                    <div class="row">

                        <div class="grid_8">
                            <h2 class="no_line2">Messages </h2>
                            <blockquote>
                                <img src="{{ asset('web/images/bod/prrd.png') }}" alt="" class="img5_messages">
                                <p>My warmest greetings to the Philippine Society for Cosmetic Science, Inc. (PSCS) as
                                    it marks its 40th Anniversary and holds the 2020 ASEAN Cosmetic Directive
                                    Formulation Preparedness Conference.</p>
                                <p>For decades, PSCS has pursued the advancement of the cosmetics and toiletries
                                    industry in the Philippines. Its efforts to promote the highest professional and
                                    ethical standards among its members have resulted in the improved quality of their
                                    products and services.</p>
                                <p>As you celebrate this milestone and gather for this Supplier's Day Conference and
                                    Annual General Membership Meeting, may you continue to engage in research and
                                    capacity building to ensure the safety of cosmetics materials and technologies. I
                                    trust the latest knowledge and best practices that you will be sharing among your
                                    peers will result in the advancement of cosmetic science and enterprise here in the
                                    country. Together, let us work towards achieving a healthier and brighter future for
                                    the nation.</p>
                                <p>I wish you success in your endeavors.</p>
                                <br>
                                <a href="#" class="link3">- Rodrigo Roa Duterte / President of Republic of the
                                    Philippines</a>
                            </blockquote>

                            <blockquote>
                                <img src="{{ asset('web/images/bod/emanuele_piras.png') }}" alt="" class="img5_messages">
                                <p>On behalf of the Praesidium of the IFSCC, its 49 Societies, and its 16,000+
                                    individual Members, please allow me to congratulate the Philippine Society for
                                    Cosmetic Science, Inc. on its 40th Anniversary.</p>
                                <p>This significant milestone clearly demonstrates that the PSCS has successfully
                                    supported its members' need for quality education and network-building events in the
                                    Philippines since 1979. You have built strong alliances with other IFSCC Member
                                    Societies, especially in Asia, and have hosted world-renowned scientist educators
                                    for your seminars. Your Board has travelled around the world to IFSCC and other
                                    industry events as welcomed representatives of the PSCS and ambassadors for the
                                    cosmetic science industry in the Philippines.</p>
                                <p>You can take pride in your accomplishments supporting Philippine scientists. The
                                    IFSCC is proud to have the Philippine Society for Cosmetics Science as a Member
                                    Society, and we wish you continued success and growth.</p>
                                <br>
                                <a href="#" class="link3">- Emanuele Piras / President of IFSCC</a>
                            </blockquote>

                            <blockquote id="welcome_message">
                                <img src="{{ asset('web/images/bod/pscs_bod_linda_yu.png') }}" alt="" class="img5_messages">
                                <p>It is a great honor to lead PSCS as a president. With great vision in mind, our board
                                    of directors accept the challenge to raise the bar of the Filipino cosmetic
                                    scientists through educational seminars by linking to academe and international
                                    organizations.</p>
                                <p>We have created cosmetic garden project to leave a greater legacy of using our local
                                    natural raw materials and standardized extracts in cosmetic products. We dream as
                                    one to reach out for better and beautiful Filipinos. We welcome all members to be
                                    active in contributing scientific researches for the advancement of cosmetic
                                    science. From our hearts to your heart, we are happy to serve PSCS! Discover
                                    cosmetic science with us.</p>
                                <br>
                                <a href="#" class="link3">- Linda Yu / President of PSCS</a>
                            </blockquote>

                        </div>

                        <div class="grid_4">
                            <h2 class="no_line2">Past Presidents</h2>
                            <ul class="listWithMarker v2">
                                <li>1979 - 1981 Patty Prieto - Espiritu</li>
                                <li>1982 - 1983 Rosalina D. Nolasco</li>
                                <li>1984 Edilberto A. Abinales Jr.</li>
                                <li>1985 Fausto C. Aquino</li>
                                <li>1986 - 1987 Rosalina D. Nolasco</li>
                                <li>1988 Ed Cabuslay</li>
                                <li>1989 - 1990 Zenaida B. Soriano</li>
                                <li>1991 - 1992 Ceres L. Lao</li>
                                <li>1993 - 1994 Noel D. Manigbas</li>
                                <li>1995 - 1996 Cesar G. Malonso</li>
                                <li>1997 - 1998 Antonio L. Sazon</li>
                                <li>1999 - 2000 Geraldine Estacio - Trias</li>
                                <li>2001 - 2003 Alexis D. Pineda</li>
                                <li>2004 - 2005 Catherine Claire M. Rivera</li>
                                <li>2006 - 2007 Esperanza K. Moya</li>
                                <li>2008 - 2009 Florence B. Getalado</li>
                                <li>2010 - 2011 Evelyn F. Fontanilla</li>
                                <li>2012 - 2013 Malou Cachero</li>
                                <li>2014 - 2015 Evelyn Fontanilla</li>
                                <li>2016 - 2019 Michelle S. Palaca</li>
                            </ul>
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