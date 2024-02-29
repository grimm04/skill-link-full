@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Post Video
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($postVideo, ['route' => ['postVideos.update', $postVideo->id], 'method' => 'patch']) !!}

                        @include('post_videos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection