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
						<li data-transition="slidehorizontal" data-slotamount="7" data-masterspeed="300">
							<img src="{{asset('client-assets/images/Welcomeimage/thumb/28001.jpg')}}" class="img-responsive" alt="bg4" data-fullwidthcentering="on">
						</li>
						<li data-transition="slidehorizontal" data-slotamount="7" data-masterspeed="300">
							<img src="{{asset('client-assets/images/Welcomeimage/thumb/75802.jpg')}}" class="img-responsive" alt="bg4" data-fullwidthcentering="on">
						</li>
						<li data-transition="slidehorizontal" data-slotamount="7" data-masterspeed="300">
							<img src="{{asset('client-assets/images/Welcomeimage/thumb/43903.jpg')}}" class="img-responsive" alt="bg4" data-fullwidthcentering="on">
						</li>
						<li data-transition="slidehorizontal" data-slotamount="7" data-masterspeed="300">
							<img src="{{asset('client-assets/images/Welcomeimage/thumb/25104.jpg')}}" class="img-responsive" alt="bg4" data-fullwidthcentering="on">
						</li>
					</ul>
				</div>
			</div>
		</div>
    </div>
@endsection

@section('content')
    <div class="clearfix"></div>    
	<div class="container-fluid">
	
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