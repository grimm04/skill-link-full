@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">User Surveys</h1>
        <h1 class="pull-right">
           <!--<a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('userSurveys.create') !!}">Add New</a>-->
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Category
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li class="dropdown-header">Company Size</li>
                        <li><a href="{!! route('userSurveys.index') !!}">All</a></li>
                        <li><a href="{!! route('category_large') !!}">Large</a></li>
                        <li><a href="{!! route('category_medium') !!}">Medium</a></li>
                        <li><a href="{!! route('category_small') !!}">Small</a></li>
                    </ul>
                </div>
                @include('user_surveys.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

