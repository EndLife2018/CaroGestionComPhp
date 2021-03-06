@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Fournisseur
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($fournisseur, ['route' => ['fournisseurs.update', $fournisseur->id], 'method' => 'patch']) !!}

                        @include('fournisseurs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection