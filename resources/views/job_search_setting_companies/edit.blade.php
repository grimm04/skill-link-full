@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Job Search Setting Company
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($jobSearchSettingCompany, ['route' => ['jobSearchSettingCompanies.update', $jobSearchSettingCompany->id], 'method' => 'patch']) !!}

                        @include('job_search_setting_companies.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection