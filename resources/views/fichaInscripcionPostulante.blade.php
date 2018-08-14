@extends('layouts.app')

@section('contenido')
	<div class="container-fluid">
		
	</div>
	<form class="form-horizontal" action="/ficha/create" method="post">
        @csrf
        <br>
		<div class="row">
  			<div class=" form-group col-sm-12">
  				<label class="control-label " for="date">Nombres del postulante</label>
      			<input id="txtNombresPostulante" name="txtNombresPostulante" placeholder="Nombres del Postulante" type="text" class="form-control">
    		</div>
  		</div>
        <br>
  		<div class="row">
  			<div class="form-group col-sm-4">
  				<label class="control-label ">Primer apellido postulante</label>
      			<input id="txtPrimerApellido" name="txtPrimerApellido" placeholder="Primer Apellido" type="text" class="form-control">
    		</div>
  			<div class="form-group col-sm-4">
  				<label class="control-label " for="date">Segundo apellido postulante</label>
      			<input id="txtSegundoApellido"  name="txtSegundoApellido"  placeholder="Segundo Apellido" type="text" class="form-control">
    		</div>
  			<div class="form-group col-sm-4">
  				<label class="control-label " for="date">Fecha</label>
      			<input class="form-control" id="date" name="date" placeholder="dd-mm-yyyy" type="text"/>
    		</div>
             
        </div>
        
        <br>          
    
        <div class="row">
            <div class="form-group col-sm-4">
                <label class="control-label " for="date">rut</label>
                <input id="txtRut" name="txtRut" placeholder="Rut" type="text" class="form-control">
            </div>
            <div class="form-group col-sm-4">
                <label class="control-label " for="date">dv</label>
                <input id="txtDv" name="txtDv" placeholder="Dv" type="text" class="form-control">
            </div>
            <div class="form-group col-sm-4">
                <label class="control-label " for="date">Parentesco del apoderado con el estudiante</label>
                <input id="txtDv" name="txtDv" placeholder="Dv" type="text" class="form-control">
            </div>
        </div>
        <hr> 
        <br>
        <div class="row">   
    		<div class="form-group col-sm-4">
                <label class="control-label " for="select">
                    Seleccione una región:
                </label>
                <select class="select form-control" id="idComuna" name="idComuna">
                <option value="1">
                    Region Metropolitana
                </option>
                <option value="Second Choice">
                    1
                </option>
                <option value="Third Choice">
                    otra
                </option>
                </select>
            </div>
            <div class="form-group col-sm-4">
                <label class="control-label " for="select">
                    Seleccione una provincia:
                </label>
                <select class="select form-control" id="select" name="select">
                <option value="First Choice">
                    Provincia de Santiago
                </option>
                <option value="Second Choice">
                    otra
                </option>
                <option value="Third Choice">
                    otra
                </option>
                </select>
            </div>
            <div class="form-group col-sm-4">
                <label class="control-label " for="select">
                    Seleccione una comuna:
                </label>
                <select class="select form-control" id="select" name="select">
                <option value="First Choice">
                    La Cisterna
                </option>
                <option value="Second Choice">
                    otra
                </option>
                <option value="Third Choice">
                    otra
                </option>
                </select>
            </div>
  		</div>

        <hr>
        <br>
           <div class="row">
            <div class="form-group col-sm-4">
                <label class="control-label " for="date">Calle o Avenida</label>
                <input id="txtRut" name="txtRut" placeholder="Rut" type="text" class="form-control">
            </div>
            <div class="form-group col-sm-4">
                <label class="control-label " for="date">Numero</label>
                <input id="txtDv" name="txtDv" placeholder="Dv" type="text" class="form-control">
            </div>
            <div class="form-group col-sm-4">
                <label class="control-label " for="date">Departamento</label>
                <input id="txtDv" name="txtDv" placeholder="Dv" type="text" class="form-control">
                
            </div>
        </div>
        
<br><br>
  <div class="col-xs-12 text-center">
  	<div class="center-block">
      <button name="submit" type="submit" class="btn btn-primary">Enviar</button>
 	</div>
  </div>
</form>
<br><br>
@stop

