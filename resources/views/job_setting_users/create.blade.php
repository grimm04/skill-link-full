@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Job Setting User
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'jobSettingUsers.store']) !!}

                        @include('job_setting_users.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
