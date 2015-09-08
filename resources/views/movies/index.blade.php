@extends('layout')

@section('content')
<div class="panel panel-inverse">
    <div class="panel-heading">
        <h4 class="panel-title">Movies</h4>
    </div>
    <div class="panel-body">
        <table id="movies-table" class="table table-striped table-bordered nowrap" width="100%">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Release Date</th>
                    <th>Rating</th>
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
@stop

@section('css.head')
    <link href="/assets/plugins/DataTables/css/data-table.css" rel="stylesheet" />
@stop
    
@section('scripts.footer')
    <script src="/assets/plugins/DataTables/js/jquery.dataTables.js"></script>
    <script src="/assets/plugins/DataTables/js/dataTables.responsive.js"></script>

    <script type="text/javascript">
        if ($('#movies-table').length !== 0) {
            $('#movies-table').DataTable();

            $('.table tr').click(function() {
                window.location = '/movies/' + $(this).data('id') + '/edit';
            });
        }
    </script>
@stop