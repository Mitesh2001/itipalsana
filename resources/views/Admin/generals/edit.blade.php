@extends('layouts.master')

@section('title')
General Edit
@endsection


@section('css')
@endsection

@section('content')
<div class="nk-block nk-block-lg">
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h4 class="title nk-block-title">General Edit</h4>
        </div>
    </div>
    <div class="card">
        <div class="card-inner">
             <form method="POST" id="general_form" class="form-horizontal" action="{{ route('general.update',$general->id) }}" enctype="multipart/form-data">
                    @csrf
                      @method('PUT')
                    <input type="hidden" name="hidden_id" value="{{ $general->id }}">
                 <div class="row g-4">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-label" for="key">Key</label>
                            <div class="form-control-wrap">
                                <input type="text" name="key" class="form-control" value="{{$general->key}}" placeholder="Key Name">
                                @if ($errors->has('key')) 
                                <p style="color:red;">{{ $errors->first('key') }}
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                         <div class="form-group">
                            <label class="form-label" for="key">Value</label><a class="float-right" href="Javascript:void(0);" id="image_icon"> <em class="icon ni ni-camera-fill"></em></a>
                            <div class="form-control-wrap">
                                <input type="text" name="value" value="{{$general->value}}" id="text" class="form-control" value="" placeholder="value">

                                <input type="file" name="image" id="image" class="form-control"  >
                                @if ($errors->has('image')) 
                                <p style="color:red;">{{ $errors->first('image') }}
                                </p>
                                @endif
                            </div>
                        </div>


                       {{--  <div class="form-group">
                            <label class="form-label" for="key">Value</label>
                            <div class="form-control-wrap">
                                <input type="text" name="value" class="form-control" value="{{$general->value}}" placeholder="value">
                                @if ($errors->has('value')) 
                                <p style="color:red;">{{ $errors->first('value') }}
                                </p>
                                @endif
                            </div>
                        </div> --}}
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-label" for="status">Status</label>
                            <div class="form-control-wrap">
                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                    <input type="checkbox"  @if($general->status==1){{"checked"}} @endif  class="custom-control-input" name="status" value="1" id="status">
                                    <label class="custom-control-label"  for="status"></label>
                                </div>
                                @if ($errors->has('status')) 
                                <p style="color:red;">{{ $errors->first('status') }}
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>
                  
                   
                    <div class="col-4">
                        <div class="form-group">
                            <button type="submit" id="submit_general" onclick="$(this).attr('disabled',true);$(this).html('processing...');" class="btn btn-lg btn-primary">Save</button>
                            <a href="{{ route('general.index') }}" type="button" class="btn btn-lg btn-danger">Cancel</a>
                        </div>
                    </div>
                    <div class="col-4">
                         @if($general->value)
                            <img src="{{ asset($general->value) }}" width="100px;" alt="">
                          @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection


@section('scripts')

<script type="text/javascript">
    $(document).ready(function(){

        
        $('#image').hide();
      

          $("#image_icon").click(function(){
            if($("#text").attr("type")=="file") {

                $("#text").attr("type","text");
                $("#text").show();
                $("#image").hide();
                $(this).html('<em class="icon ni ni-camera-fill"></em>');
            } else {
               
                $("#text").attr("type","file");
                $("#image").show();
                $("#text").hide();
                 
                $(this).html('<em class="icon ni ni-text2"></em>');
            }
        });
        
        
    });


    $("#submit_general").on('click', function(e) {
       
       
        $("#general_form").submit();
    });
</script>
@endsection

