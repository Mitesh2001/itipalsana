@extends('layouts.master')

@section('title')
General View
@endsection


@section('css')
<style type="text/css" media="screen">
#text-wrap
{
    
    white-space:normal!important;
  
}
</style>    
@endsection

@section('content')
<div class="nk-block nk-block-lg">
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">General List</h3>
            </div>
            <div class="nk-block-head-content">
                <div class="toggle-wrap nk-block-tools-toggle">  
                    <div class="toggle-expand-content" data-content="pageMenu">
                        <ul class="nk-block-tools g-3">
                            <li class="nk-block-tools-opt">
                                <a href="#" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                                <a href="{{ route('general.create') }}" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add General</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-preview">
        <div class="card-inner">
            <table class="datatable-init table"  style="table-layout: fixed; width: 100%">
                <thead>
                    <tr>
                        <th>Action</th>
                        <th>Key</th>
                        <th>value</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($generals as $general)
                        
                    
                    <tr>
                        <td class="tb-odr-action">
                            <div class="dropdown">
                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown" data-offset="-8,0"><em class="icon ni ni-more-h"></em></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                    <ul class="link-list-plain">
                                        <li><a href="{{ route('general.edit',$general->id) }}" class="text-primary">Edit</a></li>
                                        <li>
                                            <form method="post" id="deleteform{{$general->id}}" action="{{ route('general.destroy',$general->id) }}">
                                            @csrf
                                            @method("DELETE")
                                            <a href="javascript:;" onclick="document.getElementById('deleteform{{$general->id}}').submit()" class="text-danger">Remove</a>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                        <td>
                            {{ isset($general->key) ? $general->key:'' }}
                        </td>
                        <td id="text-wrap" >
                            {{ isset($general->value) ? $general->value:'' }}
                        </td>
                        <td>
                            @if($general->status == "1")
                                 <div class="tb-tnx-status"><span class="badge badge-dot badge-success">Active</span></div>
                              @else
                              <div class="tb-tnx-status"><span class="badge badge-dot badge-danger">Inactive</span></div>
                                 @endif
                        </td>
                            
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection


@section('script')

@endsection

