@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Job Setting Position
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'jobSettingPositions.store']) !!}

                        @include('job_setting_positions.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
