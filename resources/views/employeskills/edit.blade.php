@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Employeskill
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($employeskill, ['route' => ['employeskills.update', $employeskill->id], 'method' => 'patch']) !!}

                        @include('employeskills.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection