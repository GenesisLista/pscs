@extends('layouts.app')
@section('parentPageTitle', 'Member')
@section('title', 'New Member')

@section('content')
<div class="section-body">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center">
            <ul class="nav nav-tabs page-header-tab">
                <li class="nav-item"><a class="nav-link" href="">&nbsp;</a></li>
            </ul>
            <div class="header-action">
                <a href="{{ route('new.create') }}"><button type="submit" class="btn btn-primary"><i class="fe fe-plus mr-2"></i>Add</button></a>
            </div>
        </div>
    </div>
</div>

<div class="section-body mt-3">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                @if(session('success_add'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> {{ session('success_add') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                </div>
                @elseif(session('success_update'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> {{ session('success_update') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                </div>
                @elseif(session('success_delete'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success!</strong> {{ session('success_delete') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">New Member List</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover js-basic-example dataTable table_custom border-style spacing5 text-center">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Company Name</th>
                                        <th>Position</th>
                                        <th>Mobile</th>
                                        <th>Request Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($newmembership as $newmember)
                                    <tr>
                                        <td>{{ $newmember->id }}</td>
                                        <td>{{ $newmember->name }}</td>
                                        <td>{{ $newmember->company_name }}</td>
                                        <td>{{ $newmember->position }}</td>
                                        <td>{{ $newmember->mobile_number }}</td>
                                        <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $newmember->created_at)->format('m/d/Y') }}</td>
                                        <td>
                                            <a href="{{ route('new.show', $newmember->id) }}"><button type="submit" class="btn btn-icon btn-sm" title="Details"><i class="fa fa-eye"></i></button></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/plugins/datatable/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/js/core.js') }}"></script>

<!-- DataTables -->
<script src="{{ asset('assets/js/table/datatable.js') }}"></script>
<script src="{{ asset('assets/bundles/dataTables.bundle.js') }}"></script>
@stop