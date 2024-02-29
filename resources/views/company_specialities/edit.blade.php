@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Company Speciality
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($companySpeciality, ['route' => ['companySpecialities.update', $companySpeciality->id], 'method' => 'patch']) !!}

                        @include('company_specialities.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection