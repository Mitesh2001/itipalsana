@extends('layouts.master')

@section('title')
Gallery Add
@endsection


@section('css')
@endsection

@section('content')
<div class="nk-block nk-block-lg">
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h4 class="title nk-block-title">Gallery Add</h4>
        </div>
    </div>
    <div class="card">
        <div class="card-inner">
             <form method="POST" id="biodata_form" class="form-horizontal" action="{{ route('gallery.store') }}" enctype="multipart/form-data">
                    @csrf
                 <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label" for="clinic_name">Category Name</label>
                            <div class="form-control-wrap">
                                <input type="text" name="category" class="form-control" value="" placeholder="Category Name">
                                @if ($errors->has('category')) 
                                <p style="color:red;">{{ $errors->first('category') }}
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-label" for="gallery_image">Image</label>
                            <div class="form-control-wrap">
                                <input type="file" name="gallery_image" class="form-control" value="" placeholder="Middel Name">
                                @if ($errors->has('gallery_image')) 
                                <p style="color:red;">{{ $errors->first('gallery_image') }}
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>
                   
                   
                    <div class="col-12">
                        <div class="form-group">
                            <button type="submit" id="submit_biodata" onclick="$(this).attr('disabled',true);$(this).html('processing...');" class="btn btn-lg btn-primary">Save</button>
                            <a href="{{ route('gallery.index') }}" type="button" class="btn btn-lg btn-danger">Cancel</a>
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

