@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Group Members</h1>
        <h1 class="pull-right">
        <div class="col-md-6">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('groupMembers.create') !!}">Add New</a>
        </div>
            <div class="col-md-6">
            <div class="dropdown">
                <button class="btn btn-success dropdown-toggle"  style="margin-top: -10px;margin-bottom: 5px" type="button" data-toggle="dropdown">Setting
                <span class="caret"></span></button>
                <ul class="dropdown-menu  dropdown-menu-right">
                    <li><a href="{!! route('groups.index') !!}">Group</a></li>
                    <li class="dropdown-header">Group Setting</li>
                    <li><a href="{!! route('groupLevels.index') !!}">Group Levels</a></li>
                    <li><a href="{!! route('groupTypes.index') !!}">Group Types</a></li>
                    <li><a href="{!! route('groupMembers.index') !!}">Group Members</a></li>
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
                    @include('group_members.table')
            </div>
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

