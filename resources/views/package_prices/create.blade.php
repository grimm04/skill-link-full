@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Package Price
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'packagePrices.store']) !!}

                        @include('package_prices.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
