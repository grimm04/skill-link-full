<!-- Id Field -->


<!-- Email Field -->
<div class="col-md-3">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $userSurvey->name !!}</p>
</div>
<div class="col-md-3">
    {!! Form::label('company', 'Company:') !!}
    <p>{!! $userSurvey->company !!}</p>
</div>
<div class="col-md-3">
    {!! Form::label('company_size', 'Company Size:') !!}
    <p>{!! $userSurvey->company_size !!}</p>
</div>
<div class="col-md-3">
    {!! Form::label('email', 'Email:') !!}
    <p>{!! $userSurvey->email !!}</p>
</div>


<!-- Created At Field 
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $userSurvey->id !!}</p>
</div>
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $userSurvey->created_at !!}</p>
</div>

 Updated At Field 
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $userSurvey->updated_at !!}</p>
</div>-->

<div class="tab-content">
	<div id="mc" class="tab-pane fade in active">
        <h2 class="pull-left title-user">Multiple Choice Answer</h2>
		<table class="table table-responsive" id="essayAnswers-table">
		    <thead>
		        <tr>
		            <th>Question</th>
		            <th>Answer</th>
		        </tr>
		    </thead>
		    <tbody>
		@foreach ($question as $a)
			
		  	@foreach ($a->getModelMcSurvey as $b)
		    	@foreach ($b->getModelMcAnswer as $c)

	    			@if ( $c->id_user_survey  == $userSurvey->id )
				        <tr>
				            <td>{!! $a->title !!}</td>
				            <td>{!! $b->question !!}</td>
				        </tr>
	    			@endif

		    	@endforeach
		  	@endforeach
			
		@endforeach
		    </tbody>
		</table>

        <a href="{!! route('userSurveys.index') !!}" class="btn btn-default">Back</a>
    	<a data-toggle="tab" class="btn btn-register" href="#essay">Essay Answer</a>
	</div>

    <div id="essay" class="tab-pane fade">
        <h2 class="pull-left title-user">Essay Answer</h2>
		<table class="table table-responsive" id="essayAnswers-table">
		    <thead>
		        <tr>
		            <th>Question</th>
		            <th>Answer</th>
		        </tr>
		    </thead>
		    <tbody>
		    @foreach($question_essay as $essayAnswer)
		    	@if ( $essayAnswer->id_user_survey  == $userSurvey->id )
		        <tr>
		            <td>{!! $essayAnswer->getModelEssayQuestion->question !!}</td>
		            <td>{!! $essayAnswer->answer !!}</td>
		            <td>
		                {!! Form::open(['route' => ['essayAnswers.destroy', $essayAnswer->id], 'method' => 'delete']) !!}
		                <!--<div class='btn-group'>
		                    <a href="{!! route('essayAnswers.show', [$essayAnswer->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
		                    <a href="{!! route('essayAnswers.edit', [$essayAnswer->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
		                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
		                </div>-->
		                {!! Form::close() !!}
		            </td>
		        </tr>
		    	@endif
		    @endforeach
		    </tbody>
		</table>
        <a href="{!! route('userSurveys.index') !!}" class="btn btn-default">Back</a>
    	<a data-toggle="tab" class="btn btn-register" href="#mc">Multiple Choice Answer</a>

	</div>

</div>