@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Certificate
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($certificate, ['route' => ['certificates.update', $certificate->id], 'method' => 'patch']) !!}

                        @include('certificates.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection