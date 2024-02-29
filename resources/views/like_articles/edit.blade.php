@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Like Article
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($likeArticle, ['route' => ['likeArticles.update', $likeArticle->id], 'method' => 'patch']) !!}

                        @include('like_articles.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection