@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Job Setting Location
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($jobSettingLocation, ['route' => ['jobSettingLocations.update', $jobSettingLocation->id], 'method' => 'patch']) !!}

                        @include('job_setting_locations.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection