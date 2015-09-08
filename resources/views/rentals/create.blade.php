@extends('layout')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">Create A Rental</h4>
            </div>
            <div class="panel-body">
                <form action="/" method="POST">
                    {{ csrf_field() }}

                    {!! Form::hidden('customer_id', null, ['id' => 'customer_id']) !!}
                    {!! Form::hidden('rental_ids', null, ['id' => 'rental_ids']) !!}

                    <div id="create-rental">
                        <ol>
                            <li>
                                Customer 
                                <small>Select the customer placing the rental</small>
                            </li>
                            <li>
                                Movie
                                <small>Select the movies the customer is renting</small>
                            </li>
                            <li>
                                Confirm
                                <small>Confirm the information and price for this rental</small>
                            </li>
                        </ol>
                        <!-- begin wizard step-1 -->
                        <div>
                            <fieldset>
                                <legend class="pull-left width-full">Select A Customer</legend>
                                <table id="customers-table" class="table table-striped table-bordered nowrap" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($customers as $customer)
                                            <tr class="clickable" data-id="{{ $customer->id }}">
                                                <td>{{ $customer->name }}</td>
                                                <td>{{ $customer->email }}</td>
                                                <td>{{ $customer->phone }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </fieldset>
                        </div>
                        <!-- end wizard step-1 -->
                        <!-- begin wizard step-2 -->
                        <div>
                            <fieldset>
                                <legend class="pull-left width-full">Available Rentals</legend>
                                <table id="movies-table" class="table table-striped table-bordered nowrap" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Release Date</th>
                                            <th>Rating</th>
                                            <th>Price</th>
                                            <th>Availability</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($movies as $movie)
                                            <tr data-movie-id="{{ $movie->id }}">
                                                <td class="title">{{ $movie->title }}</td>
                                                <td>{{ $movie->release_date }}</td>
                                                <td>{{ $movie->rating }}</td>
                                                <td class="price">{{ $movie->price}}</td>
                                                <td>4/10</td>
                                                <td><a href="javascript:;" class="add-rental" data-id="{{ $movie->id }}">Add</a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <legend class="pull-left width-full m-t-20">Selected Rentals</legend>
                                <table id="selected-rentals" class="table table-striped table-bordered nowrap" width="100%">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Release Date</th>
                                            <th>Rating</th>
                                            <th>Price</th>
                                            <th>Availability</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </fieldset>
                        </div>
                        <!-- end wizard step-2 -->
                        <!-- begin wizard step-3 -->
                        <div>
                            <fieldset>
                                <legend class="pull-left width-full">Confirm Rentals and Price</legend>
                                <table id="summary-table" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-right">Subtotal</td>
                                        <td class="subtotal">$0</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">Tax</td>
                                        <td>$3.99</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right"><strong>Total</strong></td>
                                        <td class="total">$0</td>
                                    </tr>
                                </tbody>
                            </table>
                            </fieldset>
                            <p><a class="btn btn-success btn-lg" role="button">Confirm Rental</a></p>
                        </div>
                        <!-- end wizard step-3 -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop

@section('css.head')
    <link href="/assets/plugins/DataTables/css/data-table.css" rel="stylesheet" />
    <link href="/assets/plugins/bootstrap-wizard/css/bwizard.min.css" rel="stylesheet" />
@stop
    
@section('scripts.footer')
    <script src="/assets/plugins/DataTables/js/jquery.dataTables.js"></script>
    <script src="/assets/plugins/DataTables/js/dataTables.responsive.js"></script>
    <script src="/assets/plugins/bootstrap-wizard/js/bwizard.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#create-rental").bwizard({
                show: function (e, ui) {
                    if (ui.index === 2) {
                        summarize();
                    }
                }
            });

            if ($('#customers-table').length !== 0) {
                $('#customers-table').DataTable();

                $('#customers-table tr').click(function() {
                    $('#customer_id').val($(this).data('id'));
                    $("#create-rental").bwizard("next");
                });
            }

            if ($('#movies-table').length !== 0) {
                $('#movies-table').DataTable();
            }

            $('.add-rental').click(function() {
                var row = $(this).parent().parent().clone();
                row.find('a').text('Remove').removeClass('add-rental').addClass('remove-rental');
                row.appendTo($('#selected-rentals tbody'));
            });

            $( "#selected-rentals" ).on( "click", '.remove-rental', function() {
                var row = $(this).parent().parent();
                row.remove();
            });

            function summarize() {
                $.each($('#selected-rentals tbody tr'), function() {
                    var movie = '<tr><td>' + $(this).find('td.title').text() + '</td><td class="price">' + $(this).find('td.price').text() + '</td></tr>';
                    $('#summary-table > tbody').prepend(movie);
                });

                calculateTotal();

                updateRentals();
            }

            function calculateTotal() {
                var subtotal = 0;
                var total = 0;
                var tax = 3.99;
                
                $('#summary-table td.price').each(function () {
                    subtotal += parseFloat($(this).text().replace('$',''));
                });

                $('#summary-table td.subtotal').text('$' + subtotal);

                var total = subtotal + tax;

                $('#summary-table td.total').text('$' + total);

            }

            function updateRentals() {
                
            }

        });
    </script>
@stop