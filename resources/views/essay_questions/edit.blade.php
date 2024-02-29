@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Essay Question
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($essayQuestion, ['route' => ['essayQuestions.update', $essayQuestion->id], 'method' => 'patch']) !!}

                        @include('essay_questions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection