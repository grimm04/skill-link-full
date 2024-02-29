@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Timeline
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'timelines.store']) !!}

                        @include('timelines.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
