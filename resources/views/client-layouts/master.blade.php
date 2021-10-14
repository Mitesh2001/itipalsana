@php
	$generals = App\Models\general::all();
	foreach($generals as $general)
	{
		$data[$general->key] = $general->value;
	}
@endphp
<!DOCTYPE html>
<html>
<!-- Mirrored from itiPALSANA.org/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Oct 2020 05:27:49 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<!-- /Added by HTTrack -->

<head>
	<meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>GOVT ITI PALSANA</title>
	<link rel="icon" href="{{asset('client-assets/images/Fevicon_Image/index.html')}}" type="image/x-icon" />
	<meta name="description" content="GOVT ITI PALSANA">
	<meta name="keywords" content="GOVT ITI PALSANA">
	<meta name="author" content="GOVT ITI PALSANA">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--bootstrap & Js-->
	<link href="{{asset('client-assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
	<script src="{{asset('client-assets/js/jquery.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('client-assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('client-assets/js/menuscript.js')}}" type="text/javascript"></script>
	<link href="{{asset('client-assets/css/slider.css')}}" rel="stylesheet" type="text/css" />
	<script src="{{asset('client-assets/js/jquery.themepunch.plugins.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('client-assets/js/jquery.themepunch.revolution.min.js')}}" type="text/javascript"></script>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Play' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="{{asset('client-assets/css/DarkBlueTheme.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('client-assets/css/mystyleFormenu.css')}}" rel="stylesheet" type="text/css" />
	<script src="{{asset('client-assets/js/DisplayHome.Index.js')}}" type="text/javascript"></script>
	<link href="{{asset('client-assets/css/loading.css')}}" rel="stylesheet" type="text/css" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon.png')}}">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <!-- Font-awesome CSS-->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <!-- Owl Caousel CSS -->
    <link rel="stylesheet" href="{{asset('vendor/OwlCarousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/OwlCarousel/owl.theme.default.min.css')}}">
    <!-- Main Menu CSS -->
    <link rel="stylesheet" href="{{asset('css/meanmenu.min.css')}}">
    <!-- nivo slider CSS -->
    <link rel="stylesheet" href="{{asset('vendor/slider/css/nivo-slider.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('vendor/slider/css/preview.css')}}" type="text/css" media="screen" />
    <!-- Datetime Picker Style CSS -->
    <link rel="stylesheet" href="{{asset('css/jquery.datetimepicker.css')}}">
    <!-- Magic popup CSS -->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <!-- Switch Style CSS -->
    <link rel="stylesheet" href="{{asset('css/hover-min.css')}}">
    <!-- ReImageGrid CSS -->
    <link rel="stylesheet" href="{{asset('css/reImageGrid.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <!-- Modernizr Js -->
    <script src="{{asset('js/modernizr-2.8.3.min.js')}}"></script>
	<script type="text/javascript">
		document.onreadystatechange = function () {
		            var state = document.readyState
		            if (state == 'complete') {
		                document.getElementById('interactive');
		                document.getElementById('load').style.visibility = "hidden";
		            }
		        }

		$(document).ready(function () {
		            var $affectedElements = $("p, a, FONTS, h1, h2, h3, h4, h5, h6, table, td, span, b, strong");
		            $affectedElements.each(function () {
		                var $this = $(this);
		                $this.data("orig-size", $this.css("font-size"));
		            });
		            $("#btn-increase").click(function () {
		                changeFontSize(1);
		            });
		            $("#btn-decrease").click(function () {
		                changeFontSize(-1);
		            });
		            $("#btn-orig").click(function () {
		                $affectedElements.each(function () {
		                    var $this = $(this);
		                    $this.css("font-size", $this.data("orig-size"));
		                });
		            });
		            function changeFontSize(direction) {
		                $affectedElements.each(function () {
		                    var $this = $(this);
		                    $this.css("font-size", parseInt($this.css("font-size")) + direction);
		                });
		            }
		        });
		        function googleTranslateElementInit() {
		            new google.translate.TranslateElement({ pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE }, 'google_translate_element');
		        }
	</script>
	<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>@yield('page_head')
</head>
<script src="{{asset('client-assets/js/marquee.min.js')}}" type="text/javascript"></script>
@yield('page_script')
<body>
	{{-- <div id="preloader"></div> --}}
	<header>
        <div id="header1" class="header1-area">
            <div class="main-menu-area bg-primary" id="sticker">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-3">
                            <div class="logo-area">
                                <a href="/"><img class="img-responsive" src="{{asset('img/logo.png')}}" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-10 col-sm-9">
                            <nav id="desktop-nav">
                                <ul>
                                    <li class="active">
                                        <a href="/">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{url('index/1')}}">Trades</a>
                                    </li>
                                    <li>
                                        <a href="#">Training</a>
                                        <ul>
                                            <li><a href="{{ url('index/2') }}">Admission Criteria </a></li>
                                            <li><a href="{{ url('index/3') }}">Industry Linkage </a></li>
                                            <li><a href="{{ url('index/4') }}">Schemes running in the INSTITUTE (CTS and MES etc .under NCVT) </a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#.">Administration </a>
                                        <ul>
                                            <li><a href="{{ url('index/5') }}">Staff Details</a></li>
                                            <li><a href="{{ url('index/6') }}">Grievance Mechanisms</a></li>
                                            <li><a href="{{ url('index/7') }}">Tender-Advertisement</a></li>
                                            <li><a href="{{ url('index/8') }}">Placement Advisory Bureau</a>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#.">PPP</a>
                                        <ul>
                                            <li><a href="{{ url('index/9') }}">IMC Committee Members</a></li>
                                            <li><a href="{{ url('index/10') }}">MOU</a></li>
                                            <li><a href="{{ url('index/11') }}">Events</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#.">Infrastructure</a>
                                        <ul>
                                            <li>
                                                <a href="{{ url('index/12') }}">Infrastructure, Building and workshop</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#.">Gallery </a>
                                        <ul>
                                            <li> <a href="{{ url('index/13') }}">Photo Gallery </a>
                                            <li> <a href="{{ url('index/14') }}">Video Gallery </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li> <a href="{{ url('index/15') }}">Download </a>
                                    </li>
                                    <li> <a href="{{ url('contact-us') }}">Contact Us </a>
                                    </li>
                                    <li> <a href="{{ url('feedback') }}">Feedback </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul>
                                    <li>
                                        <a href="#">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{url('index/1')}}">Trades</a>
                                    </li>
                                    <li>
                                        <a href="#">Training</a>
                                        <ul>
                                            <li><a href="{{ url('index/2') }}">Admission Criteria </a></li>
                                            <li><a href="{{ url('index/3') }}">Industry Linkage </a></li>
                                            <li><a href="{{ url('index/4') }}">Schemes running in the INSTITUTE (CTS and MES etc .under NCVT) </a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#.">Administration </a>
                                        <ul>
                                            <li><a href="{{ url('index/5') }}">Staff Details</a></li>
                                            <li><a href="{{ url('index/6') }}">Grievance Mechanisms</a></li>
                                            <li><a href="{{ url('index/7') }}">Tender-Advertisement</a></li>
                                            <li><a href="{{ url('index/8') }}">Placement Advisory Bureau</a>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#.">PPP</a>
                                        <ul>
                                            <li><a href="{{ url('index/9') }}">IMC Committee Members</a></li>
                                            <li><a href="{{ url('index/10') }}">MOU</a></li>
                                            <li><a href="{{ url('index/11') }}">Events</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#.">Infrastructure</a>
                                        <ul>
                                            <li>
                                                <a href="{{ url('index/12') }}">Infrastructure, Building and workshop</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#.">Gallery </a>
                                        <ul>
                                            <li> <a href="{{ url('index/13') }}">Photo Gallery </a>
                                            <li> <a href="{{ url('index/14') }}">Video Gallery </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li> <a href="{{ url('index/15') }}">Download </a>
                                    </li>
                                    <li> <a href="{{ url('contact-us') }}">Contact Us </a>
                                    </li>
                                    <li> <a href="{{ url('feedback') }}">Feedback </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('slider')
    @yield('content')
    <footer>
        <div class="footer-area-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="footer-box">
                            <h3>Quick Contact :</h3>
                            <ul class="corporate-address">
                                <li><i class="fa fa-phone" aria-hidden="true"></i><a>{{$data["contact"]}} </a></li>

                                <li><i class="fa fa-envelope-o" aria-hidden="true"><a href="mailto:{{$data['email']}}"></i>{{$data["email"]}}</a></li>
                            </ul>
                            <h3>Visitor Counter :</h3>
                            <div style="border: 0px solid red; height: 40px; background-color: White; vertical-align: middle; padding-left: 20px; width: 200px">
                                <a href="#" style="border: 0px solid red; font-size: 25px;">
                                    <img src="http://www.cutercounter.com/hit.php?id=gmoanko&amp;nd=9&amp;style=28" alt="" title="" border="0">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="footer-box">
                            <h3>Featured Links</h3>
                            <ul class="featured-links">
                                <li>
                                    <ul>
                                        <li><a href="#">Graduation</a></li>
                                        <li><a href="#">Admissions</a></li>
                                        <li><a href="https://www.theidioms.com">Idioms</a></li>
                                        <li><a href="#">FAQs</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <li><a href="#">Courses</a></li>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Book store</a></li>
                                        <li><a href="#">Alumni</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="footer-box">
                            <h3>Address :</h3>
                            <div class="footer-about">
                                <p>{{$data["Address"]}}<br/></p>
                                <p style="color:white;border: 1px solid white;border-radius:35px;padding: 10px;">Last Update on : {{$data["Last-Update"]}}</p>
                            </div>
                            <ul class="footer-social">
                                <li><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-area-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p>&copy; Copyright {{$data["Copyright"]}} | Designed & Developed By : <a href="http://www.gujaratigraphics.com/" target="_blank">{{$data["Designed-by"]}}</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
	<div class="clearfix"></div>
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Covid-19 Awareness </h4>
				</div>
				<div class="modal-body">
					<p>
						<p style="text-align: center;">
							<!-- <img class="img-responsive" src="assets/images/UploadedImage/RealImage/242poster.jpg" />-->
						</p>
					</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
    <script src="{{asset('js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>
    <!-- Plugins js -->
    <script src="{{asset('js/plugins.js')}}" type="text/javascript"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
    <!-- WOW JS -->
    <script src="js/wow.min.js"></script>
    <!-- Nivo slider js -->
    <script src="{{asset('vendor/slider/js/jquery.nivo.slider.js')}}" type="text/javascript"></script>
    <script src="{{asset('vendor/slider/home.js')}}" type="text/javascript"></script>
    <!-- Owl Cauosel JS -->
    <script src="{{asset('vendor/OwlCarousel/owl.carousel.min.js')}}" type="text/javascript"></script>
    <!-- Meanmenu Js -->
    <script src="{{asset('js/jquery.meanmenu.min.js')}}" type="text/javascript"></script>
    <!-- Srollup js -->
    <script src="{{asset('js/jquery.scrollUp.min.js')}}" type="text/javascript"></script>
    <!-- jquery.counterup js -->
    <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js/waypoints.min.js')}}"></script>
    <!-- Countdown js -->
    <script src="{{asset('js/jquery.countdown.min.js')}}" type="text/javascript"></script>
    <!-- Isotope js -->
    <script src="{{asset('js/isotope.pkgd.min.js')}}" type="text/javascript"></script>
    <!-- Magic Popup js -->
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}" type="text/javascript"></script>
    <!-- Gridrotator js -->
    <script src="{{asset('js/jquery.gridrotator.js')}}" type="text/javascript"></script>
    <!-- Custom Js -->
    <script src="{{asset('js/main.js')}}" type="text/javascript"></script>
</body>
</html>
