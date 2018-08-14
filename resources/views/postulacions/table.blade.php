<table class="table table-responsive" id="postulacions-table">
    <thead>
        <tr>
            <th>Idcandidato</th>
        <th>Idapoderado</th>
        <th>Fechapost</th>
        <th>Motivopost</th>
        <th>Cursopost</th>
        <th>Nombrefunc</th>
        <th>Nombreherm</th>
        <th>Cursoherm</th>
        <th>Prioridad</th>
        <th>Nombreegre</th>
        <th>Rutegre</th>
        <th>Dvrutegre</th>
        <th>Anoegre</th>
        <th>Certificado</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($postulacions as $postulacion)
        <tr>
            <td>{!! $postulacion->idCandidato !!}</td>
            <td>{!! $postulacion->idApoderado !!}</td>
            <td>{!! $postulacion->fechaPost !!}</td>
            <td>{!! $postulacion->motivoPost !!}</td>
            <td>{!! $postulacion->cursoPost !!}</td>
            <td>{!! $postulacion->nombreFunc !!}</td>
            <td>{!! $postulacion->nombreHerm !!}</td>
            <td>{!! $postulacion->cursoHerm !!}</td>
            <td>{!! $postulacion->prioridad !!}</td>
            <td>{!! $postulacion->nombreEgre !!}</td>
            <td>{!! $postulacion->rutEgre !!}</td>
            <td>{!! $postulacion->dvRutEgre !!}</td>
            <td>{!! $postulacion->AnoEgre !!}</td>
            <td>{!! $postulacion->certificado !!}</td>
            <td>
                {!! Form::open(['route' => ['postulacions.destroy', $postulacion->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('postulacions.show', [$postulacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('postulacions.edit', [$postulacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>