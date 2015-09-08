@extends('layout')

@section('content')
<div class="row">
    <div class="col-md-9">
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">Edit Movie</h4>
            </div>
            <div class="panel-body">

                @include('errors.form')

                {!! Form::model($movie, ['route' => ['movies.update', $movie->id], 'class' => 'form-horizontal']) !!}
                    
                    <input type="hidden" name="_method" value="PATCH">
                    <input type="hidden" name="movie_id" value="{{ $movie->id }}">
                    
                    @include('movies/form')

                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                            <button type="submit" class="btn btn-success">Update Movie</button>
                        </div>
                    </div>

                {!! Form::close() !!}

            </div>
        </div>

        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">Delete Movie</h4>
            </div>
            <div class="panel-body">
                <dl>
                    <dt>Delete this movie</dt>
                    <dd>Once you delete a movie, there is no going back.  Please be certain.</dd>
                </dl>
                <button id="delete-movie" class="btn btn-block btn-danger">Delete</button>
            </div>
        </div>
    </div>

</div>
@stop

@section('css.head')
    
@stop
    
@section('scripts.footer')
    <script type="text/javascript">
        $('#delete-movie').click(function() {
            swal({   
                title: "Are you sure?",   
                text: "This will delete {{ $movie->name }}'s record forever!",   
                type: "warning",   
                showCancelButton: true,   
                confirmButtonColor: "#DD6B55",   
                confirmButtonText: "Yes, delete it!",   
                closeOnConfirm: false }, 
                function(isConfirm) {   
                    if (!isConfirm) return;
                    $.ajax({
                        url: "{{ route('movies.destroy', $movie->id) }}",
                        type: "POST",
                        data: {
                            id: '{{ $movie->id }}',
                            _method: "DELETE",
                            _token: "{!! csrf_token() !!}"
                        },
                        dataType: "json",
                        success: function() {
                            window.location = "{{ route('movies.index') }}";   
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