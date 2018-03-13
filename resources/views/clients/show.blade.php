@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Client N°{{$client->id}} -- {!! $client->raison_social !!}
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('clients.show_fields')
                    <a href="{!! route('clients.index') !!}" class="btn btn-default">Retour</a>
                </div>
            </div>
        </div>
    </div>
@endsection
