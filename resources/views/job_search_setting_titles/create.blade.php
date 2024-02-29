@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Job Search Setting Title
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'jobSearchSettingTitles.store']) !!}

                        @include('job_search_setting_titles.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
