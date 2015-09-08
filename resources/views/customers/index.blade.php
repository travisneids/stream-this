@extends('layout')

@section('content')
<div class="panel panel-inverse">
    <div class="panel-heading">
        <h4 class="panel-title">DataTable - Responsive</h4>
    </div>
    <div class="panel-body">
        <table id="customers-table" class="table table-striped table-bordered nowrap" width="100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Rentals</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $customer)
                    <tr class="clickable" data-id="{{ $customer->id }}">
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->phone }}</td>
                        <td>0</td>
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
        if ($('#customers-table').length !== 0) {
            $('#customers-table').DataTable();

            $('.table tr').click(function() {
                window.location = '/customers/' + $(this).data('id') + '/edit';
            });
        }
    </script>
@stop