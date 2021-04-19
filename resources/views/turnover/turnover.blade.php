@extends('layouts.main')
@section('header')
<!-- begin::page-header -->
<div class="page-header">
    <div class="container-fluid d-sm-flex justify-content-between">
        <!-- <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">BMS</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">Enquiry List</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Create</li>
            </ol>
        </nav> -->
    </div>
</div>
<!-- end::page-header -->
@endsection
@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="container-fluid">
    <!-- <div class="row">
        <div class="col-md-12">-->
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{url('/turnover')}}" method="POST">
                        @csrf
                        <div data-label="Enquiry Details" class="demo-code-preview col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label col-form-label-sm">Company Name</label>
                                <div class="col-sm-3">
                                <select id="company_name" class="form-control form-control-sm" name="company_name">
                                        <option id="company_name" name="company_name" disabled>Company Name</option>
                                        <option id=" vepl" name="vepl">VEPL</option>
                                        <option id=" vepl" name="vepl">VMCL</option>
                                        <option id=" vepl" name="vepl">VHRS</option>
                                    </select>
                                </div>
                                <label class="col-sm-3 col-form-label col-form-label-sm">Division</label>
                                <div class="col-sm-3">
                                <select id="division" class="form-control form-control-sm" name="division">
                                        <option id="div" name="div" disabled>Division</option>
                                        <option id="div1" name="div1" value=1>Transformer</option>
                                        <option id="div2" name="div2" value=2>Switchgear</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label col-form-label-sm">Unit</label>
                                <div class="col-sm-3">
                                <select id="unit" class="form-control form-control-sm" name="unit">
                                        <option id="div" name="div" disabled>Unit</option>
                                        <option id="div1" name="div1" value=1>A</option>
                                        <option id="div2" name="div2" value=1>B</option>
                                        <option id="div1" name="div1" value=2>C</option>
                                        <option id="div2" name="div2" value=2>D</option>
                                    </select>
                                </div>
                                <label class="col-sm-3 col-form-label col-form-label-sm">Financial Year</label>
                                <div class="col-sm-3">
                                    <select name="financial_year" class="form-control form-control-sm"
                                        id="financial_year">
                                        <option value="" selected disabled>select Financial year</option>
                                        <option value="2020-2021">2020-2021</option>
                                        <option value="2021-2022">2021-2022</option>
                                        <option value="2022-2023">2022-2023</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div data-label="End Client" class="demo-code-preview col-xs-12 col-sm-12 col-md-12">
                            <label class="col-form-label col-form-label-sm">Target</label>
                            <div class="form-group row">
                                <div class="form-group  col-sm-3">
                                    <label class="col-form-label col-form-label-sm">Q1</label>
                                    <input type="text" class="form-control form-control-sm" name="q1" id="q1"
                                        placeholder="Enter Q1 Value">
                                </div>
                                <div class="form-group  col-sm-3">
                                    <label class="col-form-label col-form-label-sm">Q2</label>
                                    <input type="text" class="form-control form-control-sm" name="q2" id="q2"
                                        placeholder="Enter Q2 Value">
                                </div>
                                <div class="form-group  col-sm-3">
                                    <label class="col-form-label col-form-label-sm">Q3</label>
                                    <input type="text" class="form-control form-control-sm" name="q3" id="q3"
                                        placeholder="Enter Q3 Value">
                                </div>
                                <div class="form-group  col-sm-3">
                                    <label class="col-form-label col-form-label-sm">Q4</label>
                                    <input type="text" class="form-control form-control-sm" name="q4" id="q4"
                                        placeholder="Enter Q4 Value">
                                </div>
                            </div>
                        </div>
                        <div data-label="End Client" class="demo-code-preview col-xs-12 col-sm-12 col-md-12">
                            <label class="col-form-label col-form-label-sm">Actual</label>
                            <div class="form-group row">
                                <div class="form-group  col-sm-3">
                                    <label class="col-form-label col-form-label-sm">Q1</label>
                                    <input type="text" class="form-control form-control-sm" name="aq1" id="aq1"
                                        placeholder="Enter Q1 Value">
                                </div>
                                <div class="form-group  col-sm-3">
                                    <label class="col-form-label col-form-label-sm">Q2</label>
                                    <input type="text" class="form-control form-control-sm" name="aq2" id="aq2"
                                        placeholder="Enter Q2 Value">
                                </div>
                                <div class="form-group  col-sm-3">
                                    <label class="col-form-label col-form-label-sm">Q3</label>
                                    <input type="text" class="form-control form-control-sm" name="aq3" id="aq3"
                                        placeholder="Enter Q3 Value">
                                </div>
                                <div class="form-group  col-sm-3">
                                    <label class="col-form-label col-form-label-sm">Q4</label>
                                    <input type="text" class="form-control form-control-sm" name="aq4" id="aq4"
                                        placeholder="Enter Q4 Value">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                                    <a class="btn btn-outline-light btn-sm" href="">
                                        <i data-feather="chevrons-left" class="mr-2"></i>Cancel</a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                                    <button type="submit" class="btn btn-outline-success btn-sm"><i data-feather="check"
                                            class="mr-2"></i>Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- </div>
    </div>-->
</div>
@endsection
@push('scripts')
<script>
$(document).ready(function() {
    $('#financial_year').select2();
    $('#country').select2();
    $('#clientname').select2();
    $('#myTable').DataTable({});
});
// Material Select Initialization
$(document).ready(function() {
    $('.mdb-select').materialSelect();
});
var $select1 = $( '#division' ),
 $select2 = $( '#unit' ),
$options = $select2.find( 'option' );
    
$select1.on( 'change', function() {
	$select2.html( $options.filter( '[value="' + this.value + '"]' ) );
} ).trigger( 'change' );
</script>
@endpush