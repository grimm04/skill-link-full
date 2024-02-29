@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Speciality
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($speciality, ['route' => ['specialities.update', $speciality->id], 'method' => 'patch']) !!}

                        @include('specialities.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection