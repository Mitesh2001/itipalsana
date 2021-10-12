@extends('layouts.master')
 
@section('title')
Trades Edit
@endsection


@section('css') 
@endsection

@section('content')
<div class="nk-block nk-block-lg">
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h4 class="title nk-block-title">Trades Edit</h4>
        </div>
    </div>
    <div class="card">
        <div class="card-inner">
             <form method="POST" id="biodata_form" class="form-horizontal" action="{{ route('trades.update',$trades->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="hidden_id" class="form-control" value="{{$trades->id}}" placeholder="name">

                 <div class="row g-4">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-label" for="name">Name</label>
                            <div class="form-control-wrap">
                                <input type="text" name="name" class="form-control" value="{{$trades->name}}" placeholder="Name">
                                @if ($errors->has('name')) 
                                <p style="color:red;">{{ $errors->first('name') }}
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-label" for="Seats">Affilated</label>
                            <div class="form-control-wrap">
                                <input type="text" name="affilated" class="form-control" value="{{$trades->affilated}}" placeholder="affilated">
                                @if ($errors->has('affilated')) 
                                <p style="color:red;">{{ $errors->first('affilated') }}
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-label" for="seats">Seats</label>
                            <div class="form-control-wrap">
                                <input type="text" name="seats" class="form-control" value="{{$trades->seats}}" placeholder="Seats">
                                @if ($errors->has('seats')) 
                                <p style="color:red;">{{ $errors->first('seats') }}
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>

                   

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-label" for="batches">Batches</label>
                            <div class="form-control-wrap">
                                <input type="text" name="batches" class="form-control" maxlength="10" value="{{$trades->batches}}" placeholder="batches">
                                @if ($errors->has('batches')) 
                                <p style="color:red;">{{ $errors->first('batches') }}
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-label" for="eligibility">Eligibility</label>
                            <div class="form-control-wrap">
                                <input type="text" name="eligibility" class="form-control" maxlength="10" value="{{$trades->eligibility}}" placeholder="eligibility">
                                @if ($errors->has('eligibility')) 
                                <p style="color:red;">{{ $errors->first('eligibility') }}
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-label" for="duration">Duration</label>
                            <div class="form-control-wrap">
                                <input type="text" name="duration" class="form-control" maxlength="10" value="{{$trades->duration}}" placeholder="duration">
                                @if ($errors->has('duration')) 
                                <p style="color:red;">{{ $errors->first('duration') }}
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-label" for="benefits">Benefits</label>
                            <div class="form-control-wrap">
                                <input type="text" name="benefits" class="form-control" maxlength="10" value="{{$trades->benefits}}" placeholder="benefits">
                                @if ($errors->has('benefits')) 
                                <p style="color:red;">{{ $errors->first('benefits') }}
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-label" for="images">Image</label>
                            <div class="form-control-wrap">
                                <input type="file" name="images[]" multiple="true" class="form-control" value="" >
                                @if ($errors->has('images')) 
                                <p style="color:red;">{{ $errors->first('images') }}
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                                @foreach($image_trades as $images)
                                <img src="<?php echo e(asset($images->image)); ?>" width="100px;" alt="">    
                                @endforeach
                        </div>
                    </div>
                   
                   
                    <div class="col-12">
                        <div class="form-group">
                            <button type="submit" id="submit_biodata" onclick="$(this).attr('disabled',true);$(this).html('processing...');" class="btn btn-lg btn-primary">Save</button>
                            <a href="{{ route('trades.index') }}" type="button" class="btn btn-lg btn-danger">Cancel</a>
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

