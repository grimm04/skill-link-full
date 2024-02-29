@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Job Rotation
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($jobRotation, ['route' => ['jobRotations.update', $jobRotation->id], 'method' => 'patch']) !!}

                        @include('job_rotations.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection