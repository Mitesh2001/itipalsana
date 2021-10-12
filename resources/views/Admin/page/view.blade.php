@extends('layouts.master')

@section('title')
Page View 
@endsection


@section('css')
@endsection

@section('content')
<div class="nk-block nk-block-lg">
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Page List</h3>
            </div>
            <div class="nk-block-head-content">
                <div class="toggle-wrap nk-block-tools-toggle">  
                    <div class="toggle-expand-content" data-content="pageMenu">
                        <ul class="nk-block-tools g-3">
                            <li class="nk-block-tools-opt">
                                <a href="#" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                                <a href="{{ route('page.create') }}" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add Page</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-preview">
        <div class="card-inner">
            <table class="datatable-init table">
                <thead>
                    <tr>
                        <th>Action</th>
                        <th>Page-Title</th>
                        <th>category</th>
                      
                        <th>status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pages as $page)
                        
                    
                    <tr>
                        <td class="tb-odr-action">
                            <div class="dropdown">
                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown" data-offset="-8,0"><em class="icon ni ni-more-h"></em></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                    <ul class="link-list-plain">
                                        <li><a href="{{ route('page.edit',$page->id) }}" class="text-primary">Edit</a></li>
                                        <li>
                                            <form method="post" id="deleteform{{$page->id}}" action="{{ route('page.destroy',$page->id) }}">
                                            @csrf
                                            @method("DELETE")
                                            <a href="javascript:;" onclick="document.getElementById('deleteform{{$page->id}}').submit()" class="text-danger">Remove</a>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                        <td>
                            {{ isset($page->page_title) ? $page->page_title:'' }}
                        </td>
                        <td>
                            {{ isset($page->category) ? $page->category:'' }}
                        </td>
                     

                        <td>
                            @if($page->status == "1")
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

