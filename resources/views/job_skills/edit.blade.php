@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Job Skill
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($jobSkill, ['route' => ['jobSkills.update', $jobSkill->id], 'method' => 'patch']) !!}

                        @include('job_skills.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection