@extends('layouts_recruits.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">User Surveys</h1>
        <h1 class="pull-right">
           <!--<a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('userSurveys.create') !!}">Add New</a>-->
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <span class="box-title"><b>Personal Info</b></span>
                                </div>
                                <div class="box-body" id="table-info">
                                    <table class="table">
                                        <tbody>
                                                <tr>
                                                    <td>About me</td>
                                                    <td><b>@if ($networkprofile->about != null)
                                                            {{ $networkprofile->about }}
                                                            @else 
                                                            -
                                                        @endif</b></td>
                                                </tr>
                                                <tr>
                                                    <td>Birthday</td>
                                                    <td><b>@if ($networkprofile->birth != null) 
                                                            {{ $networkprofile->birth->format('M') }} {{ $networkprofile->birth->format('d') }}, {{ $networkprofile->birth->format('Y') }}
                                                            @else 
                                                            -
                                                        @endif</b></td>
                                                </tr>
                                                <tr>
                                                    <td>Lives in</td>
                                                    @if (count($networkprofile->province) != null) 
                                                        <td><b>{{ $networkprofile->province->name }}, {{ $networkprofile->province->country }}</b></td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    <td>Occupation</td>
                                                    @if (count($networkprofile->chtrade) != null) 
                                                        <td><b>{{ $networkprofile->chtrade->name }} </b></td>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    <td>Joined</td> 
                                                    <td><b>{{ $networkprofile->created_at->format('M') }} {{ $networkprofile->created_at->format('d') }}, {{ $networkprofile->created_at->format('Y') }}</b></td>
                                                </tr>
                                                <tr>
                                                    <td>Gender</td>
                                                    <td><b>@if (count($networkprofile->gender) != null)
                                                            {{ $networkprofile->gender->name }}
                                                            @else  
                                                            -
                                                        @endif</b></td>
                                                </tr>
                                                <tr>
                                                    <td>Status</td>
                                                    <td><b>@if (count($networkprofile->martial) != null)
                                                            {{ $networkprofile->martial->name }}
                                                            @else 
                                                            -
                                                        @endif</b></td>
                                                </tr>
                                                <tr>
                                                    <td>Email</td>
                                                    <td><b>{{ $networkprofile->email }}</b></td>
                                                </tr>
                                                <tr>
                                                    <td>Website</td>
                                                    <td><b><a href="{{ $networkprofile->web }}" class="grey">
                                                        @if ($networkprofile->web != null)
                                                            {{ $networkprofile->web }}
                                                            @else 
                                                            -
                                                        @endif
                                                        </a></b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Phone Number</td>
                                                    <td><b>@if ($networkprofile->phone != null)
                                                            {{ $networkprofile->phone }}
                                                            @else 
                                                            -
                                                        @endif</b></td>
                                                </tr>
                                                <tr>
                                                    <td>Social Network</td>
                                                    <td>
                                                        @if ($networkprofile->fb != null)
                                                            <a href="https://facebook.com/{{ $networkprofile->fb }}" target="_blank"><span class="btn btn-warning"><i class="fa fa-facebook"></i></span></a>
                                                            @else  
                                                        @endif 
                                                        @if ($networkprofile->twitter != null)
                                                            <a href="https://twitter.com/{{ $networkprofile->twitter }} "  target="_blank"><span class="btn btn-warning"><i class="fa fa-twitter"></i></span></a>
                                                            @else  
                                                        @endif 
                                                        @if ($networkprofile->ig != null)
                                                            <a href="https://www.instagram.com/{{ $networkprofile->ig }}"  target="_blank"><span class="btn btn-warning"><i class="fa fa-instagram"></i></span></a>
                                                            @else  
                                                        @endif  
                                                    </td>
                                                </tr>
                                        </tbody>
                                    </table>
                                    <br /><br /><br/>
                                </div>
                            </div>
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <span class="box-title"><b>Experiences</b></span>
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                        @if (count($networkprofile->experience) >= 1)
                                             @foreach ($networkprofile->experience as $ex)
                                                <div class="col-md-4">
                                                    <div class="media">
                                                        <div class="media-left">
                                                            <img src="{{ asset('dashboard_assets/images/kbr.png') }}" alt="bell" class="media-object" style="width: 80px; height: 80px">
                                                        </div>
                                                        <div class="media-body">
                                                            <a href="#" class="grey">
                                                                <h5 class="media-heading">KBR</h5>
                                                                Fort Hills job #123 <br />
                                                                2 Minute Ago
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div> 
                                            @endforeach 
                                        @else 
                                            <div style="text-align: center;" class="margin-15">
                                                    No Experience..
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                @if (count($networkprofile->experience) >= 1)
                                    <div style="text-align: center;" class="margin-15">
                                        <a href="" class="btn btn-link btn-block grey ">See more <i class="fa fa-angle-down"></i></a>
                                    </div> 
                                @endif
                            </div>
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <span class="box-title"><b>Skill & Endorsements</b></span>
                                </div>
                                <div class="box-body">
                                    @if (count($networkprofile->skill) >= 1)
                                        @foreach ($networkprofile->skill as $ex)
                                        <div class="box-body">
                                            <div class="endorse clearfix">
                                                <span class="label label-endorse">
                                                    {{ $networkprofile->skill->level->name }}
                                                    <span class="counter">
                                                        <span><i class="fa fa-plus"></i></span>
                                                    </span>
                                                </span>
                                                <div class="media">
                                                    <div class="media-body">
                                                        Endorsed By <span class="bold">Femmy Andriani and 2 more</span>
                                                    </div>
                                                </div>
                                            </div> 
                                            <hr>
                                            <a href="" class="btn btn-link btn-block grey ">View more <i class="fa fa-angle-down"></i></a>
                                        </div>
                                        @endforeach 
                                    @else 
                                        <div style="text-align: center;" class="margin-15">
                                                No SKill & Endorsment..
                                        </div>
                                    @endif   
                                </div>
                            </div>
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <span class="box-title"><b>Education</b></span>
                                </div>
                                <div class="box-body">
                                    <div class="row">
                                        @if (count($networkprofile->education) >= 1)
                                             @foreach ($networkprofile->education as $ex)
                                                <div class="col-md-4">
                                                    <div class="media">
                                                        <div class="media-left">
                                                            @if ($ex->photo == null)
                                                                <img src="{{ asset('dashboard_assets/images/kbr.png') }}" alt="bell" class="media-object" style="width: 80px; height: 80px">
                                                            @else 
                                                            <img src="{{ asset('images/educations/'.$ex->photo) }}" alt="bell" class="media-object" style="width: 80px; height: 80px"> 
                                                            @endif    
                                                        </div>
                                                        <div class="media-body">
                                                            <a href="#" class="grey">
                                                                <h5 class="media-heading">{{ $ex->institution }}</h5>
                                                                Class of {{ $ex->from }} - {{ $ex->until->format('Y') }} <br />
                                                                {{ $ex->location }}
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div> 
                                            @endforeach 
                                        @else 
                                            <div style="text-align: center;" class="margin-15">
                                                    No Education..
                                            </div>
                                        @endif   
                                    </div>
                                </div>
                                @if (count($networkprofile->education) >= 1)
                                    <div style="text-align: center;" class="margin-15">
                                        <a href="" style="font-weight: 700;color: #333;">See more</a>
                                    </div> 
                                @endif 
                            </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

