@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Commande Client
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'commandeClients.store']) !!}

                        @include('commande_clients.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
