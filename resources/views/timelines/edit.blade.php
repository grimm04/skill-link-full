@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Timeline
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($timeline, ['route' => ['timelines.update', $timeline->id], 'method' => 'patch']) !!}

                        @include('timelines.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection