<!-- Nombreapo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombreApo', 'Nombreapo:') !!}
    {!! Form::text('nombreApo', null, ['class' => 'form-control']) !!}
</div>

<!-- Appatapo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apPatApo', 'Appatapo:') !!}
    {!! Form::text('apPatApo', null, ['class' => 'form-control']) !!}
</div>

<!-- Apmatapo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apMatApo', 'Apmatapo:') !!}
    {!! Form::text('apMatApo', null, ['class' => 'form-control']) !!}
</div>

<!-- Fonoapo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fonoApo', 'Fonoapo:') !!}
    {!! Form::number('fonoApo', null, ['class' => 'form-control']) !!}
</div>

<!-- Rutapo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rutApo', 'Rutapo:') !!}
    {!! Form::text('rutApo', null, ['class' => 'form-control']) !!}
</div>

<!-- Dvapo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dvApo', 'Dvapo:') !!}
    {!! Form::text('dvApo', null, ['class' => 'form-control']) !!}
</div>

<!-- Correoapo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('correoApo', 'Correoapo:') !!}
    {!! Form::text('correoApo', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('apoderados.index') !!}" class="btn btn-default">Cancel</a>
</div>
