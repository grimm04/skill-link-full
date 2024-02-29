@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Essay Survey
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($essaySurvey, ['route' => ['essaySurveys.update', $essaySurvey->id], 'method' => 'patch']) !!}

                        @include('essay_surveys.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection