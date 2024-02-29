@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Follow
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($follow, ['route' => ['follows.update', $follow->id], 'method' => 'patch']) !!}

                        @include('follows.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection