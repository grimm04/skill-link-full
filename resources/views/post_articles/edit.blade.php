@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Post Article
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($postArticle, ['route' => ['postArticles.update', $postArticle->id], 'method' => 'patch']) !!}

                        @include('post_articles.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection