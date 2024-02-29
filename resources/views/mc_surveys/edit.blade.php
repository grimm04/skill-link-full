@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Mc Survey
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($mcSurvey, ['route' => ['mcSurveys.update', $mcSurvey->id], 'method' => 'patch']) !!}

                        @include('mc_surveys.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection