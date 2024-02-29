@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Message Admin
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'messageAdmins.store']) !!}

                        @include('message_admins.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
