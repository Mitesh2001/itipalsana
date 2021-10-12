@extends('layouts.master')

@section('title')
Biodata Edit
@endsection


@section('css')
@endsection

@section('content')
<div class="nk-block nk-block-lg">
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h4 class="title nk-block-title">Biodata Edit</h4>
        </div>
    </div>
    <div class="card">
        <div class="card-inner">
             <form method="POST" id="biodata_form" class="form-horizontal" action="{{route('biodata.update',$biodata->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="hidden_id" value="{{ $biodata->id }}" placeholder="">
                <div class="row g-4">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-label" for="clinic_name">First Name</label>
                            <div class="form-control-wrap">
                                <input type="text" name="firstname" class="form-control" value="{{ $biodata->firstname }}" placeholder="First Name">
                                @if ($errors->has('firstname')) 
                                <p style="color:red;">{{ $errors->first('firstname') }}
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-label" for="start_date">Middel Name</label>
                            <div class="form-control-wrap">
                                <input type="text" name="middelname" class="form-control" value="{{ $biodata->middelname }}" placeholder="Middel Name">
                                @if ($errors->has('middelname')) 
                                <p style="color:red;">{{ $errors->first('middelname') }}
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-label" for="phone-no-1">Last Name</label>
                            <div class="form-control-wrap">
                                <input type="text" name="lastname" class="form-control" value="{{ $biodata->lastname }}" placeholder="Last Name">
                                @if ($errors->has('lastname')) 
                                <p style="color:red;">{{ $errors->first('lastname') }}
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-label" for="birth_date">Birth Date</label>
                            <div class="form-control-wrap">
                                <input type="date" name="birth_date" id="birth_date" class="form-control" placeholder="Birth Date For" value="{{ $biodata->birth_date }}">
                                @if ($errors->has('birth_date')) 
                                <p style="color:red;">{{ $errors->first('birth_date') }}
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-label" for="height">Height</label>
                            <div class="form-control-wrap">
                                <input type="number" name="height" id="height" class="form-control" placeholder="Height" value="{{ $biodata->height }}">
                                @if ($errors->has('height')) 
                                <p style="color:red;">{{ $errors->first('height') }}
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-label" for="weight">Weight</label>
                            <div class="form-control-wrap">
                                <input type="text" name="weight" id="weight" class="form-control" placeholder="Weight" value="{{ $biodata->weight }}">
                                @if ($errors->has('weight')) 
                                <p style="color:red;">{{ $errors->first('weight') }}
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-label" for="weight">Married Status</label>
                            <div class="form-control-wrap">
                                <input type="text" name="married_status" id="married_status" class="form-control" placeholder="Married Status" value="{{ $biodata->married_status }}">
                                @if ($errors->has('married_status')) 
                                <p style="color:red;">{{ $errors->first('married_status') }}
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-label" for="petagor">Petagor</label>
                            <div class="form-control-wrap">
                                <input type="text" name="petagor" id="petagor" class="form-control" placeholder="Petagor" value="{{ $biodata->petagor }}">
                                @if ($errors->has('petagor')) 
                                <p style="color:red;">{{ $errors->first('petagor') }}
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-label" for="petagor">Petagor Sagpan</label>
                            <div class="form-control-wrap">
                                <input type="text" name="petagor_sagpan" id="petagor_sagpan" class="form-control" placeholder="Petagor Sagpan" value="{{ $biodata->petagor_sagpan }}">
                                @if ($errors->has('petagor_sagpan')) 
                                <p style="color:red;">{{ $errors->first('petagor_sagpan') }}
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>
                      <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-label" for="petagor">Education</label>
                            <div class="form-control-wrap">
                                <input type="text" name="education" id="education" class="form-control" placeholder="Education" value="{{ $biodata->education }}">
                                @if ($errors->has('education')) 
                                <p style="color:red;">{{ $errors->first('education') }}
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-label" for="job_business">job or Business</label>
                            <div class="form-control-wrap">
                                <input type="text" name="job_business" id="job_business" class="form-control" placeholder="job or Business" value="{{ $biodata->job_business }}">
                                @if ($errors->has('job_business')) 
                                <p style="color:red;">{{ $errors->first('job_business') }}
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-label" for="petagor">Voice Contact</label>
                            <div class="form-control-wrap">
                                <input type="text" name="voice_contact" id="voice_contact" class="form-control" placeholder="Voice Contact" value="{{ $biodata->voice_contact }}">
                                @if ($errors->has('voice_contact')) 
                                <p style="color:red;">{{ $errors->first('voice_contact') }}
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-label" for="petagor">Whatsapp Contact</label>
                            <div class="form-control-wrap">
                                <input type="text" name="whatsapp_contact" id="whatsapp_contact" class="form-control" placeholder="Whatsapp Contact" value="{{ $biodata->whatsapp_contact }}">
                                @if ($errors->has('whatsapp_contact')) 
                                <p style="color:red;">{{ $errors->first('whatsapp_contact') }}
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="form-label" for="petagor">Home Address</label>
                            <div class="form-control-wrap">
                                 <textarea class="form-control" name="home_address" id="home_address" placeholder="Home Address">{{ $biodata->home_address }}</textarea>
                                @if ($errors->has('home_address')) 
                                <p style="color:red;">{{ $errors->first('whatsapp_contact') }}
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-12">
                        <div class="form-group">
                            <button type="submit" id="submit_biodata" onclick="$(this).attr('disabled',true);$(this).html('processing...');" class="btn btn-lg btn-primary">Save</button>
                            <a href="{{ route('biodata.index') }}" type="button" class="btn btn-lg btn-danger">Cancel</a>
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

