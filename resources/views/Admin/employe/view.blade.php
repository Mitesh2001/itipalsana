@extends('layouts.master')

@section('title')
Employe View
@endsection


@section('css')
@endsection 

@section('content')
<div class="nk-block nk-block-lg">
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Employe  List</h3>
            </div>
            <div class="nk-block-head-content">
                <div class="toggle-wrap nk-block-tools-toggle">  
                    <div class="toggle-expand-content" data-content="pageMenu">
                        <ul class="nk-block-tools g-3">
                            <li class="nk-block-tools-opt">
                                <a href="#" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                                <a href="{{ route('employe.create') }}" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add Employe</span></a>
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
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Class</th>
                        <th>Bio</th>
                        <th>Contact</th>
                        <th>Image</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employes as $employe)
                        
                    
                    <tr>
                        <td class="tb-odr-action">
                            <div class="dropdown">
                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown" data-offset="-8,0"><em class="icon ni ni-more-h"></em></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                    <ul class="link-list-plain">
                                        <li><a href="{{ route('employe.edit',$employe->id) }}" class="text-primary">Edit</a></li>
                                        <li>
                                            <form method="post" id="deleteform{{$employe->id}}" action="{{ route('employe.destroy',$employe->id) }}">
                                            @csrf
                                            @method("DELETE")
                                            <a href="javascript:;" onclick="document.getElementById('deleteform{{$employe->id}}').submit()" class="text-danger">Remove</a>
                                        </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                        <td>
                            {{ isset($employe->name) ? $employe->name:'' }}
                        </td>
                        <td>
                            {{ isset($employe->designation) ? $employe->designation:'' }}
                        </td>
                        <td>
                            {{ isset($employe->class) ? $employe->class:'' }}
                        </td>
                        <td>
                            {{ isset($employe->bio) ? $employe->bio:'' }}
                        </td>
                        <td>
                            {{ isset($employe->contact) ? $employe->contact:'' }}
                        </td>

                        <td>
                            @if($employe->image)
                            <img src="{{ asset($employe->image) }}" width="50px;" alt="">
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

