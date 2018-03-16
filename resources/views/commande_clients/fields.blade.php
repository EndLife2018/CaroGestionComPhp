<!-- Idclient Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idclient', 'Client :') !!}
    {!! Form::select('idclient', App\Models\Client::pluck('raison_social', 'id'))!!}
</div>

<!-- Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date', 'Date :') !!}
    {!! Form::date('date', null, ['class' => 'form-control']) !!}
</div>

<!-- Etat Cmd Cli Field -->
<div class="form-group col-sm-6">
    {!! Form::label('etat_cmd_cli', 'Statut : ') !!}
    {!! Form::select('etat_cmd_cli', array('1' => 'Devis', '2' => 'Commande')) !!}

</div>

<!-- Date Liv Cmd Cli Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_liv_cmd_cli', 'Date Livraison :') !!}
    {!! Form::date('date_liv_cmd_cli', null, ['class' => 'form-control']) !!}
</div>


<table class="table table-responsive">
    <tr>
        <td>{!! Form::label('art1', 'Article N°1:') !!}
        {!! Form::select('art1', App\Models\Article::pluck('desc_long', 'id'), null, ['placeholder' => '', 'class' => 'selectArticle'] ) !!}
</td>
        <td>{!! Form::label('qte1', 'Quantité art. 1 :') !!} {!! Form::text('qte1', null) !!}</td>
    </tr>
    <tr>
        <td>  {!! Form::label('art2', 'Article N°2:') !!}
    {!! Form::select('art2', App\Models\Article::pluck('desc_long', 'id'), null, ['placeholder' => '', 'class' => 'selectArticle'] ) !!}</td>
        <td>{!! Form::label('qte2', 'Quantité art. 2 :') !!} {!! Form::text('qte2', null) !!}</td>
    </tr>
    <tr>
        <td>{!! Form::label('art3', 'Article N°3:') !!}
    {!! Form::select('art3', App\Models\Article::pluck('desc_long', 'id'), null, ['placeholder' => '', 'class' => 'selectArticle'] ) !!}</td>
        <td>{!! Form::label('qte3', 'Quantité art. 3 :') !!} {!! Form::text('qte3', null) !!}</td>
    </tr>
    <tr>
        <td>{!! Form::label('art4', 'Article N°4:') !!}
    {!! Form::select('art4', App\Models\Article::pluck('desc_long', 'id'), null, ['placeholder' => '', 'class' => 'selectArticle'] ) !!}
</td>
        <td>{!! Form::label('qte4', 'Quantité art. 4 :') !!} {!! Form::text('qte4', null) !!}</td>
    </tr>
    <tr>
        <td>{!! Form::label('art5', 'Article N°5:') !!}
    {!! Form::select('art5', App\Models\Article::pluck('desc_long', 'id'), null, ['placeholder' => '', 'class' => 'selectArticle'] ) !!}</td>
        <td>{!! Form::label('qte5', 'Quantité art. 5 :') !!} {!! Form::text('qte5', null) !!}</td>
    </tr>
    <tr>
        <td>{!! Form::label('art6', 'Article N°6:') !!}
    {!! Form::select('art6', App\Models\Article::pluck('desc_long', 'id'), null, ['placeholder' => '', 'class' => 'selectArticle'] ) !!}</td>
        <td>{!! Form::label('qte6', 'Quantité art. 6 :') !!} {!! Form::text('qte6', null) !!}</td>
    </tr>
    <tr>
        <td>  {!! Form::label('art7', 'Article N°7:') !!}
    {!! Form::select('art7', App\Models\Article::pluck('desc_long', 'id'), null, ['placeholder' => '', 'class' => 'selectArticle'] ) !!}</td>
        <td>{!! Form::label('qte7', 'Quantité art. 7 :') !!} {!! Form::text('qte7', null) !!}</td>
    </tr>
    <tr>
        <td>{!! Form::label('art8', 'Article N°8:') !!}
    {!! Form::select('art8', App\Models\Article::pluck('desc_long', 'id'), null, ['placeholder' => '', 'class' => 'selectArticle'] ) !!}</td>
        <td>{!! Form::label('qte8', 'Quantité art. 8 :') !!} {!! Form::text('qte8', null) !!}</td>
    </tr>
    <tr>
        <td>{!! Form::label('art9', 'Article N°9:') !!}
    {!! Form::select('art9', App\Models\Article::pluck('desc_long', 'id'), null, ['placeholder' => '', 'class' => 'selectArticle'] ) !!}</td>
        <td>{!! Form::label('qte9', 'Quantité art. 9 :') !!} {!! Form::text('qte9', null) !!}</td>
    </tr>
    <tr>
        <td>{!! Form::label('art10', 'Article N°10:') !!}
    {!! Form::select('art10', App\Models\Article::pluck('desc_long', 'id'), null, ['placeholder' => '', 'class' => 'selectArticle'] ) !!}</td>
        <td>{!! Form::label('qte10', 'Quantité art. 10:') !!} {!! Form::text('qte10', null) !!}</td>
    </tr>
    <tr>
        <td>{!! Form::label('art11', 'Article N°11:') !!}
    {!! Form::select('art11', App\Models\Article::pluck('desc_long', 'id'), null, ['placeholder' => '', 'class' => 'selectArticle'] ) !!}</td>
        <td>{!! Form::label('qte11', 'Quantité art. 11:') !!} {!! Form::text('qte11', null) !!}</td>
    </tr>
    <tr>
        <td>{!! Form::label('art12', 'Article N°12:') !!}
    {!! Form::select('art12', App\Models\Article::pluck('desc_long', 'id'), null, ['placeholder' => '', 'class' => 'selectArticle'] ) !!}</td>
        <td>{!! Form::label('qte12', 'Quantité art. 12:') !!} {!! Form::text('qte12', null) !!}</td>
    </tr>

</table>


<!-- Ptht Cmd Cli Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ptht_cmd_cli', 'Ptht Cmd Cli:') !!}
    {!! Form::text('ptht_cmd_cli', null, ['class' => 'form-control']) !!}
</div>

<!-- Taxe Cmd Cli Field -->
<div class="form-group col-sm-6">
    {!! Form::label('taxe_cmd_cli', 'Taxe Cmd Cli:') !!}
    {!! Form::number('taxe_cmd_cli', null, ['class' => 'form-control']) !!}
</div>

<!-- Ptttc Cmd Cli Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ptttc_cmd_cli', 'Ptttc Cmd Cli:') !!}
    {!! Form::text('ptttc_cmd_cli', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('commandeClients.index') !!}" class="btn btn-default">Annuler</a>
</div>


<script type="text/javascript">
    // In your Javascript (external .js resource or <script> tag)
$(document).ready(function() {
    $('.selectArticle').select2();
});
</script>