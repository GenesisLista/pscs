@extends('layouts.app')
@section('parentPageTitle', 'Member')
@section('title', 'Active Member')

@section('content')
<div class="section-body">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center">
            &nbsp;
        </div>
    </div>
</div>
<div class="section-body">
    <div class="container-fluid">
        <div class="tab-content">
            <div class="tab-pane fade show active" id="Employee-list" role="tabpanel">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Active Member List</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <table class="table table-hover table-striped table-vcenter js-basic-example dataTable table_custom border-style spacing5 text-center">
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
                                    
                                    <tr>
                                        <td>1</td>
                                        <td>Genesis Lista</td>
                                        <td>Al Sayegh Group of Co.</td>
                                        <td>IT Manager</td>
                                        <td>0598860096</td>
                                        <td>16/07/2021</td>
                                        <td>
                                            <a href="{{ route('new.edit', 1) }}"><button type="submit" class="btn btn-icon btn-sm" title="Details"><i class="fa fa-pencil"></i></button></a>
                                        </td>
                                    </tr>
                                    
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