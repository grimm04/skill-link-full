@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Endorsment
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($endorsment, ['route' => ['endorsments.update', $endorsment->id], 'method' => 'patch']) !!}

                        @include('endorsments.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection