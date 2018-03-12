<!-- Iduser Field -->
<div class="form-group col-sm-6">
    {!! Form::label('iduser', 'Iduser:') !!}
    {!! Form::number('iduser', null, ['class' => 'form-control']) !!}
</div>

<!-- Raison Social Field -->
<div class="form-group col-sm-6">
    {!! Form::label('raison_social', 'Raison Social:') !!}
    {!! Form::text('raison_social', null, ['class' => 'form-control']) !!}
</div>

<!-- Num Siret Field -->
<div class="form-group col-sm-6">
    {!! Form::label('num_siret', 'Num Siret:') !!}
    {!! Form::text('num_siret', null, ['class' => 'form-control']) !!}
</div>

<!-- Num Tva Field -->
<div class="form-group col-sm-6">
    {!! Form::label('num_tva', 'Num Tva:') !!}
    {!! Form::text('num_tva', null, ['class' => 'form-control']) !!}
</div>

<!-- Civilite Field -->
<div class="form-group col-sm-6">
    {!! Form::label('civilite', 'Civilite:') !!}
    {!! Form::number('civilite', null, ['class' => 'form-control']) !!}
</div>

<!-- Nom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nom', 'Nom:') !!}
    {!! Form::text('nom', null, ['class' => 'form-control']) !!}
</div>

<!-- Prenom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prenom', 'Prenom:') !!}
    {!! Form::text('prenom', null, ['class' => 'form-control']) !!}
</div>

<!-- Adresse1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adresse1', 'Adresse1:') !!}
    {!! Form::text('adresse1', null, ['class' => 'form-control']) !!}
</div>

<!-- Adresse2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adresse2', 'Adresse2:') !!}
    {!! Form::text('adresse2', null, ['class' => 'form-control']) !!}
</div>

<!-- Cp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cp', 'Cp:') !!}
    {!! Form::number('cp', null, ['class' => 'form-control']) !!}
</div>

<!-- Ville Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ville', 'Ville:') !!}
    {!! Form::text('ville', null, ['class' => 'form-control']) !!}
</div>

<!-- Tel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tel', 'Tel:') !!}
    {!! Form::text('tel', null, ['class' => 'form-control']) !!}
</div>

<!-- Fax Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fax', 'Fax:') !!}
    {!! Form::text('fax', null, ['class' => 'form-control']) !!}
</div>

<!-- Port Field -->
<div class="form-group col-sm-6">
    {!! Form::label('port', 'Port:') !!}
    {!! Form::text('port', null, ['class' => 'form-control']) !!}
</div>

<!-- Mail Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mail', 'Mail:') !!}
    {!! Form::text('mail', null, ['class' => 'form-control']) !!}
</div>

<!-- Mode Paiement Default Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mode_paiement_default', 'Mode Paiement Default:') !!}
    {!! Form::number('mode_paiement_default', null, ['class' => 'form-control']) !!}
</div>

<!-- Code Banque Field -->
<div class="form-group col-sm-6">
    {!! Form::label('code_banque', 'Code Banque:') !!}
    {!! Form::text('code_banque', null, ['class' => 'form-control']) !!}
</div>

<!-- Code Guichet Field -->
<div class="form-group col-sm-6">
    {!! Form::label('code_guichet', 'Code Guichet:') !!}
    {!! Form::text('code_guichet', null, ['class' => 'form-control']) !!}
</div>

<!-- Code Cpt Field -->
<div class="form-group col-sm-6">
    {!! Form::label('code_cpt', 'Code Cpt:') !!}
    {!! Form::text('code_cpt', null, ['class' => 'form-control']) !!}
</div>

<!-- Cle Rib Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cle_rib', 'Cle Rib:') !!}
    {!! Form::text('cle_rib', null, ['class' => 'form-control']) !!}
</div>

<!-- Iban Field -->
<div class="form-group col-sm-6">
    {!! Form::label('iban', 'Iban:') !!}
    {!! Form::text('iban', null, ['class' => 'form-control']) !!}
</div>

<!-- Bic Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bic', 'Bic:') !!}
    {!! Form::text('bic', null, ['class' => 'form-control']) !!}
</div>

<!-- Encour Field -->
<div class="form-group col-sm-6">
    {!! Form::label('encour', 'Encour:') !!}
    {!! Form::text('encour', null, ['class' => 'form-control']) !!}
</div>

<!-- Mail Paypal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mail_paypal', 'Mail Paypal:') !!}
    {!! Form::text('mail_paypal', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('clients.index') !!}" class="btn btn-default">Cancel</a>
</div>
