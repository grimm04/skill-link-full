@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Package Answer
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($packageAnswer, ['route' => ['packageAnswers.update', $packageAnswer->id], 'method' => 'patch']) !!}

                        @include('package_answers.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection