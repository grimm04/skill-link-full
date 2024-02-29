@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Type Grader
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($typeGrader, ['route' => ['typeGraders.update', $typeGrader->id], 'method' => 'patch']) !!}

                        @include('type_graders.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection