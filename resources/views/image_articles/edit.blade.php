@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Image Article
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($imageArticle, ['route' => ['imageArticles.update', $imageArticle->id], 'method' => 'patch']) !!}

                        @include('image_articles.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection