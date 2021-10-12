@extends('layouts.master')

@section('title')
Biodata View
@endsection


@section('css')
@endsection

@section('content')
<div class="nk-block nk-block-lg">
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Biodata List</h3>
            </div>
            {{-- <div class="nk-block-head-content">
                <div class="toggle-wrap nk-block-tools-toggle">  
                    <div class="toggle-expand-content" data-content="pageMenu">
                        <ul class="nk-block-tools g-3">
                            <li class="nk-block-tools-opt">
                                <a href="#" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                                <a href="#" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add Client</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <div class="card card-preview">
        <div class="card-inner">
            <table class="datatable-init table">
                <thead>
                    <tr>
                        <th>Action</th>
                        <th>Name</th>
                        <th>Birth Date</th>
                        <th>Weight:</th>
                         <th>Height</th>
                        <th>Petagor</th>
                        <th>Married Status</th>
                        <th>Petagor Sagpan</th>
                        <th>Education</th>
                        <th>Job/Business</th>
                        <th>Home Address</th>
                        <th>Voice Contac</th>
                        <th>Whatsapp Contact</th>
                       
                    </tr>
                </thead>
                <tbody>
                    @foreach ($biodatas as $biodata)
                        
                    
                    <tr>
                        <td class="tb-odr-action">
                            <div class="dropdown">
                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown" data-offset="-8,0"><em class="icon ni ni-more-h"></em></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                    <ul class="link-list-plain">
                                        <li><a href="{{ route('biodata.edit',$biodata->id) }}" class="text-primary">Edit</a></li>
                                        <li>
                                            <form method="post" id="deleteform" action="{{ route('biodata.destroy',$biodata->id) }}">
                                            @csrf
                                            @method("DELETE")
                                            <a href="javascript:;" onclick="document.getElementById('deleteform').submit()" class="text-danger">Remove</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                        <td>
                            {{ isset($biodata->firstname) ? $biodata->firstname:'' }}
                            {{ isset($biodata->middelname) ? $biodata->middelname:'' }}
                            {{ isset($biodata->lastname) ? $biodata->lastname:'' }}
                        </td>
                        <td>{{ isset($biodata->birth_date) ? $biodata->birth_date:'' }}</td>
                        <td>{{ isset($biodata->weight) ? $biodata->weight:'' }}</td>
                        <td>{{ isset($biodata->height) ? $biodata->height:'' }}</td>
                        <td>{{ isset($biodata->petagor) ? $biodata->petagor:'' }}</td>
                        <td>{{ isset($biodata->married_status) ? $biodata->married_status:'' }}</td>
                        <td>{{ isset($biodata->petagor_sagpan) ? $biodata->petagor_sagpan:'' }}</td>
                        <td>{{ isset($biodata->education) ? $biodata->education:'' }}</td>
                      
                        <td>{{ isset($biodata->job_business) ? $biodata->job_business:'' }}</td>
                        <td>{{ isset($biodata->home_address) ? $biodata->home_address:'' }}</td>
                        <td>{{ isset($biodata->voice_contact) ? $biodata->voice_contact:'' }}</td>
                        <td>{{ isset($biodata->whatsapp_contact) ? $biodata->whatsapp_contact:'' }}</td>
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

