<table class="table table-responsive" id="articles-table">
    <thead>
        <tr>
        <th>Id fam art</th>
        <th>Id ss fam art</th>
        <th>Id four</th>
        <th>Ref Interne</th>
        <th>Desc Court</th>
        <th>Date Debut</th>
        <th>Date Fin</th>
        <th>Poids</th>
        <th>Stock Minima</th>
        <th>Stock Reel</th>
        <th>Code Barre</th>
        <th>Prix Achat Ht</th>
        <th>Prix Vente Ht</th>
        <th>Prix Vente Ttc</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($articles as $article)
        <tr>
            <td>{!! $article->idfamillearticle !!}</td>
            <td>{!! $article->idsousfamillearticle !!}</td>
            <td>{!! $article->idfournisseur !!}</td>
            <td>{!! $article->ref_interne !!}</td>
            <td>{!! $article->desc_court !!}</td>
            <td>{!! $article->date_debut !!}</td>
            <td>{!! $article->date_fin !!}</td>
            <td>{!! $article->poids !!}</td>
            <td>{!! $article->stock_minima !!}</td>
            <td>{!! $article->stock_reel !!}</td>
            <td>{!! $article->code_barre !!}</td>
            <td>{!! $article->prix_achat_ht !!}</td>
            <td>{!! $article->prix_vente_ht !!}</td>
            <td>{!! $article->prix_vente_ttc !!}</td>
            <td>
                {!! Form::open(['route' => ['articles.destroy', $article->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('articles.show', [$article->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('articles.edit', [$article->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>