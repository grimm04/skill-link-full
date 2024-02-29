@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Hide Article
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($hideArticle, ['route' => ['hideArticles.update', $hideArticle->id], 'method' => 'patch']) !!}

                        @include('hide_articles.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection