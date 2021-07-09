@extends('layouts.app')
@section('parentPageTitle', 'Member')
@section('title', 'Member Detail')

@section('content')
<div class="section-body mt-3">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12">
                <div class="card c_grid c_yellow">
                    <div class="card-body text-center">
                        <div class="circle">
                            <img class="rounded-circle" src="{{ asset('assets/images/sm/avatar1.jpg') }}" alt="">
                        </div>
                        <h6 class="mt-3 mb-0">{{ $newmembership->name }}</h6>
                        <span>Member Since 2018</span>
                        <ul class="mt-3 list-unstyled d-flex justify-content-center">
                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-slack"></i></a></li>
                            <li><a class="p-3" target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Membership Information</h3>
                        <div class="card-options">
                            <div class="item-action dropdown ml-2">
                                <a href="javascript:void(0)" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <p class="mb-0">July 16, 2018 - New Member</p>
                            </li>
                            <li class="list-group-item">
                                <p class="mb-0">July 16, 2019 - Renewal</p>
                            </li>
                            <li class="list-group-item">
                                <p class="mb-0">July 16, 2020 - Renewal</p>
                            </li>
                            <li class="list-group-item">
                                <p class="mb-0">July 16, 2021 - Renewal</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Personal Information</h3>
                        <div class="card-options">
                            <div class="item-action dropdown ml-2">
                                <a href="javascript:void(0)" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="{{ route('new.issue_soa', $newmembership->id) }}" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> SOA</a>
                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-edit"></i> Approved</a>
                                    <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="dropdown-item"><i class="dropdown-icon fa fa-trash"></i> Delete</a>
                                    <form method="post" action="{{ route('new.destroy', $newmembership->id) }}">
                                        @method('DELETE')
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <span><strong>Name</strong></span><br>
                                <span>{{ $newmembership->name }}</span> 
                            </div>
                            <div class="col-md-4 text-center">
                                <span><strong>Date of birth</strong></span><br>
                                <span>{{ $newmembership->date_of_birth }}</span> 
                            </div>
                            <div class="col-md-4 text-center">
                                <span><strong>Personal email address</strong></span><br>
                                <span>{{ $newmembership->personal_email_address }}</span> 
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <span><strong>Telephone number</strong></span><br>
                                <span>{{ $newmembership->personal_tel_number }}</span> 
                            </div>
                            <div class="col-md-4 text-center">
                                <span><strong>Mobile number</strong></span><br>
                                <span>{{ $newmembership->mobile_number }}</span> 
                            </div>
                            <div class="col-md-4 text-center">
                                <span><strong>Address</strong></span><br>
                                <span>{{ $newmembership->personal_address }}</span> 
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Work Information</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <span><strong>Company name</strong></span><br>
                                <span>{{ $newmembership->company_name }}</span> 
                            </div>
                            <div class="col-md-4 text-center">
                                <span><strong>Company email address</strong></span><br>
                                <span>{{ $newmembership->company_email_address }}</span> 
                            </div>
                            <div class="col-md-4 text-center">
                                <span><strong>Position</strong></span><br>
                                <span>{{ $newmembership->position }}</span> 
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <span><strong>Length of stay</strong></span><br>
                                <span>
                                @if($newmembership->length_of_stay == null)
                                0 year(s)
                                @else
                                {{ $newmembership->length_of_stay }} year(s)
                                @endif
                                </span> 
                            </div>
                            <div class="col-md-4 text-center">
                                <span><strong>Telephone number</strong></span><br>
                                <span>{{ $newmembership->company_tel_number }}</span> 
                            </div>
                            <div class="col-md-4 text-center">
                                <span><strong>Company Address</strong></span><br>
                                <span>{{ $newmembership->company_address }}</span> 
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">School Information</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <span><strong>Educational attainment</strong></span><br>
                                <span>
                                @if($newmembership->educational_id != null)
                                {{ $newmembership->educational_info->name }}
                                @endif
                                </span> 
                            </div>
                            <div class="col-md-4 text-center">
                                <span><strong>School / University</strong></span><br>
                                <span>{{ $newmembership->school_university }}</span> 
                            </div>
                            <div class="col-md-4 text-center">
                                <span><strong>Degree</strong></span><br>
                                <span>{{ $newmembership->degree }}</span> 
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <span><strong>PRC number</strong></span><br>
                                <span>{{ $newmembership->prc_number }}</span> 
                            </div>
                            <div class="col-md-8 text-center">
                                <span><strong>Graduate School</strong></span><br>
                                <span>{{ $newmembership->graduate_school }}</span> 
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Other Information</h3>
                    </div>
                    <div class="card-body">
                        
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <span><strong>How do you learn about PSCS</strong></span><br>
                                <span>
                                @if($newmembership->social_media_id != null)
                                {{ $newmembership->social_media_info->name }}
                                @endif
                                </span> 
                            </div>
                            <div class="col-md-6 text-center">
                                <span><strong>Who do we thank for inviting you to join PSCS</strong></span><br>
                                <span>{{ $newmembership->who_invite }}</span> 
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@stop

@section('popup')

@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/plugins/summernote/dist/summernote.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/bundles/summernote.bundle.js') }}"></script>
<script src="{{ asset('assets/js/core.js') }}"></script>
<script src="{{ asset('assets/js/page/summernote.js') }}"></script>
@stop
