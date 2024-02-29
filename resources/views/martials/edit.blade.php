@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Martial
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($martial, ['route' => ['martials.update', $martial->id], 'method' => 'patch']) !!}

                        @include('martials.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection