@extends('layout')

@section('content')
<div class="row">
    <div class="col-md-9">
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">Edit Customer</h4>
            </div>
            <div class="panel-body">

                @include('errors.form')

                {!! Form::model($customer, ['route' => ['customers.update', $customer->id], 'class' => 'form-horizontal']) !!}
                    
                    <input type="hidden" name="_method" value="PATCH">
                    <input type="hidden" name="customer_id" value="{{ $customer->id }}">
                    
                    @include('customers/form')

                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                            <button type="submit" class="btn btn-success">Update Customer</button>
                        </div>
                    </div>

                {!! Form::close() !!}

            </div>
        </div>

        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">Rentals</h4>
            </div>
            <div class="panel-body">
                <table id="movies-table" class="table table-striped table-bordered nowrap" width="100%">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Release Date</th>
                            <th>Rating</th>
                            <th>Inventory</th>
                            <th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($movies as $movie)
                            <tr class="clickable" data-id="{{ $movie->id }}">
                                <td>{{ $movie->title }}</td>
                                <td>{{ $movie->release_date }}</td>
                                <td>{{ $movie->rating }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">Delete Customer</h4>
            </div>
            <div class="panel-body">
                <dl>
                    <dt>Delete this customer</dt>
                    <dd>Once you delete a customer, there is no going back.  Please be certain.</dd>
                </dl>
                <button id="delete-customer" class="btn btn-block btn-danger">Delete</button>
            </div>
        </div>
    </div>

</div>
@stop

@section('css.head')

@stop
    
@section('scripts.footer')
    <script type="text/javascript">

        $('#delete-customer').click(function() {
            swal({   
                title: "Are you sure?",   
                text: "This will delete {{ $customer->name }}'s record forever!",   
                type: "warning",   
                showCancelButton: true,   
                confirmButtonColor: "#DD6B55",   
                confirmButtonText: "Yes, delete it!",   
                closeOnConfirm: false }, 
                function(isConfirm) {   
                    if (!isConfirm) return;
                    $.ajax({
                        url: "{{ route('customers.destroy', $customer->id) }}",
                        type: "POST",
                        data: {
                            id: '{{ $customer->id }}',
                            _method: "DELETE",
                            _token: "{!! csrf_token() !!}"
                        },
                        dataType: "json",
                        success: function() {
                            window.location = "{{ route('customers.index') }}";   
                        },
                        error: function( xhr, ajaxOptions, thrownError) {
                            swal("Error deleting!", "Please try again", "error");
                        }
                    });
                }
            );
        });
        
    </script>
@stop