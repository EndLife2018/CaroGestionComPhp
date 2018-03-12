<table class="table table-responsive" id="commandeFournisseurs-table">
    <thead>
        <tr>
            <th>Idfournisseur</th>
        <th>Date Cmd Four</th>
        <th>Etat Cmd Four</th>
        <th>Date Livraison Cmd Four</th>
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
        <th>Pvht1</th>
        <th>Pvht2</th>
        <th>Pvht3</th>
        <th>Pvht4</th>
        <th>Pvht5</th>
        <th>Pvht6</th>
        <th>Pvht7</th>
        <th>Pvht8</th>
        <th>Pvht9</th>
        <th>Pvht10</th>
        <th>Pvht11</th>
        <th>Pvht12</th>
        <th>Port</th>
        <th>Remise</th>
        <th>Eco-Part</th>
        <th>Ptht Cmd Four</th>
        <th>Taxe Cmd Four</th>
        <th>Ptttc Cmd Four</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($commandeFournisseurs as $commandeFournisseur)
        <tr>
            <td>{!! $commandeFournisseur->idfournisseur !!}</td>
            <td>{!! $commandeFournisseur->date_cmd_four !!}</td>
            <td>{!! $commandeFournisseur->etat_cmd_four !!}</td>
            <td>{!! $commandeFournisseur->date_livraison_cmd_four !!}</td>
            <td>{!! $commandeFournisseur->art1 !!}</td>
            <td>{!! $commandeFournisseur->qte1 !!}</td>
            <td>{!! $commandeFournisseur->art2 !!}</td>
            <td>{!! $commandeFournisseur->qte2 !!}</td>
            <td>{!! $commandeFournisseur->art3 !!}</td>
            <td>{!! $commandeFournisseur->qte3 !!}</td>
            <td>{!! $commandeFournisseur->art4 !!}</td>
            <td>{!! $commandeFournisseur->qte4 !!}</td>
            <td>{!! $commandeFournisseur->art5 !!}</td>
            <td>{!! $commandeFournisseur->qte5 !!}</td>
            <td>{!! $commandeFournisseur->art6 !!}</td>
            <td>{!! $commandeFournisseur->qte6 !!}</td>
            <td>{!! $commandeFournisseur->art7 !!}</td>
            <td>{!! $commandeFournisseur->qte7 !!}</td>
            <td>{!! $commandeFournisseur->art8 !!}</td>
            <td>{!! $commandeFournisseur->qte8 !!}</td>
            <td>{!! $commandeFournisseur->art9 !!}</td>
            <td>{!! $commandeFournisseur->qte9 !!}</td>
            <td>{!! $commandeFournisseur->art10 !!}</td>
            <td>{!! $commandeFournisseur->qte10 !!}</td>
            <td>{!! $commandeFournisseur->art11 !!}</td>
            <td>{!! $commandeFournisseur->qte11 !!}</td>
            <td>{!! $commandeFournisseur->art12 !!}</td>
            <td>{!! $commandeFournisseur->qte12 !!}</td>
            <td>{!! $commandeFournisseur->pvht1 !!}</td>
            <td>{!! $commandeFournisseur->pvht2 !!}</td>
            <td>{!! $commandeFournisseur->pvht3 !!}</td>
            <td>{!! $commandeFournisseur->pvht4 !!}</td>
            <td>{!! $commandeFournisseur->pvht5 !!}</td>
            <td>{!! $commandeFournisseur->pvht6 !!}</td>
            <td>{!! $commandeFournisseur->pvht7 !!}</td>
            <td>{!! $commandeFournisseur->pvht8 !!}</td>
            <td>{!! $commandeFournisseur->pvht9 !!}</td>
            <td>{!! $commandeFournisseur->pvht10 !!}</td>
            <td>{!! $commandeFournisseur->pvht11 !!}</td>
            <td>{!! $commandeFournisseur->pvht12 !!}</td>
            <td>{!! $commandeFournisseur->port !!}</td>
            <td>{!! $commandeFournisseur->remise !!}</td>
            <td>{!! $commandeFournisseur->eco-part !!}</td>
            <td>{!! $commandeFournisseur->ptht_cmd_four !!}</td>
            <td>{!! $commandeFournisseur->taxe_cmd_four !!}</td>
            <td>{!! $commandeFournisseur->ptttc_cmd_four !!}</td>
            <td>
                {!! Form::open(['route' => ['commandeFournisseurs.destroy', $commandeFournisseur->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('commandeFournisseurs.show', [$commandeFournisseur->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('commandeFournisseurs.edit', [$commandeFournisseur->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>