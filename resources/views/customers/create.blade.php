@extends('layout')

@section('content')
<div class="row">
    <div class="col-md-9">
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">Create A Customer</h4>
            </div>
            <div class="panel-body">

                @include('errors.form')
            
                <form action="/customers" method="POST" class="form-horizontal">
                    
                    @include('customers/form')

                    <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                            <button type="submit" class="btn btn-success">Create Customer</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
@stop

@section('css.head')
    
@stop
    
@section('scripts.footer')
    <script src="/assets/plugins/masked-input/masked-input.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#phone").mask("(999) 999-9999");
        });
    </script>
@stop