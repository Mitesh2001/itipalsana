@extends('layouts.master')

@section('title')
Edit slides
@endsection


@section('css')
@endsection

@section('content')
<div class="nk-block nk-block-lg">
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h4 class="title nk-block-title">slides Edit</h4>
        </div>
    </div>
    <div class="card">
        <div class="card-inner">
             <form method="POST" id="biodata_form" class="form-horizontal" action="{{ route('slides.update',$slide->id) }}" enctype="multipart/form-data">
                    
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="hidden_id" value="{{ $slide->id }}">
                 <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label" for="clinic_name">Title</label>
                            <div class="form-control-wrap">
                                <input type="text" name="title"  class="form-control" value="{{$slide->title}}" placeholder="title Name">
                                @if ($errors->has('title')) 
                                <p style="color:red;">{{ $errors->first('title') }}
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label" for="clinic_name">Sub-title</label>
                            <div class="form-control-wrap">
                                <input type="text" name="subtitle" class="form-control" value="{{$slide->subtitle}}" placeholder="subtitle Name">
                                @if ($errors->has('subtitle')) 
                                <p style="color:red;">{{ $errors->first('subtitle') }}
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label class="form-label" for="slides_image">Image</label>
                            <div class="form-control-wrap">
                                <input type="file" name="slides_image" class="form-control"  placeholder="Middel Name">
                                @if ($errors->has('slides_image')) 
                                <p style="color:red;">{{ $errors->first('slides_image') }}
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                         @if($slide->src)
                            <img src="{{ asset($slide->src) }}" width="100px;" alt="">
                          @endif
                    </div>
                   
                   
                    <div class="col-12">
                        <div class="form-group">
                            <button type="submit" id="submit_biodata" onclick="$(this).attr('disabled',true);$(this).html('processing...');" class="btn btn-lg btn-primary">Save</button>
                            <a href="{{ route('slides.index') }}" type="button" class="btn btn-lg btn-danger">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection


@section('scripts')

<script type="text/javascript">


    $("#submit_biodata").on('click', function(e) {
       
       
        $("#biodata_form").submit();
    });
</script>
@endsection

