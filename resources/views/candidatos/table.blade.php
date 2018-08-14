<table class="table table-responsive" id="candidatos-table">
    <thead>
        <tr>
            <th>Idapoderado</th>
        <th>Nombrecand</th>
        <th>Appatcand</th>
        <th>Apnatcand</th>
        <th>Rutcand</th>
        <th>Dvcand</th>
        <th>Parentesco</th>
        <th>Region</th>
        <th>Provincia</th>
        <th>Comuna</th>
        <th>Callecand</th>
        <th>Numero</th>
        <th>Dpto</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($candidatos as $candidato)
        <tr>
            <td>{!! $candidato->idApoderado !!}</td>
            <td>{!! $candidato->nombreCand !!}</td>
            <td>{!! $candidato->apPatCand !!}</td>
            <td>{!! $candidato->apNatCand !!}</td>
            <td>{!! $candidato->rutCand !!}</td>
            <td>{!! $candidato->dvCand !!}</td>
            <td>{!! $candidato->parentesco !!}</td>
            <td>{!! $candidato->region !!}</td>
            <td>{!! $candidato->provincia !!}</td>
            <td>{!! $candidato->comuna !!}</td>
            <td>{!! $candidato->calleCand !!}</td>
            <td>{!! $candidato->numero !!}</td>
            <td>{!! $candidato->dpto !!}</td>
            <td>
                {!! Form::open(['route' => ['candidatos.destroy', $candidato->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('candidatos.show', [$candidato->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('candidatos.edit', [$candidato->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>