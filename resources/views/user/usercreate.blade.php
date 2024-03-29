@extends('layouts.main')
@section('header')
    <?php
    $company = DB::table('br_company')->get();
    $unit = DB::table('br_unit')->get();
    ?>
    <!-- begin::page-header -->
    <div class="page-header">
        <div class="container-fluid d-sm-flex justify-content-between">

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
                        <form action="{{ url('/userstore') }}" method="POST">
                            {{ @csrf_field() }}
                            <div data-label="Enquiry Details" class="demo-code-preview col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm">Company Name</label>
                                    <div class="col-sm-3">
                                        <select name="company_name" class="form-control form-control-sm" id="company_name">
                                            <option selected disabled>--Select--</option>
                                            @foreach ($company as $comp)
                                                <option value="{{ $comp->id }}">{{ $comp->company_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <label class="col-sm-3 col-form-label col-form-label-sm">Unit</label>
                                    <div class="col-sm-3">
                                        <select name="unit" class="form-control form-control-sm" id="unit">
                                            {{-- <option selected disabled>--Select Unit--</option> --}}
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm">Division</label>
                                    <div class="col-sm-3">
                                        <select name="division" class="form-control form-control-sm" id="division">
                                            {{-- <option selected disabled>--Select Division--</option> --}}
                                        </select>
                                    </div>
                                    <label class="col-sm-3 col-form-label col-form-label-sm">Name</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control form-control-sm" id="name" name="name"
                                            autocomplete="off">
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label col-form-label-sm">Designation</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control form-control-sm" id="designation"
                                            name="designation" autocomplete="off">

                                    </div>
                                    <label class="col-sm-3 col-form-label col-form-label-sm">Email</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control form-control-sm" id="email" name="email"
                                            autocomplete="off">
                                    </div>

                                </div>
                                <div class="form-group row">

                                    <label class="col-sm-3 col-form-label col-form-label-sm">Password</label>
                                    <div class="col-sm-3">
                                        <input type="password" class="form-control form-control-sm" id="password"
                                            name="password">
                                    </div>
                                    <label class="col-sm-3 col-form-label col-form-label-sm">Ecode</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control form-control-sm" id="ecode" name="ecode"
                                            autocomplete="off">
                                    </div>

                                </div>
                                <div class="form-group row">

                                    <label class="col-sm-3 col-form-label col-form-label-sm">Contact</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control form-control-sm" id="contact" name="contact"
                                            autocomplete="off">
                                    </div>
                                    <label class="col-sm-3 col-form-label col-form-label-sm">Role</label>
                                    <div class="col-sm-3">
                                       <select name="role" class="form-control form-control-sm">
                                       <option>--Select Role---</option>
                                       <option>Admin</option>
                                       <option>User</option>
                                       </select>
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
                                            <button type="submit" class="btn btn-outline-success btn-sm"><i
                                                    data-feather="check" class="mr-2"></i>Save</button>
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
        $('#company_name').change(function(event) {
            var company_name = $('#company_name').val();
            $.ajax({
                type: "GET",
                url: "{{ url('/companyid') }}",
                data: {
                    company_name: company_name
                },
                success: function(data) {
                    $('#unit').html(data);

                },

            });
        });
        $('#unit').change(function(event) {
            var unit = $('#unit').val();
            $.ajax({
                type: "GET",
                url: "{{ url('/user_division') }}",
                data: {
                    user_unit: unit
                },

                success: function(data) {
                    $('#division').html(data);


                }

            });

        });
    </script>
@endpush
