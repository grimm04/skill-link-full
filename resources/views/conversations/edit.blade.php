@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Conversation
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($conversation, ['route' => ['conversations.update', $conversation->id], 'method' => 'patch']) !!}

                        @include('conversations.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection