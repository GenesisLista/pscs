<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>PSCS - Member directory</title>
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

                    <div class="box-1b content_box">
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

            <!-- 1 -->
            <div class="container">

                <div class="row">

                <div class="grid_12">
                        <h2 class="v3">Member Directory</h2>

                        <div class="row">
                            <div class="grid_4">

                                <div class="wrapper">
                                    <h3>ACCORD INTERNATIONAL INC.</h3>
                                    <span>Xandra M. Zuniga</span><br>
                                    <span>Demi Aurelio</span><br>
                                    <span>Krysta Paula Ann Fel Carmona</span><br><br>
                                </div>

                                <div class="wrapper marTop2">
                                    <h3>AMCHEM</h3>
                                    <span>Pinky De Jesus</span><br>
                                    <span>Marilyn Chan</span><br>
                                    <span>Carlos De Leon</span><br><br>
                                </div>

                                <div class="wrapper marTop2">
                                    <h3>ASIA PRIMERA KIMIKA</h3>
                                    <span>Luz Budanoy</span><br>
                                </div>

                            </div>

                            <div class="grid_4">

                                <div class="wrapper">
                                    <h3>ACTICHEM</h3>
                                    <span>Julieta Mallapre</span><br><br><br><br>
                                </div>

                                <div class="wrapper marTop2">
                                    <h3>ARDENT WORLD INC</h3>
                                    <span>Marie Giecel V. Dela Cruz</span><br>
                                    <span>Alfie J. Goggs</span><br>
                                    <span>Josefina V. Correa</span><br>
                                    <span>Alma Arellano</span>
                                </div>

                                <div class="wrapper marTop2">
                                    <h3>BNC INGREDIENTS CORPORATION</h3>
                                    <span>Frialyn S. Lau</span><br>
                                </div>

                            </div>

                            <div class="grid_4">

                                <div class="wrapper">
                                    <h3>ACTIVE HOUSE OF COSMETIC INGREDIENTS CORP.</h3>
                                    <span>Bernice Bethel C. Manzano</span><br>
                                    <span>Alfie J. Goggs</span><br>
                                    <span>Josefina V. Correa</span><br>
                                    <span>Alma Arellano</span>
                                </div>

                                <div class="wrapper marTop2">
                                    <h3>Aero-Pack Industries Incorporated</h3>
                                    <span>Mae Ann Belandres</span><br>
                                    <span>Betina Joy Casteneto</span><br><br><br>
                                </div>

                                <div class="wrapper marTop2">
                                    <h3>BRENNTAG INGREDIENTS, INC.</h3>
                                    <span>Karen Christie Macalalad</span><br>
                                    <span>Lessie Galindo</span><br>
                                    <span>Lilian V. Gannaban</span><br>
                                    <span>Dennis Cajano</span><br>
                                    <span>Hubert Arco</span><br>
                                    <span>Nico Sebastian Arceo</span>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- 2 -->
            <div class="box-2">
                <div class="container">
                    <div class="row">
                        <div class="grid_12">

                            <div class="row">
                                <div class="grid_4">

                                    <div class="wrapper">
                                        <h3>CET WELLNESS AND ACUPUNCTURE CLINIC</h3>
                                        <span>Cecilia Tiu</span><br><br><br><br>
                                    </div>

                                    <div class="wrapper marTop2">
                                        <h3>CHEMWEALTH</h3>
                                        <span>Llewelyn Sundiam</span><br>
                                    </div>

                                    <div class="wrapper marTop2">
                                        <h3>DJM GRANDEUR CORP.</h3>
                                        <span>Geraldine A. Estacio</span><br>
                                        <span>Djanne Marie E. Trias</span><br>
                                        <span>Junina Marie E. Trias</span>
                                    </div>

                                </div>

                                <div class="grid_4">

                                    <div class="wrapper">
                                        <h3>CHEMREZ TECHNOLOGIES INC.</h3>
                                        <span>Ma. Jocel H. Chico</span><br>
                                        <span>Glenn Apostol</span><br>
                                        <span>Sherrie Ann Sampang</span><br>
                                        <span>Louie Bustamante</span>
                                    </div>

                                    <div class="wrapper marTop2">
                                        <h3>CLEOPATRA'S</h3>
                                        <span>Katrina Monares</span><br>
                                    </div>

                                    <div class="wrapper marTop2">
                                        <h3>DKSH PHILIPPINES</h3>
                                        <span>Yolanda Yac</span><br>
                                        <span>Mina Mendoza</span>
                                    </div>

                                </div>

                                <div class="grid_4">

                                    <div class="wrapper">
                                        <h3>Chemico Philippines Inc.</h3>
                                        <span>Kirk Ervin Borromeo</span><br><br><br><br>
                                    </div>

                                    <div class="wrapper marTop2">
                                        <h3>CONNELL BROS. CO. PILIPINAS INC.</h3>
                                        <span>Mary Grace Tan</span><br>
                                    </div>

                                    <div class="wrapper marTop2">
                                        <h3>DONNAFE FACIAL CARE</h3>
                                        <span>Fe A. Obligacion</span><br>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <!-- 3 -->
            <div class="container">

                <div class="row">
                    <div class="grid_12">
                        <div class="row">
                            <div class="grid_4">

                                <div class="wrapper">
                                    <h3>EURO CHEMICALS INC.</h3>
                                    <span>Gladdy Micca D. Vallejos</span><br>
                                    <span>Alleli V. Patulot</span><br>
                                    <span>Pamela Manzana</span><br>
                                    <span>Jessica Plana</span><br>
                                    <span>Miguel Plana</span><br>
                                    <span>Angel Fermanes</span><br>
                                    <span>Joanne Matutino-Borja</span>
                                </div>

                                <div class="wrapper marTop2">
                                    <h3>IMCD PHILIPPINES</h3>
                                    <span>Maria Fe Boo</span><br>
                                    <span>Jim Yumang</span><br><br><br><br><br><br>
                                </div>

                                <div class="wrapper marTop2">
                                    <h3>Jotoco Corp.</h3>
                                    <span>Aileen N. Fajardo</span><br>
                                    <span>Beverly Hermoso</span>
                                </div>

                            </div>

                            <div class="grid_4">

                                <div class="wrapper">
                                    <h3>GOLDEN MINT MOLECULES</h3>
                                    <span>Federico Saturay</span><br><br><br><br><br><br><br>
                                </div>

                                <div class="wrapper marTop2">
                                    <h3>INTELLIGENT SKIN CARE INC.</h3>
                                    <span>Andrea Rea Bathan</span><br>
                                    <span>Michelle Florendo</span><br>
                                    <span>Jamelle Santos</span><br>
                                    <span>John Robinsons Uy</span><br>
                                    <span>Dica Abengoza</span><br>
                                    <span>Mervic John A. Abasolo</span><br>
                                    <span>Sarah Caringal</span>
                                </div>

                                <div class="wrapper marTop2">
                                    <h3>Juvic Inc.</h3>
                                    <span>Carmela Cruz</span><br>
                                </div>

                            </div>

                            <div class="grid_4">

                                <div class="wrapper">
                                    <h3>GREEN CROSS INC.</h3>
                                    <span>Gina Narvaez</span><br>
                                    <span>Aristotle D.R. Cortez</span><br><br><br><br><br><br>
                                </div>

                                <div class="wrapper marTop2">
                                    <h3>iSkeynCEUTICALS CO.</h3>
                                    <span>Fernando Varias Jr.</span><br>
                                    <span>Lawrence Kristoffer Chua</span><br><br><br><br><br><br>
                                </div>

                                <div class="wrapper marTop2">
                                    <h3>Lebenz</h3>
                                    <span>Victoria Dee</span><br>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </div>

            <!-- 4 -->
            <div class="box-2">
                <div class="container">
                    <div class="row">
                        <div class="grid_12">

                            <div class="row">
                                <div class="grid_4">

                                    <div class="wrapper">
                                        <h3>LORZELLE ORGANICS AND BEAUTY PRODUCTS</h3>
                                        <span>Lorna Dizon</span><br><br><br><br><br><br><br><br>
                                    </div>

                                    <div class="wrapper marTop2">
                                        <h3>MACH UNION</h3>
                                        <span>Mary Elaine R. Ellar</span><br>
                                    </div>

                                    <div class="wrapper marTop2">
                                        <h3>MHER FACIAL CARE</h3>
                                        <span>Clemencia P. Zubiaga</span><br>
                                    </div>

                                </div>

                                <div class="grid_4">

                                    <div class="wrapper">
                                        <h3>LUZ FACIAL CARE CORPORATION</h3>
                                        <span>Dra. Racelle Divina Daguinsin</span><br><br><br><br><br><br><br><br>
                                    </div>

                                    <div class="wrapper marTop2">
                                        <h3>MAYUMI ORGANICS</h3>
                                        <span>Angelica Chongco</span><br>
                                    </div>

                                    <div class="wrapper marTop2">
                                        <h3>MIDORI NATURAL COSMETICS, INC.</h3>
                                        <span>Priscilla S. Oro</span><br>
                                    </div>

                                </div>

                                <div class="grid_4">

                                    <div class="wrapper">
                                        <h3>Evo Lyz & Litifinite</h3>
                                        <span>Ariel Quinto</span><br>
                                        <span>Mahjo Natores</span><br>
                                        <span>Melani Natores</span><br>
                                        <span>Marilou Z. Apo</span><br>
                                        <span>Rheneth Miranda</span><br>
                                        <span>Sherwin Bedua</span><br>
                                        <span>Aida Ajero</span><br>
                                        <span>Concepcion Padua</span>
                                    </div>

                                    <div class="wrapper marTop2">
                                        <h3>Meditech I</h3>
                                        <span>Aileen So</span><br>
                                    </div>

                                    <div class="wrapper marTop2">
                                        <h3>NEOTECH INDUSTRIES INTERNATIONAL INC.9</h3>
                                        <span>Marivic I. Santiago</span><br>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <!-- 5 -->
            <div class="container">

                <div class="row">
                    <div class="grid_12">
                        <div class="row">
                            <div class="grid_4">

                                <div class="wrapper">
                                    <h3>ONE CHEMCENTRAL INC.</h3>
                                    <span>Tony Francisco</span><br><br><br>
                                </div>

                                <div class="wrapper marTop2">
                                    <h3>PROESSENCES INC.</h3>
                                    <span>Ailene Quincina </span><br>
                                    <span>Gemma Guino</span><br>
                                    <span>Maria Arlene Cruz</span><br><br><br><br><br><br><br>
                                </div>

                                <div class="wrapper marTop2">
                                    <h3>SPLASH CORPORATION</h3>
                                    <span>Annalyn De Asis</span><br>
                                    <span>Ehmmarie Andrade</span><br>
                                    <span>Ronald Mas</span><br>
                                    <span>Akkiko Nikki J. Manuel</span><br>
                                    <span>Angelique M. Cabanlong</span>
                                </div>

                            </div>

                            <div class="grid_4">

                                <div class="wrapper">
                                    <h3>PHARMAHEX</h3>
                                    <span>Christine Joy Torregoza</span><br>
                                    <span>Julienne P. Dayaon</span><br>
                                    <span>Regine Czarina Nunez</span>
                                </div>

                                <div class="wrapper marTop2">
                                    <h3>REFINETTE COSMETIC MANUFACTURING CORP.</h3>
                                    <span>Marivic Pecolera</span><br>
                                    <span>Sheena Marie Cortez</span><br>
                                    <span>Ma. Queenie Campo</span><br>
                                    <span>Ma. Lanie Villanueva</span><br>
                                    <span>Ziaztha Quijano</span><br>
                                    <span>Lea Marie Gonzales</span><br>
                                    <span>Vinus Basto</span><br>
                                    <span>Arlene Caluag</span><br>
                                    <span>Virginia Benavente</span>
                                </div>

                                <div class="wrapper marTop2">
                                    <h3>Siegranz</h3>
                                    <span>Amelia S. Polido</span>
                                </div>

                            </div>

                            <div class="grid_4">

                                <div class="wrapper">
                                    <h3>PHILIPPINE BEE HIVES AND NATURAL PRODUCTS INC.</h3>
                                    <span>Davie Pales</span><br>
                                    <span>Gomercindo Pales Jr.</span><br><br>
                                </div>

                                <div class="wrapper marTop2">
                                    <h3>RONRICH ENTERPRISES</h3>
                                    <span>Richard Magallanes</span><br>
                                    <br><br><br><br><br><br><br><br>
                                </div>

                                <div class="wrapper marTop2">
                                    <h3>Skin Solution</h3>
                                    <span>Ma. Noreen D. Molina</span>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </div>

            <!--6 -->
            <div class="box-2">
                <div class="container">
                    <div class="row">
                        <div class="grid_12">

                            <div class="row">
                                <div class="grid_4">

                                    <div class="wrapper">
                                        <h3>TOLL MANUFACTURING SPECIALIST INC.</h3>
                                        <span>Catherine Clare M. Rivera</span><br>
                                        <span>Josephine Tabornal</span><br>
                                        <span>Ma. Sarah Binsol</span>
                                    </div>

                                    <div class="wrapper marTop2">
                                        <h3>VKIM SALON</h3>
                                        <span>Nora Custodio</span><br>
                                        <span>Virginia Dongon</span><br>
                                        <br><br><br>
                                    </div>

                                    <div class="wrapper marTop2">
                                        <h3>YOL FACIAL CARE</h3>
                                        <span>Yolinda Villaverde</span><br>
                                    </div>

                                </div>

                                <div class="grid_4">

                                    <div class="wrapper">
                                        <h3>TRESBELLE RECHERCHE ASIA PACIFIC TRADING CORP</h3>
                                        <span>Luzeth Mendoza</span><br><br><br>
                                    </div>

                                    <div class="wrapper marTop2">
                                        <h3>VMV</h3>
                                        <span>Irish T. Basera</span><br>
                                        <span>Caseylyn Marie P. Silva</span><br>
                                        <span>Honeylene B. Ulmido</span><br>
                                        <span>Emmanuel john I. Mendoza</span><br>
                                        <span>Maria Cassandra T. Gleyo</span>
                                    </div>

                                    <div class="wrapper marTop2">
                                        <h3>ZITSKEY SALON</h3>
                                        <span>Zita Aynera</span><br>
                                    </div>

                                </div>

                                <div class="grid_4">

                                    <div class="wrapper">
                                        <h3>VENTURINA MEDICAL COMPANY</h3>
                                        <span>Eulalia Venturina</span><br>
                                        <span>Rosalie Venturina</span><br><br>
                                    </div>

                                    <div class="wrapper marTop2">
                                        <h3>WHITE BEAUTY INTERNATIONAL/PRETTY DOLLS</h3>
                                        <span>Xyza Theresse Soriano</span><br>
                                        <br><br><br><br>
                                    </div>

                                    <div class="wrapper marTop2">
                                        <h3>ALGORITHYM</h3>
                                        <span>Elena F. Ordonez, MD</span><br>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <!-- 7 -->
            <div class="container">

                <div class="row">
                    <div class="grid_12">
                        <div class="row">
                            <div class="grid_4">

                                <div class="wrapper">
                                    <h3>UL Skin Sciences, Inc</h3>
                                    <span>Erlymae C. Briones</span><br>
                                    <span>John Paul Madriaga</span><br>
                                </div>

                                <div class="wrapper marTop2">
                                    <h3>Freelance FDA Regulatory Consultant</h3>
                                    <span>Cristina Dela Cruz</span><br>
                                    <br><br>
                                </div>

                                <div class="wrapper marTop2">
                                    <h3>HAPPY LIFE WELNESS LAB INC.</h3>
                                    <span>Rose Ann Sañosa</span><br>
                                    <span>Angela Ricca Battung</span><br>
                                    <span>Aida Gaw</span><br>
                                    <span>Elvira Trabado</span><br>
                                </div>

                            </div>

                            <div class="grid_4">

                                <div class="wrapper">
                                    <h3>AMDG Beauty Shop</h3>
                                    <span>Catherine Aralar</span><br><br>
                                </div>

                                <div class="wrapper marTop2">
                                    <h3>GOLDEN ABC</h3>
                                    <span>Aldrin Gregory J. Sarmiento</span><br>
                                    <span>Ryan Jay Fuentes</span><br>
                                    <span>Edrian Mae T. Hernandez</span><br>
                                </div>

                                <div class="wrapper marTop2">
                                    <h3>LE BLANC ENTERPRISES</h3>
                                    <span>Ivy Le Blanc</span><br>
                                </div>

                            </div>

                            <div class="grid_4">

                                <div class="wrapper">
                                    <h3>Essential Ingredients Specialist Provider</h3>
                                    <span>Heidi Panaguiton</span><br>
                                    <span>Edwin James Villaflor</span><br>
                                </div>

                                <div class="wrapper marTop2">
                                    <h3>GOLDWIN MANUFACTURING LAB, CORP</h3>
                                    <span>Anna Marie Dumrique</span><br>
                                    <span>Wylydiane Pagulayan</span><br>
                                    <span>Edgardo De Guzman</span><br>
                                </div>

                                <div class="wrapper marTop2">
                                    <h3>INGREDIENTS PLUS (THAILAND)</h3>
                                    <span>Arlene Sarmiento</span><br>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </div>

            <!-- 8 -->
            <div class="box-2">
                <div class="container">
                    <div class="row">
                        <div class="grid_12">

                            <div class="row">
                                <div class="grid_4">

                                    <div class="wrapper">
                                        <h3>LAMOIYAN CORPORATION</h3>
                                        <span>Mary Dianne R. Villalon</span><br>
                                    </div>

                                    <div class="wrapper marTop2">
                                        <h3>PRETTY DOLLS INC.</h3>
                                        <span>Xyza Theresse Soriano</span><br>
                                        <br><br>
                                    </div>

                                    <div class="wrapper marTop2">
                                        <h3>GTCOSMETICS MANUFACTURING INC.</h3>
                                        <span>Aljon M. Alivio</span><br>
                                    </div>

                                </div>

                                <div class="grid_4">

                                    <div class="wrapper">
                                        <h3>STEPAN PHILIPPINES QUATERNARIES INC.</h3>
                                        <span>Mardi B. Cabrasawan</span><br>
                                    </div>

                                    <div class="wrapper marTop2">
                                        <h3>LA BELLE MOI INC.</h3>
                                        <span>Jovy Co Ting</span><br>
                                        <span>Michell Ang</span><br>
                                        <span>Kelon Chan</span><br>
                                    </div>

                                    <div class="wrapper marTop2">
                                        <h3>LES QUIMICOS PHILS. INC.</h3>
                                        <span>Aida Peña</span><br>
                                    </div>

                                </div>

                                <div class="grid_4">

                                    <div class="wrapper">
                                        <h3>OXYCHEM CORPORATION</h3>
                                        <span>Fely Margarette B. Bolima</span><br>
                                    </div>

                                    <div class="wrapper marTop2">
                                        <h3>BLAINE PERSONAL AND HOME CARE CORP.</h3>
                                        <span>Janine Galvez Aguilar</span><br>
                                        <br><br>
                                    </div>

                                    <div class="wrapper marTop2">
                                        <h3>Benby Enterprice</h3>
                                        <span>Cecile Ginete</span><br>
                                        <span>Dr. Juan P Sanchez</span><br>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <!-- 9 -->
            <div class="container">

                <div class="row">
                    <div class="grid_12">
                        <div class="row">
                            <div class="grid_4">

                                <div class="wrapper">
                                    <h3>Eyebrow Embroidery Studio</h3>
                                    <span>Cristina P. Marpuri</span><br>
                                </div>

                                <div class="wrapper marTop2">
                                    <h3>WhiteRoom Soapworks</h3>
                                    <span>Pauline Therese B. Ramos</span><br><br>
                                </div>

                                <div class="wrapper marTop2">
                                    <h3>Paanyag Manufacturing</h3>
                                    <span>Pauline Diane Lape</span><br>
                                </div>

                            </div>

                            <div class="grid_4">

                                <div class="wrapper">
                                    <h3>Muriel Beaumetrics Spa</h3>
                                    <span>Muriel E. Magbanua</span><br>
                                </div>

                                <div class="wrapper marTop2">
                                    <h3>C&H Cosmetic Industry</h3>
                                    <span>Henry V. Raca</span><br>
                                    <span>Keitchie D. Santos</span><br>
                                </div>

                                <div class="wrapper marTop2">
                                    <h3>Questta Marketing</h3>
                                    <span>Mariel Ernestine M. Mamac</span><br>
                                </div>

                            </div>

                            <div class="grid_4">

                                <div class="wrapper">
                                    <h3>Island Origin Trading</h3>
                                    <span>Gladiola Ramos</span><br>
                                </div>

                                <div class="wrapper marTop2">
                                    <h3>Zafiran Philippines Inc.</h3>
                                    <span>Kim Tiu Selorio</span><br><br>
                                </div>

                                <div class="wrapper marTop2">
                                    <h3>Dr. Enriquez Clinic</h3>
                                    <span>Jocelyn P. Enriquez</span><br>
                                    <span>Freddie Ortigas</span><br>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </div>

            <!-- 10 -->
            <div class="box-2">
                <div class="container">
                    <div class="row">
                        <div class="grid_12">

                            <div class="row">
                                <div class="grid_4">

                                    <div class="wrapper">
                                        <h3>Dayong Aesthetic Clinic</h3>
                                        <span>Iris M. Yu</span><br>
                                        <span>Bernardita P. Envoltorio</span><br>
                                    </div>

                                    <div class="wrapper marTop2">
                                        <h3>Interphil Laboratories Inc.</h3>
                                        <span>Darell A. Elladora</span><br><br>
                                    </div>

                                    <div class="wrapper marTop2">
                                        <h3>Primecare Lifesciences Laboratories Corp.</h3>
                                        <span>Marites Samson Montevirgen</span><br>
                                    </div>

                                </div>

                                <div class="grid_4">

                                    <div class="wrapper">
                                        <h3>Ecstatic Salon</h3>
                                        <span>Sheryl M.Ona</span><br><br>
                                    </div>

                                    <div class="wrapper marTop2">
                                        <h3>Zen Drops</h3>
                                        <span>Juan Paolo Flores</span><br><br>
                                    </div>

                                    <div class="wrapper marTop2">
                                        <h3>CTC Far East Phils., Inc.</h3>
                                        <span>Andrea Ortiz</span><br>
                                    </div>

                                </div>

                                <div class="grid_4">

                                    <div class="wrapper">
                                        <h3>Nal Master Phils.Inc.</h3>
                                        <span>Lesley Anne C.La Sangre</span><br><br>
                                    </div>

                                    <div class="wrapper marTop2">
                                        <h3>TUPPERWARE BRANDS</h3>
                                        <span>Vangie Ongpao</span><br>
                                        <span>Sheila Canales</span><br>
                                    </div>

                                    <div class="wrapper marTop2">
                                        <h3>JOHNSON AND JOHNSON</h3>
                                        <span>Carlos Galzote</span><br>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <!-- 11 -->
            <div class="container">

                <div class="row">
                    <div class="grid_12">
                        <div class="row">
                            <div class="grid_4">

                                <div class="wrapper">
                                    <h3>CareXHerb</h3>
                                    <span>Agnes Car</span><br>
                                </div>

                                <div class="wrapper marTop2">
                                    <h3>M Facial Care</h3>
                                    <span>Teodora Acusar</span><br>
                                </div>

                                <div class="wrapper marTop2">
                                    <h3>Diversey Philippines Inc.</h3>
                                    <span>Jenyy Rose Nunez</span><br>
                                </div>

                            </div>

                            <div class="grid_4">

                                <div class="wrapper">
                                    <h3>Mhira Organic</h3>
                                    <span>Mirasol P.Bituin</span><br>
                                </div>

                                <div class="wrapper marTop2">
                                    <h3>M Facial Care</h3>
                                    <span>Teodora Acusar</span><br>
                                </div>

                                <div class="wrapper marTop2">
                                    <h3>Regitech Consulting & Services</h3>
                                    <span>Grace Domingo</span><br>
                                    <span>Trina Aquino</span><br>
                                </div>

                            </div>

                            <div class="grid_4">

                                <div class="wrapper">
                                    <h3>Evo Lyz Inc.</h3>
                                    <span>Lea Dimaudtang</span><br>
                                </div>

                                <div class="wrapper marTop2">
                                    <h3>ACO Trinotex</h3>
                                    <span>Celia Ong</span><br>
                                </div>

                                <div class="wrapper marTop2">
                                    <h3>University of Santo Tomas</h3>
                                    <span></span>Joshua Bautista<br>
                                    <span></span>Malou Tan<br>
                                </div>

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