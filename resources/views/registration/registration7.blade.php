@extends('registration.app')
@section('content')  
    <div id="registration" class="registration_multi registration_03">
        <div class="blur-grey width-40 size-md" id="placeholder-white">
            <div class="chooise-main">
                <h2>What's the main thing<br> you want to do?</h2>
                <h5 class="size-md">We'll use this info to personalize your experiece, <br>(Don't worry, we'll keep it private)</h5><br>
                <a href="http://skill-link.net/dashboard-skill-link/index.html" class="btn btn-black">
                    <div class="row">
                        <div class="col-xs-2 col-sm-2 col-md-2">
                            {{Html::image('registration/img/home.png')}}   
                        </div>
                        <div class="col-xs-10 col-sm-10 col-md-10">
                            <p>Stay up to date with my industry</p>
                        </div>
                    </div>
                </a>
                <a href="http://skill-link.net/dashboard-skill-link/jobs.html" class="btn btn-black">
                    <div class="row">
                        <div class="col-xs-2 col-sm-2 col-md-2">
                            {{Html::image('registration/img/id-card.png')}}   
                        </div>
                        <div class="col-xs-10 col-sm-10 col-md-10">
                            <p>Find a job</p>
                        </div>
                    </div>
                </a>
                <a href="http://skill-link.net/dashboard-skill-link/networkcompany.html" class="btn btn-black">
                    <div class="row">
                        <div class="col-xs-2 col-sm-2 col-md-2">
                            {{Html::image('registration/img/share.png')}} 
                        </div>
                        <div class="col-xs-10 col-sm-10 col-md-10">
                            <p>Build my professional network</p>
                        </div>
                    </div>
                </a><br><br>
                <span>NOT SURE YET, I'M OPEN !</span><br><br><br>
            </div>
        </div>
    </div> 

@endsection  