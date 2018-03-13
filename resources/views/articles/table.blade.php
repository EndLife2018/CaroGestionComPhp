<table class="table table-responsive" id="articles-table">
    <thead>
        <tr>
        <th>Id four</th>
        <th>Ref Interne</th>
        <th>Poids</th>
        <th>Stock Minima</th>
        <th>Code Barre</th>
        <th>Prix Vente Ht</th>
        <th>Prix Vente Ttc</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($articles as $article)
        <tr>
            <td>{!! $article->idfournisseur !!}</td>
            <td>{!! $article->ref_interne !!}</td>
            <td>{!! $article->poids !!}</td>
            <td>{!! $article->stock_minima !!}</td>
            <td>{!! $article->code_barre !!}</td>
            <td>{!! $article->prix_vente_ht !!}</td>
            <td>{!! $article->prix_vente_ttc !!}</td>
            <td>
                {!! Form::open(['route' => ['articles.destroy', $article->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('articles.show', [$article->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('articles.edit', [$article->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Etes-vous sur ?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>