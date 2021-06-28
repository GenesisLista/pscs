<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>PSCS - Membership form</title>
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
                                                <li><a href="{{ url('board-of-directors') }}">Board of Directors</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0)">Projects<strong></strong></a>
                                            <ul class='submenu'>
                                                <li><a href="https://youtu.be/rPLnqCVVHNo?autoplay=0&rel=0"
                                                        target="_blank">Cosmetic Garden</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ url('news-and-events') }}">News &amp;
                                                events<strong></strong></a></li>
                                    </ul>
                                </nav>

                                <ul class="soc_icons">
                                    <li><a href="https://www.facebook.com/groups/213264668770406/" target="_blank"><i
                                                class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://www.youtube.com/channel/UCixDzVfrzY7hhyfSFAbrrag/"
                                            target="_blank"><i class="fa fa-youtube"></i></a></li>
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
                
                @if(session('success_add'))
                <h2 class="no_line"> {{ session('success_add') }} </h2>
                @endif

                <div class="row">
                    <div class="grid_12">
                        <h2 class="v3">Membership form</h2>
                        <form id="contact-form" action="{{ route('membership.store') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                            <!-- 1 -->
                            <div class="row">

                                <div class="grid_4">
                                    <h3 class="v3">Personal Information</h3>
                                    <div class="wrapper">
                                        <label class="name">
                                            <input id="name" name="name" type="text" placeholder="Name *" value="{{ old('name') }}"/>
                                            @if($errors->has('name'))
                                            <span style="color:red;">{{ $errors->first('name') }}</span>
                                            @endif
                                        </label>
                                    </div>

                                    <div class="wrapper">
                                        <label class="telephone_number">
                                            <input id="telephone_number" name="telephone_number" type="text"
                                                placeholder="Telephone number" value="{{ old('telephone_number') }}"/>
                                            @if($errors->has('telephone_number'))
                                            <span style="color:red;">{{ $errors->first('telephone_number') }}</span>
                                            @endif    
                                        </label>
                                    </div>
                                </div>

                                <div class="grid_4">
                                    <h3 class="v3">&nbsp;</h3>
                                    <div class="wrapper">
                                        <label class="date_of_birth">
                                            <input id="date_of_birth" name="date_of_birth" type="text"
                                                placeholder="Date of birth * (mm/dd/yyyy)" value="{{ old('date_of_birth') }}"/>
                                            @if($errors->has('date_of_birth'))
                                            <span style="color:red;">{{ $errors->first('date_of_birth') }}</span>
                                            @endif    
                                        </label>
                                    </div>

                                    <div class="wrapper">
                                        <label class="name">
                                            <input id="mobile_number" name="mobile_number" type="text"
                                                placeholder="Mobile number *" value="{{ old('mobile_number') }}"/>
                                            @if($errors->has('mobile_number'))
                                            <span style="color:red;">{{ $errors->first('mobile_number') }}</span>
                                            @endif    
                                        </label>
                                    </div>
                                </div>

                                <div class="grid_4">
                                    <h3 class="v3">&nbsp;</h3>
                                    <div class="wrapper">
                                        <label class="personal_email_address">
                                            <input id="personal_email_address" name="personal_email_address" type="email"
                                                placeholder="Personal email address *" value="{{ old('personal_email_address') }}"/>
                                            @if($errors->has('personal_email_address'))
                                            <span style="color:red;">{{ $errors->first('personal_email_address') }}</span>
                                            @endif
                                        </label>
                                    </div>

                                    <div class="wrapper">
                                        <label class="address">
                                            <input id="address" name="address" type="text" placeholder="Address *" value="{{ old('address') }}"/>
                                            @if($errors->has('address'))
                                            <span style="color:red;">{{ $errors->first('address') }}</span>
                                            @endif
                                        </label>
                                    </div>
                                </div>

                            </div>

                            <!-- 2 -->
                            <div class="row">

                                <div class="grid_4">
                                    <h3 class="v3">Work Information</h3>
                                    <div class="wrapper">
                                        <label class="company_name">
                                            <input id="company_name" name="company_name" type="text"
                                                placeholder="Company name *" value="{{ old('company_name') }}"/>
                                            @if($errors->has('company_name'))
                                            <span style="color:red;">{{ $errors->first('company_name') }}</span>
                                            @endif    
                                        </label>
                                    </div>

                                    <div class="wrapper">
                                        <label class="length_of_stay">
                                            <input id="length_of_stay" name="length_of_stay" type="text"
                                                placeholder="Length of stay *" value="{{ old('length_of_stay') }}"/>
                                            @if($errors->has('length_of_stay'))
                                            <span style="color:red;">{{ $errors->first('length_of_stay') }}</span>
                                            @endif    
                                        </label>
                                    </div>
                                </div>

                                <div class="grid_4">
                                    <h3 class="v3">&nbsp;</h3>
                                    <div class="wrapper">
                                        <label class="company_email_address">
                                            <input id="company_email_address" name="company_email_address" type="email"
                                                placeholder="Company email address *" value="{{ old('company_email_address') }}"/>
                                            @if($errors->has('company_email_address'))
                                            <span style="color:red;">{{ $errors->first('company_email_address') }}</span>
                                            @endif     
                                        </label>
                                    </div>

                                    <div class="wrapper">
                                        <label class="company_telephone_number">
                                            <input id="company_telephone_number" name="company_telephone_number"
                                                type="text" placeholder="Telephone number *" value="{{ old('company_telephone_number') }}"/>
                                            @if($errors->has('company_telephone_number'))
                                            <span style="color:red;">{{ $errors->first('company_telephone_number') }}</span>
                                            @endif    
                                        </label>
                                    </div>
                                </div>

                                <div class="grid_4">
                                    <h3 class="v3">&nbsp;</h3>
                                    <div class="wrapper">
                                        <label class="position">
                                            <input id="position" name="position" type="text" placeholder="Position *" value="{{ old('position') }}"/>
                                            @if($errors->has('position'))
                                            <span style="color:red;">{{ $errors->first('position') }}</span>
                                            @endif    
                                        </label>
                                    </div>

                                    <div class="wrapper">
                                        <label class="company_address">
                                            <input id="company_address" name="company_address" type="text"
                                                placeholder="Company address *" value="{{ old('company_address') }}"/>
                                            @if($errors->has('company_address'))
                                            <span style="color:red;">{{ $errors->first('company_address') }}</span>
                                            @endif      
                                        </label>
                                    </div>
                                </div>

                            </div>

                            <!-- 3 -->
                            <div class="row">

                                <div class="grid_4">
                                    <h3 class="v3">School Information</h3>
                                    <div class="wrapper">
                                        <label>
                                            <select class="learn_about_pscs" id="educational_attainment"
                                                name="educational_attainment" style="height: 30px;">
                                                <option value="" style="display:none">Select one</option>
                                                @foreach($education as $educ)
                                                <option value="{{ $educ->id }}"{{ old('educational_attainment') == $educ->id ? 'selected':'' }}>{{ $educ->name }}</option>
                                                @endforeach
                                            </select>    
                                        </label>
                                    </div>

                                    <div class="wrapper">
                                        <label class="prc_number">
                                            <input id="prc_number" name="prc_number" type="text"
                                                placeholder="PRC Number" value="{{ old('prc_number') }}"/>
                                        </label>
                                    </div>
                                </div>

                                <div class="grid_4">
                                    <h3 class="v3">&nbsp;</h3>
                                    <div class="wrapper">
                                        <label class="school_university">
                                            <input id="school_university" name="school_university" type="text"
                                                placeholder="School / University *" value="{{ old('school_university') }}"/>
                                            @if($errors->has('company_address'))
                                            <span style="color:red;">{{ $errors->first('company_address') }}</span>
                                            @endif      
                                        </label>
                                    </div>

                                    <div class="wrapper">
                                        <label class="graduate_school">
                                            <input id="graduate_school" name="graduate_school" type="text"
                                                placeholder="Graduate school" value="{{ old('graduate_school') }}"/>
                                        </label>
                                    </div>
                                </div>

                                <div class="grid_4">
                                    <h3 class="v3">&nbsp;</h3>
                                    <div class="wrapper">
                                        <label class="degree">
                                            <input id="degree" name="degree" type="text" placeholder="Degree *" value="{{ old('degree') }}"/>
                                            @if($errors->has('degree'))
                                            <span style="color:red;">{{ $errors->first('degree') }}</span>
                                            @endif    
                                        </label>
                                    </div>

                                    <div class="wrapper">
                                        <label class="">
                                            &nbsp;
                                        </label>
                                    </div>
                                </div>

                            </div>

                            <!-- 3 -->
                            <div class="row">

                                <div class="grid_3">
                                    <h3 class="v3">Other Information</h3>
                                    <div class="wrapper">
                                        <label>
                                            <select class="learn_about_pscs" id="social_media"
                                                name="social_media" style="height: 40px;">
                                                <option value="" style="display:none">Select one</option>
                                                @foreach($media as $medias)
                                                <option value="{{ $medias->id }}" {{ old('social_media') == $medias->id ? 'selected':'' }}>{{ $medias->name }}</option>
                                                @endforeach
                                            </select>
                                        </label>
                                    </div>
                                </div>

                                <div class="grid_9">
                                    <h3 class="v3">&nbsp;</h3>
                                    <div class="wrapper">
                                        <label class="learn_about_pscs">
                                            <input id="learn_about_pscs" name="learn_about_pscs" type="text"
                                                placeholder="Who do we thank for inviting you to join PSCS?" value="{{ old('learn_about_pscs') }}"/>
                                        </label>
                                    </div>
                                </div>

                            </div>

                            <!-- 4 -->
                            <div class="row">

                                <div class="grid_12">
                                    <h3 class="v3">Other Information</h3>
                                    <span>Information collected from this form will be used to facilitate your
                                        application as PSCS Member with following purposes:</span>
                                    <br />
                                    <span class="txt6">A. Purpose of Collection</span>
                                    <span>Full Name - name of applicant</span>
                                    <span>Email Address - where we can contact you to send updates and
                                        announcements</span>
                                    <span>Mobile Number - additional contact information</span>
                                    <br />
                                    <span class="txt6">B. Data Storage and Retention</span>
                                    <span>Your data is stored within our website and email address book.</span>
                                    <span>We will retain your information during your entire PSCS membership.</span>
                                    <br />
                                    <span>Please select allow if you wish for your data to be deleted when your
                                        memberships expires, or if you wish to be retained in our database to receive
                                        future updates and invitations.</span>
                                </div>

                            </div>

                            <div class="row">
                                <div class="grid_3">
                                    <div class="wrapper">
                                        <label>
                                            <select class="learn_about_pscs" id="allow_retain"
                                                name="allow_retain" style="height: 40px;">
                                                @foreach($retention as $retentions)
                                                <option value="{{ $retentions->id }}" {{ old('allow_retain') == $retentions->id ? 'selected':'' }}>{{ $retentions->name }}</option>
                                                @endforeach
                                            </select>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <br/>

                            <div class="row">
                                <div class="grid_3">
                                    <div class="wrapper">
                                        <button type="submit" class="more_btn bg5"> Submit </button>    
                                    </div>
                                </div>
                            </div>
                        </form>
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
                            <li class="current"><a href="{{ url('/') }}">Home<strong></strong></a></li>
                            <li><a href="{{ url('why-join-us') }}">About us<strong></strong></a></li>
                            <li><a href="https://youtu.be/rPLnqCVVHNo?autoplay=0&rel=0"
                                    target="_blank">Projects<strong></strong></a></li>
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