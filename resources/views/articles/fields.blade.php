
<!-- Idfournisseur Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idfournisseur', 'Fournisseur : ') !!} {!! Form::number('idfournisseur', null, ['class' => 'form-control']) !!}
</div>


<!-- Ref Interne Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ref_interne', 'Reférence interne : ') !!} {!! Form::text('ref_interne', null, ['class' => 'form-control']) !!}
</div>


<!-- Desc Long Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('desc_long', 'Description : ') !!}
    {!! Form::textarea('desc_long', null, ['class' => 'form-control']) !!}
</div>


<!-- Num Serie Field -->
<div class="form-group col-sm-6">
    {!! Form::label('num_serie', 'Numéro de série : ') !!}
    {!! Form::text('num_serie', null, ['class' => 'form-control']) !!}
</div>

<!-- Poids Field -->
<div class="form-group col-sm-6">
    {!! Form::label('poids', 'Poids : ') !!}
    {!! Form::text('poids', null, ['class' => 'form-control']) !!}
</div>

<!-- Duree Garantie Field -->
<div class="form-group col-sm-6">
    {!! Form::label('duree_garantie', 'Durée Garantie : ') !!}
    {!! Form::text('duree_garantie', null, ['class' => 'form-control']) !!}
</div>

<!-- Stock Minima Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stock_minima', 'Stock Minimal : ') !!}
    {!! Form::text('stock_minima', null, ['class' => 'form-control']) !!}
</div>


<!-- Code Barre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('code_barre', 'Code barre : ') !!}
    {!! Form::text('code_barre', null, ['class' => 'form-control']) !!}
</div>

<!-- Prix Vente Ht Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prix_vente_ht', 'Prix Vente HT : ') !!}
    {!! Form::text('prix_vente_ht', null, ['class' => 'form-control']) !!}
</div>

<!-- Prix Vente Ttc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prix_vente_ttc', 'Prix Vente TTC : ') !!}
    {!! Form::text('prix_vente_ttc', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('articles.index') !!}" class="btn btn-default">Annuler</a>
</div>
