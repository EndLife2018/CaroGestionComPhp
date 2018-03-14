<!-- Raison Social Field -->
<div class="form-group col-sm-6">
    {!! Form::label('raison_social', 'Raison Sociale : ') !!}
    {!! Form::text('raison_social', null, ['class' => 'form-control']) !!}
</div>

<!-- Num Siret Field -->
<div class="form-group col-sm-6">
    {!! Form::label('num_siret', 'Numéro SIRET : ') !!}
    {!! Form::text('num_siret', null, ['class' => 'form-control']) !!}
</div>

<!-- Num Tva Field -->
<div class="form-group col-sm-6">
    {!! Form::label('num_tva', 'Numéro TVA : ') !!}
    {!! Form::text('num_tva', null, ['class' => 'form-control']) !!}
</div>

<!-- Civilite Field -->
<div class="form-group col-sm-6">
    {!! Form::label('civilite', 'Civilité : ') !!}
    {!! Form::number('civilite', null, ['class' => 'form-control']) !!}
</div>

<!-- Adresse1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adresse1', 'Adresse 1 : ') !!}
    {!! Form::text('adresse1', null, ['class' => 'form-control']) !!}
</div>

<!-- Adresse2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adresse2', 'Adresse 2 : ') !!}
    {!! Form::text('adresse2', null, ['class' => 'form-control']) !!}
</div>

<!-- Cp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cp', 'Code Postal : ') !!}
    {!! Form::number('cp', null, ['class' => 'form-control']) !!}
</div>

<!-- Ville Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ville', 'Ville : ') !!}
    {!! Form::text('ville', null, ['class' => 'form-control']) !!}
</div>

<!-- Tel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tel', 'Téléphone : ') !!}
    {!! Form::text('tel', null, ['class' => 'form-control']) !!}
</div>

<!-- Fax Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fax', 'Fax : ') !!}
    {!! Form::text('fax', null, ['class' => 'form-control']) !!}
</div>

<!-- Port Field -->
<div class="form-group col-sm-6">
    {!! Form::label('port', 'Portable : ') !!}
    {!! Form::text('port', null, ['class' => 'form-control']) !!}
</div>

<!-- Mail Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mail', 'Mail : ') !!}
    {!! Form::text('mail', null, ['class' => 'form-control']) !!}
</div>

<!-- Mode Paiement Default Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mode_paiement_default', 'Mode paiement défault : ') !!}
    {!! Form::number('mode_paiement_default', null, ['class' => 'form-control']) !!}
</div>

<!-- Code Banque Field -->
<div class="form-group col-sm-6">
    {!! Form::label('code_banque', 'Code banque : ') !!}
    {!! Form::text('code_banque', null, ['class' => 'form-control']) !!}
</div>

<!-- Code Guichet Field -->
<div class="form-group col-sm-6">
    {!! Form::label('code_guichet', 'Code guichet : ') !!}
    {!! Form::text('code_guichet', null, ['class' => 'form-control']) !!}
</div>

<!-- Code Cpt Field -->
<div class="form-group col-sm-6">
    {!! Form::label('code_cpt', 'Code Cpt : ') !!}
    {!! Form::text('code_cpt', null, ['class' => 'form-control']) !!}
</div>

<!-- Cle Rib Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cle_rib', 'Clé RIB : ') !!}
    {!! Form::text('cle_rib', null, ['class' => 'form-control']) !!}
</div>

<!-- Iban Field -->
<div class="form-group col-sm-6">
    {!! Form::label('iban', 'IBAN : ') !!}
    {!! Form::text('iban', null, ['class' => 'form-control']) !!}
</div>

<!-- Bic Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bic', 'BIC : ') !!}
    {!! Form::text('bic', null, ['class' => 'form-control']) !!}
</div>

<!-- Encour Field -->
<div class="form-group col-sm-6">
    {!! Form::label('encour', 'Encours : ') !!}
    {!! Form::text('encour', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('fournisseurs.index') !!}" class="btn btn-default">Annuler</a>
</div>
