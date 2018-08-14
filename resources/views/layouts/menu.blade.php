<li class="{{ Request::is('apoderados*') ? 'active' : '' }}">
    <a href="{!! route('apoderados.index') !!}"><i class="fa fa-edit"></i><span>Apoderados</span></a>
</li>

<li class="{{ Request::is('candidatos*') ? 'active' : '' }}">
    <a href="{!! route('candidatos.index') !!}"><i class="fa fa-edit"></i><span>Candidatos</span></a>
</li>

<li class="{{ Request::is('comunas*') ? 'active' : '' }}">
    <a href="{!! route('comunas.index') !!}"><i class="fa fa-edit"></i><span>Comunas</span></a>
</li>

<li class="{{ Request::is('postulacions*') ? 'active' : '' }}">
    <a href="{!! route('postulacions.index') !!}"><i class="fa fa-edit"></i><span>Postulacions</span></a>
</li>

<li class="{{ Request::is('provincias*') ? 'active' : '' }}">
    <a href="{!! route('provincias.index') !!}"><i class="fa fa-edit"></i><span>Provincias</span></a>
</li>

<li class="{{ Request::is('regions*') ? 'active' : '' }}">
    <a href="{!! route('regions.index') !!}"><i class="fa fa-edit"></i><span>Regions</span></a>
</li>

