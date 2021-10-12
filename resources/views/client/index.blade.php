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
<div class="clearfix"></div>
	<div class="container-fluid">
		<div class="row">
			<div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="background-color: #ffffff;">
				<div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="">
					<ul>
						@foreach($slides as $slide)
						<li data-transition="slidehorizontal" data-slotamount="7" data-masterspeed="300">
							<img src="{{asset($slide->src)}}" class="img-responsive" alt="bg4" data-fullwidthcentering="on">
						</li>
						@endforeach
					
					</ul>
				</div>
			</div>
		</div>
    </div>
@endsection

@section('content')
<div class="clearfix"></div>    
	<div class="container-fluid">
		<div class="row" style="background-color: #efefee;">
			<div class="container">
				<div class="col-md-2 col-sm-3 hidden-xs news">NEWS & UPDATES</div>
				<div class="col-md-9 col-sm-7 col-xs-12 newstext">
					<div class="marquee"></div>
					<script src="{{asset($data["header_image"])}}" type="text/javascript"></script>
					<script>
						$('.marquee').marquee({
						                            duration: 20000,
						                            gap: 0,
						                            delayBeforeStart: 0,
						                            direction: 'left',
						                            pauseOnHover: true,
						                            duplicated: true
						                        });
					</script>
				</div>
				<div class="clearfix hidden-lg hidden-md hidden-sm visible-xs"></div>
				<div class="col-md-1 col-sm-2 news text-center" style="padding-left: 0; padding-right: 0;"> <a href="news_index.html" style="color: white;">All News </a>
				</div>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div id="displayrow">
	
		<div class="container-fluid changebg23" id="con-mydesign10" style="background-color: #ffffff;">
			<div class="row">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center" id="con-mydesign10-div1"> <a href="#" class="sim-row-edit" data-type="link" id="con-mydesign10-link1changelink23" style="color: rgb(255, 255, 255); background-color: rgb(67, 67, 67);">Download Bankable Loan Form</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid changebg1" id="itiele-mydesign9" style="background-color: #ffffff;">
			<div class="row">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="buildingdiv">
								<div class="sim-row-edit" data-type="image">
									<img style="height:300px;" src="{{asset($data["Institute_palsana"])}}" alt="ITI Building" class="img-responsive">
								</div>
							</div>
						</div>
						<div class="col-md-6 text-left">
							<h3 class="sim-row-edit" data-type="title" id="itiele-mydesign9-title1changetitle1" style="">Welcome To Govt ITI Palsana,Gujarat</h3>
							<div class="sim-row-edit" data-type="editor">
								<p>The Directorate General Of Employment &amp; Training, New Delhi (D.g.e.&amp;t.) Of The Ministry Of Labour Is To Provide The Skilled Man-power With Vocational Training For The Various Industries &amp; Service Sectors. It Is Being Conducted At Different I.t.i.s Including Industrial Training Institute, Palsana.In Today's Era Industrialization Is Developing Statewide And Nation.
									<br>Industrial Training Institute &amp; Skill Certification Center, Palsana is a Technical Knowledge Center and Our Aim is To Provide Job Oriented &amp; Knowledge Based Technical Skill That Can Give The Trainee A Unique Identity Creating An Edge Above Others. We Are Dedicated Towards Imparting Globally Competitive Skill &amp; Soft Skill Training To Make Them Achieve The Best In Their Life.</p>
							</div>
							<div class="notshow"> <a href="#" class="sim-row-edit" data-type="link" id="itiele-mydesign9-link1changelink1" style="">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid changebg24" id="itiele-mydesign5" style="background-color: rgb(28, 69, 135);">
			<div class="row">
				<div class="container">
					<div class="row">
						<div class="col-sm-3 righttext">
							<h2 class="name sim-row-edit text-center" data-type="title" id="itiele-mydesign5-title1changetitle24" style="color: rgb(255, 255, 255);">Principal Desk</h2>
							<div class="clearfix"></div>
							<h3 class="pridesi priname sim-row-edit" data-type="title" id="itiele-mydesign5-title2changetitle24" style="color: rgb(255, 255, 255);">{{ isset($principal->name) ? $principal->name:'' }} </h3>
							<div class="clearfix"></div>
							<h3 class="pridesi sim-row-edit" data-type="title" id="itiele-mydesign5-title3changetitle24" style="color: rgb(255, 255, 255);">PRINCIPAL ({{ isset($principal->class) ? $principal->class:'' }})</h3>
						</div>
						<div class="col-sm-4 col-sm-push-5 col-md-push-5 col-lg-push-5">
							<div class="text-center">
								<div class="image sim-row-edit" data-type="image">
									<img src="{{asset($principal->image)}}" style="height:220px;" alt="ITI Principal">
								</div>
							</div>
						</div>
						<div class="col-sm-5 col-sm-pull-4 col-md-pull-4 col-lg-pull-4">
							<div class="sim-row-edit" data-type="editor">
								<p> <font color="#FFFFFF">{{ isset($principal->bio) ? $principal->bio:'' }}</font>
								</p>
							</div>
							<div class="clearfix"></div>
							<div class="text-left notshow"> <a href="#" class="sim-row-edit links" data-type="link" id="itiele-mydesign5-link1changelink24" style="">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><br>
		<div class="container-fluid changebg9" id="he-mydesign10" style="background-color: #ffffff;">
			<div class="row">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="titlebrdr">
								<div class="titlediv">
									<h3 class="text-center sim-row-edit" data-type="title" id="he-mydesign10-title1changetitle9" style="color: rgb(0, 0, 0);">Institute Avilable Trades</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid changebg10" id="itiele-mydesign11" style="background-color: #ffffff;">
		<div class="row">
			<div class="container">
				<div class="row">
					@foreach($trades as $trade)
					<div class="col-sm-4">
						<div class="tradediv">
							<div> <a href="#" class="sim-row-edit tradename" data-type="link" id="itiele-mydesign11-tread2changelink10" style="color: rgb(255, 255, 255); background-color: rgb(204, 65, 37); font-weight: bold; letter-spacing: 1px;">ELECTRONICS MECHANIC (GIRLS)</a>
							</div>
							<div class="clearfix"></div>
							<div class="brdr">
								<div class="image sim-row-edit" data-type="image">
									
									<img src="{{asset($trade->GetImage()->image)}}" alt="ITI Principal" class="img-responsive">
								</div>
							</div>
							<div class="clearfix"></div>
							<div> <a href="#" class="sim-row-edit tradename" data-type="link" id="itiele-mydesign11-ncvt2changelink10" style="color: rgb(255, 255, 255); background-color: rgb(3, 19, 34);">{{ isset($trade->affilated) ? $trade->affilated:'' }}</a>
							</div>
							<div class="clearfix"></div>
							<div class="infodiv">
								<table>
									<tbody>
										<tr>
											<td> <strong class="sim-row-edit" data-type="title" id="itiele-mydesign11-seatst21changetitle10" style="color: #333333;">
                                                                                    Seats : </strong><span class="sim-row-edit" data-type="title" id="itiele-mydesign11-seats21changetitle10" style="">{{ isset($trade->seats) ? $trade->seats:'' }}</span>
											</td>
											<td> <strong class="sim-row-edit" data-type="title" id="itiele-mydesign11-seatst22changetitle10" style="color: #333333;">
                                                                                    Eligibility : </strong><span class="sim-row-edit" data-type="title" id="itiele-mydesign11-seats22changetitle10" style="color: #333333;">{{ isset($trade->eligibility) ? $trade->eligibility:'' }}</span>
											</td>
										</tr>
										<tr>
											<td> <strong class="sim-row-edit" data-type="title" id="itiele-mydesign11-seatst23changetitle10" style="color: #333333;">
                                                                                    Batches : </strong><span class="sim-row-edit" data-type="title" id="itiele-mydesign11-seats23changetitle10" style="color: #333333;">{{ isset($trade->batches) ? $trade->batches:'' }}</span>
											</td>
											<td> <strong class="sim-row-edit" data-type="title" id="itiele-mydesign11-seatst24changetitle10" style="color: #333333;">
                                                                                    Duration : </strong><span class="sim-row-edit" data-type="title" id="itiele-mydesign11-seats24changetitle10" style="color: #333333;">{{ isset($trade->duration) ? $trade->duration:'' }}</span>
											</td>
										</tr>
									</tbody>
								</table>
								<div class="clearfix"></div>
								<div class="benifitdiv">
									<div class="sim-row-edit" data-type="editor">
										<div style="display: block; font-size: 16px; font-weight: 600; line-height: 18px;
                                                                                padding-bottom: 4px;">Benefits :</div>
										<p style="font-size: 14px; line-height: 20px;">{{ isset($trade->benefits) ? $trade->benefits:'' }}
											<br>
										</p>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
							<div> <a href="#" class="sim-row-edit syllabus" data-type="link" id="itiele-mydesign11-view2changelink10" style="color: #ffffff; background-color: #575757;">View Syllabus</a>
							</div>
							<div class="clearfix"></div>
							<div> <a href="#" class="sim-row-edit syllabus" data-type="link" id="itiele-mydesign11-avl2changelink10" style="color: #ffffff; background-color: #6b6b6b;">Available Equipment &amp; Machinery</a>
							</div>
							<div class="clearfix"></div>
							<div> <a href="#" class="sim-row-edit syllabus" data-type="link" id="itiele-mydesign11-super2changelink10" style="color: #ffffff; background-color: #7e7e7e;">Trade Supervisor</a>
							</div>
							<div class="clearfix"></div>
							<div> <a href="#" class="sim-row-edit syllabus" data-type="link" id="itiele-mydesign11-gallery2changelink10" style="color: #ffffff; background-color: #939393;">Trade Gallery</a>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					@endforeach
					
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid changebg12" id="mele-mydesign10" style="background-color: rgb(204, 65, 37);">
		<div class="row">
			<div class="container hdcolor changebg13" id="mele-mydesign10div1" style="background-color: rgb(204, 65, 37);">
				<div class="mainbgdiv sim-row-edit" data-type="bg" data-id="changebg13">
					<h4>
                                                            Change Background Color</h4>
				</div>
				<div class="row">
					<div class="col-xs-12 text-center">
						<h2 class="title sim-row-edit" data-type="title" id="mele-mydesign10-title1changetitle13" style="color: rgb(255, 255, 255);">Please Submit your complain regarding to ITI Grievance Redressal Mechanism!</h2>
						<div class="clearfix"></div> <span class="title sim-row-edit" data-type="text" id="mele-mydesign10-text1changetext13" style="color: rgb(255, 255, 255);">Submit Your Online Complain Regarding ITI.</span>
						<div class="clearfix"></div> <a href="#" class="link sim-row-edit" data-type="linkborder" id="mele-mydesign10-link1" style="color: rgb(255, 255, 255); background-color: rgb(252, 177, 0); border-color: rgb(255, 255, 255); border-width: 0px; border-radius: 0px; font-size: 16px;">Submit Complain</a>
					</div>
				</div>
			</div>
		</div>
    </div><br>
    <div class="container-fluid changebg15" id="he-mydesign10" style="background-color: #ffffff;">
                                                        <div class="row">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="titlebrdr">
                                                                            <div class="titlediv">
                                                                                <h3 class="text-center sim-row-edit" data-type="title" id="he-mydesign10-title1changetitle15" style="color: rgb(0, 0, 0);">Photogallery</h3>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
     </div>
     <div class="container-fluid changebg17" id="con-mydesign17" style="background-color: #ffffff;">
            <div class="row">
                <div class="container">
                    <div class="row">
						@foreach($gallerys as $gallery)
                        <div class="col-sm-4 col-xs-12">
                            <div class="text-center">
                                <div class="image sim-row-edit" data-type="image">
									<img src="{{asset($gallery->image)}}" alt="" class="img-responsive">
									<center>{{ isset($gallery->category) ? $gallery->category:'' }}</center>
                                </div>
                            </div>
						</div>
						@endforeach
                    </div>
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