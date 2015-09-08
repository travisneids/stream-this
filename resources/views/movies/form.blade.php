{{ csrf_field() }}

{!! Form::hidden('title', null, ['id' => 'title']) !!}
{!! Form::hidden('description', null, ['id' => 'description']) !!}
{!! Form::hidden('release_date', null, ['id' => 'release_date']) !!}
{!! Form::hidden('image', null, ['id' => 'image']) !!}
{!! Form::hidden('rating', null, ['id' => 'rating']) !!}

                    
<div class="form-group">
    <label class="col-md-3 control-label">Title</label>
    <div class="col-md-9">
        {!! Form::select('select2_title', ['' => 'Search Titles'], null, ['id' => 'select2_title', 'class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <label class="col-md-3 control-label">Price</label>
    <div class="col-md-3">
        {!! Form::text('price', null, ['id' => 'price', 'class' => 'form-control', 'placeholder' => '$2.99']) !!}
    </div>
</div>

<div class="form-group">
    <label class="col-md-3 control-label">Total Quantity</label>
    <div class="col-md-3">
        {!! Form::text('total', null, ['id' => 'total', 'class' => 'form-control', 'placeholder' => '20']) !!}
    </div>
</div>