<table class="table table-responsive" id="commandeClients-table">
    <thead>
        <tr>
            <th>Idclient</th>
        <th>Date</th>
        <th>Statut</th>
        <th>Date Liv Cmd Cli</th>
        <th>Ptht Cmd Cli</th>
        <th>Taxe Cmd Cli</th>
        <th>Ptttc Cmd Cli</th>
        <th>Statut</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($commandeClients as $commandeClient)
        <tr>
            <td>{!! App\Models\Client::findOrFail($commandeClient->idclient)->raison_social !!}</td>
            <td>{!! $commandeClient->date !!}</td>
            <td> <?php 
                    switch ($commandeClient->etat_cmd_cli) {
                                    case 1:
                                        echo "Devis";
                                        break;
                                    case 2:
                                        echo "Commande";
                                        break;

                                }?>
            </td>
            <td>{!! $commandeClient->date_liv_cmd_cli !!}</td>
            <td>{!! $commandeClient->ptht_cmd_cli !!}</td>
            <td>{!! $commandeClient->taxe_cmd_cli !!}</td>
            <td>{!! $commandeClient->ptttc_cmd_cli !!}</td>
            <td><?php if($commandeClient->etat_cmd_cli == 1)
                      { ?> 
                        <a href="{{route('devis.pdf',$commandeClient->id)}}" class='btn btn-default btn-xs'>
                            Devis
                        </a>
                     <?php } ?>
            </td>
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