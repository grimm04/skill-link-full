@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Job Type
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($jobType, ['route' => ['jobTypes.update', $jobType->id], 'method' => 'patch']) !!}

                        @include('job_types.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection