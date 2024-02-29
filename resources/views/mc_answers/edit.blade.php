@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Mc Answer
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($mcAnswer, ['route' => ['mcAnswers.update', $mcAnswer->id], 'method' => 'patch']) !!}

                        @include('mc_answers.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection