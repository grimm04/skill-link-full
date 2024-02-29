<div class="form-group col-sm-6">
    {!! Form::label('id_question', 'Question:') !!}
	<select name="id_question" class="form-control">
		@foreach ($mcsurveys as $a)
		    <option value="{!! $a->id !!}">
		    	{!! $a->title !!}
		    </option>
		@endforeach
	</select>
</div>

<!-- Question Field -->
<div class="form-group col-sm-6">
    {!! Form::label('question', 'MC:') !!}
    {!! Form::text('question', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('mcSurveys.index') !!}" class="btn btn-default">Cancel</a>
</div>
