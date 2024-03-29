@extends('layouts.main')
@section('header')
<h3>Division List
    @endsection
    @section('content')
    <div class="row">
        <div class="col-sm-12">

            <div class="card card-table">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="division" class="table table-bordered datatable">
                            <thead class="thead-light">
                                <tr>
                                    <th>SI</th>
                                    <th>Company</th>
                                    <th>Unit</th>
                                    <th>Division</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  $i=0; ?>
                                @foreach($division as $div)
                                <tr>
                                    <td>{{++$i}}</td>
                                    <td>{{$div->company->company_name}}</td>
                                    <td>{{$div->unit->unit}}</td>
                                    <td><a href="{{url('/divisionview/'.$div->id.'/'.$div->division_name)}}">{{$div->division_name}}
                                    </td>
                                    <td><a href="{{ url('/divisionedit/'.$div->id.'/'.$div->division_name) }}"
                                            class="btn btn-sm btn-white text-success mr-2"><i
                                                class="far fa-edit mr-1"></i></a><a
                                            href="{{ url('/division_destroy/'.$div->id) }}"
                                            class="btn btn-sm btn-white text-success mr-2"><i
                                                class="far fa-trash-alt"></i></a></td>
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
        <button onclick="location.href='{{ url('/division/') }}'" style="text-center">
            Add Division</button>
    </div><br>
    <div class="d-flex justify-content-center">
    </div>

    @endsection
    @push('scripts')
    <script>
    $(document).ready(function() {
        $('#division').DataTable({
            "scrolly":"400px",
            "scrollCollapse":true
        });
    });
    </script>
    @endpush