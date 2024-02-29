@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Job Search Setting
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($jobSearchSetting, ['route' => ['jobSearchSettings.update', $jobSearchSetting->id], 'method' => 'patch']) !!}

                        @include('job_search_settings.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection