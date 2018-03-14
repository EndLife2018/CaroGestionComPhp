<table class="table table-responsive" id="fournisseurs-table">
    <thead>
        <tr>
            <th>Raison Social</th>
            <th>Num Siret</th>
            <th>Num Tva</th>
            <th>Adresse</th>
            <th>Cp</th>
            <th>Ville</th>
            <th>Tel</th>
            <th>Fax</th>
            <th>Port</th>
            <th>Mail</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($fournisseurs as $fournisseur)
        <tr>
            <td>{!! $fournisseur->raison_social !!}</td>
            <td>{!! $fournisseur->num_siret !!}</td>
            <td>{!! $fournisseur->num_tva !!}</td>
            <td>{!! $fournisseur->adresse1 !!}</td>
            <td>{!! $fournisseur->cp !!}</td>
            <td>{!! $fournisseur->ville !!}</td>
            <td>{!! $fournisseur->tel !!}</td>
            <td>{!! $fournisseur->fax !!}</td>
            <td>{!! $fournisseur->port !!}</td>
            <td>{!! $fournisseur->mail !!}</td>
            <td>
                {!! Form::open(['route' => ['fournisseurs.destroy', $fournisseur->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('fournisseurs.show', [$fournisseur->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('fournisseurs.edit', [$fournisseur->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Etes-vous sur?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>