@extends('layouts.main')
@section('header')
<!-- begin::page-header -->
<div class="row">
    <div class="col-md-12">
        <h3>Unit List</h3>
    </div>
    
</div>

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
<div class="row">
    <div class="col-sm-12">

        <div class="card card-table">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-center table-hover datatable">
                        <thead class="thead-light">
                            <tr>
                                <th>SI</th>
                                <th>Company Name</th>
                                <th>Unit</th>
                                <th>Actions</th>

                            </tr>
                        </thead>
                        <tbody><?php $i=0; $i++; ?>
                            @foreach($unit as $units)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$units->company_name}}</td>
                                <td>{{$units->unit}}</td>
                                <td> <a href="{{ url('/unitedit/'.$units->company_name.'/'.$units->unit) }}"
                                        class="btn btn-sm btn-white text-success mr-2"><i
                                            class="far fa-edit mr-1"></i></a></td>


                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div><br>
<div class="text-center">
    <button onclick="location.href='{{ url('/salesorder/') }}'" style="text-center">
        Add Budget</button>
</div>

@endsection