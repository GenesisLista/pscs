@extends('layouts.app')
@section('parentPageTitle', 'Member')
@section('title', 'Add New Member')

@section('content')
<div class="section-body mt-3">
    <div class="container-fluid">
        <form class="card" action="{{ route('new.store') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class="tab-content mt-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row clearfix">
                                
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <h6>Personal Information</h6>
                                <hr>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name *" value="{{ old('name') }}" autofocus>
                                    @if($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <input type="text" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth') }}" data-provide="datepicker" data-date-autoclose="true" class="form-control" placeholder="Date of birth" onkeydown="return false">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <input type="text" id="personal_email_address" name="personal_email_address" value="{{ old('personal_email_address') }}" class="form-control" placeholder="Personal email address">
                                    @if($errors->has('personal_email_address'))
                                    <span class="text-danger">{{ $errors->first('personal_email_address') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <input type="text" id="telephone_number" name="telephone_number" value="{{ old('telephone_number') }}" class="form-control" placeholder="Telephone number">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <input type="text" id="mobile_number" name="mobile_number" value="{{ old('mobile_number') }}" class="form-control" placeholder="Mobile number">
                                    @if($errors->has('mobile_number'))
                                    <span class="text-danger">{{ $errors->first('mobile_number') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <input type="text" id="address" name="address" value="{{ old('address') }}" class="form-control" placeholder="Address">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="row clearfix">
                                
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <h6>Work Information</h6>
                                <hr>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <input type="text" id="company_name" name="company_name" value="{{ old('company_name') }}" class="form-control" placeholder="Company name *">
                                    @if($errors->has('company_name'))
                                    <span class="text-danger">{{ $errors->first('company_name') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <input type="text" id="company_email_address" name="company_email_address" value="{{ old('company_email_address') }}" class="form-control" placeholder="Company email address">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <input type="text" id="position" name="position" value="{{ old('position') }}" class="form-control" placeholder="Position">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <input type="text" id="length_of_stay" name="length_of_stay" value="{{ old('length_of_stay') }}" class="form-control" placeholder="Length of stay">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <input type="text" id="company_telephone_number" name="company_telephone_number" value="{{ old('company_telephone_number') }}" class="form-control" placeholder="Telephone number">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <input type="text" id="company_address" name="company_address" value="{{ old('company_address') }}" class="form-control" placeholder="Company Address">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="row clearfix">
                                
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <h6>School Information</h6>
                                <hr>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <select class="form-control show-tick" id="educational_attainment" name="educational_attainment">
                                        <option value="" style="display:none">Educational attainment</option>
                                        @foreach($educational_attainment as $educationalattainment)
                                        <option value="{{ $educationalattainment->id }}" {{ old('educational_attainment') == $educationalattainment->id ? 'selected' : ''}}> {{ $educationalattainment->name }} </option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('educational_attainment'))
                                    <span class="text-danger">{{ $errors->first('educational_attainment') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <input type="text" id="school_university" name="school_university" value="{{ old('school_university') }}" class="form-control" placeholder="School / University">
                                    @if($errors->has('school_university'))
                                    <span class="text-danger">{{ $errors->first('school_university') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <input type="text" id="degree" name="degree" value="{{ old('degree') }}" class="form-control" placeholder="Degree">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <input type="text" id="prc_number" name="prc_number" value="{{ old('prc_number') }}" class="form-control" placeholder="PRC Number">
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-12">
                                <div class="form-group">
                                    <input type="text" id="graduate_school" name="graduate_school" value="{{ old('graduate_school') }}" class="form-control" placeholder="Graduate school">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="row clearfix">
                               
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <h6>Other Information</h6>
                                <hr>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <select class="form-control show-tick" id="social_media" name="social_media">
                                        <option value="" style="display:none">How did you learn about PSCS?</option>
                                        @foreach($social_media as $socialmedia)
                                        <option value="{{ $socialmedia->id }}" {{ old('social_media') == $socialmedia->id ? 'selected' : ''}}> {{ $socialmedia->name }} </option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('social_media'))
                                    <span class="text-danger">{{ $errors->first('social_media') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-12">
                                <div class="form-group">
                                    <input type="text" id="who_to_thank" name="who_to_thank" value="{{ old('who_to_thank') }}" class="form-control" placeholder="Who do we thank for inviting you to join PSCS?">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="row clearfix">
                                
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <h6>Data Privacy Notice</h6>
                                <hr>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <p>Information collected from this form will be used to facilitate your application as PSCS Member with following purposes:</p>

                                <p>
                                    A. <strong>Purpose of Collection</strong>
                                    <br>Full Name - name of applicant
                                    <br>Email Address - where we can contact you to send updates and announcements
                                    <br>Mobile Number - additional contact information
                                </p>

                                <p>
                                    B. <strong>Data Storage and Retention</strong>
                                    <br>Your data is stored within our website and email address book.
                                    <br>We will retain your information during your entire PSCS membership.
                                </p>

                                <p>Please indicate if you wish for your data to be deleted when your memberships expires, or if you wish to be retained in our database to receive future updates and invitations.</p>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" id="allow_retain" name="allow_retain" class="custom-control-input" value="1" checked>
                                    <span class="custom-control-label">Allow us to retain your data.</span>
                                </label>
                            </div>
                            <div class="col-12">
                                &nbsp;
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Add</button>
                                <a class="btn btn-secondary" href="{{ route('new.index') }}">Close</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/plugins/sweetalert/sweetalert.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/plugins/sweetalert/sweetalert.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('assets/js/core.js') }}"></script>
<script src="{{ asset('assets/js/page/dialogs.js') }}"></script>

<script type="text/javascript">
    $('#date_of_birth'
    ).datepicker({
        format: "mm/dd/yyyy", // or what ever format your want
        calendarWeeks: true,
        todayHighlight: true,
        clearBtn: true,
        autoclose: true,
        language: 'en',
        keepEmptyValues: false
    });
</script>
@stop