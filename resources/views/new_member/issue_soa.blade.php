@extends('layouts.app')
@section('parentPageTitle', 'Member')
@section('title', 'Member Issue SOA Detail')

@section('content')
<div class="section-body mt-3">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">SOA No: {{ $soa_number }} <br> {{ Carbon\Carbon::now()->format('m/d/Y') }} </h3>
                        <div class="card-options">
                            <a href="{{ route('new.show', $newmembership->id) }}" class="btn btn-primary"> Back</a>
                            <a href="{{ route('new.send_soa', [$newmembership->id, $soa_number]) }}" class="btn btn-primary"><i class="si si-printer"></i> Send SOA</a>                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row my-8">
                            <div class="col-6">
                                <p class="h3">{{ $newmembership->company_name }}</p>
                                <address>
                                    {{ $newmembership->company_address }}<br>
                                    {{ $newmembership->company_tel_number }}<br>
                                    {{ $newmembership->company_email_address }}
                                </address>
                            </div>
                            <div class="col-6 text-right">
                                <p class="h3">{{ $newmembership->name }}</p>
                                <address>
                                    {{ $newmembership->personal_address }}<br>
                                    {{ $newmembership->personal_tel_number }}<br>
                                    {{ $newmembership->mobile_number }}<br>
                                    {{ $newmembership->personal_email_address }}
                                </address>
                            </div>
                        </div>
                        <div class="table-responsive push">
                            <table class="table table-bordered table-hover">
                                <tbody>
                                    <tr>
                                        <th class="text-center width35"></th>
                                        <th>Particulars</th>
                                        <th class="text-right" style="width: 10%">Amount</th>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td><p class="font600 mb-1">Membership Renewal</p></td>
                                        <td class="text-right">Php 2,500.00</td>
                                    </tr>
                                    
                                    <tr class="bg-green text-light">
                                        <td colspan="2" class="font700 text-right">Total Due</td>
                                        <td class="font700 text-right">Php 2,500.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <p class="text-muted text-center">
                            Payment may be made at any China Bank. Please make a check payable to: Philippine Society for Cosmetic Science, Inc.
                            <br>
                            The Acronym, PSCS, is not accepted by the society's ChinaBank Account. Bank details are provide below:
                        </p>
                        <p>
                            Account Name: Philippine Society for Cosmetic Science, Inc. <br>
                            Account Number: 116-207551-6 <br>
                            Bank/Branch: China Bank Libis, Quezon City
                        </p>
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

@stop

@section('page-script')
<script src="{{ asset('assets/bundles/summernote.bundle.js') }}"></script>
<script src="{{ asset('assets/js/core.js') }}"></script>
@stop