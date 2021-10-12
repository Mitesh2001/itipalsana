@extends('client-layouts.master')

@section('page_head')
<link href="{{asset('client-assets/css/product-slider.css')}}" rel="stylesheet" type="text/css"/>
    <script src="{{asset('client-assets/js/product-slider.js')}}" type="text/javascript"></script>
@endsection

@section('content')
<div class="clearfix"></div>	
	<div class="clearfix"></div>
	<div class="container-fluid abtbg">
		<div class="row abtbgrow">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="abttitle">

                        All Updated News
                    </h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container sppagespace">
		<div style="padding-bottom: 20px; font-size: 20px; border-bottom: 1px solid #dcdbda;">All Updated News</div>
		<table cellpadding="0" cellspacing="0" width="100%" style="border: 0px solid red;">
			<tr>
				<td style="color: White; font-size: 14px; padding: 20px;"></td>
			</tr>
		</table> <a href="javascript:history.back()" class="btn btn-default pull-right" style="width: 100px">
    Back</a>
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