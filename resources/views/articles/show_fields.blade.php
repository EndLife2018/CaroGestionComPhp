
<!-- Idfournisseur Field -->
<div class="form-group">
    {!! Form::label('idfournisseur', 'Idfournisseur : ') !!} {!! $article->idfournisseur !!}
</div>

<!-- Ref Interne Field -->
<div class="form-group">
    {!! Form::label('ref_interne', 'Reférence interne : ') !!} {!! $article->ref_interne !!}</p>
</div>


<!-- Desc Long Field -->
<div class="form-group">
    {!! Form::label('desc_long', 'Description : ') !!} {!! $article->desc_long !!}</p>
</div>



<!-- Num Serie Field -->
<div class="form-group">
    {!! Form::label('num_serie', 'Numéro série : ') !!} {!! $article->num_serie !!}
</div>

<!-- Poids Field -->
<div class="form-group">
    {!! Form::label('poids', 'Poids : ') !!} {!! $article->poids !!} kg
</div>

<!-- Duree Garantie Field -->
<div class="form-group">
    {!! Form::label('duree_garantie', 'Durée de garantie : ') !!} {!! $article->duree_garantie !!}
</div>

<!-- Stock Minima Field -->
<div class="form-group">
    {!! Form::label('stock_minima', 'Stock minimal : ') !!} {!! $article->stock_minima !!}
</div>

<!-- Code Barre Field -->
<div class="form-group">
    {!! Form::label('code_barre', 'Code barre : ') !!} {!! $article->code_barre !!}
</div>

<!-- Prix Vente Ht Field -->
<div class="form-group">
    {!! Form::label('prix_vente_ht', 'Prix Vente HT : ') !!} {!! $article->prix_vente_ht !!} €
</div>

<!-- Prix Vente Ttc Field -->
<div class="form-group">
    {!! Form::label('prix_vente_ttc', 'Prix Vente TTC:  ') !!} {!! $article->prix_vente_ttc !!} €
</div>
