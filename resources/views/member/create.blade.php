@extends('layouts.app')
@section('parentPageTitle', 'Member')
@section('title', 'Add Member')

@section('content')
<div class="section-body mt-3">
    <div class="container-fluid">
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
                                <input type="text" class="form-control" placeholder="Name *">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Date of birth *">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Personal email address *">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Telephone number">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Mobile number *">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Address *">
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
                                <input type="text" class="form-control" placeholder="Company name *">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Company email address *">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Position *">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Length of stay *">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Telephone number *">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Company Address *">
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
                                <input type="text" class="form-control" placeholder="Educational attainment *">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="School / University *">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Degree *">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="PRC Number">
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Graduate school">
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
                                <select class="form-control show-tick">
                                    <option style="display:none">How did you learn about PSCS? *</option>
                                    <option>Facebook</option>
                                    <option>Instagram</option>
                                    <option>Invited/Referred by</option>
                                    <option>Renewal</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Who do we thank for inviting you to join PSCS?">
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
                                <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                <span class="custom-control-label">Allow us to retain your data.</span>
                            </label>
                        </div>
                        <div class="col-12">
                            &nbsp;
                        </div>
                        <div class="col-12">
                            <button type="button" class="btn btn-primary">Add</button>
                            <a class="btn btn-secondary" href="{{ route('member.index') }}">Close</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/plugins/sweetalert/sweetalert.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/plugins/sweetalert/sweetalert.min.js') }}"></script>

<script src="{{ asset('assets/js/core.js') }}"></script>
<script src="{{ asset('assets/js/page/dialogs.js') }}"></script>
@stop