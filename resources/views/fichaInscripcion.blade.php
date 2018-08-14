@extends('layouts.app')

@section('contenido')
	<div class="container-fluid">
		
	</div>
	<form class="form-horizontal" action="/ficha/create" method="post">
        @csrf
        <hr>
        <br>    
        <div class="row">
  			<div class=" form-group col-sm-12">
  				<label class="control-label ">Nombres del apoderado</label>
      			<input type="text" name="apoderado"  class="form-control @if($errors->has('apoderado')) is-invalid @endif" placeholder="Nombre completo apoderado">
                @if($errors->has('apoderado'))
                    @foreach($errors->get('apoderado') as $error)
                    <div class="invalid-feedback">{{ $error }}</div>
                    @endforeach
                @endif
    		</div>
  		</div>
        <br>
  		<div class="row">
  			<div class="form-group col-sm-4">
  				<label class="control-label " for="date">Apellido paterno apoderado</label>
      			<input id="txtApellidoPaternoApoderado" name="txtApellidoPaternoApoderado" placeholder="Apellido paterno" type="text" class="form-control @if($errors->has('txtApellidoPaternoApoderado')) is-invalid @endif">
                @if($errors->has('txtApellidoPaternoApoderado'))
                    @foreach($errors->get('txtApellidoPaternoApoderado') as $error)
                    <div class="invalid-feedback">{{ $error }}</div>
                    @endforeach
                @endif
    		</div>
  			<div class="form-group col-sm-4">
  				<label class="control-label " for="date">Apellido materno apoderado</label>
      			<input id="txtApellidoMaternoApoderado" name="txtApellidoMaternoApoderado" placeholder="Apellido materno" type="text" class="form-control @if($errors->has('txtApellidoMaternoApoderado')) is-invalid @endif">
                @if($errors->has('txtApellidoMaternoApoderado'))
                    @foreach($errors->get('txtApellidoMaternoApoderado') as $error)
                    <div class="invalid-feedback">{{ $error }}</div>
                    @endforeach
                @endif
    		</div>
  			<div class="form-group col-sm-4">
  				<label class="control-label " for="tel">Telefono #</label>
      			<input class="form-control @if($errors->has('txtFono')) is-invalid @endif" id="txtFono" placeholder="Telefono" name="txtFono" type="text"/>
                @if($errors->has('txtFono'))
                    @foreach($errors->get('txtFono') as $error)
                    <div class="invalid-feedback">{{ $error }}</div>
                    @endforeach
                @endif
    		</div>
        </div>
        <br>
        <div class="row">
            <div class="form-group col-sm-4">
                <label class="control-label " for="date">Rut</label>
                <input id="txtRut" name="txtRut" placeholder="Rut" type="text" class="form-control @if($errors->has('txtRut')) is-invalid @endif">
                @if($errors->has('txtRut'))
                    @foreach($errors->get('txtRut') as $error)
                    <div class="invalid-feedback">{{ $error }}</div>
                    @endforeach
                @endif
            </div>
            <div class="form-group col-sm-4">
                <label class="control-label " for="date">Digito verificador</label>
                <input id="txtDv" name="txtDv" placeholder="Digito verificador" type="text" class="form-control @if($errors->has('txtDv')) is-invalid @endif">
                @if($errors->has('txtDv'))
                    @foreach($errors->get('txtDv') as $error)
                    <div class="invalid-feedback">{{ $error }}</div>
                    @endforeach
                @endif
            </div>
            <div class="form-group col-sm-4">
                <label class="control-label " for="tel">Correo</label>
                <input class="form-control @if($errors->has('txtCorreo')) is-invalid @endif" id="txtCorreo" placeholder="Correo" name="txtCorreo" type="text"/>
                @if($errors->has('txtCorreo'))
                    @foreach($errors->get('txtCorreo') as $error)
                    <div class="invalid-feedback">{{ $error }}</div>
                    @endforeach
                @endif
            </div>
        </div>

<br><br>
  <div class="col-xs-12 text-center">
  	<div class="center-block">
      <button name="submit" type="submit" class="btn btn-primary">Siguiente</button>
 	</div>
  </div>
</form>
<br><br>
@stop

