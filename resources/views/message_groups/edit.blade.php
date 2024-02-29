@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Message Group
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($messageGroup, ['route' => ['messageGroups.update', $messageGroup->id], 'method' => 'patch']) !!}

                        @include('message_groups.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection