@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Employe Duty
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($employeDuty, ['route' => ['employeDuties.update', $employeDuty->id], 'method' => 'patch']) !!}

                        @include('employe_duties.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection