@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Job Duration
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($jobDuration, ['route' => ['jobDurations.update', $jobDuration->id], 'method' => 'patch']) !!}

                        @include('job_durations.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection