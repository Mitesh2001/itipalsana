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
	<div id="load"></div>
	<div class="container-fluid" style="background-color: #efefef;">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div style="padding: 4px; float: left;">
							<div id="google_translate_element"></div>
						</div>
					</div>
					<div class="col-sm-6">
						<div style="padding: 6px; float: right;">
							<button class="btn btn-sm btn-info" id="btn-decrease" style="padding: 0 10px; font-size: 14px;">A -</button>
							<button class="btn btn-sm btn-success" id="btn-orig" style="padding: 0 10px; font-size: 14px;">A</button>
							<button class="btn btn-sm btn-danger" id="btn-increase" style="padding: 0 10px; font-size: 14px;">A +</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid top-bg">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 top-contact"> <i class="fa fa-phone" aria-hidden="true"></i>&nbsp; {{$data["contact"]}} &nbsp;&nbsp;&nbsp;&nbsp; <a href="mailto:prlpalsanaiti[at]yahoo[dot]co[dot]in" style="white-space: nowrap;"><i class="fa fa-envelope"
                            aria-hidden="true"></i>&nbsp; {{$data["email"]}}</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<a href="Homepage.html" style="border:0px">
					<img src="{{asset('client-assets/images/Facilities/RealImage/849TITLE.jpg')}}" class="img-responsive" alt="GOVT ITI PALSANA">
				</a>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="container-fluid menubg">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div id='cssmenu'>
							<div class="logo"> <a href="#">Menu </a>
								<div class="ddmenu-button"></div>
							</div>
							<ul>
								<li id=28> <a href="{{ url('/') }}">Home </a>
								</li>
								<li id=29> <a href="{{ url('index/1') }}">Trades </a>
								</li>
								
								<li id=31> <a href="#.">Training </a>
									<ul>
										<li id=42> <a href="{{ url('index/2') }}">Admission Criteria </a>
										</li>
										<li id=42> <a href="{{ url('index/3') }}">Industry Linkage </a>
										</li>
										<li id=42> <a href="{{ url('index/4') }}">Schemes running in the INSTITUTE (CTS and MES etc .under NCVT) </a>
										</li>
									</ul>
								</li>
								<li id=32> <a href="#.">Administration </a>
									<ul>
										<li id=45> <a href="{{ url('index/5') }}">Staff Details</a></li>
										<li id=45> <a href="{{ url('index/6') }}">Grievance Mechanisms</a></li>
										<li id=45> <a href="{{ url('index/7') }}">Tender-Advertisement</a></li>
										<li id=45> <a href="{{ url('index/8') }}">Placement Advisory Bureau</a></li>
									</ul>
								</li>
								<li id=35> <a href="#.">PPP</a>
									<ul>
									<li id=45> <a href="{{ url('index/9') }}">IMC Committee Members</a></li>
									<li id=45> <a href="{{ url('index/10') }}">MOU</a></li>
									<li id=45> <a href="{{ url('index/11') }}">Events</a></li>
									</ul>
								</li>
								<li id=35> <a href="#.">Infrastructure</a>
									<ul>
									<li id=45> <a href="{{ url('index/12') }}">Infrastructure, Building and workshop</a></li>
									</ul>
								</li>
								<li id=40> <a href="#.">Gallery </a>
									<ul>
										<li id=41> <a href="{{ url('index/13') }}">Photo Gallery </a>
										<li id=41> <a href="{{ url('index/14') }}">Video Gallery </a>
										
										</li>
									</ul>
								</li>
							
								<li id=34> <a href="{{ url('index/15') }}">Download </a>
								</li>
								<li id=33> <a href="{{ url('contact-us') }}">Contact Us </a>
								</li>
								<li id=33> <a href="{{ url('feedback') }}">Feedback </a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
    @yield('slider')
    @yield('content')
    <div class="container-fluid footerbg">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-sm-4 footercol">
						<h3>
                                                                    Address</h3>
						<p>{{$data["Address"]}}
							
							<br/>
						</p>
						<div style="padding: 10px 10px 0 10px; border: 1px solid Yellow; display: inline-block;">
							<p style="color:Yellow;">Last Update on : {{$data["Last-Update"]}}</p>
						</div>
					</div>
					<div class="col-sm-4 footercol">
						<h3>
                             Quick Contact</h3>
						<p>Tel : {{$data["contact"]}}
							<br />Mob : {{$data["Mobile-no"]}}
							
							<br />Email : <a href="mailto:{{$data['email']}}">{{$data["email"]}}</a>
							<br />
						</p>
					</div>
					<div class="col-sm-4 footercol">
						<h3>
                                                                    Visitor Counter</h3>
						<div style="border: 0px solid red; height: 40px; background-color: White; vertical-align: middle;
                                                                    padding-left: 20px; width: 200px">
							<a href="#" style="border: 0px solid red; font-size: 25px;">
								<img src="http://www.cutercounter.com/hit.php?id=gmoanko&amp;nd=9&amp;style=28" alt="" title="" border="0">
							</a>
							<br />
						</div>
						<div style="height: 10px"></div> <a href="#"><i class="fa fa-facebook-square"></i></a>
						<a href="#"> <i class="fa fa-twitter-square"></i>
						</a>&nbsp;<a href="#"><i class="fa fa-google-plus-square">
                         </i></a>&nbsp;<a href="#" target="_blank"><i class="fa fa-instagram"></i></a>&nbsp;<a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
						<div class="clearfix" style="padding-top: 6px;"></div>
						<img src="{{asset('client-assets/images/htmlvalid.gif')}}" alt="Html Valid" />&nbsp;&nbsp;
						<img src="{{asset('client-assets/images/cssvalid.gif')}}" alt="Html Valid" />
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center pcube">Copyright {{$data["Copyright"]}} | Designed & Developed By : <a href="http://www.gujaratigraphics.com/" target="_blank">{{$data["Designed-by"]}}</a>
			</div>
		</div>
	</div>
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
</body>
<!-- Mirrored from itiPALSANA.org/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 25 Oct 2020 05:30:39 GMT -->

</html>