@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Child Trade
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($childTrade, ['route' => ['childTrades.update', $childTrade->id], 'method' => 'patch']) !!}

                        @include('child_trades.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection