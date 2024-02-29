@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Groups</h1>
        <h1 class="pull-right">
            <div class="dropdown">
                <button class="btn btn-success dropdown-toggle" style="margin-top: -10px;margin-bottom: 5px"   type="button" data-toggle="dropdown">Setting
                <span class="caret"></span></button>
                <ul class="dropdown-menu  dropdown-menu-right">
                    <li><a href="{!! route('groups.index') !!}">Groups</a></li>
                    <li class="dropdown-header">Group Setting</li>
                    <li><a href="{!! route('groupLevels.index') !!}">Group Levels</a></li>
                    <li><a href="{!! route('groupTypes.index') !!}">Group Types</a></li>
                    <li><a href="{!! route('groupMembers.index') !!}">Group Members</a></li>
                </ul>
            </div>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('groups.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

