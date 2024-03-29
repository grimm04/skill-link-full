@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Type Company
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('type_companies.show_fields')
                    <a href="{!! route('typeCompanies.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
