<!-- Idfamillearticle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idfamillearticle', 'Idfamillearticle:') !!}
    {!! Form::number('idfamillearticle', null, ['class' => 'form-control']) !!}
</div>

<!-- Idsousfamillearticle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idsousfamillearticle', 'Idsousfamillearticle:') !!}
    {!! Form::number('idsousfamillearticle', null, ['class' => 'form-control']) !!}
</div>

<!-- Idfournisseur Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idfournisseur', 'Idfournisseur:') !!}
    {!! Form::number('idfournisseur', null, ['class' => 'form-control']) !!}
</div>

<!-- Ref Fournisseur Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ref_fournisseur', 'Ref Fournisseur:') !!}
    {!! Form::text('ref_fournisseur', null, ['class' => 'form-control']) !!}
</div>

<!-- Ref Interne Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ref_interne', 'Ref Interne:') !!}
    {!! Form::text('ref_interne', null, ['class' => 'form-control']) !!}
</div>

<!-- Desc Court Field -->
<div class="form-group col-sm-6">
    {!! Form::label('desc_court', 'Desc Court:') !!}
    {!! Form::text('desc_court', null, ['class' => 'form-control']) !!}
</div>

<!-- Desc Long Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('desc_long', 'Desc Long:') !!}
    {!! Form::textarea('desc_long', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Debut Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_debut', 'Date Debut:') !!}
    {!! Form::text('date_debut', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Fin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_fin', 'Date Fin:') !!}
    {!! Form::text('date_fin', null, ['class' => 'form-control']) !!}
</div>

<!-- Num Serie Field -->
<div class="form-group col-sm-6">
    {!! Form::label('num_serie', 'Num Serie:') !!}
    {!! Form::text('num_serie', null, ['class' => 'form-control']) !!}
</div>

<!-- Poids Field -->
<div class="form-group col-sm-6">
    {!! Form::label('poids', 'Poids:') !!}
    {!! Form::text('poids', null, ['class' => 'form-control']) !!}
</div>

<!-- Duree Garantie Field -->
<div class="form-group col-sm-6">
    {!! Form::label('duree_garantie', 'Duree Garantie:') !!}
    {!! Form::text('duree_garantie', null, ['class' => 'form-control']) !!}
</div>

<!-- Stock Minima Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stock_minima', 'Stock Minima:') !!}
    {!! Form::text('stock_minima', null, ['class' => 'form-control']) !!}
</div>

<!-- Stock Reel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stock_reel', 'Stock Reel:') !!}
    {!! Form::text('stock_reel', null, ['class' => 'form-control']) !!}
</div>

<!-- Code Barre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('code_barre', 'Code Barre:') !!}
    {!! Form::text('code_barre', null, ['class' => 'form-control']) !!}
</div>

<!-- Prix Achat Ht Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prix_achat_ht', 'Prix Achat Ht:') !!}
    {!! Form::text('prix_achat_ht', null, ['class' => 'form-control']) !!}
</div>

<!-- Prix Vente Ht Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prix_vente_ht', 'Prix Vente Ht:') !!}
    {!! Form::text('prix_vente_ht', null, ['class' => 'form-control']) !!}
</div>

<!-- Prix Vente Ttc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prix_vente_ttc', 'Prix Vente Ttc:') !!}
    {!! Form::text('prix_vente_ttc', null, ['class' => 'form-control']) !!}
</div>

<!-- Images Field -->
<div class="form-group col-sm-6">
    {!! Form::label('images', 'Images:') !!}
    {!! Form::text('images', null, ['class' => 'form-control']) !!}
</div>

<!-- Images2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('images2', 'Images2:') !!}
    {!! Form::text('images2', null, ['class' => 'form-control']) !!}
</div>

<!-- Images3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('images3', 'Images3:') !!}
    {!! Form::text('images3', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('articles.index') !!}" class="btn btn-default">Cancel</a>
</div>
