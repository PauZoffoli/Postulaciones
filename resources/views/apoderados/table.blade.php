<table class="table table-responsive" id="apoderados-table">
    <thead>
        <tr>
            <th>Nombreapo</th>
        <th>Appatapo</th>
        <th>Apmatapo</th>
        <th>Fonoapo</th>
        <th>Rutapo</th>
        <th>Dvapo</th>
        <th>Correoapo</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($apoderados as $apoderado)
        <tr>
            <td>{!! $apoderado->nombreApo !!}</td>
            <td>{!! $apoderado->apPatApo !!}</td>
            <td>{!! $apoderado->apMatApo !!}</td>
            <td>{!! $apoderado->fonoApo !!}</td>
            <td>{!! $apoderado->rutApo !!}</td>
            <td>{!! $apoderado->dvApo !!}</td>
            <td>{!! $apoderado->correoApo !!}</td>
            <td>
                {!! Form::open(['route' => ['apoderados.destroy', $apoderado->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('apoderados.show', [$apoderado->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('apoderados.edit', [$apoderado->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>