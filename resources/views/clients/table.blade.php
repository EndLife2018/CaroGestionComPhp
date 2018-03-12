<table class="table table-responsive" id="clients-table">
    <thead>
        <tr>
        <th>Raison Social</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Adresse1</th>
        <th>Cp</th>
        <th>Ville</th>
        <th>Tel</th>
        <th>Port</th>
        <th>Mail</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($clients as $client)
        <tr>
            <td>{!! $client->raison_social !!}</td>
            <td>{!! $client->nom !!}</td>
            <td>{!! $client->prenom !!}</td>
            <td>{!! $client->adresse1 !!}</td>
            <td>{!! $client->cp !!}</td>
            <td>{!! $client->ville !!}</td>
            <td>{!! $client->tel !!}</td>
            <td>{!! $client->port !!}</td>
            <td>{!! $client->mail !!}</td>
            <td>
                {!! Form::open(['route' => ['clients.destroy', $client->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('clients.show', [$client->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('clients.edit', [$client->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>