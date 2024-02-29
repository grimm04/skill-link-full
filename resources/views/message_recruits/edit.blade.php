@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Message Recruit
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($messageRecruit, ['route' => ['messageRecruits.update', $messageRecruit->id], 'method' => 'patch']) !!}

                        @include('message_recruits.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection