@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Employe Duty
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('employe_duties.show_fields')
                    <a href="{!! route('employeDuties.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
