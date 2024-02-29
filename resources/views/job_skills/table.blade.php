<table class="table table-responsive" id="jobSkills-table">
    <thead>
        <tr>
            <th>Jobid</th>
        <th>Skillneedid</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($jobSkills as $jobSkill)
        <tr>
            <td>{!! $jobSkill->jobid !!}</td>
            <td>{!! $jobSkill->skillneedid !!}</td>
            <td>
                {!! Form::open(['route' => ['jobSkills.destroy', $jobSkill->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('jobSkills.show', [$jobSkill->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('jobSkills.edit', [$jobSkill->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>