@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Job Apply User
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($jobApplyUser, ['route' => ['jobApplyUsers.update', $jobApplyUser->id], 'method' => 'patch']) !!}

                        @include('job_apply_users.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection