@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Group Type
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($groupType, ['route' => ['groupTypes.update', $groupType->id], 'method' => 'patch']) !!}

                        @include('group_types.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection