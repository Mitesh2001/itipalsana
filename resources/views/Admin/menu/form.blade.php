@extends('layouts.master')

@section('title')
Menu Add
@endsection


@section('css')

@endsection

@section('content')
<div class="nk-block nk-block-lg">
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h4 class="title nk-block-title">Menu Add</h4>
        </div>
    </div>
    <div class="card">
        <div class="card-inner">
             <form method="POST" id="general_form" class="form-horizontal" action="{{ route('menus.store') }}" enctype="multipart/form-data">
                    @csrf
                 <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label" for="menuName">Menu Name</label>
                            <div class="form-control-wrap">
                                <input type="text" name="menuName" class="form-control" value="{{old('menuName')}}" placeholder="Page Title Name">
                                @if ($errors->has('menuName')) 
                                <p style="color:red;">{{ $errors->first('menuName') }}
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label" for="menuLink">Menu Link</label>
                            <div class="form-control-wrap">
                                <input type="text" name="menuLink" class="form-control" value="{{old('menuLink')}}" placeholder="menuLink Name">
                                @if ($errors->has('menuLink')) 
                                <p style="color:red;">{{ $errors->first('menuLink') }}
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label" for="submenu">Submenu</label>
                            <div class="form-control-wrap">
                                <input type="text" name="submenu" class="form-control" value="{{old('submenu')}}" placeholder="category Name">

                                @if ($errors->has('submenu')) 
                                <p style="color:red;">{{ $errors->first('submenu') }}
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>
                   
                 
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label" for="status">Status</label>
                            <div class="form-control-wrap">
                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                    <input type="checkbox" class="custom-control-input" name="status" value="1" id="status">
                                    <label class="custom-control-label"  for="status"></label>
                                </div>
                                @if ($errors->has('status')) 
                                <p style="color:red;">{{ $errors->first('status') }}
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>
                  
                   
                    <div class="col-12">
                        <div class="form-group">
                            <button type="submit" id="submit_general" onclick="$(this).attr('disabled',true);$(this).html('processing...');" class="btn btn-lg btn-primary">Save</button>
                            <a href="{{ route('menus.index') }}" type="button" class="btn btn-lg btn-danger">Cancel</a>
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


    $("#submit_general").on('click', function(e) {
        $("#general_form").submit();
    });
</script>
@endsection

