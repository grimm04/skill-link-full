@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Comment Article
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($commentArticle, ['route' => ['commentArticles.update', $commentArticle->id], 'method' => 'patch']) !!}

                        @include('comment_articles.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection