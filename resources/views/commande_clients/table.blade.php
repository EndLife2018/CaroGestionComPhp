<table class="table table-responsive" id="commandeClients-table">
    <thead>
        <tr>
            <th>Idclient</th>
        <th>Date</th>
        <th>Etat Cmd Cli</th>
        <th>Date Liv Cmd Cli</th>
        <th>Art1</th>
        <th>Qte1</th>
        <th>Art2</th>
        <th>Qte2</th>
        <th>Art3</th>
        <th>Qte3</th>
        <th>Art4</th>
        <th>Qte4</th>
        <th>Art5</th>
        <th>Qte5</th>
        <th>Art6</th>
        <th>Qte6</th>
        <th>Art7</th>
        <th>Qte7</th>
        <th>Art8</th>
        <th>Qte8</th>
        <th>Art9</th>
        <th>Qte9</th>
        <th>Art10</th>
        <th>Qte10</th>
        <th>Art11</th>
        <th>Qte11</th>
        <th>Art12</th>
        <th>Qte12</th>
        <th>Ptht Cmd Cli</th>
        <th>Taxe Cmd Cli</th>
        <th>Ptttc Cmd Cli</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($commandeClients as $commandeClient)
        <tr>
            <td>{!! $commandeClient->idclient !!}</td>
            <td>{!! $commandeClient->date !!}</td>
            <td>{!! $commandeClient->etat_cmd_cli !!}</td>
            <td>{!! $commandeClient->date_liv_cmd_cli !!}</td>
            <td>{!! $commandeClient->art1 !!}</td>
            <td>{!! $commandeClient->qte1 !!}</td>
            <td>{!! $commandeClient->art2 !!}</td>
            <td>{!! $commandeClient->qte2 !!}</td>
            <td>{!! $commandeClient->art3 !!}</td>
            <td>{!! $commandeClient->qte3 !!}</td>
            <td>{!! $commandeClient->art4 !!}</td>
            <td>{!! $commandeClient->qte4 !!}</td>
            <td>{!! $commandeClient->art5 !!}</td>
            <td>{!! $commandeClient->qte5 !!}</td>
            <td>{!! $commandeClient->art6 !!}</td>
            <td>{!! $commandeClient->qte6 !!}</td>
            <td>{!! $commandeClient->art7 !!}</td>
            <td>{!! $commandeClient->qte7 !!}</td>
            <td>{!! $commandeClient->art8 !!}</td>
            <td>{!! $commandeClient->qte8 !!}</td>
            <td>{!! $commandeClient->art9 !!}</td>
            <td>{!! $commandeClient->qte9 !!}</td>
            <td>{!! $commandeClient->art10 !!}</td>
            <td>{!! $commandeClient->qte10 !!}</td>
            <td>{!! $commandeClient->art11 !!}</td>
            <td>{!! $commandeClient->qte11 !!}</td>
            <td>{!! $commandeClient->art12 !!}</td>
            <td>{!! $commandeClient->qte12 !!}</td>
            <td>{!! $commandeClient->ptht_cmd_cli !!}</td>
            <td>{!! $commandeClient->taxe_cmd_cli !!}</td>
            <td>{!! $commandeClient->ptttc_cmd_cli !!}</td>
            <td>
                {!! Form::open(['route' => ['commandeClients.destroy', $commandeClient->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('commandeClients.show', [$commandeClient->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('commandeClients.edit', [$commandeClient->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>