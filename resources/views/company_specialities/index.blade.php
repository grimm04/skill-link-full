@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Company Specialities</h1>
        <h1 class="pull-right">
        <div class="col-md-6">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('companySpecialities.create') !!}">Add New</a>
        </div>
            <div class="col-md-6">
            <div class="dropdown">
                <button class="btn btn-success dropdown-toggle"  style="margin-top: -10px;margin-bottom: 5px" type="button" data-toggle="dropdown">Setting
                <span class="caret"></span></button>
                <ul class="dropdown-menu  dropdown-menu-right">
                    <li><a href="{!! route('companies.index') !!}">Companies</a></li>
                    <li class="dropdown-header">Companies Setting</li>
                    <li><a href="{!! route('typeCompanies.index') !!}">Type Companies</a></li>
                    <li><a href="{!! route('companySpecialities.index') !!}">Company Specialities</a></li>
                    <li><a href="{!! route('companyIndustries.index') !!}">Company Industries</a></li>
                </ul>
            </div>
        </div>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('company_specialities.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

