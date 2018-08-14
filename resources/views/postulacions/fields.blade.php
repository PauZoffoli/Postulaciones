<!-- Idcandidato Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idCandidato', 'Idcandidato:') !!}
    {!! Form::number('idCandidato', null, ['class' => 'form-control']) !!}
</div>

<!-- Idapoderado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idApoderado', 'Idapoderado:') !!}
    {!! Form::number('idApoderado', null, ['class' => 'form-control']) !!}
</div>

<!-- Fechapost Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechaPost', 'Fechapost:') !!}
    {!! Form::date('fechaPost', null, ['class' => 'form-control']) !!}
</div>

<!-- Motivopost Field -->
<div class="form-group col-sm-6">
    {!! Form::label('motivoPost', 'Motivopost:') !!}
    {!! Form::text('motivoPost', null, ['class' => 'form-control']) !!}
</div>

<!-- Cursopost Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cursoPost', 'Cursopost:') !!}
    {!! Form::text('cursoPost', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombrefunc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombreFunc', 'Nombrefunc:') !!}
    {!! Form::text('nombreFunc', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombreherm Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombreHerm', 'Nombreherm:') !!}
    {!! Form::text('nombreHerm', null, ['class' => 'form-control']) !!}
</div>

<!-- Cursoherm Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cursoHerm', 'Cursoherm:') !!}
    {!! Form::text('cursoHerm', null, ['class' => 'form-control']) !!}
</div>

<!-- Prioridad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prioridad', 'Prioridad:') !!}
    {!! Form::number('prioridad', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombreegre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombreEgre', 'Nombreegre:') !!}
    {!! Form::text('nombreEgre', null, ['class' => 'form-control']) !!}
</div>

<!-- Rutegre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rutEgre', 'Rutegre:') !!}
    {!! Form::text('rutEgre', null, ['class' => 'form-control']) !!}
</div>

<!-- Dvrutegre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dvRutEgre', 'Dvrutegre:') !!}
    {!! Form::text('dvRutEgre', null, ['class' => 'form-control']) !!}
</div>

<!-- Anoegre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('AnoEgre', 'Anoegre:') !!}
    {!! Form::number('AnoEgre', null, ['class' => 'form-control']) !!}
</div>

<!-- Certificado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('certificado', 'Certificado:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('certificado', false) !!}
        {!! Form::checkbox('certificado', '1', null) !!} 1
    </label>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('postulacions.index') !!}" class="btn btn-default">Cancel</a>
</div>
