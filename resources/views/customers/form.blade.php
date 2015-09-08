@inject('states', 'App\Http\Utilities\State')

{{ csrf_field() }}
                    
<div class="form-group">
    <label class="col-md-3 control-label">Email</label>
    <div class="col-md-9">
        {!! Form::text('email', null, ['id' => 'email', 'class' => 'form-control', 'placeholder' => 'myemail@example.com']) !!}
    </div>
</div>

<div class="form-group">
    <label class="col-md-3 control-label">Name</label>
    <div class="col-md-9">
        {!! Form::text('name', null, ['id' => 'name', 'class' => 'form-control', 'placeholder' => 'Full Name']) !!}
    </div>
</div>

<div class="form-group">
    <label class="col-md-3 control-label">Street</label>
    <div class="col-md-6">
        {!! Form::text('street', null, ['id' => 'street', 'class' => 'form-control', 'placeholder' => '123 Street Name']) !!}
    </div>
    <div class="col-md-3">
        {!! Form::text('street_2', null, ['id' => 'street_2', 'class' => 'form-control', 'placeholder' => '403']) !!}
    </div>
</div>

<div class="form-group">
    <label class="col-md-3 control-label">City</label>
    <div class="col-md-9">
        {!! Form::text('city', null, ['id' => 'city', 'class' => 'form-control', 'placeholder' => 'Example City']) !!}
    </div>
</div>

<div class="form-group">
    <label class="col-md-3 control-label">State</label>
    <div class="col-md-6">
        {!! Form::select('state', $states::all(), null, ['id' => 'state', 'class' => 'form-control']) !!}
        
    </div>
    <div class="col-md-3">
        {!! Form::text('zip', null, ['id' => 'zip', 'class' => 'form-control', 'placeholder' => '55114']) !!}
    </div>
</div>

<div class="form-group">
    <label class="col-md-3 control-label">Phone</label>
    <div class="col-md-9">
        {!! Form::text('phone', null, ['id' => 'phone', 'class' => 'form-control', 'placeholder' => '(999) 999-9999']) !!}
    </div>
</div>