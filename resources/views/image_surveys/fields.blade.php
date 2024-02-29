<div class="form-group col-sm-6">
    {!! Form::label('id_question', 'Question:') !!}
	<select name="id_question" class="form-control">
		@foreach ($imagesurveys as $a)
		    <option value="{!! $a->id !!}">
		    	{!! $a->title !!}
		    </option>
		@endforeach
	</select>
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('imageSurveys', 'Image:') !!}
    {!! Form::file('imageSurveys', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('imageSurveys.index') !!}" class="btn btn-default">Cancel</a>
</div>
