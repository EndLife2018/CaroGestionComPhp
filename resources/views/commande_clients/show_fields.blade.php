<!-- Idcmdcli Field -->
<div class="form-group">
    {!! Form::label('idcmdcli', 'N° Commande : ') !!} {!! $commandeClient->id !!}
</div>

<!-- Idclient Field -->
<div class="form-group">
    {!! Form::label('idclient', 'Client :') !!} {!! App\Models\Client::findOrFail($commandeClient->idclient)->raison_social !!}
</div>

<!-- Date Field -->
<div class="form-group">
    {!! Form::label('date', 'Date : ') !!} {!! $commandeClient->date !!}
</div>

<!-- Etat Cmd Cli Field -->
<div class="form-group">
    {!! Form::label('etat_cmd_cli', 'Etat commande : ') !!} {!! $commandeClient->etat_cmd_cli !!}
</div>

<!-- Date Liv Cmd Cli Field -->
<div class="form-group">
    {!! Form::label('date_liv_cmd_cli', 'Date Liv Cmd Cli:') !!} {!! $commandeClient->date_liv_cmd_cli !!}
</div>
<?php if(!$commandeClient->art1 == null || !$commandeClient->art2 == null || !$commandeClient->art3 == null || !$commandeClient->art4 == null || !$commandeClient->art5 == null || !$commandeClient->art6 == null || !$commandeClient->art7 == null || !$commandeClient->art8 == null || !$commandeClient->art9 == null ||!$commandeClient->art10 == null || !$commandeClient->art11 == null || !$commandeClient->art12 == null) 
   { ?>
<table class="table table-responsive">
    <tr>
        <th> Article </th>
        <th> Quantité </th>
    </tr>
<?php }
 if(!$commandeClient->art1 == null) 
   { ?>
    <tr>
        <td> {!! App\Models\Article::findOrFail($commandeClient->art1)->ref_interne !!}</td>
        <td> {!! $commandeClient->qte1 !!}</td>
    </tr>
<?php } 
if(!$commandeClient->art2 == null) 
   { ?>
    <tr>
        <td> {!! App\Models\Article::findOrFail($commandeClient->art2)->ref_interne !!}</td>
        <td> {!! $commandeClient->qte2 !!}</td>
    </tr>
<?php } 
if(!$commandeClient->art3 == null) 
   { ?>
    <tr>
        <td> {!! App\Models\Article::findOrFail($commandeClient->art3)->ref_interne !!}</td>
        <td> {!! $commandeClient->qte3 !!}</td>
    </tr>
<?php } 
if(!$commandeClient->art4 == null) 
   { ?>
    <tr>
        <td> {!! App\Models\Article::findOrFail($commandeClient->art4)->ref_interne !!}</td>
        <td> {!! $commandeClient->qte4 !!}</td>
    </tr>
<?php }
if(!$commandeClient->art5 == null) 
   { ?>
    <tr>
        <td> {!! App\Models\Article::findOrFail($commandeClient->art5)->ref_interne !!}</td>
        <td> {!! $commandeClient->qte5 !!}</td>
    </tr>
<?php } 
if(!$commandeClient->art6 == null) 
   { ?>
    <tr>
        <td> {!! App\Models\Article::findOrFail($commandeClient->art6)->ref_interne !!}</td>
        <td> {!! $commandeClient->qte6 !!}</td>
    </tr>
<?php } ?>

    <?php if(!$commandeClient->art7 == null) 
   { ?>
    <tr>
        <td> {!! App\Models\Article::findOrFail($commandeClient->art7)->ref_interne !!}</td>
        <td> {!! $commandeClient->qte7 !!}</td>
    </tr>
<?php }
if(!$commandeClient->art8 == null) 
   { ?>
    <tr>
        <td> {!! App\Models\Article::findOrFail($commandeClient->art8)->ref_interne !!}</td>
        <td> {!! $commandeClient->qte8 !!}</td>
    </tr>
<?php } 
if(!$commandeClient->art9 == null) 
   { ?>
    <tr>
        <td> {!! App\Models\Article::findOrFail($commandeClient->art9)->ref_interne !!}</td>
        <td> {!! $commandeClient->qte9 !!}</td>
    </tr>
<?php } 
if(!$commandeClient->art10 == null) 
   { ?>
    <tr>
        <td> {!! App\Models\Article::findOrFail($commandeClient->art10)->ref_interne !!}</td>
        <td> {!! $commandeClient->qte10 !!}</td>
    </tr>
<?php }
if(!$commandeClient->art11 == null) 
   { ?>
    <tr>
        <td> {!! App\Models\Article::findOrFail($commandeClient->art11)->ref_interne !!}</td>
        <td> {!! $commandeClient->qte11 !!}</td>
    </tr>
<?php } 
if(!$commandeClient->art12 == null) 
   { ?>
    <tr>
        <td> {!! App\Models\Article::findOrFail($commandeClient->art12)->ref_interne !!}</td>
        <td> {!! $commandeClient->qte12 !!}</td>
    </tr>
<?php } 

if($commandeClient->art1 =! "" || $commandeClient->art2 =! "" || $commandeClient->art3 =! "" || $commandeClient->art4 =! "" || $commandeClient->art5 =! "" || $commandeClient->art6 =! "" || $commandeClient->art7 =! "" || $commandeClient->art8 =! "" || $commandeClient->art9 =! "" ||$commandeClient->art10 =! "" || $commandeClient->art11 =! "" || $commandeClient->art12 =! "") 
   { ?>
    </table>
<?php } ?>


<!-- Ptht Cmd Cli Field -->
<div class="form-group">
    {!! Form::label('ptht_cmd_cli', 'Ptht Cmd Cli:') !!} {!! $commandeClient->ptht_cmd_cli !!}
</div>

<!-- Taxe Cmd Cli Field -->
<div class="form-group">
    {!! Form::label('taxe_cmd_cli', 'Taxe Cmd Cli:') !!} {!! $commandeClient->taxe_cmd_cli !!}
</div>

<!-- Ptttc Cmd Cli Field -->
<div class="form-group">
    {!! Form::label('ptttc_cmd_cli', 'Ptttc Cmd Cli:') !!} {!! $commandeClient->ptttc_cmd_cli !!}
</div>

