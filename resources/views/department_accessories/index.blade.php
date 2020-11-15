@extends('layouts/default')

{{-- Page title --}}
@section('title')
    {{ trans('general.departments') }}
    @parent
@stop

@section('header_right')
    <a href="{{ route('assign-accessories.create') }}" class="btn btn-primary pull-right">
        {{ trans('general.create') }}</a>
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
                                data-show-export="false"
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
                                <th>Action</th>
                            </tr>
                            </thead>
                           
                                @foreach ($accessories as $key=>$item)
                                 <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$item->department->name}}</td>
                                    <td>{{$item->accessory->name}}</td>
                                    <td>{{$item->accessory->qty}}</td>
                                    <td>
                                        <a class="btn btn-info btn-sm" href="{{ route('assign-accessories.edit',$item->id) }}">
                  <i class="fa fa-edit"></i>
                </a> 
                                         <a class="btn btn-danger text-light btn-sm" onclick="deleteTag({{ $item->id }})">
                  <i class="fa fa-trash"></i>
                </a>
                <form id="delete-form-{{ $item->id }}" action="{{ route('assign-accessories.destroy',$item->id) }}" method="POST" style="display: none;">
                  @csrf
                  @method('DELETE')
              </form>
                                    </td>
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

@push('js')
<script src="{{asset('/js')}}/sweetalert2.all.js"></script>





<script type="text/javascript">
    function deleteTag(id) {
        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it! ',
            cancelButtonText: 'No, cancel!',
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger',
            buttonsStyling: false,
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                event.preventDefault();
                document.getElementById('delete-form-'+id).submit();
            } else if (
                // Read more about handling dismissals
                result.dismiss === swal.DismissReason.cancel
            ) {
                swal(
                    'Cancelled',
                    'Your data is safe :)',
                    'error'
                )
            }
        })
    }
</script>

@endpush