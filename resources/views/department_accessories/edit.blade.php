@extends('layouts.default')

@section('header_right')
<a href="{{ URL::previous() }}" class="btn btn-primary pull-right">
    {{ trans('general.back') }}</a>
@stop


{{-- Page content --}}

@section('content')

<!-- row -->
<div class="row">
    <!-- col-md-8 -->
    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-0">

        <form id="create-form" class="form-horizontal" method="post" action="{{route('assign-accessories.update', $item->id)}}" autocomplete="off" role="form" enctype="multipart/form-data">

        <!-- box -->
        <div class="box box-default">
            <!-- box-header -->
            <div class="box-header with-border text-right">

                <div class="col-md-12 box-title text-right" style="padding: 0px; margin: 0px;">

                    <div class="col-md-12" style="padding: 0px; margin: 0px;">
                        <div class="col-md-9 text-left">
                            
                                <h2 class="box-title text-left" style="padding-top: 8px;">
                                  Edit
                                </h2>
                           
                        </div>
                        <div class="col-md-3 text-right" style="padding-right: 10px;">
                            <a class="btn btn-link text-left" href="{{ URL::previous() }}">
                                {{ trans('button.cancel') }}
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-check icon-white" aria-hidden="true"></i>
                                {{ trans('general.save') }}
                            </button>
                        </div>
                    </div>
                </div>

            </div><!-- /.box-header -->

            <!-- box-body -->
            <div class="box-body">
                    @method('PUT')
                    <!-- CSRF Token -->
                    {{ csrf_field() }}

                <div class="row">
                    <label for="department_id" class="col-md-3 control-label">Department</label>
                      <div class="col-md-6">
                        <div class="form-group">
                          <select class="form-control select2" name="department_id" style="width: 100%;">
                            <option selected="selected" disabled>Select Department</option>
                            @foreach ($departments as $data)
                            <option value="{{$data->id}}" @if($data->id == $item->department_id) selected @endif>{{$data->name}}</option>
                            @endforeach
                          </select>
                        </div>
                        <!-- /.form-group -->
                      </div>
                      <!-- /.col -->
                </div>
                  <div class="row">
                    <label for="accessory_id" class="col-md-3 control-label">Accessories</label>
                      <div class="col-md-6">
                        <div class="form-group">
                          <select class="form-control select2" name="accessory_id" style="width: 100%;">
                            <option selected="selected" disabled>Select Accessories</option>
                            @foreach ($accessories as $data)
                            <option value="{{$data->id}}" @if($data->id == $item->accessory_id) selected @endif>{{$data->name}}</option>
                            @endforeach
                          </select>
                        </div>
                        <!-- /.form-group -->
                      </div>
                      <!-- /.col -->
                </div>

            </div> <!-- ./box-body -->
        </div> <!-- box -->
        </form>
    </div> <!-- col-md-8 -->

</div><!-- ./row -->

@stop
