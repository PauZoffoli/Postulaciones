<!-- Idapoderado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idApoderado', 'Idapoderado:') !!}
    {!! Form::number('idApoderado', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombrecand Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombreCand', 'Nombrecand:') !!}
    {!! Form::text('nombreCand', null, ['class' => 'form-control']) !!}
</div>

<!-- Appatcand Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apPatCand', 'Appatcand:') !!}
    {!! Form::text('apPatCand', null, ['class' => 'form-control']) !!}
</div>

<!-- Apnatcand Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apNatCand', 'Apnatcand:') !!}
    {!! Form::text('apNatCand', null, ['class' => 'form-control']) !!}
</div>

<!-- Rutcand Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rutCand', 'Rutcand:') !!}
    {!! Form::text('rutCand', null, ['class' => 'form-control']) !!}
</div>

<!-- Dvcand Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dvCand', 'Dvcand:') !!}
    {!! Form::text('dvCand', null, ['class' => 'form-control']) !!}
</div>

<!-- Parentesco Field -->
<div class="form-group col-sm-6">
    {!! Form::label('parentesco', 'Parentesco:') !!}
    {!! Form::text('parentesco', null, ['class' => 'form-control']) !!}
</div>

<!-- Region Field -->
<div class="form-group col-sm-6">
    {!! Form::label('region', 'Region:') !!}
    {!! Form::text('region', null, ['class' => 'form-control']) !!}
</div>

<!-- Provincia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('provincia', 'Provincia:') !!}
    {!! Form::text('provincia', null, ['class' => 'form-control']) !!}
</div>

<!-- Comuna Field -->
<div class="form-group col-sm-6">
    {!! Form::label('comuna', 'Comuna:') !!}
    {!! Form::text('comuna', null, ['class' => 'form-control']) !!}
</div>

<!-- Callecand Field -->
<div class="form-group col-sm-6">
    {!! Form::label('calleCand', 'Callecand:') !!}
    {!! Form::text('calleCand', null, ['class' => 'form-control']) !!}
</div>

<!-- Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero', 'Numero:') !!}
    {!! Form::number('numero', null, ['class' => 'form-control']) !!}
</div>

<!-- Dpto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dpto', 'Dpto:') !!}
    {!! Form::number('dpto', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('candidatos.index') !!}" class="btn btn-default">Cancel</a>
</div>
