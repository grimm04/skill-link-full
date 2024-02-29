@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Report Article
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($reportArticle, ['route' => ['reportArticles.update', $reportArticle->id], 'method' => 'patch']) !!}

                        @include('report_articles.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection