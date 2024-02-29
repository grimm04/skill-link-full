@extends('registration.app')
@section('content') 
    <div id="registration" class="registration_multi registration_02"> 
        <div class="blur-grey width-60 size-md">
            {{ Form::open(array('route'=> 'postregister1' ,'class' => 'border-top','id'=>'placeholder-yellow','method'=>'POST')) }} 
                {{ csrf_field() }}
                @if ($errors->reg1->has('fname'))
                    <div class="alert alert-danger">
                    {{ $errors->reg1->first('fname') }}
                    </div>
                @endif
                <input type="text" placeholder="First Name" name="fname" class="size-md">
                @if ($errors->reg1->has('lname'))
                     <div class="alert alert-danger">
                    {{ $errors->reg1->first('lname') }}
                    </div>
                @endif
                <input type="text" placeholder="Lasr Name" name="lname" class="size-md">
                @if ($errors->reg1->has('email'))
                    <div class="alert alert-danger">
                    {{ $errors->reg1->first('email') }}
                    </div>
                @endif 
                <input type="text" placeholder="Email or Phone Number" name="email" class="size-md">
                @if ($errors->reg1->has('password')) 
                    <div class="alert alert-danger">
                    {{ $errors->reg1->first('password') }}
                    </div>
                @endif
                <div class="password">
                    <input type="password" placeholder="Password" name="password" class="size-md">
                    <a href="" class="show-password" style="color: #F9C90A;">Show</a>
                </div><br><br>
                <p class="left width-60">By clicking Join now you agree to the Skill Link User Agreement, Privacy Policy, and Cookie Policy</p>
                {{-- <a href="registration_03.html"  class="btn btn-border right size-md"> Register  </a> --}}
                <button class="btn btn-border right size-md" type="submit">Register</button>
                <div class="clearfix"></div><br><br><br>
                <div class="width-60">
                    <h5 class="left width-60" style="color: #fff; margin-top: 15px;">ALREADY HAVE AN ACCOUNT</h5>
                    <a href="{{ route('r_registration') }}" class="btn btn-border right size-md">Sign In</a>
                    <div class="clearfix"></div>
                </div> 
            {{ Form::close() }}
        </div> 
    </div>
@endsection
@section('script') 
    <script>
        $('.show-password').click(function(ev) {
            ev.preventDefault();
            var el = $('.password input');

            if(el.attr('type') == 'password') {
                el.attr('type', 'text');
            } else {
                el.attr('type', 'password');
            }
        });
    </script>
@endsection
  