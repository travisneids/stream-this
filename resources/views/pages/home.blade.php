@extends('layout')

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-inverse" >
            <div class="panel-heading">
                <h4 class="panel-title">Find A Movie</h4>
            </div>
            <div class="panel-body">
                <form action="#" method="POST">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter movie title">
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-success">Search</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-inverse" >
            <div class="panel-heading">
                <h4 class="panel-title">Find A Customer</h4>
            </div>
            <div class="panel-body">
                <form action="/customers/search" method="POST">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" name="email" id="email" class="form-control" placeholder="Enter customer email">
                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-success">Search</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop