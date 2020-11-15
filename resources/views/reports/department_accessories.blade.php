@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Department Accessories Report
    @parent
@stop

{{-- Page content --}}
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-body">
                    <div class="table-responsive">

                     <table
                                data-cookie-id-table="departmentsTable"
                                data-pagination="true"
                                data-id-table="departmentsTable"
                                data-search="true"
                                data-show-columns="true"
                                data-show-export="true"
                                data-show-refresh="true"
                                data-sort-order="asc"
                                id="departmentsTable"
                                class="table table-striped snipe-table"
                        >
                            <thead>
                           <tr>
                                <th>Serial</th>
                                <th>Department Name</th>
                                <th>Accessory Name</th>
                                <th>Accessory Qty</th>
                            </tr>
                            </thead>
                           
                                @foreach ($accessories as $key=>$item)
                                 <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$item->department->name}}</td>
                                    <td>{{$item->accessory->name}}</td>
                                    <td>{{$item->accessory->qty}}</td>
                                    </tr>
                                @endforeach
                            
                       </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@section('moar_scripts')
    @include ('partials.bootstrap-table')

@stop

