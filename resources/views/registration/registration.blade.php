@extends('registration.app')
@section('content') 
      <div class="registration" id="registration">
        <div class="sign-up border-top border-bottom">
            <div class="blur" id="placeholder-yellow">
                <div class="sign-up-content">
                   {{Html::image('registration/img/logo2.png')}}  
                    <h3>Construction Lives Here</h3>
                    <form action="">
                        <input type="text" placeholder="First Name">
                        <input type="text" placeholder="Last Name">
                        <input type="text" placeholder="Email or Number Phone">
                        <input type="text" placeholder="Password (6 more characters)"><br>
                        <button class="btn btn-border right">Register</button>
                        <div class="clearfix"></div>
                        <p>By clicking Join now you agree to the Skill Link User Agreement, Privacy Policy, and Cookie Policy</p>
                    </form>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="sign-in">
            <div class="blur" id="placeholder-white">
                <div class="sign-in-content">
                    <form action="">
                        <input type="text" placeholder="Email or You Phone Number"><br><br>
                        <input type="password" placeholder="Password"><br><br>
                        <button class="btn btn-border">Sign in</button><br><br>
                        <a href="">Forgot Password ?</a><br><br><br><br><br>    
                        <a href="registration_02.html" class="btn btn-yellow border-radius-non btn-md">JOIN<br>NOW</a>
                    </form>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>   
@endsection

@section('script')  
    {{Html::script('registration/js/background.cycle.js')}}    
    <script> 
    function newTyped(){ /* A new typed object */ } 
    function foo(){ console.log("Callback"); } 
    $(document).ready(function() {
        $(".registration").backgroundCycle({
            imageUrls: [
                'img/registration_1.png',
                'img/registration_2.png',
                'img/registration_3.png'
            ],
            fadeSpeed:2000,
            duration: 30000,
            backgroundSize: SCALING_MODE_COVER
        });
    }); 
    </script>
@endsection