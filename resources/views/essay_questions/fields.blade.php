<div class="form-group col-sm-6">
    {!! Form::label('id_survey', 'Survey:') !!}
	<select name="id_survey" class="form-control">
		@foreach ($essaysurveys as $a)
		    <option value="{!! $a->id !!}">
		    	{!! $a->name !!}
		    </option>
		@endforeach
	</select>
</div>

<!-- Question Field -->
<div class="form-group col-sm-6">
    {!! Form::label('question', 'Question:') !!}
    {!! Form::text('question', null, ['class' => 'form-control']) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sort', 'Sort:') !!}
    {!! Form::text('sort', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('essayQuestions.index') !!}" class="btn btn-default">Cancel</a>
</div>
