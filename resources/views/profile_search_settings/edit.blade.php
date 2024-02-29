@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Profile Search Setting
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($profileSearchSetting, ['route' => ['profileSearchSettings.update', $profileSearchSetting->id], 'method' => 'patch']) !!}

                        @include('profile_search_settings.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection