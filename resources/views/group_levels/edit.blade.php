@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Group Levels
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($groupLevels, ['route' => ['groupLevels.update', $groupLevels->id], 'method' => 'patch']) !!}

                        @include('group_levels.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection