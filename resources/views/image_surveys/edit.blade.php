@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Image Survey
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($imageSurvey, ['route' => ['imageSurveys.update', $imageSurvey->id], 'method' => 'patch']) !!}

                        @include('image_surveys.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection