@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Posted Time
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'postedTimes.store']) !!}

                        @include('posted_times.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
