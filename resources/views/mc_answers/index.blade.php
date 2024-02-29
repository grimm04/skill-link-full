@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Mc Answers</h1>
        <h1 class="pull-right">
           <!--<a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('mcAnswers.create') !!}">Add New</a>-->
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
            <div class="row">
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle"  style="margin-right: 100px;"" type="button" data-toggle="dropdown">Category
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li class="dropdown-header">Company Size</li>
                                <li><a href="{!! route('mcAnswers.index') !!}">All</a></li>
                                <li><a href="{!! route('mc_category_large') !!}">Large</a></li>
                                <li><a href="{!! route('mc_category_medium') !!}">Medium</a></li>
                                <li><a href="{!! route('mc_category_small') !!}">Small</a></li>
                            </ul>
                        </div>
                        @foreach ($question as $a)
                            <div class="col-md-6">
                                <div id="piechart{!! $a->id !!}"></div>
                            </div>

                            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

                            <script type="text/javascript">
                            // Load google charts
                            google.charts.load('current', {'packages':['corechart']});
                            google.charts.setOnLoadCallback(drawChart);

                            // Draw the chart and set the chart values
                            function drawChart() {
                              var data = google.visualization.arrayToDataTable([
                              ['Task', 'Hours per Day'],
                                @foreach ($users as $user)
                                    @if ($user->id_question ==  $a->id )
                                    ['{!! $user->title !!}', {!! $user->user_count !!}],
                                    @endif
                                @endforeach

                            ]);

                              // Optional; add a title and set the width and height of the chart
                              var options = {'title':'{!! $a->title !!}', 'width':550, 'height':400};

                              // Display the chart inside the <div> element with id="piechart"
                              var chart = new google.visualization.PieChart(document.getElementById('piechart{!! $a->id !!}'));
                              chart.draw(data, options);
                            }
                            </script>
                        @endforeach
                            <div class="col-md-6">
                                <div id="piechart_package"></div>
                            </div>

                            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

                            <script type="text/javascript">
                            // Load google charts
                            google.charts.load('current', {'packages':['corechart']});
                            google.charts.setOnLoadCallback(drawChart);

                            // Draw the chart and set the chart values
                            function drawChart() {
                              var data = google.visualization.arrayToDataTable([
                              ['Task', 'Hours per Day'],
                                @foreach ($answer as $a)
                                    ['{!! $a->title !!}', {!! $a->answer_count !!}],
                                @endforeach

                            ]);

                              // Optional; add a title and set the width and height of the chart
                              var options = {'title':'Packages Skill.Link', 'width':550, 'height':400};

                              // Display the chart inside the <div> element with id="piechart"
                              var chart = new google.visualization.PieChart(document.getElementById('piechart_package'));
                              chart.draw(data, options);
                            }
                            </script>
                    </div>
                </div>
            </div>
    </div>

    
@endsection

