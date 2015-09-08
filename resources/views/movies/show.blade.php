@extends('layout')

@section('content')
    <div class="profile-container">
        <!-- begin profile-section -->
        <div class="profile-section">
            <!-- begin profile-left -->
            <div class="profile-left">
                <!-- begin profile-image -->
                <div class="profile-image">
                    <img src="http://image.tmdb.org/t/p/w500/{{ $movie->image }}" />
                    <i class="fa fa-user hide"></i>
                </div>
                <!-- end profile-image -->
            </div>
            <!-- end profile-left -->
            <!-- begin profile-right -->
            <div class="profile-right">
                <!-- begin profile-info -->
                <div class="profile-info">
                    <!-- begin table -->
                    <div class="table-responsive">
                        <table class="table table-profile">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>
                                        <h4>{{ $movie->title }}</h4>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="highlight">
                                    <td class="field">Description</td>
                                    <td>{{ $movie->description }}</td>
                                </tr>
                                <tr class="divider">
                                    <td colspan="2"></td>
                                </tr>
                                <tr>
                                    <td class="field">Release Date</td>
                                    <td>{{ $movie->release_date }}</td>
                                </tr>
                                <tr>
                                    <td class="field">Rating</td>
                                    <td>{{ $movie->rating }}</td>
                                </tr>
                                <tr>
                                    <td class="field">Available Inventory</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td class="field">Total Inventory</td>
                                    <td>{{ $movie->total }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- end table -->
                </div>
                <!-- end profile-info -->
            </div>
            <!-- end profile-right -->
        </div>
        <!-- end profile-section -->
        <!-- begin profile-section -->
        <div class="profile-section">
            <!-- begin row -->
            <div class="row">
                <!-- begin col-4 -->
                <div class="col-md-6">
                    <h4 class="title">Rental Records <small>56 rentals</small></h4>
                    <!-- begin scrollbar -->
                    <div data-scrollbar="true" data-height="280px" class="bg-silver">
                        <!-- begin chats -->
                        <ul class="chats">
                            <li class="left">
                                <span class="date-time">yesterday 11:23pm</span>
                                <a href="javascript:;" class="name">Sowse Bawdy</a>
                                <a href="javascript:;" class="image"><img alt="" src="/assets/img/user-12.jpg"></a>
                                <div class="message">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit volutpat. Praesent mattis interdum arcu eu feugiat.
                                </div>
                            </li>
                            <li class="right">
                                <span class="date-time">08:12am</span>
                                <a href="#" class="name"><span class="label label-primary">ADMIN</span> Me</a>
                                <a href="javascript:;" class="image"><img alt="" src="/assets/img/user-13.jpg"></a>
                                <div class="message">
                                    Nullam posuere, nisl a varius rhoncus, risus tellus hendrerit neque.
                                </div>
                            </li>
                            <li class="left">
                                <span class="date-time">09:20am</span>
                                <a href="#" class="name">Neck Jolly</a>
                                <a href="javascript:;" class="image"><img alt="" src="/assets/img/user-10.jpg"></a>
                                <div class="message">
                                    Euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                </div>
                            </li>
                            <li class="left">
                                <span class="date-time">11:15am</span>
                                <a href="#" class="name">Shag Strap</a>
                                <a href="javascript:;" class="image"><img alt="" src="/assets/img/user-14.jpg"></a>
                                <div class="message">
                                    Nullam iaculis pharetra pharetra. Proin sodales tristique sapien mattis placerat.
                                </div>
                            </li>
                        </ul>
                        <!-- end chats -->
                    </div>
                    <!-- end scrollbar -->
                </div>
                <!-- end col-4 -->
                <!-- begin col-4 -->
                <div class="col-md-6">
                    <h4 class="title">Sales <small>3 sales</small></h4>
                    <!-- begin scrollbar -->
                    <div data-scrollbar="true" data-height="280px" class="bg-silver">
                        <!-- begin table -->
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <h5 class="m-t-0 m-b-5">iPad Air 3</h5>
                                    </td>
                                    <td>$349.00</td>
                                    <td>13/02/2013</td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- end table -->
                    </div>
                    <!-- end scrollbar -->
                </div>
                <!-- end col-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end profile-section -->
@stop

@section('css.head')
    
@stop
    
@section('scripts.footer')
    
@stop