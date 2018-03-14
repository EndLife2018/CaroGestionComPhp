<!-- Idclient Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idclient', 'Idclient:') !!}
    {!! Form::select('idclient', App\Models\Client::pluck('raison_social', 'id'))!!}
</div>

<!-- Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date', 'Date:') !!}
    {!! Form::date('date', null, ['class' => 'form-control']) !!}
</div>

<!-- Etat Cmd Cli Field -->
<div class="form-group col-sm-6">
    {!! Form::label('etat_cmd_cli', 'Etat Cmd Cli:') !!}
    {!! Form::number('etat_cmd_cli', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Liv Cmd Cli Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_liv_cmd_cli', 'Date Liv Cmd Cli:') !!}
    {!! Form::date('date_liv_cmd_cli', null, ['class' => 'form-control']) !!}
</div>


<table class="table table-responsive">
    <tr>
        <td>{!! Form::label('art1', 'Art1:') !!}
        {!! Form::select('art1', App\Models\Article::pluck('ref_interne', 'id'), null, ['placeholder' => '', 'class' => 'selectArticle'] ) !!}
</td>
        <td>{!! Form::label('qte1', 'Qte1:') !!} {!! Form::text('qte1', null) !!}</td>
    </tr>
    <tr>
        <td>  {!! Form::label('art2', 'Art2:') !!}
    {!! Form::select('art2', App\Models\Article::pluck('ref_interne', 'id'), null, ['placeholder' => '', 'class' => 'selectArticle'] ) !!}</td>
        <td>{!! Form::label('qte2', 'Qte2:') !!} {!! Form::text('qte2', null) !!}</td>
    </tr>
    <tr>
        <td>{!! Form::label('art3', 'Art3:') !!}
    {!! Form::select('art3', App\Models\Article::pluck('ref_interne', 'id'), null, ['placeholder' => '', 'class' => 'selectArticle'] ) !!}</td>
        <td>{!! Form::label('qte3', 'Qte3:') !!} {!! Form::text('qte3', null) !!}</td>
    </tr>
    <tr>
        <td>{!! Form::label('art4', 'Art4:') !!}
    {!! Form::select('art4', App\Models\Article::pluck('ref_interne', 'id'), null, ['placeholder' => '', 'class' => 'selectArticle'] ) !!}
</td>
        <td>{!! Form::label('qte4', 'Qte4:') !!} {!! Form::text('qte4', null) !!}</td>
    </tr>
    <tr>
        <td>{!! Form::label('art5', 'Art5:') !!}
    {!! Form::select('art5', App\Models\Article::pluck('ref_interne', 'id'), null, ['placeholder' => '', 'class' => 'selectArticle'] ) !!}</td>
        <td>{!! Form::label('qte5', 'Qte5:') !!} {!! Form::text('qte5', null) !!}</td>
    </tr>
    <tr>
        <td>{!! Form::label('art6', 'Art6:') !!}
    {!! Form::select('art6', App\Models\Article::pluck('ref_interne', 'id'), null, ['placeholder' => '', 'class' => 'selectArticle'] ) !!}</td>
        <td>{!! Form::label('qte6', 'Qte6:') !!} {!! Form::text('qte6', null) !!}</td>
    </tr>
    <tr>
        <td>  {!! Form::label('art7', 'Art7:') !!}
    {!! Form::select('art7', App\Models\Article::pluck('ref_interne', 'id'), null, ['placeholder' => '', 'class' => 'selectArticle'] ) !!}</td>
        <td>{!! Form::label('qte7', 'Qte7:') !!} {!! Form::text('qte7', null) !!}</td>
    </tr>
    <tr>
        <td>{!! Form::label('art8', 'Art8:') !!}
    {!! Form::select('art8', App\Models\Article::pluck('ref_interne', 'id'), null, ['placeholder' => '', 'class' => 'selectArticle'] ) !!}</td>
        <td>{!! Form::label('qte8', 'Qte8:') !!} {!! Form::text('qte8', null) !!}</td>
    </tr>
    <tr>
        <td>{!! Form::label('art9', 'Art9:') !!}
    {!! Form::select('art9', App\Models\Article::pluck('ref_interne', 'id'), null, ['placeholder' => '', 'class' => 'selectArticle'] ) !!}</td>
        <td>{!! Form::label('qte9', 'Qte9:') !!} {!! Form::text('qte9', null) !!}</td>
    </tr>
    <tr>
        <td>{!! Form::label('art10', 'Art10:') !!}
    {!! Form::select('art10', App\Models\Article::pluck('ref_interne', 'id'), null, ['placeholder' => '', 'class' => 'selectArticle'] ) !!}</td>
        <td>{!! Form::label('qte10', 'Qte10:') !!} {!! Form::text('qte10', null) !!}</td>
    </tr>
    <tr>
        <td>{!! Form::label('art11', 'Art11:') !!}
    {!! Form::select('art11', App\Models\Article::pluck('ref_interne', 'id'), null, ['placeholder' => '', 'class' => 'selectArticle'] ) !!}</td>
        <td>{!! Form::label('qte11', 'Qte11:') !!} {!! Form::text('qte11', null) !!}</td>
    </tr>
    <tr>
        <td>{!! Form::label('art12', 'Art12:') !!}
    {!! Form::select('art12', App\Models\Article::pluck('ref_interne', 'id'), null, ['placeholder' => '', 'class' => 'selectArticle'] ) !!}</td>
        <td>{!! Form::label('qte12', 'Qte12:') !!} {!! Form::text('qte12', null) !!}</td>
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
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('commandeClients.index') !!}" class="btn btn-default">Cancel</a>
</div>


<script type="text/javascript">
    // In your Javascript (external .js resource or <script> tag)
$(document).ready(function() {
    $('.selectArticle').select2();
});
</script>