@php
	foreach($generals as $general)
	{
		$data[$general->key] = $general->value;
	}
@endphp

@extends('client-layouts.master')

@section('page_head')
<link href="{{asset('client-assets/css/product-slider.css')}}" rel="stylesheet" type="text/css"/>
    <script src="{{asset('client-assets/js/product-slider.js')}}" type="text/javascript"></script>
@endsection

@section('slider')
<div class="about-slider-area p-2" style="background-color:#d5edf5">
    <center>
    <div style="width:90%">
        <div class="slider1-area">
            <div class="bend niceties preview-1">
                <div id="ensign-nivoslider-3" class="slides">
                @foreach($slides as $slide)
                    <img src="{{asset($slide->src)}}" alt="slider" title="#slider-direction-1"/>
                @endforeach
                </div>
            </div>
        </div>
    </div>
    </center>
</div>
@endsection

@section('content')
<div class="clearfix"></div>
	<div id="displayrow">
        <div class="about1-area" style="background-color:#addded">
            <div class="container">
                <h1 class="about-title wow fadeIn" data-wow-duration="1s" data-wow-delay=".2s">Welcome To Govt ITI Palsana,Gujarat</h1>
                <p class="about-sub-title wow fadeIn" data-wow-duration="1s" data-wow-delay=".2s">The Directorate General Of Employment &amp; Training, New Delhi (D.g.e.&amp;t.) Of The Ministry Of Labour Is To Provide The Skilled Man-power With Vocational Training For The Various Industries &amp; Service Sectors. It Is Being Conducted At Different I.t.i.s Including Industrial Training Institute, Palsana.In Today's Era Industrialization Is Developing Statewide And Nation.
                <br>Industrial Training Institute &amp; Skill Certification Center, Palsana is a Technical Knowledge Center and Our Aim is To Provide Job Oriented &amp; Knowledge Based Technical Skill That Can Give The Trainee A Unique Identity Creating An Edge Above Others. We Are Dedicated Towards Imparting Globally Competitive Skill &amp; Soft Skill Training To Make Them Achieve The Best In Their Life.</p>
                <div class="about-img-holder wow fadeIn" data-wow-duration="2s" data-wow-delay=".2s">
                    <img src="{{asset($data["Institute_palsana"])}}" alt="about" class="img-responsive" />
                </div>
            </div>
        </div>
        <div class="lecturers-page-area" style="background-color:#62ddf0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="lecturers-contact-info">
                            <img src="{{asset($principal->image)}}"" class="img-responsive" alt="team">
                            <h4>{{ isset($principal->name) ? $principal->name:'' }}</h4>
                            <h4>PRINCIPAL ({{ isset($principal->class) ? $principal->class:'' }})</h4>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                        <h3 class="title-default-left title-bar-big-left-close">Principal Desk</h3>
                        <p>{{ isset($principal->bio) ? $principal->bio:'' }}</p>
                        <h4 class="title-default-left title-bar-big-left-close">Qualifications</h4>
                        <ul class="course-feature2">
                            <li>Research the conditions of urbanism</li>
                            <li>Employ advanced design techniques</li>
                            <li>Lens of landscape theory and design practice</li>
                            <li>Employ advanced design techniques</li>
                            <li>Innovative methodologies</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
		<br>
	</div>
    <div class="courses1-area">
        <div class="container">
            <h2 class="title-default-left">Institute Avilable Trades</h2>
        </div>
        <div id="shadow-carousel" class="container">
            <div class="rc-carousel" data-loop="true" data-items="4" data-margin="20" data-autoplay="false" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="2" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="3" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="4" data-r-large-nav="true" data-r-large-dots="false">
                @foreach($trades as $trade)
                <div class="courses-box1">
                    <div class="single-item-wrapper">
                        <div class="courses-img-wrapper">
                            <img class="img-responsive" src="{{asset($trade->GetImage()->image)}}" alt="courses">
                        </div>
                        <div class="courses-content-wrapper">
                            <h3 class="item-title"><a href="#">ELECTRONICS MECHANIC (GIRLS)</a></h3>
                            <ul class="courses-info">
                                <li>Seats :
                                    <span> {{ isset($trade->seats) ? $trade->seats:'' }}</span></li>
                                <li>Eligibility :
                                    <span> {{ isset($trade->eligibility) ? $trade->eligibility:'' }}</span></li>
                                <li>Batches :
                                    <span> {{ isset($trade->batches) ? $trade->batches:'' }}</span></li>
                                <li>Duration :
                                    <span> {{ isset($trade->duration) ? $trade->duration:'' }}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
	<div class="container-fluid changebg12" id="mele-mydesign10" style="background-color:#37b1db;">
		<div class="row">
			<div class="container hdcolor changebg13" id="mele-mydesign10div1" style="background-color: #37b1db;">
				<div class="row">
					<div class="col-xs-12 text-center">
						<h2 class="title sim-row-edit" data-type="title" id="mele-mydesign10-title1changetitle13" style="color: rgb(255, 255, 255);">Please Submit your complain regarding to ITI Grievance Redressal Mechanism!</h2>
						<div class="clearfix"></div> <span class="title sim-row-edit" data-type="text" id="mele-mydesign10-text1changetext13" style="color: rgb(255, 255, 255);">Submit Your Online Complain Regarding ITI.</span>
						<div class="clearfix"></div> <a href="#" class="link sim-row-edit" data-type="linkborder" id="mele-mydesign10-link1" style="color: rgb(255, 255, 255); background-color: #122329; border-color: rgb(255, 255, 255); border-width: 0px; border-radius: 0px; font-size: 16px;">Submit Complain</a>
					</div>
				</div>
			</div>
		</div>
    </div><br>
    <div class="gallery-area1" style="background-color:#8cdaf5">
        <div class="container">
            <h2 class="title-default-center">Photogallery</h2>
        </div>
        <div class="container">
            <div class="row gallery-wrapper">
            @foreach($gallerys as $gallery)
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="gallery-box">
                        <img src="{{asset($gallery->image)}}" class="img-responsive" alt="gallery">
                        <div class="gallery-content">
                            <a href="{{asset($gallery->image)}}" class="zoom"><i class="fa fa-link" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
@endsection

@section('page_script')
<script>
    var tpj = jQuery;
var revapi1;
tpj(document).ready(function () {
    if (tpj.fn.cssOriginal !== undefined)
        tpj.fn.css = tpj.fn.cssOriginal;
    if (tpj('#rev_slider_1_1').revolution === undefined)
        revslider_showDoubleJqueryError('#rev_slider_1_1');
    else
        revapi1 = tpj('#rev_slider_1_1').show().revolution(
        {
            delay: 9000,
            startwidth: 1170,
            startheight: 390,
            hideThumbs: 200,
            thumbWidth: 100,
            thumbHeight: 50,
            thumbAmount: 4,
            navigationType: "none",
            navigationArrows: "solo",
            navigationStyle: "round",
            touchenabled: "on",
            onHoverStop: "on",
            navigationHAlign: "center",
            navigationVAlign: "bottom",
            navigationHOffset: 0,
            navigationVOffset: 20,
            soloArrowLeftHalign: "left",
            soloArrowLeftValign: "center",
            soloArrowLeftHOffset: 20,
            soloArrowLeftVOffset: 0,
            soloArrowRightHalign: "right",
            soloArrowRightValign: "center",
            soloArrowRightHOffset: 20,
            soloArrowRightVOffset: 0,
            shadow: 2,
            fullWidth: "on",
            stopLoop: "off",
            stopAfterLoops: -1,
            stopAtSlide: -1,
            shuffle: "off",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            startWithSlide: 0
        });
        }); //ready

		$(document).ready(function () {
            $("#flexiselDemo2").flexisel({
                visibleItems: 1,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 10000,
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: {
                    portrait: {
                        changePoint: 480,
                        visibleItems: 1
                    },
                    landscape: {
                        changePoint: 640,
                        visibleItems: 1
                    },
                    tablet: {
                        changePoint: 768,
                        visibleItems: 1
                    }
                }
            });
        });
        $(document).ready(function () {
		 //$('#myModal').modal('show');
		});
</script>
@endsection
