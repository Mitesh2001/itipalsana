@extends('layouts.master')

@section('title')
Page Edit
@endsection


@section('css')

@endsection

@section('content')
<div class="nk-block nk-block-lg">
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h4 class="title nk-block-title">Page Edit</h4>
        </div>
    </div>
    <div class="card">
        <div class="card-inner">
             <form method="POST" id="general_form" class="form-horizontal" action="{{ route('page.update',$page->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="hidden_id" value="{{ $page->id }}">
                 <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label" for="page_title">Page Title</label>
                            <div class="form-control-wrap">
                                <input type="text" name="page_title" class="form-control" value="{{$page->page_title}}" placeholder="Page Title Name">
                                @if ($errors->has('page_title')) 
                                <p style="color:red;">{{ $errors->first('page_title') }}
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label" for="category">Category</label>
                            <div class="form-control-wrap">
                                <input type="text" name="category" class="form-control" value="{{$page->category}}" placeholder="category Name">
                                @if ($errors->has('category')) 
                                <p style="color:red;">{{ $errors->first('category') }}
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label" for="content">Content</label>
                            <div class="form-control-wrap">
                                <textarea class="form-control form-control-sm" id="fva-message" name="content" placeholder="Content Name" required="">{{$page->content}}</textarea>
                                
                                @if ($errors->has('content')) 
                                <p style="color:red;">{{ $errors->first('content') }}
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-label" for="status">Status</label>
                            <div class="form-control-wrap">
                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                    <input type="checkbox"  @if($page->status==1){{"checked"}} @endif  class="custom-control-input" name="status" value="1" id="status">
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
                            <a href="{{ route('page.index') }}" type="button" class="btn btn-lg btn-danger">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection


@section('scripts')
<script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
<script type="text/javascript">

    CKEDITOR.replace( 'content' );

    $("#submit_general").on('click', function(e) {
        $("#general_form").submit();
    });
</script>
@endsection

