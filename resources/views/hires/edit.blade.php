@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Hire
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($hire, ['route' => ['hires.update', $hire->id], 'method' => 'patch']) !!}

                        @include('hires.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection