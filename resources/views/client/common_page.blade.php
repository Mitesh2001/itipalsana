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
                        {{ isset($data->page_title) ? $data->page_title:'' }}
                    </h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container sppagespace">
		<div style="padding-bottom: 20px; font-size: 20px; border-bottom: 1px solid #dcdbda;">  {{ isset($data->category) ? $data->category:'' }} </div>
		@if(isset($data->category))
		{!!$data->content!!}
        @endif
	</div>
@endsection

@section('page_script')

@endsection
