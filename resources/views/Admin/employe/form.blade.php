@extends('layouts.master')
 
@section('title')
Employe Add
@endsection


@section('css')
@endsection

@section('content')
<div class="nk-block nk-block-lg">
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h4 class="title nk-block-title">Employe Add</h4>
        </div>
    </div>
    <div class="card">
        <div class="card-inner">
             <form method="POST" id="biodata_form" class="form-horizontal" action="{{ route('employe.store') }}" enctype="multipart/form-data">
                    @csrf
                 <div class="row g-4">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-label" for="name">Name</label>
                            <div class="form-control-wrap">
                                <input type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="Name">
                                @if ($errors->has('name')) 
                                <p style="color:red;">{{ $errors->first('name') }}
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-label" for="designation">Designation</label>
                            <div class="form-control-wrap">
                                <input type="text" name="designation" class="form-control" value="{{old('designation')}}" placeholder="Designation">
                                @if ($errors->has('designation')) 
                                <p style="color:red;">{{ $errors->first('designation') }}
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-label" for="class">Class</label>
                            <div class="form-control-wrap">
                                <input type="text" name="class" class="form-control" value="{{old('class')}}" placeholder="Class">
                                @if ($errors->has('class')) 
                                <p style="color:red;">{{ $errors->first('class') }}
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-label" for="Bio">Bio</label>
                            <div class="form-control-wrap">
                                <input type="text" name="bio" class="form-control" value="{{old('bio')}}" placeholder="bio Name">
                                @if ($errors->has('bio')) 
                                <p style="color:red;">{{ $errors->first('bio') }}
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-label" for="contact">Contact</label>
                            <div class="form-control-wrap">
                                <input type="text" name="contact" class="form-control" maxlength="10" value="{{old('contact')}}" placeholder="Contact">
                                @if ($errors->has('contact')) 
                                <p style="color:red;">{{ $errors->first('contact') }}
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-label" for="employe_image">Image</label>
                            <div class="form-control-wrap">
                                <input type="file" name="employe_image" class="form-control" value="" >
                                @if ($errors->has('employe_image')) 
                                <p style="color:red;">{{ $errors->first('employe_image') }}
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>
                   
                   
                    <div class="col-12">
                        <div class="form-group">
                            <button type="submit" id="submit_biodata" onclick="$(this).attr('disabled',true);$(this).html('processing...');" class="btn btn-lg btn-primary">Save</button>
                            <a href="{{ route('employe.index') }}" type="button" class="btn btn-lg btn-danger">Cancel</a>
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

