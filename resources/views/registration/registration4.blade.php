@extends('registration.app')
@section('content') 
     <div id="registration" class="registration_multi registration_03">
        <div class="blur-grey width-40 size-md" id="placeholder-white">
            <form action="" class="width-80" enctype="multipart/form-data">
                <h2>Now, add a photo</h2>
                <h5>So you can stand out and be recognized<br>on Skill-link</h5><br><br><br><br>
                <div class="add-photo">
                    <div class="input-photo">
                       {{Html::image('registration/img/default-pic.png','',array('id'=>'photoengine'))}}   
                        <input type="file" name="images" id="image-file">
                    </div>
                    <h3 style="color: #555; font-weight: 700;">Indra Harta Kenda</h3>
                    <h5 style="color: #555;">CEO, Lorem-ipsum.inc Indonesia</h5>
                </div><br>
                <center>
                    <!-- <button class="btn size-md btn-yellow">CONTINUE</button><br>
                    <a href="" class="btn size-md btn-black">SKIP</a> -->
                    <a href="registration_06.html" class="btn size-md btn-yellow">CONTINUE</a><br> 
                    <a href="registration_06.html" class="btn size-md btn-black">SKIP</a>
                </center>
            </form>
        </div>
    </div> 
@endsection 
@section('script')  
    <script>
        function readURL(input) 
        {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById('photoengine').src =  e.target.result;
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $('#image-file').on('change', function(ev) {
            readURL(ev.target);
        });
    </script>
@endsection