@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Commande Fournisseur
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($commandeFournisseur, ['route' => ['commandeFournisseurs.update', $commandeFournisseur->id], 'method' => 'patch']) !!}

                        @include('commande_fournisseurs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection