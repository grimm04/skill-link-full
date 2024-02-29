@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Experience
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($experience, ['route' => ['experiences.update', $experience->id], 'method' => 'patch']) !!}

                        @include('experiences.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection