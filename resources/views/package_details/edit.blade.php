@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Package Detail
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($packageDetail, ['route' => ['packageDetails.update', $packageDetail->id], 'method' => 'patch']) !!}

                        @include('package_details.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection