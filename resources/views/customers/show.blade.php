@extends('layout')

@section('content')
    <div class="profile-container">
        <!-- begin profile-section -->
        <div class="profile-section">
            <!-- begin profile-left -->
            <div class="profile-left">
                <!-- begin profile-image -->
                <div class="profile-image">
                    <img src="/assets/img/profile-cover.jpg" />
                    <i class="fa fa-user hide"></i>
                </div>
                <!-- end profile-image -->
                <div class="m-b-10">
                    <a href="#" class="btn btn-warning btn-block btn-sm">Change Picture</a>
                </div>

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
                                        <h4>{{ $customer->name }}</h4>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="highlight">
                                    <td class="field">Email</td>
                                    <td id="email">
                                        <i class="fa fa-mail fa-lg m-r-5"></i>
                                        <a href="#" id="email" data-type="text" data-pk="{{ $customer->id }}" data-title="Edit email">{{ $customer->email}}</a>
                                    </td>
                                </tr>
                                <tr class="divider">
                                    <td colspan="2"></td>
                                </tr>
                                <tr>
                                    <td class="field">Phone</td>
                                    <td><i class="fa fa-mobile fa-lg m-r-5"></i> {{ $customer->phone }} <a href="#" class="m-l-5">Edit</a></td>
                                </tr>
                                <tr>
                                    <td class="field">Street</td>
                                    <td>{{ $customer->street}} {{ $customer->street_2 }}</td>
                                </tr>
                                <tr>
                                    <td class="field">City</td>
                                    <td>{{ $customer->city }}</td>
                                </tr>
                                <tr>
                                    <td class="field">State</td>
                                    <td>{{ $customer->state }}</td>
                                </tr>
                                <tr>
                                    <td class="field">Zip</td>
                                    <td>{{ $customer->zip }}</td>
                                </tr>
                                <tr>
                                    <td class="field">Birthdate</td>
                                    <td>
                                        <select class="form-control input-inline input-xs" name="day">
                                            <option value="04" selected>04</option>
                                        </select>
                                        -
                                        <select class="form-control input-inline input-xs" name="month">
                                            <option value="11" selected>11</option>
                                        </select>
                                        -
                                        <select class="form-control input-inline input-xs" name="year">
                                            <option value="1989" selected>1989</option>
                                        </select>
                                    </td>
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
                <!-- begin col-6 -->
                <div class="col-md-6">
                    <h4 class="title">Rentals</h4>
                    <!-- begin scrollbar -->
                    <div data-scrollbar="true" data-height="280px" class="bg-silver">
                        <!-- begin table -->
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Title</th>
                                    <th>Rental Date</th>
                                    <th>Returned Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="col-md-1 p-r-5">
                                        <a href="javascript:;" class="pull-left">
                                            <img src="/assets/img/product/product-1.png" width="40px" alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <h5 class="m-t-0 m-b-5">iPad Air 3</h5>
                                    </td>
                                    <td>09/15/2015</td>
                                    <td>09/17/2015</td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- end table -->
                    </div>
                    <!-- end scrollbar -->
                </div>
                <!-- end col-6 -->
                <!-- begin col-6 -->
                <div class="col-md-6">
                    <h4 class="title">Reserved Rentals</h4>
                    <!-- begin scrollbar -->
                    <div data-scrollbar="true" data-height="280px" class="bg-silver">
                        <!-- begin table -->
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Title</th>
                                    <th>Rental Date</th>
                                    <th>Returned Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="col-md-1 p-r-5">
                                        <a href="javascript:;" class="pull-left">
                                            <img src="/assets/img/product/product-1.png" width="40px" alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <h5 class="m-t-0 m-b-5">iPad Air 3</h5>
                                    </td>
                                    <td>09/15/2015</td>
                                    <td>09/17/2015</td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- end table -->
                    </div>
                    <!-- end scrollbar -->
                </div>
                <!-- end col-6 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end profile-section -->
    </div>
@stop

@section('css.head')
    
@stop
    
@section('scripts.footer')
  
@stop