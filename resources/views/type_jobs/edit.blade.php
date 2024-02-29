@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Type Job
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($typeJob, ['route' => ['typeJobs.update', $typeJob->id], 'method' => 'patch']) !!}

                        @include('type_jobs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection