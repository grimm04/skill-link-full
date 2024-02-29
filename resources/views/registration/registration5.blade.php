@extends('registration.app')
@section('content')  
    <div id="registration" class="registration_multi registration_03">
        <div class="blur-grey width-40 size-md" id="placeholder-white">
            <form action="" class="width-80" enctype="multipart/form-data">
                <h2>See who you know on <br>Skill-Link</h2>
                <h5>You contact can help lead you to opportunity lorem</h5><br><br><br><br>
                <div class="input-photo">
                     {{Html::image('registration/img/1.jpg')}}  
                    <p style="font-size: 14px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus expedita molestiae, debitis aliquam possimus quis, exercitationem totam ad voluptas modi ex molestias et maiores quas autem nulla eaque eveniet! Tempora!</p>
                    <a href="" style="color: #F9C90A;">Learn more</a>
                </div><br>
                <center>
                    <a href="registration_07.html" class="btn size-md btn-yellow">CONTINUE</a><br>
                    <!-- <button class="btn size-md btn-yellow">CONTINUE</button><br> -->
                    <a href="registration_07.html" class="btn size-md btn-black">SKIP</a>
                </center>
            </form>
        </div>
    </div>
@endsection  