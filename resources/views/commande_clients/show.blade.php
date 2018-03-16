@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Commande Client
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('commande_clients.show_fields')
                    <a href="{!! route('commandeClients.index') !!}" class="btn btn-default">Retour</a>
                </div>
            </div>
        </div>
    </div>
@endsection
