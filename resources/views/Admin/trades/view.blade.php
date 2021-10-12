@extends('layouts.master')

@section('title')
Trades View
@endsection


@section('css')
@endsection 

@section('content')
<div class="nk-block nk-block-lg">
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Trades List</h3>
            </div>
            <div class="nk-block-head-content">
                <div class="toggle-wrap nk-block-tools-toggle">  
                    <div class="toggle-expand-content" data-content="pageMenu">
                        <ul class="nk-block-tools g-3">
                            <li class="nk-block-tools-opt">
                                <a href="#" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                                <a href="{{ route('trades.create') }}" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add Tradesy</span></a>
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
                        <th>Affilated</th>
                        <th>Seats</th>
                        <th>Batches</th>
                        <th>Eligibility</th>
                        <th>Duration</th>
                        <th>Benefits</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($trades as $trade)
                        
                    
                    <tr>
                        <td class="tb-odr-action">
                            <div class="dropdown">
                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown" data-offset="-8,0"><em class="icon ni ni-more-h"></em></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                    <ul class="link-list-plain">
                                        <li><a href="{{ route('trades.edit',$trade->id) }}" class="text-primary">Edit</a></li>
                                        <li>
                                            <form method="post" id="deleteform{{$trade->id}}" action="{{ route('trades.destroy',$trade->id) }}">
                                            @csrf
                                            @method("DELETE")
                                            <a href="javascript:;" onclick="document.getElementById('deleteform{{$trade->id}}').submit()" class="text-danger">Remove</a>
                                            </form> 
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                        <td>
                            {{ isset($trade->name) ? $trade->name:'' }}
                        </td>
                        <td>
                            {{ isset($trade->affilated) ? $trade->affilated:'' }}
                        </td>
                        <td>
                            {{ isset($trade->seats) ? $trade->seats:'' }}
                        </td>
                        <td>
                            {{ isset($trade->batches) ? $trade->batches:'' }}
                        </td>
                        <td>
                            {{ isset($trade->eligibility) ? $trade->eligibility:'' }}
                        </td>
                        <td>
                            {{ isset($trade->duration) ? $trade->duration:'' }}
                        </td>
                        <td>
                            {{ isset($trade->benefits) ? $trade->benefits:'' }}
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

